@extends('admin.layouts.app', ['title' => 'Edit Surat Masuk'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Edit Surat Masuk </h1>
    </div>
    <div class="hal-body">
        <form action="{{ route('edit-surat-process', [$surats -> id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">

                    <div class="row form-group">
                        <h4 class="surat-kategori col-form-label col-sm-3">Nomor Surat</h4>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " id="floatingInput" name="no_surat" value="{{ $surats -> no_surat }}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <h4 class="surat-kategori col-form-label col-sm-3">Judul Surat</h4>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " id="floatingInput" name="judul_surat" value="{{ $surats -> judul_surat }}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <h4 class="surat-kategori col-form-label col-sm-3">Tanggal Surat</h4>
                        <div class="col-sm-9">
                            <input type="date" class="form-control " id="floatingInput" name="tgl_surat" value="{{ old('tgl_surat', date('Y-m-d')) }}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <h4 class="surat-kategori col-form-label col-sm-3">Perihal</h4>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " id="floatingInput" name="perihal"  value="{{ $surats -> perihal }}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <h4 class="surat-kategori col-form-label col-sm-3">Pengirim</h4>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " id="floatingInput" name="asal_surat" value="{{ $surats -> asal_surat }}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <h4 class="surat-kategori col-form-label col-sm-3">Kepada</h4>
                        <div class="col-sm-9">
                        <select class="form-control" id="floatingInput" name="penerima" required>
                            <option value="{{ $surats -> user -> id }}">-- {{ $surats -> user -> role -> nama }}</option>
                            <option value="2" >Lurah</option>
                            <option value="3" >Kasi Pemerintahan, Ketertiban, dan Ketentraman</option>
                            <option value="4" >Kasi Pemerintahan</option>
                            <option value="5" >Kasi Ekonomi dan Kesejahteraan Masyarakat</option>
                        </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <h4 class="surat-kategori col-form-label col-sm-3">Jenis Surat</h4>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " id="floatingInput" name="jenis_surat" value="{{ $surats -> jenis_surat }}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <h4 class="surat-kategori col-form-label col-sm-3">Sifat Surat</h4>
                        <div class="ms-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat1" value="Rahasia" {{ $surats->status == "Rahasia" ? 'checked' : '' }}>
                                <label class="form-check-label" for="sifatSurat1">
                                    Rahasia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat2" value="Penting" {{ $surats->status == "Penting" ? 'checked' : '' }}>
                                <label class="form-check-label" for="sifatSurat2">
                                    Penting                        
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat3" value="Biasa" {{ $surats->status == "Biasa" ? 'checked' : '' }}>
                                <label class="form-check-label" for="sifatSurat3">
                                    Biasa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat4" value="Segera" {{ $surats->status == "Segera" ? 'checked' : '' }}>
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
                            <textarea class="form-control" name="catatan" style="height: 150px">{{ $surats -> catatan }}</textarea>
                        </div>
                    </div>
                    <h4 class="surat-kategori col-form-label col-sm-4">Upload File</h4>
                    <div class="row form-group">
                        <div class="col-sm-10 ms-0 ms-md-4">
                            <input class="form-control" type="file" name="file_surat" id="customFile">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg d-block fs-5 fw-bold mx-auto" style="padding: 10px 100px; margin-top: 120px;">
                        SELESAI
                    </button>


                </div>
            </div>
        </form>
    </div>
@endsection
