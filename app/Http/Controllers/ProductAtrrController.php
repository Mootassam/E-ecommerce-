<?php

namespace App\Http\Controllers;

use App\ProductAtrr_model;
use App\Products_model;
use Illuminate\Http\Request;

class ProductAtrrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'system'=>'required|min:5',
            'ecran'=>'required',
            'photo'=>'required',
            'reseaux'=>'required',
            'poids'=>'required',
            'battery'=>'required',
            'Processeur'=>'required',
            'memoire'=>'required',

        ]);

        ProductAtrr_model::create($request->all());
        return back()->with('message','Add Attribute Successed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu_active =3;
        $attributes=ProductAtrr_model::where('products_id',$id)->get();
        $product=Products_model::findOrFail($id);
        return view('backEnd.products.add_pro_atrr',compact('menu_active','product','attributes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request_data=$request->all();
        foreach ($request_data['id'] as $key=>$attr){
            $update_attr=ProductAtrr_model::where([['products_id',$id],['id',$request_data['id'][$key]]])
                ->update(['system'=>$request_data['system'][$key],'ecran'=>$request_data['ecran'][$key],'photo'=>$request_data['photo'][$key],
                    'reseaux'=>$request_data['reseaux'][$key],'poids'=>$request_data['poids'][$key],'battery'=>$request_data['battery'][$key]
                    ,'Processeur'=>$request_data['Processeur'][$key],'memoire'=>$request_data['memoire'][$key] ]);
        }
        return back()->with('message','Update Attribute Successed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function deleteAttr($id){
        $deleteAttr=ProductAtrr_model::findOrFail($id);
        $deleteAttr->delete();
        return back()->with('message','Deleted Success!');
    }
}
