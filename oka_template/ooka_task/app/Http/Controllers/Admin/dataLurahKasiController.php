<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ttd;
use DB;

class dataLurahKasiController extends Controller
{
    public function index() {
        $kasis = User::where('role_id', 3)->orWhere('role_id', 4)->orWhere('role_id', 5)->get();
        $lurahs = User::where('role_id', 2)->get();
        return view('admin.dataLurahKasi.index')
            ->with(compact('kasis'))
            ->with(compact('lurahs'));
    }

    public function detail($id) {
        $users = User::where('id', $id)->get();
        return view('admin.dataLurahKasi.detail')
            ->with(compact('users'));
    }

    public function edit($id) {
        $users = User::where('id', $id)->get();
        return view('admin.dataLurahKasi.edit')
            ->with(compact('users'));
    }

    public function editProcess(Request $request, $id) {
        $users = User::find($id);
        $users->nama = $request->nama;
        $users->nomor_kp = $request->nomor_kp;
        $users->nip = $request->nip;
        $users->email = $request->email;
        $users->nomor_telp = $request->nomor_telp;
        $users->alamat = $request->alamat;
        $users->save();

        $users -> role -> nama = $request->jabatan;

        $folderPath = public_path('temp_file/ttd/');
        $image_parts = explode(";base64,", $request->signed);
              
        $image_type_aux = explode("image/", $image_parts[0]);
           
        if(isset($image_type_aux[1])){
            $image_type = $image_type_aux[1];
           
            $image_base64 = base64_decode($image_parts[1]);

            $nama_file = time(). "." .$image_type;

            $file = $folderPath . $nama_file;
            file_put_contents($file, $image_base64);

            $ttd = ttd::firstOrNew(['user_id' =>  $id]);
            $ttd->user_id = $id;
            $ttd->photo_ttd = $nama_file;
            $ttd->save();
        }

        return redirect()->route('detail-lurah-kasi', [$id]);
    }

    public function deletePegawai($id)
    {
        $deleted = DB::table('users')->where('id','=', $id)->delete();
        return redirect()->route('data-lurah-kasi');
    }
}
