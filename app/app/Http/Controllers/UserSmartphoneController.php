<?php

namespace App\Http\Controllers;
use App\Models\Smartphone;
use Illuminate\Http\Request;

class UserSmartphoneController extends Controller
{
    public function index($user_id){
        $smartphones = Smartphone::get()->where('user_id',$user_id);
        if(is_null($smartphones)){
            return response()->json($smartphones);
        }
        return response()->json($smartphones);
    }
}
