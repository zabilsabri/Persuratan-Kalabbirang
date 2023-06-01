@extends('admin.layouts.app', ['title' => 'Penyerahan Surat Keluar'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDisposisi.css') }}">

@section('content')
<div class="hal-head">
    <h1 class="hal-title" > Penyerahan Surat </h1>
</div>
<div class="hal-body">
    <div class="row">
        @foreach($surats as $surat)
        <h6 class="no-surat">{{ $surat -> id }}</h6>
        <div class="col-sm-6">
            <table class="table table-borderless">
                <tr>    
                    <td class="surat-kategori" >Tanggal Surat</td>
                    <td>:</td>
                    <td class="surat-detail" >{{ $surat -> tgl_surat }}</td>
                </tr>
                <tr>
                    <td class="surat-kategori" >Jenis Surat</td>
                    <td>:</td>
                    <td class="surat-detail">{{ $surat -> jenisSurat -> nama }}</td>
                </tr>
                <tr>
                    <td class="surat-kategori"> Dari </td>
                    <td>:</td>
                    <td class="surat-detail">
                        {{ $surat -> user -> nama }}
                    </td>
                </tr>
            </table>
            @endforeach
        </div>
        <div class="col-sm-4">
            <div class=" form-group">
                <h4 class="surat-kategori col-form-label ">Tanggal Disposisi</h4>
                <div class="">
                    <form action="{{ route('surat-keluar-admin.disposisiProses', [$surat -> id]) }}" method="POST">
                        @csrf
                    <input type="date" class="form-control " id="floatingInput" placeholder="" value="" name="tgl_disposisi" required>
                </div>
            </div>
            <div class=" form-group">
                <h4 class="surat-kategori col-form-label ">No. Surat</h4>
                <div class="">
                    <input type="text" class="form-control" name="no_surat" placeholder="XXX / XXX / XXX / X / XXXX" aria-label="First name">
                </div>
            </div>
            <div class=" form-group">
                <h4 class="surat-kategori col-form-label ">Penerima</h4>
                <div class="">
                    <select class="form-control" id="floatingInput" name="penerima" required>
                        <option value="">Pilih Penerima</option>
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
        <div class="row mt-4" style="align-items: flex-end">
            <div class="col-sm-6 mb-3">
                <label for="exampleFormControlTextarea1" class="surat-kategori col-form-label ">Catatan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="catatan" rows="3" style="height: 150px"></textarea>
            </div>
            <div class="col-sm-6 mb-3 text-center">
                <button type="submit" class="btn btn-success w-75 H-25">SERAHKAN SURAT</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection