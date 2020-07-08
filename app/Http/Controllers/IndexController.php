<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category_model;
use App\Products_model;
use App\ProductAtrr_model;
use App\ImageGallery_model;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index(){
        $products=Products_model::all();
        return view('index',compact('products'));
    }

    public function homes(){

        $products=Product::latest()->paginate(8);
        return ['product' => $products];

    }
    public function shop(){
        $products=Product::all();
        $byCate="";
        return view('frontEnd.products',compact('products','byCate'));
    }
    public function listByCat($id){
        $list_product=Products_model::where('categories_id',$id)->get();
        $byCate=Category_model::select('name')->where('id',$id)->first();
        return view('frontEnd.products',compact('list_product','byCate'));
    }
    public function detialpro($id){
        $detail_product=Products_model::findOrFail($id);
        $imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        $details_product=ProductAtrr_model::where('products_id',$id)->get();
        $relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return  ['data' => [ 'details_product'=> $details_product,  'product'=> $detail_product ,'gallery'=>$imagesGalleries ]]  ;

    }
    public function getAttrs(Request $request){
        $all_attrs=$request->all();
        //print_r($all_attrs);die();
        $attr=explode('-',$all_attrs['size']);
        //echo $attr[0].' <=> '. $attr[1];
        $result_select=ProductAtrr_model::where(['products_id'=>$attr[0],'size'=>$attr[1]])->first();
        echo $result_select->price."#".$result_select->stock;
    }
public function QuickSearch(Request $request){

    $products=Products_model::all();

    return $products;
}
}
