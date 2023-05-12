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
use PDF;


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

    public function exportSurat1($id)
    {
        $data = suratKeluar::where('id', $id)->first();

        $pdf = Pdf::loadView('surat.isiSurat.belumNikah', compact('data'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('Surat Belum Menikah.pdf' , array("Attachment" => false));
        exit(0);
    }
    public function exportSurat2($id)
    {
        $data = suratKeluar::where('id', $id)->first();

        $pdf = Pdf::loadView('surat.isiSurat.kurangMampu', compact('data'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('Surat Kurang Mampu.pdf' , array("Attachment" => false));
        exit(0);
    }
    public function exportSurat3($id)
    {
        $data = suratKeluar::where('id', $id)->first();

        $pdf = Pdf::loadView('surat.isiSurat.sku', compact('data'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('Surat Keterangan Usaha.pdf' , array("Attachment" => false));
        exit(0);
    }
    public function exportSurat4($id)
    {
        $data = suratKeluar::where('id', $id)->first();

        $pdf = Pdf::loadView('surat.isiSurat.pengPernikahan', compact('data'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('Surat Pengantar Pernikahan.pdf' , array("Attachment" => false));
        exit(0);
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
        } else {
            $surat->pj_id = $surat -> user_id;
        }
        $surat->process = "3";
        $surat->save();

        $arsip = new arsipKeluar();
        $arsip->suratKeluar_id = $id;
        $arsip->save();

        return redirect()->route('surat-masuk-kasi');
        }
    }

    public function arsip($id)
    {
        $surat = suratMasuk::find($id);
        $surat->tujuan_surat_id = null;
        $surat->save();

        $arsip = new arsipMasuk();
        $arsip->suratMasuk_id = $id;
        $arsip->file_surat = $surat->file_surat;
        $arsip->save();

        return redirect()->route('surat-masuk-kasi');
    }
}
