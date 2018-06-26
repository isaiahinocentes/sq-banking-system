<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

//Authentication Routes
Auth::routes();

//Routes for Users Only
Route::group(['prefix' => 'user'], function () {
    Route::get('','NavigationController@index')->name('user-index');
    
    Route::group(['prefix' => 'transfer'], function() {
        Route::get('','NavigationController@transfer')->name('user-transfer');
        Route::post('query', 'TransferController@query')->name('user-query');
    });
    
    Route::get('logs', 'NavigationController@logs')->name('user-logs');
    Route::get('profile', 'NavigationController@profile')->name('user-profile');
});



//Routes for Admin Only
Route::group(['prefix' => 'admin'], function () {
    Route::get('', function(){
        return "Admin";
    });
});

