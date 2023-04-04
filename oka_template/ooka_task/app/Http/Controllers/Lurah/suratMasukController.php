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
        $surat_masuks = suratMasuk::where('tujuan_surat_id', Auth::user()->id)->get();
        $surats = suratKeluar::where('pj_id', Auth::user()->id)->get();
        return view('lurah.suratMasuk.index')
            ->with(compact('surats'))
            ->with(compact('surat_masuks'));
    }

    public function detail($id) {
        $surats = suratKeluar::where('id', $id)->get();
        $disposisis = disposisi::latest()->where('suratKeluar_id', $id)->first();
        $disposisis_all = disposisi::where('suratKeluar_id', $id)->get();
        $pengantars = pengantar::where('suratKeluar_id', $id)->get();
        return view('lurah.suratMasuk.detail')
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
        $surat->ttd_id = Auth::user() -> ttd -> id;
        $surat->pj_id = $surat -> user_id;
        $surat->process = "3";
        $surat->save();

        $arsip = new arsipKeluar();
        $arsip->suratKeluar_id = $id;
        $arsip->save();

        return redirect()->route('surat-masuk-lurah');
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

        return redirect()->route('surat-masuk-lurah');
    }

    public function disposisi($id) {
        $surats = suratKeluar::with('jenisSurat', 'user', 'pj')->where('id', $id)->get();
        $pengantars = pengantar::where('suratKeluar_id', $id)->get();
        return view('admin.suratKeluar.disposisi')
            ->with(compact('surats'))
            ->with(compact('pengantars'));
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

        return redirect()->route('surat-keluar-admin');
    }
}
