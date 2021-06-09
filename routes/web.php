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
    return view('pages/home');
});
Route::get('/apropos', function () {
    return view('pages/aboutUs');
});
Route::get('/contacts', function () {
    return view('pages/contacts');
});
Route::get('/carrieur', function () {
    return view('pages/carrer');
});

Route::get('/sendMail', mailController@index);