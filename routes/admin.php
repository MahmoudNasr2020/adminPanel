<?php

use Illuminate\Support\Facades\Route;


//login admin route
Route::group(['prefix' => 'admin', 'namespace' => 'admin\login', 'middleware' => 'guest:admin'], function () {

    Route::get('login', 'loginController@index')->name('admin.login');

    Route::post('adminLogin', 'loginController@login')->name('admin.login.attach');
});

// admin panel Routes
Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'auth:admin'], function () {

            Route::get('home', 'home\homeController@index')->name('admin.home');
        });
    }
);
