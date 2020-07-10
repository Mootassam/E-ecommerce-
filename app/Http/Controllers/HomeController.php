<?php

namespace App\Http\Controllers;

use App\User;
use App\Orders_model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sales= Orders_model::latest()->get();
        $tat=0;
        foreach($sales as $sal)
        {
            $tat += $sal->grand_total;
        }




        $order = Orders_model::latest()->get();
        $totC = Orders_model::latest()->count();
        $user = User::latest()->count();
        $revenue = $tat / $user ;
       return view('backend.index',compact('order','totC','user','tat','revenue')) ;

    }

    public function RecentOrder(){

    }

    public function countUser(){


    }
}
