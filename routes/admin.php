<?php

use Illuminate\Support\Facades\Route;


//login admin route
Route::group(['prefix' => 'admin', 'namespace' => 'admin\login'], function () {

    Route::get('login', 'loginController@index');

    Route::post('adminLogin', 'loginController@login')->name('admin.login');
});

// admin panel Routes
Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {

            Route::get('home', 'home\homeController@index');

            Route::get('home1', 'home\homeController@get');
        });
    }
);
