<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\suratKeluar;
use Auth;
use PDF;

class ArsipSuratController extends Controller
{
    public function index() {
        $arsips = suratKeluar::where('pj_id', Auth::user()->id)->get();
        return view('user.arsipSurat.index')
            ->with(compact('arsips'));
    }

    public function showFileArsip($kode_surat)
    {
        $file = asset('temp_file/surat-keluar/'.$kode_surat.'.'.'pdf');
        return view('user.dokumen.detail', compact('file'));
    }
}
