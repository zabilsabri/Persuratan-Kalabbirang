<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function beranda() {
        return view('user.beranda');
    }
    
    public function dataSimpan() {
        return view('user.dataSimpan');
    }
    public function dataUbah() {
        return view('user.dataUbah');
    }
    public function bantuan() {
        return view('user.bantuan');
    }
    public function profilUserLogin() {
        return view('user.profile.profil_login');
    }
    public function profilUserNotLogin() {
        return view('user.profile.profil_notLogin');
    }
    public function lps() {
        return view('user.layananPengajuanSurat.lps');
    }
    public function pengajuanSuccess()
    {
        return view('user.surat.pengajuan-success');
    }
    public function surat2()
    {
        return view('user.surat.suratKelahiran');
    }
    public function surat3()
    {
        return view('user.surat.suratKeteranganUsaha');
    }
    public function surat4()
    {
        return view('user.surat.suratKartuKeluarga');
    }
    public function surat5()
    {
        return view('user.surat.suratPembuatanSertifikat');
    }
    public function surat6()
    {
        return view('user.surat.suratAktaJualBeli');
    }
    public function surat7()
    {
        return view('user.surat.suratAkteHibahDanAhliWaris');
    }
    public function surat8()
    {
        return view('user.surat.suratSKCK');
    }
}
