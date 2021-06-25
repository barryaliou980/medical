<?php

use App\Http\Controllers\SendMailController;
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
    return view('pages/content');
});

Route::get('/calendar', function () {
    return view('pages/calendar');
});


// Route::post('/sendmail', 'SendMailController@index');

Route::post('/sendmail', [SendMailController::class, 'send'])->name('sendmail.send');
