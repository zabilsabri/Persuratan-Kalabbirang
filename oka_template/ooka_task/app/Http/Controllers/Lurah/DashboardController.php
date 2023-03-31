<?php

namespace App\Http\Controllers\Lurah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;
use App\Models\suratKeluar;
use App\Models\suratMasuk;
use Auth;

class DashboardController extends Controller
{
    public function index() {
        $jumlah_surat_keluar = suratKeluar::count();
        $jumlah_surat_masuk = suratMasuk::count();
        $users_notVerif = User::where('verif_user', 0)->count();
        $users_verif = User::where('verif_user', 1)->count();
        $users = User::where('role_id', 6)->latest()->limit(3)->get();
        $users_all = User::where('role_id', 6)->count();
        $beritas = Berita::limit(3)->get();
        return view('lurah.dashboard.index')
            ->with(compact('beritas'))
            ->with(compact('users'))
            ->with(compact('users_notVerif'))
            ->with(compact('users_verif'))
            ->with(compact('jumlah_surat_keluar'))
            ->with(compact('jumlah_surat_masuk'))
            ->with(compact('users_all'));
    }

    public function logout()
    {
        Auth::Logout();
        return redirect()->route('beranda');
    }
}
