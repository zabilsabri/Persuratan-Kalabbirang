<?php

namespace App\Http\Controllers\Surat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

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

        }
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('test.pdf' , array("Attachment" => false));
        exit(0);
    }
}
