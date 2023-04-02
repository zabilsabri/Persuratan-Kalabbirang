<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratAntarController extends Controller
{
    public function index() {
        return view('admin.suratAntar.index');
    }

    public function detail() {
        return view('admin.suratAntar.detail');
    }
}
