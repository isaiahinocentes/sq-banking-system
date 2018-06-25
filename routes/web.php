<?php

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

Route::get('/home', 'HomeController@index')->name('home');

//Authentication Routes
Auth::routes();

//Routes for Users Only
Route::group(['prefix' => 'user'], function () {
    Route::get('','NavigationController@index')->name('user-index');
    Route::get('transfer', 'NavigationController@transfer')->name('user-transfer');
    Route::get('logs', 'NavigationController@logs')->name('user-logs');
    Route::get('profile', 'NavigationController@profile')->name('user-profile');
});

//Routes for Admin Only
Route::group(['prefix' => 'admin'], function () {
    Route::get('', function(){
        return "Admin";
    });
});

