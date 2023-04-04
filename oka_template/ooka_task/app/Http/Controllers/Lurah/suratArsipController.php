<?php

namespace App\Http\Controllers\Lurah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\arsipMasuk;
use App\Models\arsipKeluar;

class suratArsipController extends Controller
{
    public function index() {
        $jumlah_arsip_masuk = arsipMasuk::count();
        $jumlah_arsip_keluar = arsipKeluar::count();
        $arsipMasuks = arsipMasuk::get();
        $arsipKeluars = arsipKeluar::get();
        return view('lurah.suratArsip.index')
            ->with(compact('jumlah_arsip_keluar'))
            ->with(compact('jumlah_arsip_masuk'))
            ->with(compact('arsipMasuks'))
            ->with(compact('arsipKeluars'));
    }

    public function detailKeluar($id) {
        $detailArsips = arsipKeluar::where('id', $id)->first();
        return view('lurah.suratArsip.detailKeluar')
            ->with(compact('detailArsips'));
    }

    public function detailMasuk($id) {
        $detailArsips = arsipMasuk::where('id', $id)->first();
        return view('lurah.suratArsip.detailMasuk')
            ->with(compact('detailArsips'));
    }
}
