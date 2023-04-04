<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\notifikasi;
use Auth;

class NotifikasiController extends Controller
{
    public function index() {
      $notifs = notifikasi::where('user_id', Auth::user()->id)->get();
      return view('user.notifikasi.index')
        ->with(compact('notifs'));
    }
}
