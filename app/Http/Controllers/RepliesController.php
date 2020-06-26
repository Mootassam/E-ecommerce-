<?php

namespace App\Http\Controllers;

use App\Replies;
use App\Products_model;
use Illuminate\Http\Request;
use App\Http\Resources\repliesResource;

class RepliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
            return RepliesResource::collection(Replies::latest()->get())  ;
        //
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function show(replies $replies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function edit(replies $replies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, replies $replies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function destroy(replies $replies)
    {
        //
    }
}
