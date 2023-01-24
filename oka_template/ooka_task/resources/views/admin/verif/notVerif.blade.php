@extends('admin.layouts.app', ['title' => 'Verifikasi'])
<link rel="stylesheet" href="{{ asset('style/css/notVerif.css') }}">

@section('content')
    <div class="hal-head">
        <h1>Verifikasi Warga</h1>
    </div>
    <div class="profil-input">
        <fieldset disabled>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="disabledTextInput" placeholder="Lorem Ipsum" value="Lorem Ipsum">
                <label for="floatingInput" class="profil-input-label">Nama Lengkap</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="disabledTextInput" placeholder="00000000000000000000000" value="00000000000000000000000">
                <label for="floatingInput" class="profil-input-label">Nomor Kartu Keluarga (KK)</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="disabledTextInput" placeholder="00000000000000000000000" value="00000000000000000000000">
                <label for="floatingInput" class="profil-input-label">Nomor Induk Kependudukan (NIK)</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="disabledTextInput" placeholder="+62 8XX XXXX XXXX" value="+62 8XX XXXX XXXX">
                <label for="floatingInput" class="profil-input-label">Nomor Telepon</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="disabledTextInput" placeholder="lorem@gmail.com" value="lorem@gmail.com">
                <label for="floatingInput" class="profil-input-label">Email</label>
            </div>
        </fieldset>
    </div>
    <div class="gambar-user mb-4">
        <div class="row text-center">
            <div class="col-sm-6">
                <p class="gambar-label">Foto KTP</p>
                <img width="400" height="210" class="img-thumbnail"/>
            </div>
            <div class="col-sm-6">
                <p class="gambar-label">Swafoto Dengan KTP</p>
                <img width="400" height="210" class="img-thumbnail" />
            </div>
        </div>
    </div>
    <div class="d-grid gap-5 d-md-flex mb-5 justify-content-md-center">
        <button class="btn btn-danger me-md-2" type="button">DITOLAK</button>
        <button class="btn btn-success" type="button">VERIFIKASI</button>
    </div>
@endsection
