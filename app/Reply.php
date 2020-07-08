<?php

namespace App;

use App\User;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    protected $fillable =['body','user_id','product_id'];
    protected static function boot(){
        parent::boot();
        static::creating(function($reply){
            $reply->user_id = auth()->id();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
