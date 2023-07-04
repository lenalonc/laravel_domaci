<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\UserResource;

class SmartphoneColletion extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     * 
     */

    public static $wrap = 'smartphones';

    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
