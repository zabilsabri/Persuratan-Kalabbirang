@extends('admin.layouts.app', ['title' => 'Detail Profile'])
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">
@section('content')
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
        <strong> {{$message}} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="hal-head px-5 pt-4">
        <h1>Data Pegawai</h1>
    </div>
    <div class="hal-body pt-4">
        <div class="profil-input">
            @foreach($users as $user)
            <fieldset disabled>
                <div class="mb-5 row">
                    <div class="col-sm-4">
                        <img src="{{ asset('style/img/avatar/avatar-1.png') }}" class="profile-picture-user mb-4 img-fluid" width="300px" height="305px" alt="...">
                    </div>
                    <div class="col-sm-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" value="{{ $user -> nama }}">
                            <label for="floatingInput" class="profil-input-label">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" value="{{ $user -> nip }}">
                            <label for="floatingInput" class="profil-input-label">NIP</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" value="{{ $user -> nomor_kp }}">
                            <label for="floatingInput" class="profil-input-label">No. Kartu Kasi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" value="{{ $user -> role -> nama }}">
                            <label for="floatingInput" class="profil-input-label">Jabatan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" value="{{ $user -> alamat }}">
                            <label for="floatingInput" class="profil-input-label">Alamat</label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" value="{{ $user -> email }}">
                            <label for="floatingInput" class="profil-input-label">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" value="{{ $user -> nomor_telp }}">
                            <label for="floatingInput" class="profil-input-label">No. Telepon</label>
                        </div>
                        <div class="signature-pad text-right mt-4">
                            <p class="signature-pad-text" > Tanda Tangan Digital </p>
                            @if(!empty($user -> ttd -> photo_ttd))
                            <img src="{{ asset('temp_file/ttd/'. $user -> ttd -> photo_ttd) }}" width="400" height="210" class="img-thumbnail"/>
                            @else
                            <img width="400" height="210" class="img-thumbnail"/>
                            @endif
                        </div>
                    </div>
                </div>
            </fieldset>
            @endforeach
            <div class="text-center">
                <a class="btn btn-success w-25" href="{{ route('edit-lurah-kasi', [$user -> id]) }}" role="button">UBAH DATA</a>
                <button class="btn btn-danger w-25" data-bs-toggle="modal" data-bs-target="#modalHapusPegawai" type="button">HAPUS DATA</button>
            </div>
        </div>
    </div>
    
@endsection

<!-- Modal Hapus -->
<div class="modal fade" id="modalHapusPegawai" tabindex="-1" aria-labelledby="modalHapusPegawaiLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalHapusPegawaiLabel">Confirm</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data pegawai ini?
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger w-25" href="{{ route('delete-pegawai', [$user -> id]) }}" role="button">Ya</a>
      </div>
    </div>
  </div>
</div>
