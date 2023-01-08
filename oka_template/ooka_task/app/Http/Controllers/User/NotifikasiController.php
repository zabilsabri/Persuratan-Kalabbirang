<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index() {

      // untuk atur tampilan kosong tidak nya
      $data = array(
         'view'      => true,
         'has_klik'  => true
      );


      return view('user.notifikasi.index', $data);
    }
}
