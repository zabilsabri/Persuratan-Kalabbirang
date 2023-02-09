<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dataLurahKasiController extends Controller
{
    public function index() {
        return view('admin.dataLurahKasi.index');
    }

    public function detail() {
        return view('admin.dataLurahKasi.detail');
    }

    public function edit() {
        return view('admin.dataLurahKasi.edit');
    }
}
