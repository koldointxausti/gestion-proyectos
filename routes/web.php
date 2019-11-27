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
Route::get('/departamentos','DepartamentoController@index')->name('departamentos');
Route::get('/departamento/{id}','DepartamentoController@show')->name('departamento');

// EMPLEADOS
Route::get('/empleados','EmpleadoController@index')->name('empleados');
Route::get('/empleado/{id}','EmpleadoController@show')->name('empleado');

// PROYECTOS
Route::get('/proyectos','ProyectoController@index')->name('proyectos'); // INDEX
Route::get('/proyectos/create','ProyectoController@create')->name('proyectos-create'); // CREATE
Route::post('/proyectos','ProyectoController@store')->name('proyectos-store'); // STORE
Route::get('/proyecto/{id}','ProyectoController@show')->name('proyecto'); // SHOW
Route::get('/proyectos/{id}/edit','ProyectoController@edit')->name('proyecto-edit');
