<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suratKeluarController extends Controller
{
    public function detail() {
        return view('admin.suratKeluar.detail');
    }
}
