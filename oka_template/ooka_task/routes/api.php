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

    Route::group(['prefix' => 'SuratMasuk'], function () {

        Route::get('/', 'SuratMasukController@index')->name('index.suratMasuk');
        Route::post('/store', 'SuratMasukController@store')->name('store.suratMasuk');
        Route::get('/edit/{id}', 'SuratMasukController@edit')->name('edit.suratMasuk');
        Route::put('/update', 'SuratMasukController@update')->name('update.suratMasuk');
        Route::delete('/destroy', 'SuratMasukController@destroy')->name('destroy.suratMasuk');

    });

    Route::group(['prefix' => 'ArsipMasuk'], function () {

        Route::get('/', 'ArsipMasukController@index')->name('index.arsipMasuk');
        Route::post('/store', 'ArsipMasukController@store')->name('store.arsipMasuk');
        Route::get('/edit/{id}', 'ArsipMasukController@edit')->name('edit.arsipMasuk');
        Route::put('/update', 'ArsipMasukController@update')->name('update.arsipMasuk');
        Route::delete('/destroy', 'ArsipMasukController@destroy')->name('destroy.arsipMasuk');

    });

    Route::group(['prefix' => 'SuratKeluar'], function () {

        Route::get('/', 'SuratKeluarController@index')->name('index.suratKeluar');
        Route::post('/store', 'SuratKeluarController@store')->name('store.suratKeluar');
        Route::get('/edit/{id}', 'SuratKeluarController@edit')->name('edit.suratKeluar');
        Route::put('/update', 'SuratKeluarController@update')->name('update.suratKeluar');
        Route::delete('/destroy', 'SuratKeluarController@destroy')->name('destroy.suratKeluar');

    });
    
    Route::group(['prefix' => 'ArsipKeluar'], function () {

        Route::get('/', 'ArsipKeluarController@index')->name('index.arsipKeluar');
        Route::post('/store', 'ArsipKeluarController@store')->name('store.arsipKeluar');
        Route::get('/edit/{id}', 'ArsipKeluarController@edit')->name('edit.arsipKeluar');
        Route::put('/update', 'ArsipKeluarController@update')->name('update.arsipKeluar');
        Route::delete('/destroy', 'ArsipKeluarController@destroy')->name('destroy.arsipKeluar');

    });

});
