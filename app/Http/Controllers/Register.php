<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Register extends Controller
{
    //
    public function register(Request $req){

            $user=new user;
            $user->nom=$req->nom;
            $user->prenom=$req->prenom;
            $user->email=$req->email;
            $user->num_tel=$req->num_tel;
            $user->num_cin=$req->num_cin;
            $pass = Hash::make($req->password);
            $user->password=$pass;
            $result=$user->save();
            if($result)
            {
                return response()->json(["Data"=>"Has been saved"]);
            }
            else
            {
                return response()->json(["Data"=>"Was not saved"]);
            }
        }

}
