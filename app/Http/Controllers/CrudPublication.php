<?php

namespace App\Http\Controllers;


use App\Models\Maison;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class CrudPublication extends Controller
{
    //
    public function create(Request $req){
        $maison = new Maison();
        $maison->adresse = $req->adresse;
        $maison->description = $req->description;
        $maison->prix = $req->prix;
        $maison->nb_chambre = $req->nb_chambre;
        $maison->photo = $req->photo;
        $result = $maison->save();
        if ($result) {
            return response()->json([
                'message' => 'sucess'
            ], 201);
        } else {
            return response()->json([
                'message' => 'Missing data.'
            ], 404);
        }

    }
    public function read($id)
    {
        {
            //return ["Data"=>"Was not saved"];
            $maison = Maison::find($id);
            return response()->json(['maison' => $maison]);
        }
    }
    public function update(Request $req)
    {

        $maison = Maison::find($req->id);
        $maison->adresse = $req->adresse;
        $maison->description = $req->description;
        $maison->prix = $req->prix;
        $maison->nb_chambre = $req->nb_chambre;
        $maison->photo = $req->photo;
        $result = $maison->save();
        if ($result) {
            return response()->json(["result" => "Data updated"]);

        } else {
            return response()->json(["result" => "Update failed"]);
        }
    }
    public function delete(Request $req){
            $user = User::find($req->id);
            $result = $user->delete();
            if ($result) {
                return response()->json(["result" => "Record has been deleted"]);
            } else {
                return response()->json(["result" => "Delete operation has failed"]);

            }

        }


}
