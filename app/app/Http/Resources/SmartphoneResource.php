<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;



class SmartphoneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public static $wrap='smartphone';

    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'serijski_broj'=>$this->resource->serijski_broj,
            'model'=>$this->resource->model,
            'memorija'=>$this->resource->memorija,
            'cena'=>$this->resource->cena,
            'user'=> new UserResource($this->resource->user),
            'manufacturer'=>new ManufacturerResource($this->resource->manufacturer)
            
        ];
    }
}
