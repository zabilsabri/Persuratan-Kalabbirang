@extends('admin.layouts.app', ['title' => 'Edit Surat Masuk'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Edit Surat Masuk </h1>
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

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Sifat Surat</h4>
                    <div class="ms-2">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Rahasia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                                Penting
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3">
                                Biasa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck4">
                            <label class="form-check-label" for="defaultCheck4">
                                Segera
                            </label>
                        </div>
                    </div>

                </div>



            </div>

            <div class="col-sm-6">
                <h4 class="surat-kategori col-form-label col-sm-4">Catatan</h4>
                <div class="row form-group">
                    <div class="col-sm-10 ms-0 ms-md-3">
                        <textarea class="form-control" style="height: 150px"></textarea>
                    </div>
                </div>
                <h4 class="surat-kategori col-form-label col-sm-4">Upload File</h4>
                <div class="row form-group">
                    <div class="col-sm-10 ms-0 ms-md-4">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Pilih File</label>
                    </div>
                </div>

                <button class="btn btn-success btn-lg d-block fs-5 fw-bold mx-auto" style="padding: 10px 100px; margin-top: 120px;">
                    SELESAI
                </button>


            </div>
        </div>

    </div>
@endsection
