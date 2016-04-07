<?php

namespace ftlaravel\Http\Controllers;


use ftlaravel\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class TestController extends Controller {

    function index() {
        return View("student/add_student");
    }

    function addStudent(Request $request) {
        $params = $request->all();
        Students::create($params);
        //return redirect()->back();
    }

    function AllStudents(Request $request) {
        Students::create($request->json()->all());
        return $request->json()->all();
    }
    function loadStudents() {
        $students = DB::collection('students')->get();
        return response()->json($students);
    }


}