@extends('admin.layouts.app', ['title' => 'Verifikasi'])
<link rel="stylesheet" href="{{ asset('style/css/notVerif.css') }}">

@section('content')
    <div class="hal-head">
        <h1>Verifikasi Warga</h1>
    </div>
    <div class="row" style="padding: 20px; margin-right: 0px">
        <div class="profil-input col-sm-7">
            <fieldset disabled>
                @foreach($users as $user)
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" value="{{ $user -> nama }}">
                    <label for="floatingInput" class="profil-input-label">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" value="{{ $user -> nomor_kk }}">
                    <label for="floatingInput" class="profil-input-label">Nomor Kartu Keluarga (KK)</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" value="{{ $user -> nik }}">
                    <label for="floatingInput" class="profil-input-label">Nomor Induk Kependudukan (NIK)</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" value="{{ $user -> nomor_telp }}">
                    <label for="floatingInput" class="profil-input-label">Nomor Telepon</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="disabledTextInput" value="{{ $user -> email }}">
                    <label for="floatingInput" class="profil-input-label">Email</label>
                </div>
            </fieldset>
        </div>
        <div class="gambar-user mb-4 col-sm-4">
            <p class="gambar-label">Foto KTP</p>
            <img src="{{ asset('temp_file/ktp/' . $user -> ktp) }}" width="300" height="210" class="img-thumbnail"/>
            <p class="gambar-label">Swafoto Dengan KTP</p>
            <img src="{{ asset('temp_file/swafoto_ktp/' . $user -> swafoto_ktp) }}" width="300" height="210" class="img-thumbnail" />
        </div>
        @endforeach
    </div>
@endsection
