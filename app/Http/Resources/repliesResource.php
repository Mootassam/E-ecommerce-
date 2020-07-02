<?php

namespace App\Http\Resources;
use auth;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'product_id'=>$this->product_id,
            'user'=>$this->user->name,
            'created_at'=>$this->created_at->diffForHumans(),

              ];
    }
}
