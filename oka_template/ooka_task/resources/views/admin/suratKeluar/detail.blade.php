@extends('admin.layouts.app', ['title' => 'Detail Surat Keluar'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">

@section('content')
<div class="hal-head">
    <h1 class="hal-title" > Detail Surat Keluar </h1>
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
                <tr>
                    <td class="surat-kategori" >TTD</td>
                    <td>:</td>
                    @if(isset($surat -> ttd_id))
                    <td class="surat-detail">(Sudah)</td>
                    @else
                    <td class="surat-detail">(Belum)</td>
                    @endif
                </tr>
            </table>
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
        </div>
    </div>
    <div class="d-grid gap-5 d-md-flex justify-content-md-center mt-2">
        <button class="btn btn-danger me-md-2 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modalDitolakAdmin">
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.4472 36.1042C8.70701 36.1042 0.811523 28.2228 0.811523 18.5C0.811523 8.77721 8.70701 0.895828 18.4472 0.895828C28.1874 0.895828 36.0828 8.77721 36.0828 18.5C36.0828 28.2228 28.1874 36.1042 18.4472 36.1042ZM18.4472 32.5833C22.189 32.5833 25.7776 31.0996 28.4234 28.4584C31.0693 25.8173 32.5557 22.2351 32.5557 18.5C32.5557 14.7649 31.0693 11.1827 28.4234 8.54157C25.7776 5.90044 22.189 4.41666 18.4472 4.41666C14.7054 4.41666 11.1168 5.90044 8.47095 8.54157C5.82508 11.1827 4.33865 14.7649 4.33865 18.5C4.33865 22.2351 5.82508 25.8173 8.47095 28.4584C11.1168 31.0996 14.7054 32.5833 18.4472 32.5833V32.5833ZM16.6836 9.69791H20.2107V13.2187H16.6836V9.69791ZM16.6836 16.7396H20.2107V27.3021H16.6836V16.7396Z" fill="white"/>
            </svg>
            </div>
            <div class="button-text flex-grow-1 ms-3">
                DITOLAK
            </div>
        </div>
        </button>
        <a class="btn btn-success mb-2" href="{{ route('surat-keluar.disposisi') }}" role="button">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <svg width="34" height="23" viewBox="0 0 41 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M39.9313 13.8842L3.30822 0.132036C3.02118 0.0242271 2.69877 -0.0189696 2.37979 0.00764733C2.06082 0.0342642 1.75889 0.12956 1.51037 0.282059C1.27302 0.431449 1.09587 0.627597 0.998824 0.848454C0.901778 1.06931 0.888686 1.30612 0.96102 1.53226L5.88848 14.9969L0.894433 28.424C0.826558 28.6129 0.818635 28.811 0.871301 29.0026C0.923967 29.1942 1.03575 29.3738 1.19767 29.527C1.35959 29.6802 1.56712 29.8028 1.80357 29.8848C2.04003 29.9668 2.29881 30.006 2.55912 29.9993C2.81971 29.9981 3.0763 29.951 3.30822 29.8617L39.9313 16.1096C40.2039 16.0046 40.4328 15.8453 40.5926 15.6489C40.7524 15.4526 40.8369 15.227 40.8369 14.9969C40.8369 14.7668 40.7524 14.5412 40.5926 14.3448C40.4328 14.1485 40.2039 13.9891 39.9313 13.8842ZM5.13938 26.3862L8.81833 16.2471H24.2V13.7467H8.81833L5.13938 3.60758L35.4533 14.9969L5.13938 26.3862Z" fill="white"/>
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

<!-- Modal Ditolak -->
<div class="modal fade" id="modalDitolakAdmin" tabindex="-1" aria-labelledby="modalDitolakAdminLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body" style="padding-bottom: 0px;">
        <h6>Alasan Penolakan <span style="color:red;" >*</span> </h6>
        <form action="#">
            <textarea class="form-control" style="border: 1px solid #FF0000; height:150px;" id="exampleFormControlTextarea1" rows="3"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Kirim</button>
      </div>
    </div>
  </div>
</div>