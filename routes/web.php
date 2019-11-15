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
});
Route::get('/departamentos','DepartamentoController@index')->name('departamentos');
Route::get('/empleados','EmpleadoController@index')->name('empleados');
Route::get('/proyectos','ProyectoController@index')->name('proyectos');

Route::get('/empleado/{id}','EmpleadoController@show')->name('empleado');
Route::get('/proyecto/{id}','ProyectoController@show')->name('proyecto');
Route::get('/departamento/{id}','DepartamentoController@show')->name('departamento');