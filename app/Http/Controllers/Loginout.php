<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Loginout extends Controller
{
    //
    public function login(Request $req){
            $user= User::where('email', $req->email)->first();
            // print_r($data);
            if (!$user || !Hash::check($req->password, $user->password)) {
                return response()->json([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }

            $token = $user->createToken('my-app-token')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token
            ];

            return response()->json([
                'user' => $user,
                'token' => $token
            ],200);

    }
    public function logout(Request $req){
        $user= User::where('email', $request->email)->first();

        if ($user->tokens()->delete()){
            return response()->json(
                ['message'=>'Sucess' ],201
            ) ;
        } else {
            return response()->json(
                ['message'=>'Unauthorized' ],401
            ) ;
        }
    }
}
