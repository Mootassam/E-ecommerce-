<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_model extends Model
{
    protected $table='cart';
    protected $primaryKey='id';
    protected $fillable=['products_id','product_name','product_code','stock','price','quantity','image','session_id'];
}
