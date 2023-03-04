<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\suratKeluar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class suratKeluarController extends Controller
{
    public function index() {
        $suratKeluar = suratKeluar::all();
        return response()->json([
            'title'     => 'Data Surat Keluar',
            'Data'      => $suratKeluar
        ]); 
    }

    public function store(Request $request) {

        // $validate = Validator::make($request->all(), [
        //     'asal_surat'                => 'required',
        //     'no_surat'                  => 'required',
        //     'tujuan_surat'              => 'required',
        //     'status'                    => 'required',
        //     'file_surat'                => 'required|mimes:pdf,docx',
        // ]);

        // if ($validate->fails()) {
        //     return response()->json($validate->errors());
        // }

        $data = $request->all();
        // dd($data);
        $data['tgl_surat'] = Carbon::now();

        suratKeluar::create($data);
        return response()->json([
            'status' => 'Sukses Tambah'
        ]);

    }

    public function update(Request $request) {
        
        $suratKeluar = suratKeluar::find($request->id);
        $data = $request->all();
        $data['tgl_surat'] = Carbon::now();
        $suratKeluar->update($data);

        return response()->json([
            'status'        => 'Sukses Update'
        ]);

    }

    public function destroy(Request $request) {
        $data = suratKeluar::find($request->id);
        $data->delete();
        return response()->json([
            'status'        => 'Sukses Hapus'
        ]);
    }
}
