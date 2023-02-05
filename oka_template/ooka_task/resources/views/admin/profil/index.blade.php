@extends('admin.layouts.app', ['title' => 'Profile'])
<link rel="stylesheet" href="{{ asset('style/css/profil-admin.css') }}">

@section('content')
    <div class="hal-head">
        <div class="row ms-4 me-4">
            <div class="col-md-6 mt-5">
                <p class="hal-title" > Profil Saya </p>
            </div>
            <div class="col-md-6 text-right mt-5">
                <p class="hal-breadcrump" > Profil / Admin </p>
            </div>
        </div>
    </div>
    <div class="hal-body">
        <img src="{{ asset('style/img/avatar/avatar-1.png') }}" class="profile-picture mb-4" alt="...">
        <p class="nama-admin" style="margin-bottom: 0px;"> Lorem Ipsum Dolor </p>
        <p class="kartu-pegawai-admin">No. Kartu Pegawai</p>
        <div class="profil-input">
            <fieldset disabled>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" placeholder="Lorem Ipsum Dolor" value="Lorem Ipsum Dolor">
                    <label for="floatingInput" class="profil-input-label">NIP</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" placeholder="Lorem ipsum dolor sit amet" value="Lorem ipsum dolor sit amet">
                    <label for="floatingInput" class="profil-input-label">Jabatan</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="disabledTextInput" placeholder="Loremipsum@gmail.com" value="Loremipsum@gmail.com">
                    <label for="floatingInput" class="profil-input-label">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" placeholder="000000000000000000" value="000000000000000000">
                    <label for="floatingInput" class="profil-input-label">No. Telepon</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="disabledTextInput" placeholder="**********" value="**********">
                    <label for="floatingInput" class="profil-input-label">Password</label>
                </div>
            </fieldset>
            <div class="text-center mt-4">
                <a type="submit" href="{{ route('profil-admin.edit') }}" class="btn btn-success w-25">Ubah Data Pribadi</a>
            </div>
        </div>
    </div>
@endsection
