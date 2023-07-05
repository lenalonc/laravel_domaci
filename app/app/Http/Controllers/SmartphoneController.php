<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;
use App\Http\Resources\SmartphoneResource;
use App\Http\Resources\SmartphoneColletion;


class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $smartphones = Smartphone::all();
        // return $smartphones;
       //return SmartphoneResource::collection($smartphones);
    return new SmartphoneColletion($smartphones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Smartphone $smartphone)
    {
        // $smartphone = Smartphone::find($id);
        
        // if(is_null($smartphone)){
        //     return response()->json('data not foooound',404);
        // }
        
        // return response()->json($smartphone);
        return new SmartphoneResource($smartphone);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Smartphone $smartphone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Smartphone $smartphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Smartphone $smartphone)
    {
        //
    }
}
