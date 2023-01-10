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
Route::get('/', [Users::class, 'beranda'])->name('beranda');
// Route::get('riwayat', [Users::class, 'riwayat'])->name('riwayat');
Route::get('data-simpan', [Users::class, 'dataSimpan'])->name('dataSimpan');
Route::get('data-ubah', [Users::class, 'dataUbah'])->name('dataUbah');
Route::get('bantuan', [Users::class, 'bantuan'])->name('bantuan');
Route::get('profil-user', [Users::class, 'profilUserLogin'])->name('profil-user');
Route::get('profil-user-nl', [Users::class, 'profilUserNotLogin'])->name('profil-user-nl');
Route::get('layanan-pengajuan-surat', [Users::class, 'lps'])->name('lps');
Route::get('selesai-pengajuan', [Users::class, 'pengajuanSuccess'])->name('selesai-pengajuan');
Route::get('surat-kelahiran', [Users::class, 'surat2'])->name('surat2');
Route::get('surat-keterangan-usaha', [Users::class, 'surat3'])->name('surat3');
Route::get('surat-kartu-keluarga', [Users::class, 'surat4'])->name('surat4');




// USER
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\User'], function () {

    // Berita
    Route::get('/berita', 'BeritaController@index')->name('berita');
    Route::get('/detail_berita', 'BeritaController@detail')->name('detail.berita');
    
    // Riwayat
    Route::get('/riwayat', 'RiwayatController@index')->name('riwayat');
    Route::get('/riwayat_kosong', 'RiwayatController@kosong')->name('riwayat.kosong');
    
    // Arsip Surat
    Route::get('/arsip', 'ArsipSuratController@index')->name('arsip');
    Route::get('/arsip_kosong', 'ArsipSuratController@kosong')->name('arsip.kosong');
    
    // Dokumen
    Route::get('/dokumen', 'DokumenController@index')->name('dokumen');
    
    // FaQ
    Route::get('/faq', 'FaqController@index')->name('faq');
    
    // Notifikasi
    Route::get('/notifikasi', 'NotifikasiController@index')->name('notifikasi');

});


// ADMIN
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::group(['prefix' => 'admin'], function () {

        // Dashboard
        Route::get('/', 'DashboardController@index')->name('dashboard');
        
        // Profil
        Route::get('/profil', 'ProfilController@index')->name('profil');


    });
});
