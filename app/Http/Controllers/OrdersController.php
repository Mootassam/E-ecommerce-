<?php

namespace App\Http\Controllers;
use Mail ;
use App\Cart_model;
use App\Orders_model;
use App\Mail\OrderStarted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function index(){
        $session_id=Session::get('session_id');
        $cart_datas=Cart_model::where('session_id',$session_id)->get();
        $total_price=0;
        foreach ($cart_datas as $cart_data){
            $total_price+=$cart_data->price*$cart_data->quantity;
        }
        $shipping_address=DB::table('delivery_address')->where('users_id',Auth::id())->first();
        return view('checkout.review_order',compact('shipping_address','cart_datas','total_price'));
    }
    public function order(Request $request){

        $input_data=$request->all();

        Orders_model::create($input_data);
        if($payment_method=="COD"){
            return redirect('/cod');
        }else{
            return redirect('/paypal');
        }
    }
    public function cod(){
        $user_order=Orders_model::where('users_id',Auth::id())->first();
        return view('payment.cod',compact('user_order'));
    }
    public function paypal(Request $request){
        $who_buying=Orders_model::where('users_id',Auth::id())->first();
        return view('payment.paypal',compact('who_buying'));
    }

    public function store(Request $request){

           $order =  Orders_model::create($request->all());
            return $order ;

    }

    public function start(Request $request){
        Mail::to('lycy@gmail.com')->send(new OrderStarted);
    }
    public function ship(Request $request){
        return 'ship' ;
    }
    public function complete(Request $request){
        return 'complete' ;
    }
}
