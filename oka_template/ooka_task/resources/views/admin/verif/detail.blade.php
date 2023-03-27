@extends('admin.layouts.app', ['title' => 'Detail Profile'])
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">
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
                <div class="gallery gallery-fw" data-item-height="100">
                    @foreach($pengantars as $pengantar)
                    <div class="card">
                        <div class="card-body">
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
        </div>
    </div>
    
@endsection
