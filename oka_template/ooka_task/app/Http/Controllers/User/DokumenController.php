<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pengantar;
use Auth;
use DB;

class DokumenController extends Controller
{
    public function index() {
        $pengantars = pengantar::with('suratKeluar')->where('user_id', '=', Auth::user()->id)->get();
        return view('user.dokumen.index')->with(compact('pengantars'));
    }

    public function showFile($id)
    {
        $file = asset('temp_file/pengantar/'.$id);
        return view('user.dokumen.detail', compact('file'));
    }
}
