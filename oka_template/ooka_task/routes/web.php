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

// USER
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\User'], function () {

    Route::get('/', 'UserController@beranda')->name('beranda');

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

    //Surat
    Route::get('layanan-pengajuan-surat', 'UserController@lps')->name('lps');
    Route::get('selesai-pengajuan', 'UserController@pengajuanSuccess')->name('selesai-pengajuan');
    Route::get('surat-ktp', 'UserController@suratKtp')->name('surat-ktp');
    Route::get('surat-kelahiran', 'UserController@suratKelahiran')->name('surat-kelahiran');
    Route::get('surat-keterangan-usaha', 'UserController@suratKetUsaha')->name('surat-ket-usaha');
    Route::get('surat-kartu-keluarga', 'UserController@suratKartuKeluarga')->name('surat-kartu-keluarga');
    Route::get('surat-pembuatan-sertifikat', 'UserController@suratPembuatanSertifikat')->name('surat-pembuatan-sertifikat');
    Route::get('surat-akta-jual-beli', 'UserController@suratAktaJualBeli')->name('surat-akta-jual-beli');
    Route::get('surat-akte-hibah-dan-ahli-waris', 'UserController@suratHibahAhliWaris')->name('surat-akte-hibah-ahli-waris');
    Route::get('surat-skck', 'UserController@suratKck')->name('surat-kck');
    Route::get('surat-izin-keramaian', 'UserController@suratIzinKeramaian')->name('surat-izin-keramaian');
    Route::get('surat-izin-mendirikan-pembangunan', 'UserController@suratIzinBangunan')->name('surat-izin-mendirikan-bangunan');
    Route::get('surat-keterangan-menikah', 'UserController@suratKetMenikah')->name('surat-ket-menikah');
    Route::get('surat-tidak-mampu', 'UserController@suratTidakMampu')->name('surat-tidak-mampu');
    Route::get('surat-belum-menikah', 'UserController@suratBelumMenikah')->name('surat-belum-menikah');

    // Data
    Route::get('data-simpan', 'UserController@dataSimpan')->name('dataSimpan');
    Route::get('data-ubah', 'UserController@dataUbah')->name('dataUbah');

    // Bantuan
    Route::get('bantuan', 'UserController@bantuan')->name('bantuan');

    // Profil
    Route::get('profil-user', 'UserController@profilUserLogin')->name('profil-user');
    Route::get('profil-user-nl', 'UserController@profilUserNotLogin')->name('profil-user-nl');

    });


// ADMIN
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Admin'], function () {
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
        });
        
        // Surat Keluar
        Route::group(['prefix' => 'surat-keluar'], function() {
            Route::get('/', 'suratKeluarController@index')->name('surat-keluar-admin');
            Route::get('/input', 'suratKeluarController@input')->name('surat-keluar.input');
            Route::get('/disposisi', 'suratKeluarController@disposisi')->name('surat-keluar.disposisi');
            Route::get('/detail', 'suratKeluarController@detail')->name('surat-keluar-admin.detail');
        });

        // Surat Masuk
        Route::group(['prefix' => 'surat-masuk'], function() {
            Route::get('/', 'suratMasukController@index')->name('surat-masuk-admin');
            Route::get('/input', 'suratMasukController@input')->name('surat-masuk.input');
            Route::get('/disposisi', 'suratMasukController@disposisi')->name('surat-masuk.disposisi');
            Route::get('/detail', 'suratMasukController@detail')->name('surat-masuk-admin.detail');
        });

        Route::group(['prefix' => 'verifikasi'], function() {
            Route::get('/', 'verifController@index')->name('verifikasi');
            Route::get('/not-verif', 'verifController@notVerif')->name('not-verif');
            Route::get('/yes-verif', 'verifController@yesVerif')->name('yes-verif');
        });

    });
});

// LURAH
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Lurah'], function () {
    Route::group(['prefix' => 'lurah'], function () {

        // Dashboard
        Route::get('/', 'DashboardController@index')->name('dashboard-lurah');

        // Surat Masuk
        Route::group(['prefix' => 'surat-masuk'], function() {
            Route::get('/', 'suratMasukController@index')->name('surat-masuk-lurah');
            Route::get('/detail', 'suratMasukController@detail')->name('surat-masuk-lurah.detail');
            Route::get('/kosong', 'suratMasukController@kosong')->name('surat-masuk-lurah.kosong');
        });

        // Surat Keluar
        Route::group(['prefix' => 'surat-keluar'], function() {
            Route::get('/', 'suratKeluarController@index')->name('surat-keluar-lurah');
            Route::get('/detail', 'suratKeluarController@detail')->name('surat-keluar-lurah.detail');
            Route::get('/kosong', 'suratKeluarController@kosong')->name('surat-keluar-lurah.kosong');
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