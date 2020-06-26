<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;

class repliesResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'id'=>$this->id,
            'body'=>$this->body,
            'user'=>$this->user->name,
            'product_name'=>$this->product->p_name,
            'user_id'=>$this->user_id,
            'created_at'=>$this->created_at->diffForHumans(),
    ];
    }
}
