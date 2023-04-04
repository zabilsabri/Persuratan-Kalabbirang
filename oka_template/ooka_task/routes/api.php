<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\api\LoginController as ApiLogin;

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

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth\api', 'middleware' => 'auth:sanctum'],function () {
    // return $request->user();
    Route::get('/login', 'LoginController@index')->name('index.login');
    Route::post('/logout', 'LoginController@logout')->name('api.logout');
    
    Route::group(['prefix' => 'suratMasuk'], function () {
    
        Route::get('/', 'SuratMasukController@index')->name('index.suratMasuk');
        Route::post('/store', 'SuratMasukController@store')->name('store.suratMasuk');
        Route::get('/edit/{id}', 'SuratMasukController@edit')->name('edit.suratMasuk');
        Route::put('/update', 'SuratMasukController@update')->name('update.suratMasuk');
        Route::delete('/destroy', 'SuratMasukController@destroy')->name('destroy.suratMasuk');
    
    });
    
    Route::group(['prefix' => 'arsipMasuk'], function () {
    
        Route::get('/', 'ArsipMasukController@index')->name('index.arsipMasuk');
        Route::post('/store', 'ArsipMasukController@store')->name('store.arsipMasuk');
        Route::get('/edit/{id}', 'ArsipMasukController@edit')->name('edit.arsipMasuk');
        Route::put('/update', 'ArsipMasukController@update')->name('update.arsipMasuk');
        Route::delete('/destroy', 'ArsipMasukController@destroy')->name('destroy.arsipMasuk');
    
    });
    
    Route::group(['prefix' => 'suratKeluar'], function () {
    
        Route::get('/', 'SuratKeluarController@index')->name('index.suratKeluar');
        Route::post('/store', 'SuratKeluarController@store')->name('store.suratKeluar');
        Route::get('/edit/{id}', 'SuratKeluarController@edit')->name('edit.suratKeluar');
        Route::put('/update', 'SuratKeluarController@update')->name('update.suratKeluar');
        Route::delete('/destroy', 'SuratKeluarController@destroy')->name('destroy.suratKeluar');
    
    });
    
    Route::group(['prefix' => 'arsipKeluar'], function () {
    
        Route::get('/', 'ArsipKeluarController@index')->name('index.arsipKeluar');
        Route::post('/store', 'ArsipKeluarController@store')->name('store.arsipKeluar');
        Route::get('/edit/{id}', 'ArsipKeluarController@edit')->name('edit.arsipKeluar');
        Route::put('/update', 'ArsipKeluarController@update')->name('update.arsipKeluar');
        Route::delete('/destroy', 'ArsipKeluarController@destroy')->name('destroy.arsipKeluar');
    
    });
    
});


Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth\api'], function () {
    
    Route::post('/login', 'LoginController@login')->name('api.login');
    Route::post('/register', 'LoginController@register')->name('api.register');
    
    
    Route::put('/forget', 'LoginController@forget')->name('forget_password');
    Route::delete('/destroy/user/{id}', 'LoginController@destroy')->name('destroy');


});
