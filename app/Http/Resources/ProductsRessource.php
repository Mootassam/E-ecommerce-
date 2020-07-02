<?php

namespace App\Http\Resources;

use App\replies;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsRessource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
        'id' =>$this->id,
        'categories_id'=>$this->categories_id,
        'p_name'=>$this->p_name,
        'path'=>$this->path,
        'image'=>$this->image,
        'p_code'=>$this->p_code,
        'p_color'=>$this->p_color,
        'description'=>$this->description,
        'price'=>$this->price,
        'created_at'=>$this->created_at->diffForHumans(),
    ];
    }
}
