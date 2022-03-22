<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CreateEvalStudentsCRUDsTable;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'Pagescontroller@welcome');

Route::get('hola', 'Pagescontroller@hola');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/alumno', 'AlumnoController')->middleware('auth');

Route::get('/crear', function () {
    return view('crear');
});

Route::get('/todosalumno', 'AlumnoController@allestudent');

Route::resource('/crearstudents', 'CreateEvalStudentsCRUDsTable')->middleware('auth');
