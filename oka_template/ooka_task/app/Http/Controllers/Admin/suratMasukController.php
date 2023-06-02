<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\suratMasuk;
use App\Models\disposisi;
use App\Models\disposisiMasuk;
use App\Models\notifikasiMasuk;
use App\Models\notifikasi;
use App\Models\arsipMasuk;
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
        $surat->kode_surat = time();
        $surat->process = "1";
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

        $notifikasi = new notifikasiMasuk();
        $notifikasi->suratMasuk_id = $surat -> id;
        $notifikasi->status = "Dalam Proses";
        $notifikasi->keterangan = "Surat Anda Sementara Masih Menunggu Proses Disposisi. Silahkan Menunggu.";
        $notifikasi->save();

        return redirect()->route('surat-masuk-admin')->with('success', 'Surat Masuk Berhasil Ditambahkan!');

    }

    public function tolakSuratMasuk(Request $request, $id) {
        $surat = suratMasuk::find($id);
        $surat->tujuan_surat_id = null;
        $surat->acc_id = Auth::user()->id;
        $surat->save();

        $notifikasi = notifikasiMasuk::where('suratMasuk_id', $id)->first();
        $notifikasi->status = "Ditolak";
        $notifikasi->keterangan = "Surat Anda Ditolak. Silahkan Mengajukan Kembali Atau Datang Ke Kantor Kelurahan.";
        $notifikasi->save();

        $arsip = new arsipMasuk();
        $arsip->status = 0;
        $arsip->keterangan_status = $request->alasan_tolak;
        $arsip->suratMasuk_id = $id;
        $arsip->file_surat = $surat->file_surat;
        $arsip->save();

        return redirect()->route('surat-masuk-admin')->with('success', 'Surat Berhasil Ditolak Dan Sudah Terarsip.');
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

        return redirect()->route('surat-masuk-admin.detail', $id)->with('success', 'Surat Masuk Berhasil Diedit!');

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
        $surats->process = "2";
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

        $notifikasi = new notifikasiMasuk();
        $notifikasi->suratMasuk_id = $id;
        $notifikasi->status = "Dalam Proses";
        $notifikasi->keterangan = "Surat Anda Sedang Menunggu Persetujuan/Keputusan Dari Kasi/Lurah. Silahkan Menunggu Kembali!";
        $notifikasi->save();

        return redirect()->route('surat-masuk-admin')->with('success', 'Surat Berhasil DIserahkan!');
    }
}
