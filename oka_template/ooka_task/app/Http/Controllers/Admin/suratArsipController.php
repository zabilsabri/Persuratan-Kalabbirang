<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.suratArsip.index')
            ->with(compact('jumlah_arsip_keluar'))
            ->with(compact('jumlah_arsip_masuk'))
            ->with(compact('arsipMasuks'))
            ->with(compact('arsipKeluars'));
    }

    public function detailKeluar($id) {
        $detailArsips = arsipKeluar::where('id', $id)->first();
        return view('admin.suratArsip.detailKeluar')
            ->with(compact('detailArsips'));
    }

    public function detailMasuk($id) {
        $detailArsips = arsipMasuk::where('id', $id)->first();
        return view('admin.suratArsip.detailMasuk')
            ->with(compact('detailArsips'));
    }
}
