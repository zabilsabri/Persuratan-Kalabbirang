<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth\api'], function () {

    Route::get('/login', 'LoginController@index')->name('index.login');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::post('/register', 'LoginController@register')->name('register');
    Route::put('/forget', 'LoginController@forget')->name('forget_password');
    Route::delete('/destroy/user/{id}', 'LoginController@destroy')->name('destroy');

    Route::group(['prefix' => 'suratMasuk'], function () {

        Route::get('/', 'suratMasukController@index')->name('index.suratMasuk');
        Route::post('/store', 'suratMasukController@store')->name('store.suratMasuk');
        Route::get('/edit/{id}', 'suratMasukController@edit')->name('edit.suratMasuk');
        Route::put('/update/{id}', 'suratMasukController@update')->name('update.suratMasuk');
        Route::delete('/destroy/{id}', 'suratMasukController@destroy')->name('destroy.suratMasuk');
        
    });

    Route::group(['prefix' => 'arsipMasuk'], function () {

        Route::get('/', 'arsipMasukController@index')->name('index.arsipMasuk');
        Route::post('/store', 'arsipMasukController@store')->name('store.arsipMasuk');
        Route::get('/edit/{id}', 'arsipMasukController@edit')->name('edit.arsipMasuk');
        Route::put('/update/{id}', 'arsipMasukController@update')->name('update.arsipMasuk');
        Route::delete('/destroy/{id}', 'arsipMasukController@destroy')->name('destroy.arsipMasuk');

    });
});
