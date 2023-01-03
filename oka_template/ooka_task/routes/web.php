<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController as Registers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('register', [Registers::class, 'register'])->name('register');

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Admin']  ,function () {
    Route::group(['prefix' => 'admin'] ,function () {

        Route::get('/', 'DashboardController@index')->name('dashboard');

    });

});
