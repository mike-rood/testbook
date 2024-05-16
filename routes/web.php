<?php

use Illuminate\Support\Facades\Route;

Route::view('/welcome', 'welcome');

Route::namespace('App\Http\Controllers')->group(function() {
    Route::prefix('admin')->group(function() {
        Route::name('admin.')->group(function() {
            Route::resource('user', 'Admin\UserController')->only('index');
        });
        Route::get('/', 'Admin\IndexController')->name('admin.index');
    });
});
