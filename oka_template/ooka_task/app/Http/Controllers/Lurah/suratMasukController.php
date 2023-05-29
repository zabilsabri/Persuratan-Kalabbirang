<?php

namespace App\Http\Controllers\Lurah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\suratKeluar;
use App\Models\suratMasuk;
use App\Models\disposisi;
use App\Models\disposisiMasuk;
use App\Models\pengantar;
use App\Models\arsipKeluar;
use App\Models\arsipMasuk;
use PDF;

class suratMasukController extends Controller
{
    public function index() {
        $surat_masuks = suratMasuk::where('tujuan_surat_id', '!=', '1')->orWhere('tujuan_surat_id', '2')->get();
        $surats = suratKeluar::where('pj_id', '!=', null)->where('pj_id', '!=', '1')->orWhere('pj_id', '2')->get();
        return view('lurah.suratMasuk.index')
            ->with(compact('surats'))
            ->with(compact('surat_masuks'));
    }

    public function detailkeluar($id) {
        $surats = suratKeluar::find($id);
        $disposisis = disposisi::latest()->where('suratKeluar_id', $id)->first();
        $disposisis_all = disposisi::where('suratKeluar_id', $id)->get();
        $pengantars = pengantar::where('suratKeluar_id', $id)->get();
        return view('lurah.suratMasuk.detailKeluar')
            ->with(compact('surats'))
            ->with(compact('disposisis'))
            ->with(compact('disposisis_all'))
            ->with(compact('pengantars'));
    }

    public function detailMasuk($id) {
        $surats = suratMasuk::where('id', $id)->get();
        $disposisis = disposisiMasuk::latest()->where('suratMasuk_id', $id)->first();
        $disposisis_all = disposisiMasuk::where('suratMasuk_id', $id)->get();
        return view('lurah.suratMasuk.detailMasuk')
            ->with(compact('surats'))
            ->with(compact('disposisis'))
            ->with(compact('disposisis_all'));
    }

    public function detailFile($id){
        $file = asset('temp_file/surat-masuk/'.$id);
        return view('lurah.suratMasuk.openFile', compact('file'));
    }

    public function detailFilePengantar($id){
        $file = asset('temp_file/pengantar/'.$id);
        return view('lurah.suratMasuk.openFile', compact('file'));
    }

    public function kosong() {
        return view('lurah.suratMasuk.kosong');
    }

    public function ttd($id)
    {
        $surat = suratKeluar::find($id);
        $surat->ttd_id = Auth::user() -> ttd -> id;
        $surat->pj_id = $surat -> user_id;
        $surat->process = "3";
        $surat->save();

        $arsip = new arsipKeluar();
        $arsip->suratKeluar_id = $id;
        $arsip->save();

        return redirect()->route('surat-masuk-lurah');
    }

    public function arsip(Request $request, $id)
    {
        $surat = suratMasuk::find($id);
        $surat->tujuan_surat_id = null;
        $surat->acc_id = Auth::user()->id;
        $surat->save();

        $arsip = new arsipMasuk();
        $arsip->status = 1;
        $arsip->keterangan_status = $request->alasan_arsip;
        $arsip->suratMasuk_id = $id;
        $arsip->file_surat = $surat->file_surat;
        $arsip->save();

        return redirect()->route('surat-masuk-lurah');
    }

    public function tolakSuratMasuk(Request $request, $id) {
        $surat = suratMasuk::find($id);
        $surat->tujuan_surat_id = null;
        $surat->acc_id = Auth::user()->id;
        $surat->save();

        $notifikasi = notifikasiMasuk::where('suratMasuk_id', $id);
        $notifikasi->status = "Ditolak";
        $notifikasi->keterangan = "Surat Anda Ditolak. Silahkan Mengajukan Kembali!";
        $notifikasi->save();

        $arsip = new arsipMasuk();
        $arsip->status = 0;
        $arsip->keterangan_status = $request->alasan_arsip;
        $arsip->suratMasuk_id = $id;
        $arsip->file_surat = $surat->file_surat;
        $arsip->save();

        return redirect()->route('surat-masuk-lurah');
    }

    
    public function disposisiProses(Request $request, $id) {
        $surats = suratKeluar::find($id);
        $surats->pj_id = $request->penerima;
        $surats->process = "2";
        $surats->save();

        $disposisi = new disposisi();
        $disposisi->suratKeluar_id = $id;
        $disposisi->userk_id = Auth::user()->id;
        $disposisi->usert_id = $request->penerima;
        $disposisi->tgl_disposisi = $request->tgl_disposisi;
        $disposisi->catatan = $request->catatan;
        $disposisi->instruksi = $request->instruksi;
        $disposisi->save();

        return redirect()->route('surat-keluar-lurah');
    }
}
