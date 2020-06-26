<?php

namespace App;

use App\Products_model;
use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{

    public $guarded=[''];

    public function category(){
        return $this->belongsTo(Category_model::class,'categories_id','id');
    }






    //
}
