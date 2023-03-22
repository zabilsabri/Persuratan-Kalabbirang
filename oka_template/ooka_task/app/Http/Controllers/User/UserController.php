<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_telp' => 'required|numeric|unique:users,nomor_telp,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
        ], [
            'unique' => 'Data Anda Duplikat!'
        ]);

        $user = User::find($id);
        $user->nomor_telp = $request->nomor_telp;
        $user->email = $request->email;
        $user->save();

        return back()->with('success', 'Data Anda Berhasil Diedit!');

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
    public function surat1()
    {
        return view('user.surat.suratKtp');
    }
    public function surat2()
    {
        return view('user.surat.suratKelahiran');
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
    public function surat9()
    {
        return view('user.surat.suratIzinKeramaian');
    }
    public function surat10()
    {
        return view('user.surat.suratIzinMendirikanPembangunan');
    } 
}
