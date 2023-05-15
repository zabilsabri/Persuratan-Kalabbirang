<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\antarMasuk;
use App\Models\antarKeluar;

class suratAntarController extends Controller
{
    public function index() {
        $antarMasuks = antarMasuk::get();
        $antarKeluars = antarKeluar::get();
        return view('admin.suratAntar.index')
            ->with(compact('antarMasuks'))
            ->with(compact('antarKeluars'));
    }

    public function detailMasuk($id) {
        $antar = antarMasuk::find($id);
        return view('admin.suratAntar.detailMasuk')
            ->with(compact('antar'));
    }

    public function antarMasukProcess(Request $request, $id)
    {
        $antar = antarMasuk::find($id);
        $antar->penerima = $request->penerima;
        $antar->instansi = $request->instansi;
        $antar->alamat = $request->alamat;
        $antar->status = "Waiting";
        $antar->save();

        return redirect()->route('surat-antar')->with('success', 'Data Alamat Surat Berhasil Ditambahkan! Silahkan Tunggu Kurir Untuk Proses Pengantaran!');
    }

    public function detailKeluar($id) {
        $antar = antarKeluar::find($id);
        return view('admin.suratAntar.detailKeluar')
            ->with(compact('antar'));
    }

    public function antarKeluarProcess(Request $request, $id)
    {
        $antar = antarKeluar::find($id);
        $antar->penerima = $request->penerima;
        $antar->instansi = $request->instansi;
        $antar->alamat = $request->alamat;
        $antar->status = "Waiting";
        $antar->save();

        return redirect()->route('surat-antar')->with('success', 'Data Alamat Surat Berhasil Ditambahkan! Silahkan Tunggu Kurir Untuk Proses Pengantaran!');
    }
}
