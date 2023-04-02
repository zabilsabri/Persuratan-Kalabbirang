<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Berita;

class UserController extends Controller
{
    public function beranda() {
        $beritas = Berita::limit(3)->get();
        return view('user.beranda')
            ->with(compact('beritas'));
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

    public function updateProfilePic(Request $request, $id)
    {

        $nama_file = time(). '.' . $request->profile_pic->extension();
        $request->profile_pic->move(public_path('temp_file/profile/'), $nama_file);

        $user = User::find($id);
        $user->profil = $nama_file;
        $user->save();

        return back()->with('success', 'Photo Profile Anda Berhasil Diperbarui!');

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
