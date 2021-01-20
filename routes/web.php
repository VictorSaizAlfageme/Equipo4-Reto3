<?php

use Illuminate\Support\Facades\Route;

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

Route::view("/", "index");

//TRABAJADORES
Route::get("/trabajadores", "trabajadoresController@listarTodos");
Route::get("/trabajadoresCrear", "trabajadoresController@formCrear");
Route::post("/trabajadoresStore", "trabajadoresController@store")->name("trabajadores.store");
Route::get("/trabajadores/{id}", "trabajadoresController@listarConcreto");
