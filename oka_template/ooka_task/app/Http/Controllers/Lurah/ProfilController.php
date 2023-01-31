<?php
namespace App\Http\Controllers\Lurah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
        return view('lurah.profil.index');
    }
    public function edit() {
        return view('lurah.profil.edit');
    }
}
