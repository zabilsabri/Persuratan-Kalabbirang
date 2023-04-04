@extends('admin.layouts.app', ['title' => 'Surat Masuk'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Detail Surat Masuk </h1>
    </div>
    <div class="hal-body">
        <div class="row">
            <h6 class="no-surat">{{ $surats -> no_surat }}</h6>
            <div class="col-sm-6">
                <table class="table table-borderless">
                    <tr>
                        <td class="surat-kategori">Tanggal Surat</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surats -> tgl_surat }}</td>
                    </tr>
                    <tr>
                        <td class="surat-kategori">Perihal Surat</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surats -> perihal }}</td>
                    </tr>
                    <tr>
                        <td class="surat-kategori"> Dari </td>
                        <td>:</td>
                        <td class="surat-detail">
                            {{ $surats -> asal_surat }} 
                        </td>
                    </tr>
                    <tr>
                        <td class="surat-kategori">Kepada</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surats -> user -> nama }}</td>
                    </tr>
                    <tr>
                        <td class="surat-kategori">Jenis Surat</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surats -> jenis_surat }}</td>
                    </tr>
                </table>
                @if($surats -> status == "Segera")
                <button type="button" class="btn btn-success mb-5">Segera</button>
                @elseif($surats -> status == "Biasa")
                <button type="button" class="btn btn-primary mb-5">Biasa</button>
                @elseif($surats -> status == "Penting")
                <button type="button" class="btn btn-danger mb-5">Penting</button>
                @elseif($surats -> status == "Rahasia")
                <button type="button" class="btn btn-dark mb-5">Rahasia</button>
                @endif
            </div>
            <div class="col-sm-6">
                <div class="lampiran">
                    <svg width="30" style="float:left;" height="17" viewBox="0 0 30 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.25 17C5.95 17 4 16.1758 2.4 14.5273C0.8 12.8788 0 10.8697 0 8.5C0 6.1303 0.8 4.12121 2.4 2.47273C4 0.824243 5.95 0 8.25 0H24C25.65 0 27.0625 0.605303 28.2375 1.81591C29.4125 3.02652 30 4.48182 30 6.18182C30 7.88182 29.4125 9.33712 28.2375 10.5477C27.0625 11.7583 25.65 12.3636 24 12.3636H9.75C8.7 12.3636 7.8125 11.9902 7.0875 11.2432C6.3625 10.4962 6 9.58182 6 8.5C6 7.41818 6.3625 6.50379 7.0875 5.75682C7.8125 5.00985 8.7 4.63636 9.75 4.63636H24V6.95455H9.75C9.325 6.95455 8.969 7.10239 8.682 7.39809C8.394 7.69482 8.25 8.06212 8.25 8.5C8.25 8.93788 8.394 9.30467 8.682 9.60036C8.969 9.89709 9.325 10.0455 9.75 10.0455H24C25.05 10.0455 25.9375 9.67197 26.6625 8.925C27.3875 8.17803 27.75 7.26364 27.75 6.18182C27.75 5.1 27.3875 4.18561 26.6625 3.43864C25.9375 2.69167 25.05 2.31818 24 2.31818H8.25C6.6 2.31818 5.1875 2.92349 4.0125 4.13409C2.8375 5.3447 2.25 6.8 2.25 8.5C2.25 10.2 2.8375 11.6553 4.0125 12.8659C5.1875 14.0765 6.6 14.6818 8.25 14.6818H24V17H8.25Z"
                            fill="#909090" />
                    </svg>
                    <p class="lampiran-text">Lampiran</p>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('surat-masuk-admin.detailFile', [$surats -> file_surat]) }}" class="stretched-link">{{ $surats -> judul_surat }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5 pt-5">
            <a class="btn btn-light me-md-2" href="{{ route('surat-masuk.edit', [$surats -> id]) }}" type="button">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33333 34.5C2.41667 34.5 1.63167 34.1734 0.978333 33.52C0.326111 32.8678 0 32.0834 0 31.1667V7.83335C0 6.91669 0.326111 6.13169 0.978333 5.47835C1.63167 4.82613 2.41667 4.50002 3.33333 4.50002H18.2083L14.875 7.83335H3.33333V31.1667H26.6667V19.5834L30 16.25V31.1667C30 32.0834 29.6739 32.8678 29.0217 33.52C28.3683 34.1734 27.5833 34.5 26.6667 34.5H3.33333ZM21.9583 5.45835L24.3333 7.79169L13.3333 18.7917V21.1667H15.6667L26.7083 10.125L29.0833 12.4584L17.0833 24.5H10V17.4167L21.9583 5.45835ZM29.0833 12.4584L21.9583 5.45835L26.125 1.29169C26.7917 0.625021 27.5906 0.291687 28.5217 0.291687C29.4517 0.291687 30.2361 0.625021 30.875 1.29169L33.2083 3.66669C33.8472 4.30558 34.1667 5.08335 34.1667 6.00002C34.1667 6.91669 33.8472 7.69446 33.2083 8.33335L29.0833 12.4584Z" fill="#4FB96E"/>
                    </svg>
                    </div>
                    <div class="button-text text-success flex-grow-1 ms-3">
                        EDIT
                    </div>
                </div>
            </a>
            <a class="btn btn-success" href="{{ route('surat-masuk.disposisi', [$surats -> id]) }}" type="button">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <svg width="34" height="23" viewBox="0 0 41 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M39.9313 13.8842L3.30822 0.132036C3.02118 0.0242271 2.69877 -0.0189696 2.37979 0.00764733C2.06082 0.0342642 1.75889 0.12956 1.51037 0.282059C1.27302 0.431449 1.09587 0.627597 0.998824 0.848454C0.901778 1.06931 0.888686 1.30612 0.96102 1.53226L5.88848 14.9969L0.894433 28.424C0.826558 28.6129 0.818635 28.811 0.871301 29.0026C0.923967 29.1942 1.03575 29.3738 1.19767 29.527C1.35959 29.6802 1.56712 29.8028 1.80357 29.8848C2.04003 29.9668 2.29881 30.006 2.55912 29.9993C2.81971 29.9981 3.0763 29.951 3.30822 29.8617L39.9313 16.1096C40.2039 16.0046 40.4328 15.8453 40.5926 15.6489C40.7524 15.4526 40.8369 15.227 40.8369 14.9969C40.8369 14.7668 40.7524 14.5412 40.5926 14.3448C40.4328 14.1485 40.2039 13.9891 39.9313 13.8842ZM5.13938 26.3862L8.81833 16.2471H24.2V13.7467H8.81833L5.13938 3.60758L35.4533 14.9969L5.13938 26.3862Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="button-text flex-grow-1 ms-3">
                        PENYERAHAN
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
