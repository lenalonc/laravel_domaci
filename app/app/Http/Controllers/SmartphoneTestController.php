<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;
use App\Http\Resources\SmartphoneResource;

class SmartphoneTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $smartphones = Smartphone::all();
        return $smartphones;
    }

    public function show(Smartphone $smartphone)
    {
        // $smartphone = Smartphone::find($id);
        // return $smartphone;

        return new SmartphoneResource($smartphone);

    }

    
}
