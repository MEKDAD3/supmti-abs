<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtablissementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nom_et");
            $table->string("abrev_et");
            $table->string("email_et");
            $table->string("adresse_et");
            $table->string("num_agr_et");
            $table->string("site_web_et");
            $table->string("telephone_et");
            $table->string("fax_et");
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
        Schema::drop('=etablissement');
    }
}
