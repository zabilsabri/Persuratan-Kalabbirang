<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\suratKeluar;
use App\Models\pengantar;
use App\Models\User;
use App\Models\disposisi;
use Auth;

class suratKeluarController extends Controller
{
    public function detail($id) {
        $surats = suratKeluar::with('jenisSurat', 'user', 'pj')->where('id', $id)->get();
        $pengantars = pengantar::where('suratKeluar_id', $id)->get();
        return view('admin.suratKeluar.detail')
            ->with(compact('surats'))
            ->with(compact('pengantars'));
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
        $surats->catatan = $request->catatan;
        $surats->instruksi = $request->instruksi;
        $surats->pj_id = $request->penerima;
        $surats->process = "2";
        $surats->save();

        $disposisi = new disposisi();
        $disposisi->suratKeluar_id = $id;
        $disposisi->userk_id = Auth::user()->id;
        $disposisi->usert_id = $request->penerima;
        $disposisi->tgl_disposisi = $request->tgl_disposisi;
        $disposisi->save();

        return redirect()->route('surat-keluar-admin');
    }
    public function input() {
        return view('admin.suratKeluar.input');
    }
    public function index() {
        $surats = suratKeluar::with('jenisSurat', 'user')->where('pj_id', Auth::user()->id)->get();
        return view('admin.suratKeluar.index')->with(compact('surats'));
    }
    public function detailFile($id){
        $file = asset('temp_file/pengantar/'.$id);
        return view('admin.suratKeluar.openFile', compact('file'));
    }
    public function tolakSurat(Request $request, $id) {
        $surat = suratKeluar::find($id);
        $surat->pj_id = $surat->user_id;
        $surat->alasan_tolak = $request->alasan_tolak;
        $surat->save();

        return redirect()->route('surat-keluar-admin');
    }
}
