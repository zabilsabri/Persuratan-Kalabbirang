@extends('kasi.layouts.app', ['title' => 'Detail Surat Arsip'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">

@section('content')
<div class="hal-head">
    <h1 class="hal-title" > Detail Surat (Arsip) </h1>
</div>
<div class="hal-body">
    <div class="row">
        <h6 class="no-surat">No. Surat</h6>
        <div class="col-sm-6">
            <table class="table table-borderless">
                <tr>    
                    <td class="surat-kategori" >Tanggal Surat</td>
                    <td>:</td>
                    <td class="surat-detail" >2 Desember 2022</td>
                </tr>
                <tr>
                    <td class="surat-kategori" >Perihal Surat</td>
                    <td>:</td>
                    <td class="surat-detail"></td>
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
                    <td class="surat-detail">Lorem ipsum</td>
                </tr>
                <tr>
                    <td class="surat-kategori" >Jenis Surat</td>
                    <td>:</td>
                    <td class="surat-detail">Undangan</td>
                </tr>
            </table>
            <button type="button" class="btn btn-success mb-5">Segera</button>
            <button type="button" class="btn btn-primary mb-5">Biasa</button>
            <button type="button" class="btn btn-danger mb-5">Penting</button>
            <button type="button" class="btn btn-dark mb-5">Rahasia</button>
        </div>
        <div class="col-sm-6">
            <p class="surat-text" >
                Lorem ipsum dolor sit amet consectetur. 
                Quis donec facilisis augue porta eget.
                Magna eget elit condimentum scelerisque volutpat vitae sed ac.
            </p>
            <div class="lampiran">
                <svg width="30" style="float:left;" height="17" viewBox="0 0 30 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.25 17C5.95 17 4 16.1758 2.4 14.5273C0.8 12.8788 0 10.8697 0 8.5C0 6.1303 0.8 4.12121 2.4 2.47273C4 0.824243 5.95 0 8.25 0H24C25.65 0 27.0625 0.605303 28.2375 1.81591C29.4125 3.02652 30 4.48182 30 6.18182C30 7.88182 29.4125 9.33712 28.2375 10.5477C27.0625 11.7583 25.65 12.3636 24 12.3636H9.75C8.7 12.3636 7.8125 11.9902 7.0875 11.2432C6.3625 10.4962 6 9.58182 6 8.5C6 7.41818 6.3625 6.50379 7.0875 5.75682C7.8125 5.00985 8.7 4.63636 9.75 4.63636H24V6.95455H9.75C9.325 6.95455 8.969 7.10239 8.682 7.39809C8.394 7.69482 8.25 8.06212 8.25 8.5C8.25 8.93788 8.394 9.30467 8.682 9.60036C8.969 9.89709 9.325 10.0455 9.75 10.0455H24C25.05 10.0455 25.9375 9.67197 26.6625 8.925C27.3875 8.17803 27.75 7.26364 27.75 6.18182C27.75 5.1 27.3875 4.18561 26.6625 3.43864C25.9375 2.69167 25.05 2.31818 24 2.31818H8.25C6.6 2.31818 5.1875 2.92349 4.0125 4.13409C2.8375 5.3447 2.25 6.8 2.25 8.5C2.25 10.2 2.8375 11.6553 4.0125 12.8659C5.1875 14.0765 6.6 14.6818 8.25 14.6818H24V17H8.25Z" fill="#909090"/>
                </svg>
                <p class="lampiran-text">Lampiran</p>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#" class="stretched-link">Lorem Ipsum Dolor sit Amet</a></h5>
                        <p class="card-text">1000 KB</p>
                    </div>
                </div>
            </div>
            <p class="surat-detail text-end fs-5"> *Telah Ditandatangani </p>
        </div>
    </div>
</div>

@endsection