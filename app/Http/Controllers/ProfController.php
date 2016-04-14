<?php

namespace ftlaravel\Http\Controllers;


use ftlaravel\Etablissement;
use Illuminate\Http\Request;

class ProfController extends Controller {



    function addProf(Request $request) {
        Etablissement::create($request->json()->all());
        return $request->json()->all();
    }

    function updateProf(Request $request) {

    }
    function deleteProf(Request $request) {

    }


}