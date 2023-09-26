<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});

//laravel8以降は完全修飾名をコントローラー指定時に付与する
Route::post('/confirm', 'App\Http\Controllers\ConfirmController@confirm');

Route::post('/send', 'App\Http\Controllers\SendController@send');