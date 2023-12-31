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

//====> Group Middleware <=====

// Route::view('hello','hello');
// Route::view('home','home');

// Route::group(['middleware'=>['protectPage']],function(){
//     Route::view('users','users');
// });

//=====> Routed Middleware <=====

Route::view('hello','hello');
Route::view('home','home');
Route::view('users','users')->middleware('protectedPage');
