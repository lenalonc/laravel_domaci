<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ManufacturerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public static $wrap='manufacturer';

    public function toArray($request)
    {
        return[
            'id'=> $this->resource->id,
            'naziv'=> $this->resource->naziv,
        ];
    }
}
