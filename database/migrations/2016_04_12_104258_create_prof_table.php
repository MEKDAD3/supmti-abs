<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prof', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('nom');
            $table->increments('prenom');
            $table->increments('tel1');
            $table->increments('tel2');
            $table->increments('email1');
            $table->increments('email2');
            $table->increments('photo');
            $table->increments('cv');
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
        Schema::drop('prof');
    }
}
