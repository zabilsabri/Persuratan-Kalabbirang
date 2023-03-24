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
        $suratKeluar->user_id = Auth::user()->id;
        $suratKeluar->no_surat = "1";
        $suratKeluar->kode_surat = "1";
        $suratKeluar->process = "1";
        $suratKeluar->tgl_surat = Carbon::now();
        $suratKeluar->pj_id = "1";
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
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_imamLingkungan, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_imamLingkungan->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_ktp, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_ktp->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_kk, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_kk->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_pbb, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_pbb->getClientOriginalName()],
        ];

        pengantar::insert($data);
        
        return redirect()->route('selesai-pengajuan');
    }

    public function surat13 () {
        return view('user.surat.suratBelumMenikah');
    }

    public function store3(Request $request)
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
            'bidang_usaha' => 'required',
            'bentuk_usaha' => 'required',
            'alamat_usaha' => 'required',
            'durasi_usaha' => 'required',
            'peng_kepLingkungan' => 'required',
            'peng_ktp' => 'required',
            'peng_sppt' => 'required',
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
        $suratKeluar->jenis_suratKeluar_id = "3";
        $suratKeluar->user_id = Auth::user()->id;
        $suratKeluar->no_surat = "1";
        $suratKeluar->kode_surat = "1";
        $suratKeluar->process = "1";
        $suratKeluar->tgl_surat = Carbon::now();
        $suratKeluar->pj_id = "1";
        $suratKeluar->status = "Segera";

        $suratKeluar->bidang_usaha = $request->bidang_usaha;
        $suratKeluar->bentuk_usaha = $request->bentuk_usaha;
        $suratKeluar->alamat_usaha = $request->alamat_usaha;
        $suratKeluar->durasi_usaha = $request->durasi_usaha;

        $suratKeluar->save();
        
        $suratKeluar_id = $suratKeluar->id;

        $peng_kepLingkungan = time(). '1' . '.' . $request->peng_kepLingkungan->extension();
        $peng_ktp = time(). '2' . '.' . $request->peng_ktp->extension();
        $peng_sppt = time(). '3' . '.' . $request->peng_sppt->extension();
        $peng_kk = time(). '4' . '.' . $request->peng_kk->extension();
        $peng_pbb = time(). '5' . '.' . $request->peng_pbb->extension();

        $request->peng_kepLingkungan->move(public_path('temp_file/pengantar/'), $peng_kepLingkungan);
        $request->peng_ktp->move(public_path('temp_file/pengantar/'), $peng_ktp);
        $request->peng_sppt->move(public_path('temp_file/pengantar/'), $peng_sppt);
        $request->peng_kk->move(public_path('temp_file/pengantar/'), $peng_kk);
        $request->peng_pbb->move(public_path('temp_file/pengantar/'), $peng_pbb);

        $data = [
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_kepLingkungan, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_kepLingkungan->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_ktp, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_ktp->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_sppt, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_sppt->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_kk, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_kk->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_pbb, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_pbb->getClientOriginalName()],
        ];

        pengantar::insert($data);

        return redirect()->route('selesai-pengajuan');
    }

    public function surat3(){
        return view('user.surat.suratKeteranganUsaha');
    }

    public function store11(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jkl' => 'required',
            'nik' => 'required|numeric',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'status_nikah' => 'required',
            'alamat' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'kewarganegaraan_ayah' => 'required',
            'nik_ayah' => 'required|numeric',
            'alamat_ayah' => 'required',
            'agama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'kewarganegaraan_ibu' => 'required',
            'nik_ibu' => 'required|numeric',
            'alamat_ibu' => 'required',
            'agama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'peng_imamLingkungan' => 'required',
            'peng_imamKelurahan' => 'required',
            'peng_lunasPBB' => 'required',
            'peng_ktpOrangTua' => 'required',
            'peng_kkOrangTua' => 'required',
            'peng_ktpCalon' => 'required'
        ]);

        $user = User::find(Auth::user()->id);
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->status_nikah = $request->status_nikah;
        $user->jkl = $request->jkl;
        $user->pekerjaan = $request->pekerjaan;
        $user->alamat = $request->alamat;
        $user->kewarganegaraan = $request->kewarganegaraan;
        $user->save();

        $suratKeluar = new suratKeluar();
        $suratKeluar->jenis_suratKeluar_id = "2";
        $suratKeluar->user_id = Auth::user()->id;
        $suratKeluar->no_surat = "1";
        $suratKeluar->kode_surat = "1";
        $suratKeluar->process = "1";
        $suratKeluar->tgl_surat = Carbon::now();
        $suratKeluar->pj_id = "1";
        $suratKeluar->status = "Segera";
        
        $suratKeluar->nama_istri_suami_terdahulu = $request->nama_istri_suami_dulu;
        $suratKeluar->nama_ayah = $request->nama_ayah;
        $suratKeluar->tempat_lahir_ayah = $request->tempat_lahir_ayah;
        $suratKeluar->tanggal_lahir_ayah = $request->tanggal_lahir_ayah;
        $suratKeluar->kewarganegaraan_ayah = $request->kewarganegaraan_ayah;
        $suratKeluar->nik_ayah = $request->nik_ayah;
        $suratKeluar->alamat_ayah = $request->alamat_ayah;
        $suratKeluar->agama_ayah = $request->agama_ayah;
        $suratKeluar->pekerjaan_ayah = $request->pekerjaan_ayah;

        $suratKeluar->nama_ibu = $request->nama_ibu;
        $suratKeluar->tempat_lahir_ibu = $request->tempat_lahir_ibu;
        $suratKeluar->tanggal_lahir_ibu = $request->tanggal_lahir_ibu;
        $suratKeluar->kewarganegaraan_ibu = $request->kewarganegaraan_ibu;
        $suratKeluar->nik_ibu = $request->nik_ibu;
        $suratKeluar->alamat_ibu = $request->alamat_ibu;
        $suratKeluar->agama_ibu = $request->agama_ibu;
        $suratKeluar->pekerjaan_ibu = $request->pekerjaan_ibu;

        $suratKeluar->save();
        
        $suratKeluar_id = $suratKeluar->id;

        $peng_imamLingkungan = time(). '1' . '.' . $request->peng_imamLingkungan->extension();
        $peng_imamKelurahan = time(). '2' . '.' . $request->peng_imamKelurahan->extension();
        $peng_lunasPBB = time(). '3' . '.' . $request->peng_lunasPBB->extension();
        $peng_ktpOrangTua = time(). '4' . '.' . $request->peng_ktpOrangTua->extension();
        $peng_kkOrangTua = time(). '5' . '.' . $request->peng_kkOrangTua->extension();
        $peng_ktpCalon = time(). '6' . '.' . $request->peng_ktpCalon->extension();

        if($request->peng_pengadilanAgama != null){
            $peng_pengadilanAgama = time(). '8' . '.' . $request->peng_pengadilanAgama->extension();
            $request->peng_pengadilanAgama->move(public_path('temp_file/pengantar/'), $peng_pengadilanAgama);
            $data = [
                ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_pengadilanAgama, 'nama_file_surat' => $request->peng_pengadilanAgama->getClientOriginalName()]
            ];
        }
        else if ($request->peng_belumMenikah != null){
            $peng_belumMenikah = time(). '7' . '.' . $request->peng_belumMenikah->extension();
            $request->peng_belumMenikah->move(public_path('temp_file/pengantar/'), $peng_belumMenikah);
            $data = [
                ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_belumMenikah, 'nama_file_surat' => $request->peng_belumMenikah->getClientOriginalName()]
            ];
        }

        $request->peng_imamLingkungan->move(public_path('temp_file/pengantar/'), $peng_imamLingkungan);
        $request->peng_imamKelurahan->move(public_path('temp_file/pengantar/'), $peng_imamKelurahan);
        $request->peng_lunasPBB->move(public_path('temp_file/pengantar/'), $peng_lunasPBB);
        $request->peng_ktpOrangTua->move(public_path('temp_file/pengantar/'), $peng_ktpOrangTua);
        $request->peng_kkOrangTua->move(public_path('temp_file/pengantar/'), $peng_kkOrangTua);
        $request->peng_ktpCalon->move(public_path('temp_file/pengantar/'), $peng_ktpCalon);

        $data = [
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_imamLingkungan, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_imamLingkungan->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_imamKelurahan, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_imamKelurahan->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_lunasPBB, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_lunasPBB->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_ktpOrangTua, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_ktpOrangTua->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_kkOrangTua, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_kkOrangTua->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_ktpCalon, 'user_id' => Auth::user()->id,'nama_file_surat' => $request->peng_ktpCalon->getClientOriginalName()],
        ];

        pengantar::insert($data);

        return redirect()->route('selesai-pengajuan');
    }
    
    public function surat11(){
        return view('user.surat.suratKeteranganMenikah');
    }

    public function store12(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jkl' => 'required',
            'nik' => 'required|numeric',
            'pekerjaan' => 'required',
            'jumlah_tanggungan' => 'required',
            'jumlah_penghasilan' => 'required',
            'alamat' => 'required',
            'nama_anak' => 'required',
            'tempat_lahir_anak' => 'required',
            'tanggal_lahir_anak' => 'required',
            'durasi_usaha' => 'required',
            'pekerjaan_anak' => 'required',
            'sekolah_anak' => 'required',
            'nis_kelas_anak' => 'required',
            'alamat_anak' => 'required',
            'peng_kepLingkungan' => 'required',
            'peng_ktp' => 'required',
            'peng_kk' => 'required',
            'peng_sppt' => 'required'
        ]);

        $user = User::find(Auth::user()->id);
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->status_nikah = $request->status_nikah;
        $user->jkl = $request->jkl;
        $user->pekerjaan = $request->pekerjaan;
        $user->alamat = $request->alamat;
        $user->save();

        $suratKeluar = new suratKeluar();
        $suratKeluar->jenis_suratKeluar_id = "2";
        $suratKeluar->user_id = Auth::user()->id;
        $suratKeluar->no_surat = "1";
        $suratKeluar->kode_surat = "1";
        $suratKeluar->process = "1";
        $suratKeluar->tgl_surat = Carbon::now();
        $suratKeluar->pj_id = "1";
        $suratKeluar->status = "Segera";
        
        $suratKeluar->jml_tanggungan = $request->jml_tanggungan;
        $suratKeluar->jml_penghasilan = $request->jumlah_penghasilan;

        $suratKeluar->nama_anak = $request->nama_anak;
        $suratKeluar->tempat_lahir_anak = $request->tempat_lahir_anak;
        $suratKeluar->tanggal_lahir_anak = $request->tanggal_lahir_anak;
        $suratKeluar->pekerjaan_anak = $request->pekerjaan_anak;
        $suratKeluar->nama_SekolahAnak = $request->sekolah_anak;
        $suratKeluar->nis_kelas_anak = $request->nis_kelas_anak;
        $suratKeluar->alamat_anak = $request->alamat_anak;

        $suratKeluar->save();
        
        $suratKeluar_id = $suratKeluar->id;

        $peng_kepLingkungan = time(). '1' . '.' . $request->peng_kepLingkungan->extension();
        $peng_ktp = time(). '2' . '.' . $request->peng_ktp->extension();
        $peng_sppt = time(). '3' . '.' . $request->peng_sppt->extension();
        $peng_kk = time(). '4' . '.' . $request->peng_kk->extension();

        $request->peng_kepLingkungan->move(public_path('temp_file/pengantar/'), $peng_kepLingkungan);
        $request->peng_ktp->move(public_path('temp_file/pengantar/'), $peng_ktp);
        $request->peng_sppt->move(public_path('temp_file/pengantar/'), $peng_sppt);
        $request->peng_kk->move(public_path('temp_file/pengantar/'), $peng_kk);

        $data = [
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_kepLingkungan, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_kepLingkungan->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_ktp, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_ktp->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_sppt, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_sppt->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_kk, 'user_id' => Auth::user()->id, 'nama_file_surat' => $request->peng_kk->getClientOriginalName()],
        ];

        pengantar::insert($data);

        return redirect()->route('selesai-pengajuan');
    }

    public function surat12(){
        return view('user.surat.surattidakMampu');
    }
}
