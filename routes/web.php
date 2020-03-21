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

Route::middleware(['Logging'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::middleware(['RedirectLoggedIn'])->namespace('Auth')->group(function () {
        Route::get('login', 'LoginController@loginForm')->name('loginForm');
        Route::post('login', 'LoginController@lgoin')->name('login');

        Route::get('join', 'JoinController@joinForm')->name('joinForm');
        Route::post('join', 'JoinController@join')->name('join');
    });
});
