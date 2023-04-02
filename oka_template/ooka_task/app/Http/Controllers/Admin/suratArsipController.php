<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratArsipController extends Controller
{
    public function index() {
        return view('admin.suratArsip.index');
    }

    public function detail() {
        return view('admin.suratArsip.detail');
    }
}
