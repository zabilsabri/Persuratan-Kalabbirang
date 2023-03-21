<?php

namespace App\Http\Controllers\Surat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pengantar;
use App\Models\suratKeluar;
use Carbon\Carbon;
use Auth;

class requestSuratController extends Controller
{
    public function pengajuanSuccess()
    {
        return view('user.surat.pengajuan-success');
    }

    public function store13(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jkl' => 'required',
            'nik' => 'required|numeric',
            'status_nikah' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'peng_imamLingkungan' => 'required',
            'peng_ktp' => 'required',
            'peng_kk' => 'required',
            'peng_pbb' => 'required'
        ]);

        $user = User::find(Auth::user()->id);
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->status_nikah = $request->status_nikah;
        $user->jkl = $request->jkl;
        $user->agama = $request->agama;
        $user->pekerjaan = $request->pekerjaan;
        $user->alamat = $request->alamat;
        $user->save();

        $suratKeluar = new suratKeluar();
        $suratKeluar->jenis_suratKeluar_id = "1";
        $suratKeluar->no_surat = "1";
        $suratKeluar->kode_surat = "1";
        $suratKeluar->tgl_surat = Carbon::now();
        $suratKeluar->pj = "Admin";
        $suratKeluar->status = "Segera";
        $suratKeluar->save();
        
        $suratKeluar_id = $suratKeluar->id;

        $peng_imamLingkungan = time(). '1' . '.' . $request->peng_imamLingkungan->extension();
        $peng_ktp = time(). '2' . '.' . $request->peng_ktp->extension();
        $peng_kk = time(). '3' . '.' . $request->peng_kk->extension();
        $peng_pbb = time(). '4' . '.' . $request->peng_pbb->extension();

        $request->peng_imamLingkungan->move(public_path('temp_file/pengantar/'), $peng_imamLingkungan);
        $request->peng_ktp->move(public_path('temp_file/pengantar/'), $peng_ktp);
        $request->peng_kk->move(public_path('temp_file/pengantar/'), $peng_kk);
        $request->peng_pbb->move(public_path('temp_file/pengantar/'), $peng_pbb);

        $data = [
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_imamLingkungan],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_ktp],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_kk],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_pbb],
        ];

        pengantar::insert($data);
        
        return redirect()->route('selesai-pengajuan');
    }

    public function surat13 () {
        return view('user.surat.suratBelumMenikah');
    }

    public function store3(Request $request)
    {
        //
        return redirect()->route('selesai-pengajuan');
    }

    public function surat3(){
        return view('user.surat.suratKeteranganUsaha');
    }
    public function surat11(){
        return view('user.surat.suratKeteranganMenikah');
    }
    public function surat12(){
        return view('user.surat.surattidakMampu');
    }
}
