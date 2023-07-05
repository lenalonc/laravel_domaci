<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;
use App\Http\Resources\SmartphoneResource;
use App\Http\Resources\SmartphoneColletion;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $smartphones = Smartphone::all();
        // return $smartphones;
    return SmartphoneResource::collection($smartphones);
    //return new SmartphoneColletion($smartphones);
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
        $validator = Validator::make($request->all(),[
            'serijski_broj' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'memorija' => 'required|string|max:255',
            'cena' => 'required|integer',
            'manufacturer_id' => 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $smartphone = Smartphone::create([
            'serijski_broj'=>$request->serijski_broj,
            'model'=>$request->model,
            'memorija'=>$request->memorija,
            'cena'=>$request->cena,
            'manufacturer_id'=>$request->manufacturer_id,
            'user_id'=>Auth::user()->id
        ]);
        return response()->json(['Smartphone added successfully.', new SmartphoneResource($smartphone)]);
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
        $validator = Validator::make($request->all(),[
            'serijski_broj' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'memorija' => 'required|string|max:255',
            'cena' => 'required|integer',
            'manufacturer_id' => 'required',
        ]);

            if($validator->fails()){
                return response()->json($validator->errors());
            }
    
            
                $smartphone->serijski_broj=$request->serijski_broj;
                $smartphone->model=$request->model;
                $smartphone->memorija=$request->memorija;
                $smartphone->cena=$request->cena;
                $smartphone->manufacturer_id=$request->manufacturer_id;
                
                $smartphone->save();
            
                return response()->json(['Smartphone updated successfully.',new SmartphoneResource($smartphone)]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Smartphone $smartphone)
    {
        $smartphone->delete();
        return response()->json('Smartphone deleted successfully');
    }
}
