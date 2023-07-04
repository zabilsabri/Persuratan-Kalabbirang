<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController as Users;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/cc', function () {
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:cache');
});

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth'], function() {

    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/loginProcess', 'LoginController@authenticate')->name('login.post');

    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/registerProcess', 'RegisterController@store')->name('register.post');

    Route::get('/logout', 'LoginController@logout')->name('logout');

});

Route::get('/', [Users::class, 'beranda'])->name('beranda')->middleware('count.visitors');
Route::get('bantuan', [Users::class, 'bantuan'])->name('bantuan');

// Tracking
Route::get('/track', [Users::class, 'tracking'])->name('tracking.index');
Route::get('/track-detail/', [Users::class, 'trackingDetail'])->name('tracking.detail');



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
    Route::get('/detail_berita/{id}', 'BeritaController@detail')->name('detail.berita');
    
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

        // Logout
        Route::get('/logout', 'DashboardController@logout')->name('logout-admin');
        
        // Profil
        Route::group(['prefix' => 'profil'], function() {
            Route::get('/', 'ProfilController@index')->name('profil-admin');
            Route::get('/edit', 'ProfilController@edit')->name('profil-admin.edit');
            Route::post('update-data', 'ProfilController@update')->name('update-data');
        });

        // Berita
        Route::group(['prefix' => 'berita'], function() {
            Route::get('/', 'BeritaController@index')->name('berita-admin');
            Route::get('/tambah', 'BeritaController@tambah')->name('berita-admin.tambah');
            Route::post('/tambah-berita', 'BeritaController@tambahBeritaProcess')->name('berita-admin.tambahProcess');
            Route::get('/detail/{id}', 'BeritaController@detail')->name('berita-admin.detail');
            Route::get('/edit/{id}', 'BeritaController@edit')->name('berita-admin.edit');
            Route::post('/edit-berita/{id}', 'BeritaController@editBeritaProcess')->name('berita-admin.editProcess');
            Route::get('/delete-berita/{id}', 'BeritaController@deleteBerita')->name('delete-berita');
        });
        
        // Surat Keluar
        Route::group(['prefix' => 'surat-keluar'], function() {
            Route::get('/', 'suratKeluarController@index')->name('surat-keluar-admin');

            //Input Surat Keluar
            Route::get('/surat-keterangan-usaha', 'suratKeluarController@suratKeteranganUsaha')->name('surat-keluar.surat3');
            Route::get('/surat-keterangan-menikah', 'suratKeluarController@suratKeteranganMenikah')->name('surat-keluar.surat11');
            Route::get('/surat-tidak-mampu', 'suratKeluarController@suratTidakMampu')->name('surat-keluar.surat12');
            Route::get('/surat-belum-menikah', 'suratKeluarController@suratBelumMenikah')->name('surat-keluar.surat13');

            // Proses Input Surat Keluar
            Route::post('proses-surat13', 'suratKeluarController@store13')->name('surat-keluar.proses13');
            Route::post('proses-surat3', 'suratKeluarController@store3')->name('surat-keluar.proses3');
            Route::post('proses-surat12', 'suratKeluarController@store12')->name('surat-keluar.proses12');
            Route::post('proses-surat11', 'suratKeluarController@store11')->name('surat-keluar.proses11');

            Route::get('/disposisi/{id}', 'suratKeluarController@disposisi')->name('surat-keluar.disposisi');
            Route::post('/disposisiProses/{id}', 'suratKeluarController@disposisiProses')->name('surat-keluar-admin.disposisiProses');
            Route::get('/detail/{id}', 'suratKeluarController@detail')->name('surat-keluar-admin.detail');
            Route::get('/detailFile/{id}', 'suratKeluarController@detailFile')->name('surat-keluar-admin.detailFile');
            Route::post('/tolakSurat/{id}', 'suratKeluarController@tolakSuratKeluar')->name('surat-keluar-admin.tolakSurat');
            Route::get('exportData/{id}', 'suratKeluarController@exportSurat')->name('exportSuratKeluar');
        });

        // Surat Masuk
        Route::group(['prefix' => 'surat-masuk'], function() {
            Route::get('/', 'suratMasukController@index')->name('surat-masuk-admin');
            Route::get('/input', 'suratMasukController@input')->name('surat-masuk.input');
            Route::post('/inputProcess', 'suratMasukController@inputProcess')->name('surat-masuk.inputProcess');
            Route::get('/edit/{id}', 'suratMasukController@edit')->name('surat-masuk.edit');
            Route::post('/edit-surat-process/{id}', 'suratMasukController@editSuratProcess')->name('edit-surat-process');
            Route::get('/disposisi/{id}', 'suratMasukController@disposisi')->name('surat-masuk.disposisi');
            Route::post('/disposisiProses/{id}', 'suratMasukController@disposisiProses')->name('surat-masuk-admin.disposisiProses');
            Route::get('/detail/{id}', 'suratMasukController@detail')->name('surat-masuk-admin.detail');
            Route::get('/detailFile/{id}', 'suratMasukController@detailFile')->name('surat-masuk-admin.detailFile');
            Route::post('/tolakSurat/{id}', 'suratMasukController@tolakSuratMasuk')->name('surat-masuk-admin.tolakSurat');
        });

        // Data Warga
        Route::group(['prefix' => 'data-warga'], function() {
            Route::get('/', 'verifController@index')->name('verifikasi');
            Route::get('/not-verif/{id}', 'verifController@notVerif')->name('not-verif');
            Route::post('tolakProcess/{id}', 'verifController@tolakProcess')->name('tolak-warga');
            Route::get('verifProcess/{id}', 'verifController@verifProcess')->name('verif-warga');
            Route::get('/yes-verif/{id}', 'verifController@yesVerif')->name('yes-verif');
            Route::get('/detail-warga/{id}', 'verifController@detailWarga')->name('detail-warga');
            Route::get('/edit-warga/{id}', 'verifController@editWarga')->name('edit-warga');
            Route::get('/delete-warga/{id}', 'verifController@deleteWarga')->name('delete-warga');
            Route::post('/edit-warga-process/{id}', 'verifController@editWargaProcess')->name('edit-user-process');
            Route::get('/detailFile/{id}', 'verifController@detailFile')->name('dokumen-user-admin.detailFile');
        });

        // Data Pegawai
        Route::group(['prefix' => 'data-lurah-kasi'], function() {
            Route::get('/', 'dataLurahKasiController@index')->name('data-lurah-kasi');
            Route::get('/detail-lurah-kasi/{id}', 'dataLurahKasiController@detail')->name('detail-lurah-kasi');
            Route::get('/edit-lurah-kasi/{id}', 'dataLurahKasiController@edit')->name('edit-lurah-kasi');
            Route::get('/delete-pegawai/{id}', 'dataLurahKasiController@deletePegawai')->name('delete-pegawai');
            Route::post('/edit-lurah-kasi-process/{id}', 'dataLurahKasiController@editProcess')->name('edit-lurah-kasi-process');
        });

        // Surat Arsip
        Route::group(['prefix' => 'surat-arsip'], function() {
            Route::get('/', 'suratArsipController@index')->name('surat-arsip-admin');
            Route::get('/detailKeluar/{id}', 'suratArsipController@detailKeluar')->name('surat-arsip-admin.detailKeluar');
            Route::get('/detailMasuk/{id}', 'suratArsipController@detailMasuk')->name('surat-arsip-admin.detailMasuk');
        });

        // Surat Antar
        Route::group(['prefix' => 'surat-antar'], function() {
            Route::get('/', 'suratAntarController@index')->name('surat-antar');
            Route::get('/detailKeluar/{id}', 'suratAntarController@detailKeluar')->name('surat-antar.detailKeluar');
            Route::get('/detailMasuk/{id}', 'suratAntarController@detailMasuk')->name('surat-antar.detailMasuk');
            Route::post('/antarMasukProcess/{id}', 'suratAntarController@antarMasukProcess')->name('edit-suratMasuk-antar.process');
            Route::post('/antarKeluarProcess/{id}', 'suratAntarController@antarKeluarProcess')->name('edit-suratKeluar-antar.process');
        });

    });
});

// LURAH
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Lurah', 'middleware' => ['auth', 'Lurah']], function () {
    Route::group(['prefix' => 'lurah'], function () {

        // Dashboard
        Route::get('/', 'DashboardController@index')->name('dashboard-lurah');

        // Logout
        Route::get('/logout', 'DashboardController@logout')->name('logout-lurah');

        // Surat
        Route::group(['prefix' => 'surat'], function() {
            Route::get('/', 'suratMasukKeluarController@index')->name('surat-masuk-lurah');
            Route::get('/detail-keluar/{id}', 'suratMasukKeluarController@detailKeluar')->name('surat-keluar-lurah.detail');
            Route::get('/detail-masuk/{id}', 'suratMasukKeluarController@detailMasuk')->name('surat-masuk-lurah.detail');

            Route::post('/disposisiMasukProses/{id}', 'suratMasukKeluarController@disposisiMasukProses')->name('surat-masuk-lurah.disposisiProses');
            Route::post('/disposisiKeluarProses/{id}', 'suratMasukKeluarController@disposisiKeluarProses')->name('surat-keluar-lurah.disposisiProses');

            Route::post('/tolakSurat-keluar/{id}', 'suratMasukKeluarController@tolakSuratKeluar')->name('surat-keluar-lurah.tolakSurat');
            Route::post('/tolakSurat-masuk/{id}', 'suratMasukKeluarController@tolakSuratMasuk')->name('surat-masuk-lurah.tolakSurat');

            Route::get('/kosong', 'suratMasukKeluarController@kosong')->name('surat-masuk-lurah.kosong');
            Route::get('/detailFile/{id}', 'suratMasukKeluarController@detailFile')->name('surat-masuk-lurah.detailFile');
            Route::get('/detailFilePengantar/{id}', 'suratMasukKeluarController@detailFilePengantar')->name('surat-masuk-lurah.detailFilePengantar');
            Route::get('/ttd/{id}', 'suratMasukKeluarController@ttd')->name('surat-masuk-lurah.ttd');
            Route::post('/arsip/{id}', 'suratMasukKeluarController@arsip')->name('surat-masuk-lurah.arsipSurat');
        });

        // Surat Arsip
        Route::group(['prefix' => 'surat-arsip'], function() {
            Route::get('/', 'suratArsipController@index')->name('surat-arsip-lurah');
            Route::get('/detailKeluar/{id}', 'suratArsipController@detailKeluar')->name('surat-arsip-lurah.detailKeluar');
            Route::get('/detailMasuk/{id}', 'suratArsipController@detailMasuk')->name('surat-arsip-lurah.detailMasuk');
        });

        // Profil
        Route::group(['prefix' => 'profil'], function() {
            Route::get('/', 'ProfilController@index')->name('profil-lurah');
            Route::get('/edit', 'ProfilController@edit')->name('profil-lurah.edit');
            Route::post('update-data', 'ProfilController@update')->name('update-data-lurah');
        });
    });
});

// KASI
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Kasi', 'middleware' => ['auth', 'Kasi']], function () {
    Route::group(['prefix' => 'kasi'], function () {

        // Dashboard
        Route::get('/', 'DashboardController@index')->name('dashboard-kasi');

        // Logout
        Route::get('/logout', 'DashboardController@logout')->name('logout-kasi');

        // Surat Masuk
        Route::group(['prefix' => 'surat-masuk'], function() {
            Route::get('/', 'suratMasukKeluarController@index')->name('surat-masuk-kasi');
            Route::get('/detail/{id}', 'suratMasukKeluarController@detail')->name('surat-keluar-kasi.detail');
            Route::get('/detail-masuk/{id}', 'suratMasukKeluarController@detailMasuk')->name('surat-masuk-kasi.detail');
            Route::get('/kosong', 'suratMasukKeluarController@kosong')->name('surat-masuk-kasi.kosong');
            Route::get('/detailFile/{id}', 'suratMasukKeluarController@detailFile')->name('surat-masuk-kasi.detailFile');
            Route::get('/detailFilePengantar/{id}', 'suratMasukKeluarController@detailFilePengantar')->name('surat-masuk-kasi.detailFilePengantar');
            Route::get('/ttd/{id}', 'suratMasukKeluarController@ttd')->name('surat-masuk-kasi.ttd');
            Route::post('/arsip/{id}', 'suratMasukKeluarController@arsip')->name('surat-masuk-kasi.arsipSurat');

            Route::post('/tolakSurat-keluar/{id}', 'suratMasukKeluarController@tolakSuratKeluar')->name('surat-keluar-kasi.tolakSurat');
            Route::post('/tolakSurat-masuk/{id}', 'suratMasukKeluarController@tolakSuratMasuk')->name('surat-masuk-kasi.tolakSurat');
        });

        // Surat Arsip
        Route::group(['prefix' => 'surat-arsip'], function() {
            Route::get('/', 'suratArsipController@index')->name('surat-arsip-kasi');
            Route::get('/detailKeluar/{id}', 'suratArsipController@detailKeluar')->name('surat-arsip-kasi.detailKeluar');
            Route::get('/detailMasuk/{id}', 'suratArsipController@detailMasuk')->name('surat-arsip-kasi.detailMasuk');
        });

        // Profil
        Route::group(['prefix' => 'profil'], function() {
            Route::get('/', 'ProfilController@index')->name('profil-kasi');
            Route::get('/edit', 'ProfilController@edit')->name('profil-kasi.edit');
            Route::post('update-data', 'ProfilController@update')->name('update-data-kasi');
        });
    });
});

//Surat
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Surat', 'middleware' => ['auth', 'Surat']], function () {
    Route::group(['prefix' => 'surat'], function () {

        Route::get('/exportSurat/{id}', 'suratController@exportSurat')->name('export.surat');

    });
});
