<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\arsipKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class arsipKeluarController extends Controller
{
    public function index()
    {
        $arsip = arsipKeluar::all();
        return response()->json([
            'Title'     => 'Data Arsip Keluar',
            'Data'      => $arsip
        ]);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'suratKeluar_id'             => 'required',
            'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaArsip = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/arsipKeluar/'), $namaArsip);
        }

        $data['file_surat'] = $namaArsip;
        $store = arsipKeluar::create($data);

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
        $arsipKeluar =  arsipKeluar::find($request->id);

        $validate = Validator::make($request->all(), [
            'suratKeluar_id'             => 'required',
            'file_surat'                => 'required|mimes:pdf,docx',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $data = $request->all();

        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $namaArsip = $file->getClientOriginalName();
            $request->file_surat->move(public_path('file/arsipKeluar/'), $namaArsip);
        }

        $data['file_surat'] = $namaArsip;
        $arsipKeluar->update($data);

        if ($arsipKeluar) {
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
        $arsipKeluar = arsipKeluar::find($request->id);
        $arsipKeluar->delete();
        return response()->json([
            'status'    => 'Sukses Hapus Data'
        ]);
    }
}
