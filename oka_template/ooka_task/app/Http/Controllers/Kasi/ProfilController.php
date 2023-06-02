<?php

namespace App\Http\Controllers\kasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfilController extends Controller
{
    public function index() {
        return view('kasi.profil.index');
    }
    public function edit() {
        return view('kasi.profil.edit');
    }
    public function update(Request $request)
    {

        $users = User::find(Auth::user()->id);
        $users->alamat = $request->alamat;
        $users->email = $request->email;
        $users->nomor_telp = $request->nomor_telp;

        if($request->profil != null){
            $nama_file = time(). '.' . $request->profil->extension();
            $request->profil->move(public_path('temp_file/profile/'), $nama_file);

            $users->profil = $nama_file;
        } else {
            $users->profil = null;
        }
        
        $users->save();

        return redirect()->route('profil-kasi')->with('success', 'Data Anda Berhasil Diedit!');

    }
}
