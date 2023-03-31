@extends('lurah.layouts.app', ['title' => 'Profile'])
<link rel="stylesheet" href="{{ asset('style/css/profil-admin.css') }}">

@section('content')
    <div class="hal-head">
        <div class="row ms-4 me-4">
            <div class="col-md-6 mt-5">
                <p class="hal-title" > Profil Saya </p>
            </div>
            <div class="col-md-6 text-right mt-5">
                <p class="hal-breadcrump" > Profil / Lurah </p>
            </div>
        </div>
    </div>
    <div class="hal-body me-5 mt-5 p-4">
        <div class="row">
        <div class="profil-pic col-4">
            <img src="{{ asset('temp_file/profile/' . Auth::user()->profil) }}" onerror="this.onerror=null;this.src='{{ asset('style/img/avatar/avatar-1.png') }}';" class="profile-picture mb-4 mt-5" alt="...">
            <p class="nama-admin" style="margin-bottom: 0px;"> {{ Auth::user()->nama }} </p>
            <p class="kartu-pegawai-admin">{{ Auth::user()->nomor_kp }}</p>
        </div>
        <div class="profil-input m-0 col-4">
            <fieldset disabled>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" value="{{ Auth::user()->nip }}">
                    <label for="floatingInput" class="profil-input-label">NIP</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" value="{{ Auth::user()->role->nama }}">
                    <label for="floatingInput" class="profil-input-label">Jabatan</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="disabledTextInput" value="{{ Auth::user()->email }}">
                    <label for="floatingInput" class="profil-input-label">Email</label>
                </div>
            </fieldset>
        </div>
        <div class="signature-pad col">
            <div class="form-floating mb-3">
                <input type="alamat" class="form-control" id="disabledTextInput" value="{{ Auth::user()->alamat }}">
                <label for="floatingInput" class="profil-input-label">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="disabledTextInput" value="{{ Auth::user()->nomor_telp }}">
                <label for="floatingInput" class="profil-input-label">No. Telepon</label>
            </div>
            <p class="signature-pad-text" > Tanda Tangan Digital </p>
                @if(!empty($user -> ttd -> photo_ttd))
                <img src="{{ asset('temp_file/ttd/'. Auth::user() -> ttd -> photo_ttd) }}" width="400" height="210" class="img-thumbnail"/>
                @else
                <img width="400" height="210" class="img-thumbnail"/>
                @endif
        </div>
        </div>
            <div class="text-center mt-4">
                <a type="submit" href="{{ route('profil-lurah.edit') }}" class="btn btn-success btn-lg">Ubah Data Pribadi</a>
            </div>
        </div>
    </div>
@endsection
