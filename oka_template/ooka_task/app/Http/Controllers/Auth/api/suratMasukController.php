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
        $validate = Validator::make($request->all(), [
            'asal_surat'                => 'required',
            'no_surat'                  => 'required',
            'tujuan_surat'              => 'required',
            'status'                    => 'required',
            'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaSurat = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/suratMasuk/'), $namaSurat);
        }
        $data['file_surat'] = $namaSurat;
        $store = suratMasuk::create($data);

        if ($store) {
            return response()->json([
                'status' => 'Sukses Tambah Surat Masuk'
            ]);
        }

        return response()->json([
            'status' => 'Gagal Tambah Surat Masuk'
        ]);
    }

    public function edit($id) {

        return response()->json([
            'status' => 'Data edit',
            'data'   => suratMasuk::find($id)
        ]);
    }

    public function update(Request $request)
    {
        $suratMasuk =  suratMasuk::find($request->id);
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'asal_surat'                => 'required',
            'no_surat'                  => 'required',
            'tujuan_surat'              => 'required',
            'status'                    => 'required',
            'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaSurat = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/suratMasuk/'), $namaSurat);
            $data['file_surat'] = $namaSurat;
        } else {
            $suratMasuk->file_surat = $suratMasuk->file_surat;
        }

        $suratMasuk->update($data);

        return response()->json([
            'status' => 'Sukses Edit',

        ]);
    }

    public function destroy(Request $request)
    {

        $suratMasuk = suratMasuk::find($request->id);
        $suratMasuk->delete();

        return response()->json([
            'status'    => 'Sukses Hapus Data'
        ]);
    }
}
