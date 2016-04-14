<?php

namespace ftlaravel\Http\Controllers;


use ftlaravel\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller {



    function addFiliere(Request $request) {
        Filiere::create($request->json()->all());
        return $request->json()->all();
    }
    function AllFilieres() {
        $filieres = DB::collection('filiere')->get();
        return response()->json($filieres);
    }
    function findFiliereById(Request $request) {

    }
    function updateFiliere(Request $request) {

    }
    function deleteFiliere(Request $request) {

    }


}