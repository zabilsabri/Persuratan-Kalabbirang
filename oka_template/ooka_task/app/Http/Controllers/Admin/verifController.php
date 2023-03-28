<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\notifikasi;
use App\Models\pengantar;


class verifController extends Controller
{
    public function index() {
        $users = User::where('role_id', 6)->where(function($query) {
			$query->where('verif_user', 0)
			->orWhere('verif_user', 1);
        })->get();

        $users_all = User::where('role_id', 6)->get();

        return view('admin.verif.index')
            ->with(compact('users'))
            ->with(compact('users_all'));
    }

    public function notVerif($id) {
        $users = User::where('id', $id)->get();
        return view('admin.verif.notVerif')
            ->with(compact('users'));
    }

    public function tolakProcess(Request $request, $id) {

        $notifikasi = new notifikasi();
        $notifikasi->user_id = $id;
        $notifikasi->status = "Ditolak";
        $notifikasi->keterangan = $request->keterangan;
        $notifikasi->save();

        $user = User::find($id);
        $user->verif_user = null;
        $user->save();

        return redirect()->route('verifikasi');
    }

    public function verifProcess(Request $request, $id) {

        $notifikasi = new notifikasi();
        $notifikasi->user_id = $id;
        $notifikasi->status = "Disetujui";
        $notifikasi->keterangan = "Selamat, akun anda telah disetujui oleh Admin.";
        $notifikasi->save();

        $user = User::find($id);
        $user->verif_user = 1;
        $user->save();

        return redirect()->route('verifikasi');
    }

    public function yesVerif($id) {
        $users = User::where('id', $id)->get();
        return view('admin.verif.yesVerif')
            ->with(compact('users'));
    }

    public function detailWarga($id) {  
        $users = User::where('id', $id)->get();
        $pengantars = pengantar::where('user_id', $id)->get();
        return view('admin.verif.detail')
            ->with(compact('users'))
            ->with(compact('pengantars'));
    }

    public function editWarga($id) {
        $users = User::where('id', $id)->get();

        return view('admin.verif.edit')
            ->with(compact('users'));
    }

    public function editWargaProcess(Request $request, $id) {
        $users = User::find($id);
        $users->nama = $request->nama;
        $users->nomor_kk = $request->nomor_kk;
        $users->nik = $request->nik;
        $users->email = $request->email;
        $users->nomor_telp = $request->nomor_telp;
        $users->save();

        return redirect()->route('detail-warga', $id)->with('message', 'Data User Berhasil Diedit');
    }

    public function detailFile($id){
        $file = asset('temp_file/pengantar/'.$id);
        return view('admin.verif.openFile', compact('file'));
    }

    public function deleteWarga($id)
    {
        $deleted = User::where('id','=', $id)->delete();
        return redirect()->route('verifikasi');
    }
}