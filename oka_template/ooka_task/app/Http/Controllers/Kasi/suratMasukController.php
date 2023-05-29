<?php

namespace App\Http\Controllers\kasi;

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
use App\Models\antarKeluar;
use App\Models\antarMasuk;
use App\Models\notifikasiMasuk;
use App\Models\notifikasi;
use PDF;
use Carbon\Carbon;


class suratMasukController extends Controller
{
    public function index() {
        $surat_masuks = suratMasuk::where('tujuan_surat_id', Auth::user()->id)->get();
        $surats = suratKeluar::where('pj_id', Auth::user()->id)->get();
        return view('kasi.suratMasuk.index')
            ->with(compact('surats'))
            ->with(compact('surat_masuks'));
    }

    public function detail($id) {
        $surats = suratKeluar::where('id', $id)->get();
        $disposisis = disposisi::latest()->where('suratKeluar_id', $id)->first();
        $disposisis_all = disposisi::where('suratKeluar_id', $id)->get();
        $pengantars = pengantar::where('suratKeluar_id', $id)->get();
        return view('kasi.suratMasuk.detail')
            ->with(compact('surats'))
            ->with(compact('disposisis'))
            ->with(compact('disposisis_all'))
            ->with(compact('pengantars'));
    }

    public function detailMasuk($id) {
        $surats = suratMasuk::where('id', $id)->get();
        $disposisis = disposisiMasuk::latest()->where('suratMasuk_id', $id)->first();
        $disposisis_all = disposisiMasuk::where('suratMasuk_id', $id)->get();
        return view('kasi.suratMasuk.detailMasuk')
            ->with(compact('surats'))
            ->with(compact('disposisis'))
            ->with(compact('disposisis_all'));
    }

    public function detailFile($id){
        $file = asset('temp_file/surat-masuk/'.$id);
        return view('kasi.suratMasuk.openFile', compact('file'));
    }

    public function detailFilePengantar($id){
        $file = asset('temp_file/pengantar/'.$id);
        return view('lurah.suratMasuk.openFile', compact('file'));
    }

    public function kosong() {
        return view('kasi.suratMasuk.kosong');
    }

    public function ttd($id)
    {
        $surat = suratKeluar::find($id);
        
        if(!isset(Auth::user() -> ttd -> id)){
            return back()->with('failed', 'Kasi ini belum memiliki tanda tangan! Silahkan ke admin untuk mendaftarkan tanda tangan anda!');
        } else {
            $surat->ttd_id = Auth::user() -> ttd -> id;
            if(!isset($surat->user->role->id)){
                $surat->pj_id = null;
                $notifikasi = nofikasi::where('suratKeluar_id', $id);
            } else {
                $surat->pj_id = $surat -> user_id;
                $notifikasi = new notifikasi();
            }
        $surat->process = "3";
        $surat->acc_id = Auth::user()->id;
        $surat->save();

        $arsip = new arsipKeluar();
        $arsip->suratKeluar_id = $id;
        $arsip->save();

        if($surat -> isAntar == 1){
            $antar = new antarKeluar();
            $antar->surat_id = $id;
            $antar->tgl_pengajuan = Carbon::now();
            $antar->status = "Belum Terkirim";
            $antar->save();
        }

        $notifikasi->user_id = $surat->user_id;
        $notifikasi->suratKeluar_id = $id;
        $notifikasi->status = "Disetujui";
        $notifikasi->keterangan = "Surat Anda Telah Disetujui Oleh Pihak Kalabbirang!";
        $notifikasi->save();

        return redirect()->route('surat-masuk-kasi');
        }
    }

    public function arsip($id)
    {
        $surat = suratMasuk::find($id);
        $surat->tujuan_surat_id = null;
        $surat->process = "3";
        $surat->acc_id = Auth::user()->id;
        $surat->save();

        $arsip = new arsipMasuk();
        $arsip->suratMasuk_id = $id;
        $arsip->file_surat = $surat->file_surat;
        $arsip->save();

        if($surat -> isAntar == 1){
            $antar = new antarMasuk();
            $antar->surat_id = $id;
            $antar->tgl_pengajuan = Carbon::now();
            $antar->status = "Belum Terkirim";
            $antar->save();
        }

        $notifikasi = notifikasiMasuk::where('suratMasuk_id', $id);
        $notifikasi->user_id = $surats->user_id;
        $notifikasi->suratKeluar_id = $id;
        $notifikasi->status = "Disetujui";
        $notifikasi->keterangan = "Surat Anda Telah Disetujui Oleh Pihak Kalabbirang!";
        $notifikasi->save();

        return redirect()->route('surat-masuk-kasi');
    }
}
