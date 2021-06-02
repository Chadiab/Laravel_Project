<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLocataire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('locataires',function (Blueprint $table){
            $table->string('profession');
            $table->string('ecole');
            $table->string('niveau_etude');
            $table->string('domaine');
            $table->string('domaine_travail');






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
