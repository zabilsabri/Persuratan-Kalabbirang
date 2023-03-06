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
    <div class="hal-body me-5 mt-5">
        <div class="row">
        <div class="profil-pic col-4">
            <img src="{{ asset('style/img/avatar/avatar-1.png') }}" class="profile-picture mb-4 mt-5" alt="...">
            <p class="nama-admin" style="margin-bottom: 0px;"> Lorem Ipsum Dolor </p>
            <p class="kartu-pegawai-admin">No. Kartu Lurah</p>
        </div>
        <div class="profil-input m-0 col-4">
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
                    <input type="password" class="form-control" id="disabledTextInput" placeholder="**********" value="**********">
                    <label for="floatingInput" class="profil-input-label">Password</label>
                </div>
            </fieldset>
        </div>
        <div class="signature-pad col">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="disabledTextInput" placeholder="000000000000000000" value="000000000000000000">
                <label for="floatingInput" class="profil-input-label">No. Telepon</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="disabledTextInput" placeholder="000000000000000000" value="000000000000000000">
                <label for="floatingInput" class="profil-input-label">No. Telepon</label>
            </div>
            <p class="signature-pad-text" > Tanda Tangan Digital </p>
            <img width="400" height="210" class="img-thumbnail"/>
        </div>
        </div>
            <div class="text-center mt-4">
                <a type="submit" href="{{ route('profil-lurah.edit') }}" class="btn btn-success btn-lg">Ubah Data Pribadi</a>
            </div>
        </div>
    </div>
@endsection
