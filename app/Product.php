<?php

namespace App;

use App\Reply;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    public function comments()
    {
        return $this->hasMany(Reply::class);
    }




}
