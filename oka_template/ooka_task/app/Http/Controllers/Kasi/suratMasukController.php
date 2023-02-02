<?php

namespace App\Http\Controllers\kasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratMasukController extends Controller
{
    public function index() {
        return view('kasi.suratMasuk.index');
    }

    public function detail() {
        return view('kasi.suratMasuk.detail');
    }

    public function kosong() {
        return view('kasi.suratMasuk.kosong');
    }
}
