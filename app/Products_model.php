<?php

namespace App;

use App\Reply;

use Illuminate\Database\Eloquent\Model;

class Products_model extends Model
{
    protected $table='products';
    protected $primaryKey='id';
    protected $fillable= ['categories_id','p_name','p_code','amount','stock','p_color','description','price','image'];

    public function category(){
        return $this->belongsTo(Category_model::class,'categories_id','id');
    }
    public function attributes(){
        return $this->hasMany(ProductAtrr_model::class,'products_id','id');
    }



    public function replies()
    {
        return $this->hasMany(Reply::class,'product_id','id');
    }

    public function getPathAttribute(){
        return "/produit/$this->p_name" ;
    }

}
