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
use App\Models\notifikasiMasuk;
use App\Models\notifikasi;
use App\Models\antarMasuk;
use App\Models\antarKeluar;
use Carbon\Carbon;
use PDF;

class suratMasukKeluarController extends Controller
{
    public function index() {
        $surat_masuks = suratMasuk::where('tujuan_surat_id', '!=', '1')->orWhere('tujuan_surat_id', '2')->get();
        $surats = suratKeluar::where('pj_id', '!=', null)->where('pj_id', '!=', '1')->orWhere('pj_id', '2')->get();
        return view('lurah.suratMasukKeluar.index')
            ->with(compact('surats'))
            ->with(compact('surat_masuks'));
    }

    public function detailkeluar($id) {
        $surat = suratKeluar::find($id);
        $disposisis = disposisi::latest()->where('suratKeluar_id', $id)->first();
        $disposisis_all = disposisi::where('suratKeluar_id', $id)->get();
        $pengantars = pengantar::where('suratKeluar_id', $id)->get();
        return view('lurah.suratMasukKeluar.detailKeluar')
            ->with(compact('surat'))
            ->with(compact('disposisis'))
            ->with(compact('disposisis_all'))
            ->with(compact('pengantars'));
    }

    public function detailMasuk($id) {
        $surat = suratMasuk::where('id', $id)->first();
        $disposisis = disposisiMasuk::latest()->where('suratMasuk_id', $id)->first();
        $disposisis_all = disposisiMasuk::where('suratMasuk_id', $id)->get();
        return view('lurah.suratMasukKeluar.detailMasuk')
            ->with(compact('surat'))
            ->with(compact('disposisis'))
            ->with(compact('disposisis_all'));
    }

    public function detailFile($id){
        $file = asset('temp_file/surat-masuk/'.$id);
        return view('lurah.suratMasukKeluar.openFile', compact('file'));
    }

    public function detailFilePengantar($id){
        $file = asset('temp_file/pengantar/'.$id);
        return view('lurah.suratMasukKeluar.openFile', compact('file'));
    }

    public function kosong() {
        return view('lurah.suratMasukKeluar.kosong');
    }

    public function ttd($id)
    {
        $surat = suratKeluar::find($id);
        
        if(!isset(Auth::user() -> ttd -> id)){
            return back()->with('failed', 'Lurah ini belum memiliki tanda tangan! Silahkan ke admin untuk mendaftarkan tanda tangan anda!');
        } else {
            $surat->ttd_id = Auth::user() -> ttd -> id;
            if(!isset($surat->user->role->id)){
                $surat->pj_id = null;
                $notifikasi = notifikasi::where('suratKeluar_id', $id)->first();
            } else {
                $surat->pj_id = $surat -> user_id;
                $notifikasi = new notifikasi();
            }
        $surat->process = "3";
        $surat->acc_id = Auth::user()->id;
        $surat->tgl_ttd = Carbon::now();
        $surat->save();

        $arsip = new arsipKeluar();
        $arsip->status = 1;
        $arsip->keterangan_status = "Surat Yang Anda Sediakan Sudah Lengkap.";
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
        $notifikasi->status = "Selesai";
        $notifikasi->keterangan = "Surat Anda Telah Disetujui Oleh Pihak Kalabbirang!";
        $notifikasi->save();

        return redirect()->route('surat-masuk-lurah')->with('success', 'Surat Berhasil Di Tandatangani Dan Sudah Terarsip.');
        }
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

        if($surat -> isAntar == 1){
            $antar = new antarMasuk();
            $antar->surat_id = $id;
            $antar->tgl_pengajuan = Carbon::now();
            $antar->status = "Belum Terkirim";
            $antar->save();
        }

        $notifikasi = notifikasiMasuk::where('suratMasuk_id', $id)->first();
        $notifikasi->status = "Disetujui";
        $notifikasi->keterangan = "Surat Anda Telah Disetujui Oleh Pihak Kalabbirang!";
        $notifikasi->save();

        return redirect()->route('surat-masuk-lurah')->with('success', 'Surat Berhasil Diarsipkan.');
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

        return redirect()->route('surat-masuk-lurah')->with('success', 'Surat Berhasil Ditolak Dan Sudah Terarsip.');
    }

    public function tolakSuratKeluar(Request $request, $id) {
        $surat = suratKeluar::find($id);
        $surat->pj_id = null;
        $surat->acc_id = Auth::user()->id;
        $surat->save();

        if(!isset($surat->user->role->id)){
            $notifikasi = notifikasi::where('suratKeluar_id', $id)->first();
        } else {
            $notifikasi = new notifikasi();
        }

        $notifikasi->status = "Ditolak";
        $notifikasi->keterangan = "Surat Anda Ditolak. Silahkan Mengajukan Kembali Atau Datang Ke Kantor Kelurahan.";
        $notifikasi->save();

        $arsip = new arsipKeluar();
        $arsip->status = 0;
        $arsip->keterangan_status = $request->alasan_tolak;
        $arsip->suratKeluar_id = $id;
        $arsip->save();

        return redirect()->route('surat-masuk-lurah')->with('success', 'Surat Berhasil Ditolak Dan Sudah Terarsip.');
    }

    
    public function disposisiKeluarProses(Request $request, $id) {
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

        return redirect()->route('surat-masuk-lurah')->with('success', 'Surat Berhasil Di Disposisi.');
    }

    public function disposisiMasukProses(Request $request, $id) {
        $surats = suratMasuk::find($id);
        $surats->tujuan_surat_id = $request->penerima;
        $surats->process = "2";
        $surats->save();

        $disposisi = new disposisiMasuk();
        $disposisi->suratMasuk_id = $id;
        $disposisi->userk_id = Auth::user()->id;
        $disposisi->usert_id = $request->penerima;
        $disposisi->tgl_disposisi = $request->tgl_disposisi;
        $disposisi->catatan = $request->catatan;
        $disposisi->instruksi = $request->instruksi;
        $disposisi->save();

        return redirect()->route('surat-masuk-lurah')->with('success', 'Surat Berhasil Di Disposisi.');
    }
}
