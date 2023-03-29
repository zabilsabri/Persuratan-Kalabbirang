<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\notifikasi;


class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'nama'                      => 'required',
            'username'                  => 'required|unique:users',
            'nik'                       => 'required|unique:users',
            'nomor_kk'                  => 'required',
            'nomor_telp'                => 'required',
            'ktp'                       => 'required',
            'swafoto_ktp'               => 'required',
            'email'                     => 'required|unique:users'
        ]);

        $user = new User();

        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->nik = $request->nik;
        $user->nomor_kk = $request->nomor_kk;
        $user->nomor_telp = $request->nomor_telp;
        $user->email = $request->email;

        $ktp = time() . '.' . $request->ktp->extension();
        $request->ktp->move(public_path('temp_file/ktp/'), $ktp);

        $swafoto_ktp = time() . '.' . $request->swafoto_ktp->extension();
        $request->swafoto_ktp->move(public_path('temp_file/swafoto_ktp/'), $swafoto_ktp);

        $user->ktp = $ktp;
        $user->swafoto_ktp = $swafoto_ktp;

        $user->save();

        $notifikasi = new notifikasi();
        $notifikasi->user_id = $user -> id;
        $notifikasi->status = "Dalam Proses";
        $notifikasi->keterangan = "Silahkan menunggu. Data anda sedang diverifikasi oleh admin.";
        $notifikasi->save();


        return redirect()->route('login')->with('message', 'Data Armada Berhasil Ditambahkan!');
    
    }
}
