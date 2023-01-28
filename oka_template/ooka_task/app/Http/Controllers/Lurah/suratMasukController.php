<?php

namespace App\Http\Controllers\Lurah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratMasukController extends Controller
{
    public function index() {
        return view('lurah.suratMasuk.index');
    }

    public function detail() {
        return view('lurah.suratMasuk.detail');
    }
}
