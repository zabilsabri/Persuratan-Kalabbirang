<?php

namespace App\Http\Controllers\kasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratArsipController extends Controller
{
    public function index() {
        return view('kasi.suratArsip.index');
    }

    public function detail() {
        return view('kasi.suratArsip.detail');
    }
}
