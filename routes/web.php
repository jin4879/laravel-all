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
Route::middleware(['Logging'])->group(function(){
//    Route::get('/', 'HomeController@index');

    Route::middleware(['RedirectLoggedIn'])->group(function () {
//        Route::get('join', 'JoinController@joinForm')->name('join');
//        Route::post('join', 'JoinController@registerUser');

        Route::get('login', 'LoginController@loginForm')->name('loginForm');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
