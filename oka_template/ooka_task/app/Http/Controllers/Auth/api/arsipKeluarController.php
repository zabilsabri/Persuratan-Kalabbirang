<?php

namespace App\Http\Controllers\Auth\api;

use App\Http\Controllers\Controller;
use App\Models\arsipKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArsipKeluarController extends Controller
{   
    // GET DATA
    /**
     * @OA\Get(
     *     path="/api/ArsipKeluar",
     *     tags={"ArsipKeluar"},
     *     summary="Get all Data arsipKeluar",
     *     description="Untuk menambah data arsip harus ada data surat keluar",
     *     operationId="index.arsipKeluar",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/

    public function index()
    {
        $arsip = arsipKeluar::all();
        return response()->json([
            'Title'     => 'Data Arsip Keluar',
            'Data'      => $arsip
        ]);
    }


    // POST DATA
    /**
     * @OA\Post(
     *     path="/api/ArsipKeluar/store",
     *     tags={"ArsipKeluar"},
     *     summary="Store Data arsipKeluar",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="store",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="name field : suratKeluar_id, file_surat(file) ",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="",
     *             
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     * @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="suratKeluar_id", type="string", example="1"),
     *              @OA\Property(property="file_surat", type="string", example="file.pdf,docx"),
     *          )
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/
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

    /** @OA\Get(
        *     path="/api/ArsipKeluar/",
        *     tags={"ArsipKeluar"},
        *     summary="Get 1 Data arsipKeluar",
        *     description="tambah /id",
        *     operationId="edit.arsipKeluar",
        *     @OA\Parameter(
        *         name="id",
        *         in="query",
        *         description="",
        *         required=true,
        *         explode=true,
        *         @OA\Schema(
        *             default="id",
        *         )
        *     ),
        *     @OA\Response(
        *         response=200,
        *         description="successful operation",
        
        *        
        *     ),
        *     @OA\Response(
        *         response=400,
        *         description="Invalid status value"
        *     ),
        * )
        **/

    public function edit($id)
    {
        $arsip = arsipKeluar::find($id);
        return response()->json([
            'Title'     => 'Data Arsip Keluar',
            'Data'      => $arsip
        ]);
    }

      // PUT DATA
    /**
     * @OA\Put(
     *     path="/api/ArsipKeluar/update",
     *     tags={"ArsipKeluar"},
     *     summary="Update Data arsipKeluar",
     *     description="Kirim id lewat form",
     *     operationId="put",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="name field : id, suratKeluar_id, file_surat(file)",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="",
     *             
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="suratKeluar_id", type="string", example="1"),
     *              @OA\Property(property="file_surat", type="string", example="file.pdf,docx"),
     *          )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/
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

    // DELETE DATA
    /**
     * @OA\Delete(
     *     path="/api/ArsipKeluar/destroy",
     *     tags={"ArsipKeluar"},
     *     summary="Hapus Data arsipKeluar",
     *     description="tambah /id",
     *     operationId="delete",
     *     @OA\Parameter(
     *         name="id",
     *         in="query",
     *         description="",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="id",
     *             
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     **/
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
