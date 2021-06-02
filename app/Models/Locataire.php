<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    use HasFactory;

    public function getMaison(){
        return $this->hasOne('App\Models\Maison');
    }
    public function getPayement(){
        return $this->hasOne('App\Models\Payement');
    }

}
