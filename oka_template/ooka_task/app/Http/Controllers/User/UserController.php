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
    public function suratKtp()
    {
        return view('user.surat.suratKtp');
    }
    public function suratKelahiran()
    {
        return view('user.surat.suratKelahiran');
    }
    public function suratKetUsaha()
    {
        return view('user.surat.suratKeteranganUsaha');
    }
    public function suratKartuKeluarga()
    {
        return view('user.surat.suratKartuKeluarga');
    }
    public function suratPembuatanSertifikat()
    {
        return view('user.surat.suratPembuatanSertifikat');
    }
    public function suratAktaJualBeli()
    {
        return view('user.surat.suratAktaJualBeli');
    }
    public function suratHibahAhliWaris()
    {
        return view('user.surat.suratAkteHibahDanAhliWaris');
    }
    public function suratKck()
    {
        return view('user.surat.suratSKCK');
    }
    public function suratIzinKeramaian()
    {
        return view('user.surat.suratIzinKeramaian');
    }
    public function suratIzinBangunan()
    {
        return view('user.surat.suratIzinMendirikanPembangunan');
    }
    public function suratKetMenikah()
    {
        return view('user.surat.suratKeteranganMenikah');
    }
    public function suratTidakMampu()
    {
        return view('user.surat.surattidakMampu');
    }
    public function suratBelumMenikah () {
        return view('user.surat.suratBelumMenikah');
    }   
}
