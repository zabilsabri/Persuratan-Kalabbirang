<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\suratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class suratMasukController extends Controller
{
    public function index()
    {


        return response()->json([
            'status'    => 'Surat Masuk',
            'data'      => suratMasuk::all()
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);

        $validate = Validator::make($request->all(), [
            'asal_surat'                => 'required',
            'no_surat'                  => 'required',
            'tujuan_surat'              => 'required',
            'status'                    => 'required',
            'file_surat'                => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        // dd($request);
        $store = suratMasuk::create($request->all());
        if ($store)
        return response()->json([
            'status' => 'Sukses Tambah Surat Masuk'
        ]);

        return response()->json([
            'status' => 'Gagal Tambah Surat Masuk'
        ]);
    }

    public function edit ($id
    ) {

        return response()->json([
            'status' => 'Data edit',
            'data'   => suratMasuk::find($id)
        ]);
    }

    public function update (Request $request, $id) {
        
        // dd($id);
        $suratMasuk =  suratMasuk::find($id);

        $validate = Validator::make($request->all(), [
            'asal_surat'                => 'required',
            'no_surat'                  => 'required',
            'tujuan_surat'              => 'required',
            'status'                    => 'required',
            'file_surat'                => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }
        

        $data = $request->all();
        $suratMasuk->asal_surat = $data['asal_surat'];
        $suratMasuk->no_surat = $data['no_surat'];
        $suratMasuk->tujuan_surat = $data['tujuan_surat'];
        $suratMasuk->status = $data['status'];
        $suratMasuk->file_surat = $data['file_surat'];
        $suratMasuk->save();
        // $suratMasuk->update($data);

        return response()->json([
            'status' => 'Sukses Edit',
            
        ]);

    }

    public function destroy ($id) {

        $suratMasuk = suratMasuk::find($id);
        $suratMasuk->delete();

        return response()->json([
            'status'    => 'Sukses Hapus Data'
        ]);
    }

}
