@extends('admin.layouts.app', ['title' => 'Input Surat Keluar'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Input Surat Keluar </h1>
    </div>
    <div class="hal-body">
        <div class="row">
            <div class="col-sm-6">

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Nomor Surat</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Tanggal Surat</h4>
                    <div class="col-sm-9">
                        <input type="date" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Perihal</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Pengirim</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Bidang Pengirim</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Kepada</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Jenis Surat</h4>
                    <div class="col-sm-9">
                        <select class="form-control" id="floatingInput">
                            <option>Pilih Jenis Surat</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <h4 class="surat-kategori col-form-label col-sm-4">Upload File</h4>
                <div class="row form-group">
                    <div class="col-sm-10 ms-0 ms-md-4">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Pilih File</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4" style="align-items: flex-end">
            <div class="col-sm-6 mb-3">
                <label for="exampleFormControlTextarea1" class="surat-kategori col-form-label ">Catatan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 150px"></textarea>
            </div>
            <div class="col-sm-6 mb-3 text-center">
                <button class="btn btn-success btn-lg d-block fs-5 fw-bold mx-auto" style="padding: 10px 100px; margin-top: 120px;">
                    SELESAI
                </button>
            </div>
        </div>
    </div>
@endsection
