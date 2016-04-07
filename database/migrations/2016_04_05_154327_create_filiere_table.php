<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiliereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiere', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nom_fil");
            $table->string("abrev_fil");
            $table->string("diplome_fil");
            $table->string("responsable_fil");
            $table->string("note_elim_fil");
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
        Schema::drop('=filiere');
    }
}
