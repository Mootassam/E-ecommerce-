<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_model extends Model
{


    protected static function boot(){
        parent::boot();
        static::creating(function($reply){
            $reply->users_id = auth()->id();
        });
    }
    protected $table='orders';
    protected $primaryKey='id';
    protected $fillable=['users_id',
        'users_email','name','last_name','address','city','state','pincode','country','mobile','shipping_charges','coupon_code','coupon_amount',
        'order_status','payment_method','grand_total','order_notes'];
}
