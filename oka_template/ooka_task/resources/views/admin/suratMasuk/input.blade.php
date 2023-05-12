@extends('admin.layouts.app', ['title' => 'Input Surat Masuk'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Input Surat Masuk </h1>
    </div>
    <div class="hal-body">
        <form action="{{ route('surat-masuk.inputProcess') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-6">

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Nomor Surat</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" name="no_surat">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Judul Surat</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" name="judul_surat">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Tanggal Surat</h4>
                    <div class="col-sm-9">
                        <input type="date" class="form-control " id="floatingInput" name="tgl_surat">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Perihal</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" name="perihal">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Pengirim</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" name="asal_surat">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Jenis Surat</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" name="jenis_surat">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Sifat Surat</h4>
                    <div class="ms-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat1" value="Rahasia">
                        <label class="form-check-label" for="sifatSurat1">
                            Rahasia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat2" value="Penting">
                        <label class="form-check-label" for="sifatSurat2">
                            Penting                        
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat3" value="Biasa">
                        <label class="form-check-label" for="sifatSurat3">
                            Biasa
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat4" value="Segera">
                        <label class="form-check-label" for="sifatSurat4">
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
                        <textarea class="form-control" name="catatan" style="height: 150px"></textarea>
                    </div>
                </div>
                <h4 class="surat-kategori col-form-label col-sm-4">Upload File</h4>
                <div class="row form-group">
                    <div class="col-sm-10 ms-0 ms-md-4">
                        <input class="form-control" type="file" name="file_surat" id="customFile">
                    </div>
                </div>

                <button ytype="submit" class="btn btn-success btn-lg d-block fs-5 fw-bold mx-auto" style="padding: 10px 100px; margin-top: 120px;">
                    SELESAI
                </button>


            </div>
        </div>
        </form>

    </div>
@endsection
