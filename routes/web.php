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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view("vistaPrueba");
});

Route::get('/home', function () {
    return view("home");
});

Route::get('/logout', function () {
    return "Logout";
});

Route::get('/consultas', function () {
    return "Consultas";
});

Route::get('/reportes', function () {
    return "Reporte";
});