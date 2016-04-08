<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

});*/
Route::get('/', function () {
    return view('supmti/index');
});

Route::any('/addStudent',[
    'as' => 'addSt',
    'uses' => 'StudentController@addStudent'
]);
Route::any('/allStudents.json',[
    'as' => 'allSt',
    'uses' => 'StudentController@AllStudents'
]);

Route::any('/addEtablissement',[
    'as' => 'addEt',
    'uses' => 'EtablissementController@addEtablissement'
]);

Route::any('/addFiliere',[
    'as' => 'addFil',
    'uses' => 'FiliereController@addFiliere'
]);

/*Route::get('/',[
    'as' => 'index',
    'uses' => 'TestController@index'
]);*/
/*
Route::any('/add',[
    'as' => 'addstudent',
    'uses' => 'TestController@addStudent'
]);*/
