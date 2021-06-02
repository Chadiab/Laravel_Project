<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locateur extends Model
{
    use HasFactory;

    public function getMaison(){
        return $this->hasMany('App\Models\Maison');
    }
    public function getPublication(){
        return $this->hasMany('App\Models\Publication');
    }
    public function getPayement(){
        return $this->hasMany('App\Models\Payement');
    }

}
