@extends('admin.layouts.app', ['title' => 'Surat Keluar Disposisi'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">

@section('content')
<div class="hal-head">
    <h1 class="hal-title" > Kirim Disposisi </h1>
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
        <div class="col-sm-6">
            <p>test</p>
            <div class="form-outline datepicker" data-mdb-toggle-button="false">
                <input
                    type="text"
                    class="form-control"
                    id="exampleDatepicker1"
                    data-mdb-toggle="datepicker"
                />
                <label for="exampleDatepicker1" class="form-label">Select a date</label>
            </div>
        </div>
    </div>
</div>

@endsection