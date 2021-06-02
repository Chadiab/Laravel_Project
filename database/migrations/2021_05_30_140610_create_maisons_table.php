<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maisons', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table->string('description');
            $table->integer('prix');
            $table->integer('nb_chambre');
            $table->string('photo');
            $table->unsignedBigInteger('locataire_id')->unsigned()->nullable();
            $table->foreign('locataire_id')->references('id')->on('locataires');
            $table->unsignedBigInteger('locateur_id')->unsigned()->nullable();
            $table->foreign('locateur_id')->references('id')->on('locateurs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maisons');
    }
}
