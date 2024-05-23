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
    
    Route::prefix('catalog')->group(function() {
        Route::name('catalog.')->group(function() {
            Route::resource('author', 'Catalog\Author\AuthorController');
            
            
            Route::get('/', 'Catalog\IndexController')->name('index');
        });
    });
    
    Route::view('/', 'components.about')->name('about');
});
