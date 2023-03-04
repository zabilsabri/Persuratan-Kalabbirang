<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\arsipMasuk;
use Illuminate\Support\Facades\Validator;


class arsipMasukController extends Controller
{
    public function index()
    {
        $arsip = arsipMasuk::all();
        return response()->json([
            'Title'     => 'Data Arsip Masuk',
            'Data'      => $arsip
        ]);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'suratMasuk_id'             => 'required',
            'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaArsip = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/arsipMasuk/'), $namaArsip);
        }

        $data['file_surat'] = $namaArsip;
        $store = arsipMasuk::create($data);

        if ($store) {
            return response()->json([
                'status' => 'Sukses Tambah Data'
            ]);
        }

        return response()->json([
            'status' => 'Gagal Tambah Data'
        ]);
    }

    public function update(Request $request)
    {
        $arsipMasuk =  arsipMasuk::find($request->id);

        $validate = Validator::make($request->all(), [
            'suratMasuk_id'             => 'required',
            'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaArsip = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/arsipMasuk/'), $namaArsip);
        }

        $data['file_surat'] = $namaArsip;
        $arsipMasuk->update($data);

        if ($arsipMasuk) {
            return response()->json([
                'status' => 'Sukses Edit Data'
            ]);
        }

        return response()->json([
            'status' => 'Gagal Edit Data'
        ]);
    }

    public function destroy(Request $request)
    {
        // dd($request->id);
        $arsipMasuk = arsipMasuk::find($request->id);
        $arsipMasuk->delete();
        return response()->json([
            'status'    => 'Sukses Hapus Data'
        ]);
    }
}
