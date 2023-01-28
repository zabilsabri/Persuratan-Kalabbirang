<?php

namespace App\Http\Controllers\Lurah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratArsipController extends Controller
{
    public function index() {
        return view('lurah.suratArsip.index');
    }

    public function detail() {
        return view('lurah.suratArsip.detail');
    }
}
