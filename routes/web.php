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

Route::get('/', function () {
    return view('index');
})->name('index');

// DEPARTAMENTOS
Route::get('/departamentos','DepartamentoController@index')->name('departamentos.index');
Route::get('/departamento/{id}','DepartamentoController@show')->name('departamentos.show');

// EMPLEADOS
Route::get('/empleados','EmpleadoController@index')->name('empleados');
Route::get('/empleado/{id}','EmpleadoController@show')->name('empleado');

// PROYECTOS
Route::get('/proyectos','ProyectoController@index')->name('proyectos.index'); // INDEX
Route::get('/proyectos/create','ProyectoController@create')->name('proyectos.create'); // CREATE
Route::post('/proyectos','ProyectoController@store')->name('proyectos.store'); // STORE
Route::get('/proyecto/{proyecto}','ProyectoController@show')->name('proyectos.show'); // SHOW
Route::get('/proyectos/{proyecto}/edit','ProyectoController@edit')->name('proyectos.edit');// EDIT
Route::put('/proyectos/{proyecto}/update','ProyectoController@update')->name('proyectos.update'); //UPDATE
Route::delete('/proyectos/{proyecto}/delete','ProyectoController@destroy')->name('proyectos.destroy'); // DESTROY
