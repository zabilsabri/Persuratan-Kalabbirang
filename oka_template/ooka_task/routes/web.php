<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController as Registers;
use App\Http\Controllers\Auth\LoginController as Logins;
use App\Http\Controllers\User\UserController as Users;



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

// LOGIN
Route::get('register', [Registers::class, 'register'])->name('register');
Route::get('login', [Logins::class, 'login'])->name('login');
Route::get('beranda', [Users::class, 'beranda'])->name('beranda');
Route::get('riwayat', [Users::class, 'riwayat'])->name('riwayat');


// USER
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\User'], function () {

    Route::get('/', 'BeritaController@index')->name('berita');
});


// ADMIN
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::group(['prefix' => 'admin'], function () {

        Route::get('/', 'DashboardController@index')->name('dashboard');
    });
});
