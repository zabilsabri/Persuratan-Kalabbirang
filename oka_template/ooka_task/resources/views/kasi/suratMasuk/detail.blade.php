@extends('kasi.layouts.app', ['title' => 'Detail Surat Masuk'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">

@section('content')
    @if($message = Session::get('failed'))
    <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
        <strong> {{$message}} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="hal-head">
        <h1 class="hal-title"> Detail Surat Masuk </h1>
    </div>
    <div class="hal-body">
        <div class="row">
            @foreach($surats as $surat)
            <h6 class="no-surat">{{ $surat -> no_surat }}</h6>
            <div class="col-sm-6">
                <table class="table table-borderless">
                <tr>
                        <td class="surat-kategori">Tanggal Surat</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surat -> tgl_surat }}</td>
                    </tr>
                    <tr>
                        <td class="surat-kategori">Nama Pemohon</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surat -> user -> nama }}</td>
                    </tr>
                    <tr>
                        <td class="surat-kategori">No. Kartu Keluarga</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surat -> user -> nomor_kk ?? "-" }}</td>
                    </tr>
                    <tr>
                        <td class="surat-kategori">NIK</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surat -> user -> nik }}</td>
                    </tr>
                    <tr>
                        <td class="surat-kategori">Kode Surat</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surat -> kode_surat }}</td>
                    </tr>
                    <tr>
                        <td class="surat-kategori">Jenis Surat</td>
                        <td>:</td>
                        <td class="surat-detail">{{ $surat -> jenisSurat -> nama }}</td>
                    </tr>
                </table>
                @if($surat -> status == "Segera")
                <button type="button" class="btn btn-success mb-5">Segera</button>
                @elseif($surat -> status == "Biasa")
                <button type="button" class="btn btn-primary mb-5">Biasa</button>
                @elseif($surat -> status == "Penting")
                <button type="button" class="btn btn-danger mb-5">Penting</button>
                @elseif($surat -> status == "Rahasia")
                <button type="button" class="btn btn-dark mb-5">Rahasia</button>
                @endif
            </div>
            <div class="col-sm-6">
                <div class="d-flex justify-content-end">
                    <p class="surat-kategori">Tanggal Terima : </p>
                    <p class="surat-detail">{{ $disposisis -> tgl_disposisi }}</p>
                </div>
                <div class="lampiran">
                    <svg width="30" style="float:left;" height="17" viewBox="0 0 30 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.25 17C5.95 17 4 16.1758 2.4 14.5273C0.8 12.8788 0 10.8697 0 8.5C0 6.1303 0.8 4.12121 2.4 2.47273C4 0.824243 5.95 0 8.25 0H24C25.65 0 27.0625 0.605303 28.2375 1.81591C29.4125 3.02652 30 4.48182 30 6.18182C30 7.88182 29.4125 9.33712 28.2375 10.5477C27.0625 11.7583 25.65 12.3636 24 12.3636H9.75C8.7 12.3636 7.8125 11.9902 7.0875 11.2432C6.3625 10.4962 6 9.58182 6 8.5C6 7.41818 6.3625 6.50379 7.0875 5.75682C7.8125 5.00985 8.7 4.63636 9.75 4.63636H24V6.95455H9.75C9.325 6.95455 8.969 7.10239 8.682 7.39809C8.394 7.69482 8.25 8.06212 8.25 8.5C8.25 8.93788 8.394 9.30467 8.682 9.60036C8.969 9.89709 9.325 10.0455 9.75 10.0455H24C25.05 10.0455 25.9375 9.67197 26.6625 8.925C27.3875 8.17803 27.75 7.26364 27.75 6.18182C27.75 5.1 27.3875 4.18561 26.6625 3.43864C25.9375 2.69167 25.05 2.31818 24 2.31818H8.25C6.6 2.31818 5.1875 2.92349 4.0125 4.13409C2.8375 5.3447 2.25 6.8 2.25 8.5C2.25 10.2 2.8375 11.6553 4.0125 12.8659C5.1875 14.0765 6.6 14.6818 8.25 14.6818H24V17H8.25Z" fill="#909090"/>
                    </svg>
                    <p class="lampiran-text">Surat</p>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('export.surat', ['id' => $surat -> id]) }}" class="stretched-link">{{ $surat -> jenisSurat -> nama }}</a></h5>
                        </div>
                    </div>
                    <hr>
                    <svg width="30" style="float:left;" height="17" viewBox="0 0 30 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.25 17C5.95 17 4 16.1758 2.4 14.5273C0.8 12.8788 0 10.8697 0 8.5C0 6.1303 0.8 4.12121 2.4 2.47273C4 0.824243 5.95 0 8.25 0H24C25.65 0 27.0625 0.605303 28.2375 1.81591C29.4125 3.02652 30 4.48182 30 6.18182C30 7.88182 29.4125 9.33712 28.2375 10.5477C27.0625 11.7583 25.65 12.3636 24 12.3636H9.75C8.7 12.3636 7.8125 11.9902 7.0875 11.2432C6.3625 10.4962 6 9.58182 6 8.5C6 7.41818 6.3625 6.50379 7.0875 5.75682C7.8125 5.00985 8.7 4.63636 9.75 4.63636H24V6.95455H9.75C9.325 6.95455 8.969 7.10239 8.682 7.39809C8.394 7.69482 8.25 8.06212 8.25 8.5C8.25 8.93788 8.394 9.30467 8.682 9.60036C8.969 9.89709 9.325 10.0455 9.75 10.0455H24C25.05 10.0455 25.9375 9.67197 26.6625 8.925C27.3875 8.17803 27.75 7.26364 27.75 6.18182C27.75 5.1 27.3875 4.18561 26.6625 3.43864C25.9375 2.69167 25.05 2.31818 24 2.31818H8.25C6.6 2.31818 5.1875 2.92349 4.0125 4.13409C2.8375 5.3447 2.25 6.8 2.25 8.5C2.25 10.2 2.8375 11.6553 4.0125 12.8659C5.1875 14.0765 6.6 14.6818 8.25 14.6818H24V17H8.25Z"
                            fill="#909090" />
                    </svg>
                    <p class="lampiran-text">Lampiran</p>
                    @foreach($pengantars as $pengantar)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('surat-masuk-kasi.detailFilePengantar', [$pengantar -> file_surat]) }}" class="stretched-link">{{ $pengantar -> nama_file_surat }}.pdf</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>

                <button class="btn btn-light border-green me-md-2 mb-2 float-right" type="button" data-bs-toggle="modal"
                    data-bs-target="#modalInfoDisposisi">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <svg width="53" height="44" viewBox="0 0 53 44" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.3207 39.7913C14.3328 39.7913 4.61523 31.77 4.61523 21.8747C4.61523 11.9793 14.3328 3.95801 26.3207 3.95801C38.3086 3.95801 48.0261 11.9793 48.0261 21.8747C48.0261 31.77 38.3086 39.7913 26.3207 39.7913ZM26.3207 36.208C30.926 36.208 35.3427 34.6979 38.5991 32.0099C41.8555 29.3218 43.685 25.6761 43.685 21.8747C43.685 18.0732 41.8555 14.4275 38.5991 11.7395C35.3427 9.05146 30.926 7.54134 26.3207 7.54134C21.7153 7.54134 17.2987 9.05146 14.0422 11.7395C10.7858 14.4275 8.95632 18.0732 8.95632 21.8747C8.95632 25.6761 10.7858 29.3218 14.0422 32.0099C17.2987 34.6979 21.7153 36.208 26.3207 36.208ZM24.1501 12.9163H28.4912V16.4997H24.1501V12.9163ZM24.1501 20.083H28.4912V30.833H24.1501V20.083Z"
                                    fill="#4FB96E" />
                            </svg>
                        </div>
                        <div class="button-text text-green flex-grow-1 ms-3">
                            INFO DISPOSISI
                        </div>
                    </div>
                </button>
            </div>
            @endforeach
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5 pt-5">
            <button class="btn btn-danger me-md-2 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modalDitolak">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                    <svg width="32" height="32" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.4472 36.1042C8.70701 36.1042 0.811523 28.2228 0.811523 18.5C0.811523 8.77721 8.70701 0.895828 18.4472 0.895828C28.1874 0.895828 36.0828 8.77721 36.0828 18.5C36.0828 28.2228 28.1874 36.1042 18.4472 36.1042ZM18.4472 32.5833C22.189 32.5833 25.7776 31.0996 28.4234 28.4584C31.0693 25.8173 32.5557 22.2351 32.5557 18.5C32.5557 14.7649 31.0693 11.1827 28.4234 8.54157C25.7776 5.90044 22.189 4.41666 18.4472 4.41666C14.7054 4.41666 11.1168 5.90044 8.47095 8.54157C5.82508 11.1827 4.33865 14.7649 4.33865 18.5C4.33865 22.2351 5.82508 25.8173 8.47095 28.4584C11.1168 31.0996 14.7054 32.5833 18.4472 32.5833V32.5833ZM16.6836 9.69791H20.2107V13.2187H16.6836V9.69791ZM16.6836 16.7396H20.2107V27.3021H16.6836V16.7396Z" fill="white"/>
                    </svg>
                    </div>
                    <div class="button-text flex-grow-1 ms-3">
                        DITOLAK
                    </div>
                </div>
            </button>
            <button class="btn btn-success me-md-2 mb-2" type="button" data-bs-toggle="modal"
                data-bs-target="#modalTandaTangan">
                <div class="d-flex align-items-center">
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
                            TANDA TANGAN
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>
@endsection

<!-- Modal Info Disposisi -->
<div class="modal fade" id="modalInfoDisposisi" tabindex="-1" aria-labelledby="modalInfoDisposisiLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h4> Riwayat Disposisi </h4>
                @foreach($disposisis_all as $disposisi_all)
                <div class="modal-container">
                    <p class="text-right"> {{ $disposisi_all -> tgl_surat }} </p>
                    <div class="row">
                        <div class="col-7">
                            <span class="modal-container-text"> {{ $disposisi_all -> userK -> nama }} </span>
                            <br>
                            {{ $disposisi_all -> userK -> role -> nama }}
                            <br>
                            <svg width="37" height="33" viewBox="0 0 37 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.8668 15.3805C26.7259 15.2561 26.5582 15.1573 26.3734 15.0898C26.1886 15.0224 25.9904 14.9877 25.7903 14.9877C25.5901 14.9877 25.3919 15.0224 25.2072 15.0898C25.0224 15.1573 24.8547 15.2561 24.7138 15.3805L19.7253 19.7626V9.68385C19.7253 9.33167 19.5656 8.99392 19.2812 8.74489C18.9969 8.49586 18.6112 8.35596 18.2091 8.35596C17.807 8.35596 17.4213 8.49586 17.137 8.74489C16.8526 8.99392 16.6929 9.33167 16.6929 9.68385V19.7626L11.7044 15.3805C11.4189 15.1305 11.0317 14.99 10.6279 14.99C10.2241 14.99 9.83689 15.1305 9.55138 15.3805C9.26587 15.6306 9.10547 15.9697 9.10547 16.3233C9.10547 16.6769 9.26587 17.0161 9.55138 17.2661L17.1326 23.9056C17.2768 24.0265 17.4468 24.1212 17.6329 24.1844C17.8144 24.2547 18.0107 24.291 18.2091 24.291C18.4075 24.291 18.6038 24.2547 18.7853 24.1844C18.9714 24.1212 19.1414 24.0265 19.2856 23.9056L26.8668 17.2661C27.0089 17.1427 27.1217 16.9958 27.1987 16.834C27.2757 16.6722 27.3153 16.4986 27.3153 16.3233C27.3153 16.148 27.2757 15.9745 27.1987 15.8126C27.1217 15.6508 27.0089 15.504 26.8668 15.3805Z"
                                    fill="#4FB96E" />
                            </svg>
                        </div>
                        <div class="col-5">
                            <span class="modal-container-text2"> Sifat Surat : </span>
                            <br>
                            @if($disposisi_all -> suratKeluar -> status == "Penting")
                            <span class="text-danger fw-bold"> PENTING </span>
                            @elseif ($disposisi_all -> suratKeluar -> status == "Rahasia")
                            <span class="text-dark fw-bold"> RAHASIA </span>
                            @elseif ($disposisi_all -> suratKeluar -> status == "Segera")
                            <span class="text-success fw-bold"> SEGERA </span>
                            @elseif ($disposisi_all -> suratKeluar -> status == "Biasa")
                            <span class="text-primary fw-bold"> BIASA </span>
                            @endif
                        </div>
                        <div class="col-7">
                            <span class="modal-container-text"> {{ $disposisi_all -> userT -> nama}} </span>
                            <br>
                            {{ $disposisi_all -> userT -> role -> nama }}
                            <br>
                        </div>
                        <div class="col-5">
                            <span class="modal-container-text2"> Instruksi : </span>
                            <br>
                            <span class="text-success fw-bold"> {{ $disposisi_all -> instruksi }} </span>
                        </div>
                        <div class="col-7 mt-3">
                            <span class="modal-container-text2"> Catatan Disposisi : </span>
                            <br>
                            <span class="text-success fw-bold"> {{ $disposisi_all -> catatan }} </span>
                            <br>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal Ditolak -->
<div class="modal fade" id="modalDitolak" tabindex="-1" aria-labelledby="modalDitolakLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-body" style="padding-bottom: 0px;">
                <h6>Alasan Penolakan <span style="color:red;" >*</span> </h6>
                <form action="{{ route('surat-keluar-kasi.tolakSurat', [$surat -> id]) }}" method="POST">
                    @csrf
                    <textarea class="form-control" name="alasan_tolak" style="border: 1px solid #FF0000; height:150px;" id="exampleFormControlTextarea1" rows="3"></textarea>                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Kirim</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tanda Tangan -->
<div class="modal fade" id="modalTandaTangan" tabindex="-1" aria-labelledby="modalTandaTanganLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-4">
                <p class="modal-body-text1">Apakah Anda Yakin?</p>
                <p class="modal-body-text2">Tekan Oke untuk menandatangani dan surat akan otomatis akan tersimpan ke arsip</p>
                <div class="modal-body-button text-end">
                    <a href="{{ route('surat-masuk-kasi.ttd', [$surat -> id]) }}" type="button" class="btn btn-modal btn-success-modal w-25">Oke</a>
                </div>
            </div>
        </div>
    </div>
</div>
