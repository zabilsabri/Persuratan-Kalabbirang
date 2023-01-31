<?php

namespace App\Http\Controllers\Lurah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratKeluarController extends Controller
{
    public function index() {
        return view('lurah.suratKeluar.index');
    }

    public function detail() {
        return view('lurah.suratKeluar.detail');
    }

    public function kosong() {
        return view('lurah.suratKeluar.kosong');
    }
}
