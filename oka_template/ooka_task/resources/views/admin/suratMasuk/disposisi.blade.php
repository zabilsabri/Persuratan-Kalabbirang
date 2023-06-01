@extends('admin.layouts.app', ['title' => 'Surat Masuk'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Kirim Disposisi </h1>
    </div>
    <div class="hal-body">
        <form action="{{ route('surat-masuk-admin.disposisiProses', [$surat -> id])}}" method="POST">
            @csrf
            <div class="row">
                <h6 class="no-surat">{{ $surat -> no_surat }}</h6>
                <div class="col-sm-7">
                    <table class="table table-borderless">
                        <tr>
                            <td class="surat-kategori">No. Agenda</td>
                            <td>:</td>
                            <td class="surat-detail"></td>
                        </tr>

                        <tr>
                            <td class="surat-kategori">Tanggal Surat</td>
                            <td>:</td>
                            <td class="surat-detail">{{ $surat -> tgl_surat }}</td>
                        </tr>

                        <tr>
                            <td class="surat-kategori">Jenis Surat</td>
                            <td>:</td>
                            <td class="surat-detail">{{ $surat -> jenis_surat }}</td>
                        </tr>

                        <tr>
                            <td class="surat-kategori">Perihal Surat</td>
                            <td>:</td>
                            <td class="surat-detail">{{ $surat -> perihal }}</td>
                        </tr>

                        <tr>
                            <td class="surat-kategori"> Dari </td>
                            <td>:</td>
                            <td class="surat-detail">
                                {{ $surat -> asal_surat }}
                            </td>
                        </tr>

                        <tr>
                            <td class="surat-kategori">Kepada</td>
                            <td>:</td>
                            <td class="surat-detail">{{ $surat -> user -> role -> nama }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-4">
                    <div class=" form-group">
                        <h4 class="surat-kategori col-form-label ">Tanggal Disposisi</h4>
                        <div class="">
                            <input type="date" class="form-control " id="floatingInput" name="tgl_disposisi">
                        </div>
                    </div>
                    <div class=" form-group">
                        <h4 class="surat-kategori col-form-label ">Penerima</h4>
                        <div class="">
                            <select class="form-control" id="floatingInput" name="penerima" required>
                                <option value="">-- Pilih Penerima</option>
                                <option value="2" >Lurah</option>
                                <option value="3" >Kasi Pemerintahan, Ketertiban, dan Ketentraman</option>
                                <option value="4" >Kasi Pembangunan</option>
                                <option value="5" >Kasi Ekonomi dan Kesejahteraan Masyarakat</option>
                            </select>
                        </div>
                    </div>
                    <div class=" form-group">
                        <h4 class="surat-kategori col-form-label ">Instruksi</h4>
                        <div class="">
                            <select class="form-control" name="instruksi" id="floatingInput">
                                <option value="" >Pilih Instruksi</option>
                                <option value="Mohon Persetujuan">Mohon Persetujuan</option>
                                <option value="Mohon Keputusan">Mohon Keputusan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="isAntar" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <small>Antar Surat (Surat Akan Otomatis Masuk Kedalam Tabel Antar Surat Jika Surat Telah Ditandatangani)</small>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="surat-kategori col-form-label ">Catatan</h4>
                    <div class="row form-group">
                        <div class="col-sm-10 ">
                            <textarea class="form-control" style="height: 150px" name="catatan"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <button class="btn btn-success px-5 my-btn justify-content-center" style="margin-top: 140px; " type="submit">
                        <div class="button-text flex-grow-1  ">
                            Kirim Disposisi
                        </div>
                    </button>

                </div>
            </div>
        </form>
    </div>
@endsection
