<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\suratKeluar;
use App\Models\pengantar;
use App\Models\User;
use App\Models\disposisi;
use Auth;
use PDF;

class suratKeluarController extends Controller
{
    public function detail($id) {
        $surats = suratKeluar::with('jenisSurat', 'user', 'pj')->where('id', $id)->get();
        $pengantars = pengantar::where('suratKeluar_id', $id)->get();
        return view('admin.suratKeluar.detail')
            ->with(compact('surats'))
            ->with(compact('pengantars'));
    }
    public function disposisi($id) {
        $surats = suratKeluar::with('jenisSurat', 'user', 'pj')->where('id', $id)->get();
        $pengantars = pengantar::where('suratKeluar_id', $id)->get();
        return view('admin.suratKeluar.disposisi')
            ->with(compact('surats'))
            ->with(compact('pengantars'));
    }
    public function disposisiProses(Request $request, $id) {
        $surats = suratKeluar::find($id);
        $surats->pj_id = $request->penerima;
        $surats->process = "2";
        $surats->save();

        $disposisi = new disposisi();
        $disposisi->suratKeluar_id = $id;
        $disposisi->userk_id = Auth::user()->id;
        $disposisi->usert_id = $request->penerima;
        $disposisi->tgl_disposisi = $request->tgl_disposisi;
        $disposisi->catatan = $request->catatan;
        $disposisi->instruksi = $request->instruksi;
        $disposisi->save();

        $notifikasi = notifikasi::where('suratKeluar_id', $id);
        $notifikasi->status = "Dalam Proses";
        $notifikasi->keterangan = "Surat Anda Sedang Menunggu Tanda Tangan Dari Kasi/Lurah. Silahkan Menunggu Kembali!";
        $notifikasi->save();

        return redirect()->route('surat-keluar-admin');
    }

    public function suratKeteranganUsaha() {
        return view('admin.suratKeluar.Surat.suratKeteranganUsaha');
    }
    public function suratKeteranganMenikah() {
        return view('admin.suratKeluar.Surat.suratKeteranganMenikah');
    }
    public function suratTidakMampu() {
        return view('admin.suratKeluar.Surat.suratTidakMampu');
    }
    public function suratBelumMenikah() {
        return view('admin.suratKeluar.Surat.suratBelumMenikah');
    }

    public function index() {
        $surats = suratKeluar::with('jenisSurat', 'user')->where('pj_id', Auth::user()->id)->get();
        return view('admin.suratKeluar.index')->with(compact('surats'));
    }
    public function detailFile($id){
        $file = asset('temp_file/pengantar/'.$id);
        return view('admin.suratKeluar.openFile', compact('file'));
    }
    public function tolakSurat(Request $request, $id) {
        $surat = suratKeluar::find($id);
        $surat->pj_id = $surat->user_id;
        $surat->alasan_tolak = $request->alasan_tolak;
        $surat->save();

        $notifikasi = notifikasi::where('suratKeluar_id', $id);
        $notifikasi->status = "Ditolak";
        $notifikasi->keterangan = "Surat Anda Ditolak. Silahkan Mengajukan Kembali!";
        $notifikasi->save();

        return redirect()->route('surat-keluar-admin');
    }
    public function exportSurat($id)
    {
        $data = suratKeluar::where('id', $id)->first();

        if($data -> jenis_suratKeluar_id == 1){
            $pdf = Pdf::loadView('surat.isiSurat.belumNikah', compact('data'));
        } else if ($data -> jenis_suratKeluar_id == 2){
            $pdf = Pdf::loadView('surat.isiSurat.kurangMampu', compact('data'));
        } else if ($data -> jenis_suratKeluar_id == 3){
            $pdf = Pdf::loadView('surat.isiSurat.sku', compact('data'));
        } else if ($data -> jenis_suratKeluar_id == 4){
            $pdf = Pdf::loadView('surat.isiSurat.pengPernikahan', compact('data'));
        }
        
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('Surat Belum Menikah.pdf' , array("Attachment" => false));
        exit(0);
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

        $user = new User();
        $user->nama = $request->nama;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->status_nikah = $request->status_nikah;
        $user->jkl = $request->jkl;
        $user->agama = $request->agama;
        $user->pekerjaan = $request->pekerjaan;
        $user->alamat = $request->alamat;
        $user->role_id = null;
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
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_imamLingkungan, 'user_id' => null, 'nama_file_surat' => $request->peng_imamLingkungan->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_ktp, 'user_id' => null, 'nama_file_surat' => $request->peng_ktp->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_kk, 'user_id' => null, 'nama_file_surat' => $request->peng_kk->getClientOriginalName()],
            ['suratKeluar_id'=>$suratKeluar_id, 'file_surat'=> $peng_pbb, 'user_id' => null, 'nama_file_surat' => $request->peng_pbb->getClientOriginalName()],
        ];

        pengantar::insert($data);
    
        return redirect()->route('selesai-pengajuan');
    }


}
