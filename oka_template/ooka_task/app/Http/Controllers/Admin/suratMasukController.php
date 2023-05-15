<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\suratMasuk;
use App\Models\disposisi;
use App\Models\disposisiMasuk;
use Auth;


class suratMasukController extends Controller
{
    public function index() {
        $surats = suratMasuk::where('tujuan_surat_id', Auth::user()->id)->get();
        return view('admin.suratMasuk.index')
            ->with(compact('surats'));
    }

    public function detail($id) {
        $surats = suratMasuk::where('id', $id)->first();
        return view('admin.suratMasuk.detail')
            ->with(compact('surats'));
    }

    public function input() {
        return view('admin.suratMasuk.input');
    }

    public function inputProcess(Request $request) {
        $surat = new suratMasuk();
        $surat->judul_surat = $request->judul_surat;
        $surat->no_surat = $request->no_surat;
        $surat->tgl_surat = $request->tgl_surat;
        $surat->perihal = $request->perihal;
        $surat->asal_surat = $request->asal_surat;
        $surat->catatan = $request->catatan;
        $surat->tujuan_surat_id = Auth::user()->id;
        $surat->jenis_surat = $request->jenis_surat;
        $surat->status = $request->sifatSurat;

        $nama_surat = time() . '.' . $request->file_surat->extension();
        $request->file_surat->move(public_path('temp_file/surat-masuk/'), $nama_surat);

        $surat->file_surat = $nama_surat;
        $surat->save();

        return redirect()->route('surat-masuk-admin')->with('success', 'Surat Masuk Berhasil Ditambahkan!');

    }

    public function detailFile($id){
        $file = asset('temp_file/surat-masuk/'.$id);
        return view('admin.verif.openFile', compact('file'));
    }

    public function edit($id) {
        $surats = suratMasuk::where('id', $id)->first();
        return view('admin.suratMasuk.edit')
            ->with(compact('surats'));
    }

    public function editSuratProcess(Request $request, $id) {
        $surat = suratMasuk::find($id);
        $surat->judul_surat = $request->judul_surat;
        $surat->no_surat = $request->no_surat;
        $surat->tgl_surat = $request->tgl_surat;
        $surat->perihal = $request->perihal;
        $surat->asal_surat = $request->asal_surat;
        $surat->catatan = $request->catatan;
        $surat->tujuan_surat_id = $request->penerima;
        $surat->jenis_surat = $request->jenis_surat;
        $surat->status = $request->sifatSurat;

        if(isset($request->file_surat)){
            $nama_surat = time() . '.' . $request->file_surat->extension();
            $request->file_surat->move(public_path('temp_file/surat-masuk/'), $nama_surat);

            $surat->file_surat = $nama_surat;
        }
        $surat->save();

        return redirect()->route('surat-masuk-admin')->with('success', 'Surat Masuk Berhasil Diedit!');

    }

    public function disposisi($id) {
        $surat = suratMasuk::where('id', $id)->first();
        return view('admin.suratMasuk.disposisi')
            ->with(compact('surat'));
    }

    public function disposisiProses(Request $request, $id)
    {
        $surats = suratMasuk::find($id);
        $surats->isAntar = $request->isAntar;
        $surats->tujuan_surat_id = $request->penerima;
        $surats->save();

        $disposisi = new disposisiMasuk();
        $disposisi->suratMasuk_id = $id;
        $disposisi->userk_id = Auth::user()->id;
        $disposisi->usert_id = $request->penerima;
        $disposisi->tgl_disposisi = $request->tgl_disposisi;
        $disposisi->catatan = $request->catatan;
        $disposisi->instruksi = $request->instruksi;
        $disposisi->save();

        return redirect()->route('surat-masuk-admin')->with('success', 'Surat Berhasil DIserahkan!');
    }
}
