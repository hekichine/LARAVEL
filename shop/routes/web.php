<?php

use Illuminate\Support\Facades\Route;


Route::get('system/login','App\Http\Controllers\System\LoginController@index')->name('login');
Route::post('system/login', 'App\Http\Controllers\System\LoginController@login');

Route::middleware(['auth'])->group(function (){
    Route::prefix('system')->group(function (){
        Route::get('/','App\Http\Controllers\System\MainController@index')->name('system');

        //    MENU
        Route::prefix('categories')->group(function (){

            // SHOW LIST
            Route::get('/','App\Http\Controllers\System\CategoryController@index');

            // CREATE CATEGORY
            Route::get('create','App\Http\Controllers\System\CategoryController@create');
            Route::post('create','App\Http\Controllers\System\CategoryController@store');

            // DELETE
            Route::delete('destroy', 'App\Http\Controllers\System\CategoryController@destroy');
        });
    });
});
