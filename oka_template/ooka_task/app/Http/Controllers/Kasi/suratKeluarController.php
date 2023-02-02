<?php

namespace App\Http\Controllers\kasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratKeluarController extends Controller
{
    public function index() {
        return view('kasi.suratKeluar.index');
    }

    public function detail() {
        return view('kasi.suratKeluar.detail');
    }

    public function kosong() {
        return view('kasi.suratKeluar.kosong');
    }
}
