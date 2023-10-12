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
    return view('Home');
});

Route::get('/about', function () {
    return view('About', [
        "name" => "Shakti Dewangga Chadrabayu",
        "email" => "shaktidewangga.2021@student.uny.ac.id",
        "img" => "foto.jfif"
    ]);
});

Route::get('/blog', function () {
    return view('Dokumentasi');
});