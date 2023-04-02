@extends('admin.layouts.app', ['title' => 'Penyerahan Surat Keluar'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDisposisi.css') }}">

@section('content')
<div class="hal-head">
    <h1 class="hal-title" > Penyerahan Surat </h1>
</div>
<div class="hal-body">
    <div class="row">
        <h6 class="no-surat">No. Surat</h6>
        <div class="col-sm-6">
            <table class="table table-borderless">
                <tr>    
                    <td class="surat-kategori" >No. Agenda</td>
                    <td>:</td>
                    <td class="surat-detail" ></td>
                </tr>
                <tr>    
                    <td class="surat-kategori" >Tanggal Surat</td>
                    <td>:</td>
                    <td class="surat-detail" >2 Desember 2022</td>
                </tr>
                <tr>
                    <td class="surat-kategori" >Jenis Surat</td>
                    <td>:</td>
                    <td class="surat-detail">Undangan</td>
                </tr>
                <tr>
                    <td class="surat-kategori" >Perihal Surat</td>
                    <td>:</td>
                    <td class="surat-detail">Lorem Ipsum </td>
                </tr>
                <tr>
                    <td class="surat-kategori"> Dari </td>
                    <td>:</td>
                    <td class="surat-detail">
                        Lorem ipsum
                        <br>
                        <span class="bidang-pengirim" >Bidang Lorem Ipsum</span>
                    </td>
                </tr>
                <tr>
                    <td class="surat-kategori" >Kepada</td>
                    <td>:</td>
                    <td class="surat-detail"></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-4">
            <div class=" form-group">
                <h4 class="surat-kategori col-form-label ">Tanggal Disposisi</h4>
                <div class="">
                    <input type="date" class="form-control " id="floatingInput" placeholder="" value="">
                </div>
            </div>
            <div class=" form-group">
                <h4 class="surat-kategori col-form-label ">Penerima</h4>
                <div class="">
                    <select class="form-control" id="floatingInput">
                        <option>Pilih Penerima</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
            </div>
            <div class=" form-group">
                <h4 class="surat-kategori col-form-label ">Instruksi</h4>
                <div class="">
                    <select class="form-control" id="floatingInput">
                        <option>Pilih Instruksi</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-4" style="align-items: flex-end">
            <div class="col-sm-6 mb-3">
                <label for="exampleFormControlTextarea1" class="surat-kategori col-form-label ">Catatan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 150px"></textarea>
            </div>
            <div class="col-sm-6 mb-3 text-center">
                <button type="button" class="btn btn-success w-75 H-25">SERAHKAN SURAT</button>
            </div>
        </div>
    </div>
</div>

@endsection