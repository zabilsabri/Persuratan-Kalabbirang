<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratMasukController extends Controller
{
    public function index() {
        return view('admin.suratMasuk.index');
    }

    public function detail() {
        return view('admin.suratMasuk.detail');
    }
}
