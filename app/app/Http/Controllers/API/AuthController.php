<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=> 'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8',
            'address'=>'required|string|max:255'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = User::create([
            'ime_i_prezime'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'adresa'=>$request->address
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'data'=>$user, 'access_token'=>$token, 'token_type'=>'Bearer',
        ]);

    }

    public function login(Request $request){

        if(!Auth::attempt($request->only('email','password'))){
            return response()->json([
                'message'=>'Unauthorized'],401);
        }

        $user = User::where('email',$request['email'])->first();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message'=>'Hi '.$user->ime_i_prezime.', welcome to home','access_token'=>$token, 'token_type'=>'Bearer',
        ]);

    }


}
