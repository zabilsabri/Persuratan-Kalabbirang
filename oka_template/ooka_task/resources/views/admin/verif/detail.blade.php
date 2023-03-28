@extends('admin.layouts.app', ['title' => 'Detail Profile'])
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">

<style>
    div.card-body {
        height: 100px;
        overflow-x: hidden;
        overflow-y: auto;
        text-align:justify;
    }
    .card-lampiran{
        background: #E6E6E6 !important;
        border-radius: 0px 0px 4px 4px !important;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        height: !10px;
    }
    .stretched-link{
        text-decoration: none;
        color: black;
        font-size: 15px;
    }
</style>

@section('content')
    <div class="hal-body pt-4">
        <div class="row">
            @foreach($users as $user)
            <div class="profil-input col-6">
                <img src="{{ asset('temp_file/profile/' . $user -> profil) }}" onerror="this.onerror=null;this.src='{{ asset('style/img/avatar/avatar-1.png') }}';" class="profile-picture-user mb-4" width="300px" height="305px" alt="...">
                <fieldset disabled>
                    <div class="row justify-content-center">
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-floating mb-3 w-50">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $user -> nama }}">
                                <label for="floatingInput" class="profil-input-label">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $user -> nomor_kk }}">
                                <label for="floatingInput" class="profil-input-label">No. Kartu Keluarga</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $user -> nik }}">
                                <label for="floatingInput" class="profil-input-label">Nomor Induk Kependudukan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" value="{{ $user -> email }}">
                                <label for="floatingInput" class="profil-input-label">Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{ $user -> nomor_telp }}">
                                <label for="floatingInput" class="profil-input-label">No. Telepon</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            @endforeach
            <div class="card col-4">
                <div class="card-header">
                <h4>Dokumen Tersimpan</h4>
                </div>
                <div class="card-body">
                <div class="gallery gallery-fw">
                    @foreach($pengantars as $pengantar)
                    <div style=" height: 50px;" class="card">
                        <div style="overflow-y: hidden; overflow-x: hidden; text-align:justify" class="card-lampiran card-body">
                            <h5 class="card-title"><a href="{{ route('dokumen-user-admin.detailFile', [$pengantar -> file_surat]) }}" class="stretched-link">{{ $pengantar -> nama_file_surat }}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4 mb-3">
            <a class="btn btn-success w-25" href="{{ route('edit-warga', [$user -> id]) }}" role="button">UBAH DATA WARGA</a>
            <button class="btn btn-danger w-25" data-bs-toggle="modal" data-bs-target="#modalHapusWarga" type="button">HAPUS DATA</button>
        </div>
    </div>
    
@endsection

<!-- Modal Hapus -->
<div class="modal fade" id="modalHapusWarga" tabindex="-1" aria-labelledby="modalHapusWargaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalHapusWargaLabel">Confirm</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data pegawai ini?
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger w-25" href="{{ route('delete-warga', [$user -> id]) }}" role="button">Ya</a>
      </div>
    </div>
  </div>
</div>