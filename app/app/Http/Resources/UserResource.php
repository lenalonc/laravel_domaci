<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     * 
     */

    public static $wrap='user';

    public function toArray($request)
    {
       return [
        'id'=>$this->resource->id,
        'ime_i_prezime'=>$this->resource->ime_i_prezime,
        'email'=>$this->resource->email,
       ];
    }
}
