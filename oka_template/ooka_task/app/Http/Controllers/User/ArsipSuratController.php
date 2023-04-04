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

    public function kosong() {
        return view('user.arsipSurat.kosong');
    }
}
