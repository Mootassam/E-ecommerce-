<?php

namespace App\Http\Controllers;

use App\Cart_model;
use App\ProductAtrr_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $session_id=Session::get('session_id');
        $cart_datas=Cart_model::where('session_id',"UzTfDr3P1lZ0zXbsDAdz4ei9VUzRCnlRJPDnIAIW")->get();

        $total_price=0;
        foreach ($cart_datas as $cart_data){
            $total_price+=$cart_data->price*$cart_data->quantity;
        }
        return ['cart'=>$cart_datas,'tprice'=>$total_price];

    }

    public function addToCart(Request $request){
        $inputToCart=$request->all();

        Session::forget('discount_amount_price');
        Session::forget('coupon_code');

            $stockAvailable=DB::table('product_att')->select('stock','sku')->where(['products_id'=>$inputToCart['products_id'],
                'price'=>$inputToCart['price'] , 'stock' =>$inputToCart['stock']])->first();


                $session_id=Session::get('session_id');
                if(empty($session_id)){
                    $session_id=str_random(40);
                    Session::put('session_id',$session_id);
                }
                $inputToCart['session_id']=$session_id;


                $count_duplicateItems=Cart_model::where(['products_id'=>$inputToCart['products_id']])->count();
                if($count_duplicateItems>0){
                    return back()->with('message','This Item Added already');
                }else{
                    Cart_model::create($inputToCart);
                    return back()->with('message','Add To Cart Already');
                }


    }
    public function deleteItem($id=null){
        $delete_item=Cart_model::findOrFail($id);
        Session::forget('discount_amount_price');
        Session::forget('coupon_code');
        $delete_item->delete();
        return back()->with('message','Deleted Success!');
    }
    public function updateQuantity($id,$quantity){
        Session::forget('discount_amount_price');
        Session::forget('coupon_code');
        $sku_size=DB::table('cart')->select('product_code','size','quantity')->where('id',$id)->first();
        $stockAvailable=DB::table('product_att')->select('stock')->where(['sku'=>$sku_size->product_code,
            'size'=>$sku_size->size])->first();
        $updated_quantity=$sku_size->quantity+$quantity;
        if($stockAvailable->stock>=$updated_quantity){
            DB::table('cart')->where('id',$id)->increment('quantity',$quantity);
            return back()->with('message','Update Quantity already');
        }else{
            return back()->with('message','Stock is not Available!');
        }


    }
}
