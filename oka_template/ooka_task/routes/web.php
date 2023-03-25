<?php

use Illuminate\Support\Facades\Route;
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


Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth'], function() {

    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/loginProcess', 'LoginController@authenticate')->name('login.post');

    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/registerProcess', 'RegisterController@store')->name('register.post');

    Route::get('/logout', 'LoginController@logout')->name('logout');

});

Route::get('/', [Users::class, 'beranda'])->name('beranda');
// Route::get('riwayat', [Users::class, 'riwayat'])->name('riwayat');
Route::get('bantuan', [Users::class, 'bantuan'])->name('bantuan');
Route::get('profil-user', [Users::class, 'profilUserLogin'])->name('profil-user');
Route::get('profil-user-nl', [Users::class, 'profilUserNotLogin'])->name('profil-user-nl');
Route::get('layanan-pengajuan-surat', [Users::class, 'lps'])->name('lps');

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Surat'], function () {

    Route::get('selesai-pengajuan', 'requestSuratController@pengajuanSuccess')->name('selesai-pengajuan');
    Route::get('surat-keterangan-usaha', 'requestSuratController@surat3')->name('surat3');
    Route::get('surat-keterangan-menikah', 'requestSuratController@surat11')->name('surat11');
    Route::get('surat-tidak-mampu', 'requestSuratController@surat12')->name('surat12');
    Route::get('surat-belum-menikah', 'requestSuratController@surat13')->name('surat13');
    Route::post('proses-surat13', 'requestSuratController@store13')->name('requestSurat13');
    Route::post('proses-surat3', 'requestSuratController@store3')->name('requestSurat3');
    Route::post('proses-surat12', 'requestSuratController@store12')->name('requestSurat12');
    Route::post('proses-surat11', 'requestSuratController@store11')->name('requestSurat11');

});





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
    Route::get('/detail/{id}', 'DokumenController@showFile')->name('showFile');
    
    // FaQ
    Route::get('/faq', 'FaqController@index')->name('faq');
    
    // Notifikasi
    Route::get('/notifikasi', 'NotifikasiController@index')->name('notifikasi');

    // Profil
    Route::get('data-simpan', [Users::class, 'dataSimpan'])->name('data-simpan');
    Route::get('data-ubah', [Users::class, 'dataUbah'])->name('dataUbah');
    Route::post('update-data/{id}', 'UserController@update')->name('update-data');
    Route::post('update-profile-pic/{id}', 'UserController@updateProfilePic')->name('change-profile-picture');


});


// ADMIN
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'Admin']], function () {
    Route::group(['prefix' => 'admin'], function () {

        // Dashboard
        Route::get('/', 'DashboardController@index')->name('dashboard-admin');
        
        // Profil
        Route::group(['prefix' => 'profil'], function() {
            Route::get('/', 'ProfilController@index')->name('profil-admin');
            Route::get('/edit', 'ProfilController@edit')->name('profil-admin.edit');
        });

        // Berita
        Route::group(['prefix' => 'berita'], function() {
            Route::get('/', 'BeritaController@index')->name('berita-admin');
            Route::get('/tambah', 'BeritaController@tambah')->name('berita-admin.tambah');
            Route::get('/detail', 'BeritaController@detail')->name('berita-admin.detail');
            Route::get('/edit', 'BeritaController@edit')->name('berita-admin.edit');
        });
        
        // Surat Keluar
        Route::group(['prefix' => 'surat-keluar'], function() {
            Route::get('/', 'suratKeluarController@index')->name('surat-keluar-admin');
            Route::get('/input', 'suratKeluarController@input')->name('surat-keluar.input');
            Route::get('/disposisi/{id}', 'suratKeluarController@disposisi')->name('surat-keluar.disposisi');
            Route::post('/disposisiProses/{id}', 'suratKeluarController@disposisiProses')->name('surat-keluar.disposisiProses');
            Route::get('/detail/{id}', 'suratKeluarController@detail')->name('surat-keluar-admin.detail');
            Route::get('/detailFile/{id}', 'suratKeluarController@detailFile')->name('surat-keluar-admin.detailFile');
            Route::post('/tolakSurat/{id}', 'suratKeluarController@tolakSurat')->name('surat-keluar-admin.tolakSurat');
        });

        // Surat Masuk
        Route::group(['prefix' => 'surat-masuk'], function() {
            Route::get('/', 'suratMasukController@index')->name('surat-masuk-admin');
            Route::get('/input', 'suratMasukController@input')->name('surat-masuk.input');
            Route::get('/edit', 'suratMasukController@edit')->name('surat-masuk.edit');
            Route::get('/disposisi', 'suratMasukController@disposisi')->name('surat-masuk.disposisi');
            Route::get('/detail', 'suratMasukController@detail')->name('surat-masuk-admin.detail');
        });

        // Data Warga
        Route::group(['prefix' => 'data-warga'], function() {
            Route::get('/', 'verifController@index')->name('verifikasi');
            Route::get('/not-verif', 'verifController@notVerif')->name('not-verif');
            Route::get('/yes-verif', 'verifController@yesVerif')->name('yes-verif');
            Route::get('/detail-warga', 'verifController@detailWarga')->name('detail-warga');
            Route::get('/edit-warga', 'verifController@editWarga')->name('edit-warga');
        });

        // Data Pegawai
        Route::group(['prefix' => 'data-lurah-kasi'], function() {
            Route::get('/', 'dataLurahKasiController@index')->name('data-lurah-kasi');
            Route::get('/detail-lurah-kasi', 'dataLurahKasiController@detail')->name('detail-lurah-kasi');
            Route::get('/edit-lurah-kasi', 'dataLurahKasiController@edit')->name('edit-lurah-kasi');
        });

        // Surat Arsip
        Route::group(['prefix' => 'surat-arsip'], function() {
            Route::get('/', 'suratArsipController@index')->name('surat-arsip-admin');
            Route::get('/detail', 'suratArsipController@detail')->name('surat-arsip-admin.detail');
        });

        // Surat Antar
        Route::group(['prefix' => 'surat-antar'], function() {
            Route::get('/', 'suratAntarController@index')->name('surat-antar');
            Route::get('/detail', 'suratAntarController@detail')->name('surat-antar.detail');
        });

    });
});

// LURAH
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Lurah', 'middleware' => ['auth', 'Lurah']], function () {
    Route::group(['prefix' => 'lurah'], function () {

        // Dashboard
        Route::get('/', 'DashboardController@index')->name('dashboard-lurah');

        // Surat Masuk
        Route::group(['prefix' => 'surat-masuk'], function() {
            Route::get('/', 'suratMasukController@index')->name('surat-masuk-lurah');
            Route::get('/detail', 'suratMasukController@detail')->name('surat-masuk-lurah.detail');
            Route::get('/kosong', 'suratMasukController@kosong')->name('surat-masuk-lurah.kosong');
        });

        // Surat Arsip
        Route::group(['prefix' => 'surat-arsip'], function() {
            Route::get('/', 'suratArsipController@index')->name('surat-arsip-lurah');
            Route::get('/detail', 'suratArsipController@detail')->name('surat-arsip-lurah.detail');
        });

        // Profil
        Route::group(['prefix' => 'profil'], function() {
            Route::get('/', 'ProfilController@index')->name('profil-lurah');
            Route::get('/edit', 'ProfilController@edit')->name('profil-lurah.edit');
        });
    });
});

// KASI
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Kasi', 'middleware' => ['auth', 'Kasi']], function () {
    Route::group(['prefix' => 'kasi'], function () {

        // Dashboard
        Route::get('/', 'DashboardController@index')->name('dashboard-kasi');

        // Surat Masuk
        Route::group(['prefix' => 'surat-masuk'], function() {
            Route::get('/', 'suratMasukController@index')->name('surat-masuk-kasi');
            Route::get('/detail', 'suratMasukController@detail')->name('surat-masuk-kasi.detail');
            Route::get('/kosong', 'suratMasukController@kosong')->name('surat-masuk-kasi.kosong');
        });

        // Surat Arsip
        Route::group(['prefix' => 'surat-arsip'], function() {
            Route::get('/', 'suratArsipController@index')->name('surat-arsip-kasi');
            Route::get('/detail', 'suratArsipController@detail')->name('surat-arsip-kasi.detail');
        });

        // Profil
        Route::group(['prefix' => 'profil'], function() {
            Route::get('/', 'ProfilController@index')->name('profil-kasi');
            Route::get('/edit', 'ProfilController@edit')->name('profil-kasi.edit');
        });
    });
});