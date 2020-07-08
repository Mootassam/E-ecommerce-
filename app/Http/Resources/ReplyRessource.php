<?php

namespace App\Http\Resources;

use Tymon\JWTAuth\Contracts\Providers\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplyRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return [
        'user_id'=> $this->user->id,
        'product_id' =>$this->product_id,
        'body'=>$this->body,
        'user' =>$this->user->name,
        'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
