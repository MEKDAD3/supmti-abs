<?php

namespace ftlaravel\Http\Controllers;


use ftlaravel\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class StudentController extends Controller {

    function index() {
        return View("student/add_student");
    }


    function addStudent(Request $request) {
        Students::create($request->json()->all());
        return $request->json()->all();
    }
    function AllStudents() {
        $students = DB::collection('students')->get();
        return response()->json($students);
    }


}