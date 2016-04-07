<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nom");
            $table->string("prenom");
            $table->string("photo");
            $table->date("dateNaiss");
            $table->string("lieuNaiss");
            $table->string("adresse");
            $table->string("telephone");
            $table->string("email");
            $table->string("situation");
            $table->string("nomTuteur");
            $table->string("adresseTuteur");
            $table->string("telephoneFixe");
            $table->string("professionPere");
            $table->string("professionMere");
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
        Schema::drop('students');
    }
}
