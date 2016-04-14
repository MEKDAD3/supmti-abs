<?php

namespace ftlaravel\Http\Controllers;


use ftlaravel\Etablissement;
use Illuminate\Http\Request;

class EtablissementController extends Controller {



    function addEtablissement(Request $request) {
        Etablissement::create($request->json()->all());
        return $request->json()->all();
    }

    function updateEtablissement(Request $request) {

    }
    function deleteEtablissement(Request $request) {

    }


}