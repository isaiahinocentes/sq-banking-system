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

    Route::group(['prefix' => 'deposit'],function(){
        Route::get('','TransactionsController@depositForm')->name('user-deposit-form');
        Route::post('query','TransactionsController@depositQry')->name('user-deposit-query');
    });

    Route::group(['prefix' => 'withdraw'],function(){
        Route::get('','TransactionsController@withdrawForm')->name('user-withdraw-form');
        Route::post('query','TransactionsController@depositQry')->name('user-withdraw-query');
    });

    Route::group(['prefix' => 'timedeposit'],function(){
        Route::get('','TransactionsController@timedepositForm')->name('user-timedeposit-form');
        Route::post('query','TransactionsController@timedepositQry')->name('user-timedeposit-query');
    });

    Route::group(['prefix' => 'paybills'],function(){
        Route::get('','TransactionsController@paybillsForm')->name('user-paybills-form');
        Route::post('query','TransactionsController@paybillsQry')->name('user-paybills-query');
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

