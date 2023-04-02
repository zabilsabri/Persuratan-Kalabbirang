@extends('admin.layouts.app', ['title' => 'Verifikasi'])
<link rel="stylesheet" href="{{ asset('style/css/notVerif.css') }}">

@section('content')
    <div class="hal-head">
        <h1>Verifikasi Warga</h1>
    </div>
    <div class="row" style="padding: 20px; margin-right: 0px">
        <div class="profil-input col-7">
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
        <div class="gambar-user mb-4 ms-5 col-4">
            <p class="gambar-label">Foto KTP</p>
            <img src="{{ asset('temp_file/ktp/' . $user -> ktp) }}" width="300" height="210" class="img-thumbnail"/>
            <p class="gambar-label">Swafoto Dengan KTP</p>
            <img src="{{ asset('temp_file/swafoto_ktp/' . $user -> swafoto_ktp) }}" width="300" height="210" class="img-thumbnail" />
        </div>
        @endforeach
    </div>
    <div class="d-grid gap-5 d-md-flex mb-5 justify-content-md-center">
        <button class="btn btn-danger me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#modalDitolak">DITOLAK</button>
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modalVerifikasi">VERIFIKASI</button>
    </div>
@endsection
<!-- Modal Ditolak-->
<div class="modal fade" id="modalDitolak" tabindex="-1" aria-labelledby="modalDitolakLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalDitolakLabel">Alasan Penolakan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('tolak-warga', [$user -> id]) }}" method="POST">
        @csrf
      <div class="modal-body">
            <div class="form-floating">
                <textarea class="form-control" style="border: 1px solid #FF0000; height:100px;" name="keterangan" id="exampleFormControlTextarea1"></textarea>
                <label for="exampleFormControlTextarea1">Alasan</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Kirim</button>
      </div>
    </form>
    </div>
  </div>
</div>


<!-- Modal Verifikasi-->
<div class="modal fade" id="modalVerifikasi" tabindex="-1" aria-labelledby="modalVerifikasiLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalVerifikasiLabel">Verifikasi User Ini?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin?
      </div>
      <div class="modal-footer">
        <a href="{{ route('verif-warga', [$user->id]) }}" type="button" class="btn btn-success">Ya</a>
      </div>
    </div>
  </div>
</div>