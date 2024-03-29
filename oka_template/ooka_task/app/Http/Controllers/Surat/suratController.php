<?php

namespace App\Http\Controllers\Surat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\Models\suratKeluar;

class suratController extends Controller
{
    public function exportData($id)
    {
        switch($id){
            case 1:
                $pdf = Pdf::loadView('surat/isiSurat/domisili');
                break;
            case 2:
                $pdf = Pdf::loadView('surat/isiSurat/belumNikah');
                break;
            case 3:
                $pdf = Pdf::loadView('surat/isiSurat/sku');
                break;
            case 4:
                $pdf = Pdf::loadView('surat/isiSurat/kurangMampu');
                break;
            case 5:
                $pdf = Pdf::loadView('surat/isiSurat/ketKematian');
                break;
            case 6:
                $pdf = Pdf::loadView('surat/isiSurat/ketBedaNama');
                break;
            case 7:
                $pdf = Pdf::loadView('surat/isiSurat/ketJanda');
                break;
            case 8:
                $pdf = Pdf::loadView('surat/isiSurat/ketBaik');
                break;
            case 9:
                $pdf = Pdf::loadView('surat/isiSurat/pengPernikahan');
                break;
            case 10:
                $pdf = Pdf::loadView('surat/isiSurat/ahliWaris');
                break;
            case 11:
                $pdf = Pdf::loadView('surat/isiSurat/ketBerdomisili');
                break;
            case 12:
                $pdf = Pdf::loadView('surat/isiSurat/ketMiskin');
                break;
            case 13:
                $pdf = Pdf::loadView('surat/isiSurat/rekBBM');
                break;
            case 14:
                $pdf = Pdf::loadView('surat/isiSurat/ketMekarWilayah');
                break;
    

        }
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('test.pdf' , array("Attachment" => false));
        exit(0);
    }

    public function exportSurat($id)
    {
        $data = suratKeluar::where('id', $id)->first();

        if($data -> jenis_suratKeluar_id == 1){
            $pdf = Pdf::loadView('surat.isiSurat.belumNikah', compact('data'));
        } else if ($data -> jenis_suratKeluar_id == 2){
            $pdf = Pdf::loadView('surat.isiSurat.kurangMampu', compact('data'));
        } else if ($data -> jenis_suratKeluar_id == 3){
            $pdf = Pdf::loadView('surat.isiSurat.sku', compact('data'));
        } else if ($data -> jenis_suratKeluar_id == 4){
            $pdf = Pdf::loadView('surat.isiSurat.pengPernikahan', compact('data'));
        }
        
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('Surat-Kalabbirang.pdf' , array("Attachment" => false));
        exit(0);
    }
}
