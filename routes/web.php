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
Route::get('/index','shopcontroller@index');
Route::post('/Shopproduct1','shopcontroller@Shopproduct1');
Route::post('/insertshop','shopcontroller@insertshop');
Route::post('/allproduct','shopcontroller@allproduct');
Route::get('/test','shopcontroller@test');