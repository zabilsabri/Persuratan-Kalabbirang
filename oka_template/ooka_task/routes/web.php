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
Route::post('login', [Logins::class, 'login_proses'])->name('login_proses');
Route::get('/', [Users::class, 'beranda'])->name('beranda');
// Route::get('riwayat', [Users::class, 'riwayat'])->name('riwayat');
Route::get('data-simpan', [Users::class, 'dataSimpan'])->name('dataSimpan');
Route::get('data-ubah', [Users::class, 'dataUbah'])->name('dataUbah');
Route::get('bantuan', [Users::class, 'bantuan'])->name('bantuan');
Route::get('profil-user', [Users::class, 'profilUserLogin'])->name('profil-user');
Route::get('profil-user-nl', [Users::class, 'profilUserNotLogin'])->name('profil-user-nl');
Route::get('layanan-pengajuan-surat', [Users::class, 'lps'])->name('lps');

//Surat
Route::get('selesai-pengajuan', [Users::class, 'pengajuanSuccess'])->name('selesai-pengajuan');
Route::get('surat-ktp', [Users::class, 'surat1'])->name('surat1');
Route::get('surat-kelahiran', [Users::class, 'surat2'])->name('surat2');
Route::get('surat-keterangan-usaha', [Users::class, 'surat3'])->name('surat3');
Route::get('surat-kartu-keluarga', [Users::class, 'surat4'])->name('surat4');
Route::get('surat-pembuatan-sertifikat', [Users::class, 'surat5'])->name('surat5');
Route::get('surat-akta-jual-beli', [Users::class, 'surat6'])->name('surat6');
Route::get('surat-akte-hibah-dan-ahli-waris', [Users::class, 'surat7'])->name('surat7');
Route::get('surat-skck', [Users::class, 'surat8'])->name('surat8');
Route::get('surat-izin-keramaian', [Users::class, 'surat9'])->name('surat9');
Route::get('surat-izin-mendirikan-pembangunan', [Users::class, 'surat10'])->name('surat10');
Route::get('surat-keterangan-menikah', [Users::class, 'surat11'])->name('surat11');
Route::get('surat-tidak-mampu', [Users::class, 'surat12'])->name('surat12');
Route::get('surat-belum-menikah', [Users::class, 'surat13'])->name('surat13');




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
        Route::group(['prefix' => 'profil'], function() {
            Route::get('/', 'ProfilController@index')->name('profil');
            Route::get('/edit', 'ProfilController@edit')->name('profil.edit');
        });

        // Berita
        Route::group(['prefix' => 'berita'], function() {
            Route::get('/', 'BeritaController@index')->name('berita-admin');
            Route::get('/tambah', 'BeritaController@tambah')->name('berita-admin.tambah');
            Route::get('/detail', 'BeritaController@detail')->name('berita-admin.detail');
        });
        
        // Surat Keluar
        Route::group(['prefix' => 'surat-keluar'], function() {
            Route::get('/', 'suratKeluarController@index')->name('surat-keluar');
            Route::get('/input', 'suratKeluarController@input')->name('surat-keluar.input');
            Route::get('/disposisi', 'suratKeluarController@disposisi')->name('surat-keluar.disposisi');
            Route::get('/detail', 'suratKeluarController@detail')->name('surat-keluar.detail');
        });

        // Surat Masuk
        Route::group(['prefix' => 'surat-masuk'], function() {
            Route::get('/', 'suratMasukController@index')->name('surat-masuk');
            Route::get('/input', 'suratMasukController@input')->name('surat-masuk.input');
            Route::get('/disposisi', 'suratMasukController@disposisi')->name('surat-masuk.disposisi');
            Route::get('/detail', 'suratMasukController@detail')->name('surat-masuk.detail');
        });

        Route::group(['prefix' => 'verifikasi'], function() {
            Route::get('/', 'verifController@index')->name('verifikasi');
            Route::get('/not-verif', 'verifController@notVerif')->name('not-verif');
            Route::get('/yes-verif', 'verifController@yesVerif')->name('yes-verif');
        });

    });
});
