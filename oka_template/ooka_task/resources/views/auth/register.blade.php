@extends('auth.layouts.app', ['title' => 'Register'])
@section('content')
    <div class="card ">
        <div class="">
            <img src="{{ asset('image/Logo.png') }}" alt="logo">
        </div>

        <h3 class="text-success  mx-auto">Register</h3>
        <p class="text-secondary fw-bold mx-auto ">Isilah data secara lengkap dan benar</p>

        <div class="card-body">
            <form method="POST">

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Nomor Kartu Keluarga</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img src="{{ asset('image/icon/Id-card.svg') }}"></img>
                                </div>
                            </div>
                            <input type="text" class="form-control phone-number"
                                placeholder="Masukkan Nomor Kartu Keluarga" autofocus>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Nomor Telepon</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img src="{{ asset('image/icon/phone.svg') }}"></img>
                                </div>
                            </div>
                            <input type="text" class="form-control phone-number" placeholder="Masukkan Nomor Telepon">
                        </div>
                    </div>

                    <div action="#" class="form-group col-md-4">
                        <h6>Lampiran Foto</h6>
                        <label for="first_name">Foto KTP</label>
                        <div class="file-drop-area">

                            <span class="choose-file-button">Pilih File</span>
                            <input class="file-input" type="file" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Nomor Induk Kependudukan </label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img src="{{ asset('image/icon/form-staff.svg') }}"></img>
                                </div>
                            </div>
                            <input type="text" class="form-control phone-number"
                                placeholder="Masukkan Nomor Induk Kependudukan ">
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Alamat E-mail</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img src="{{ asset('image/icon/email.svg') }}"></img>
                                </div>
                            </div>
                            <input type="text" class="form-control phone-number" placeholder="Masukkan Alamat Email">
                        </div>
                    </div>

                    <div action="#" class="form-group col-md-4">
                        <label for="first_name">Swafoto Dengan KTP</label>
                        <div class="file-drop-area">

                            <span class="choose-file-button">Pilih File</span>
                            <input class="file-input" type="file" multiple>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Nama Lengkap Sesuai KTP</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img src="{{ asset('image/icon/person.svg') }}"></img>

                                </div>
                            </div>
                            <input type="text" class="form-control phone-number" placeholder="Masukkan Nama Lengkap">
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Username</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img src="{{ asset('image/icon/person-write.svg') }}"></img>
                                </div>
                            </div>
                            <input type="text" class="form-control phone-number" placeholder="Buat Username">
                        </div>
                    </div>
                </div>




                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-lg px-5  ">
                        DAFTAR
                    </button>
                    <div class="card-body">
                        <span class="fw-bold">Sudah Punya Akun? <a href="login" class="text-success"> Masuk </a> </span>
                      </div>
                </div>
            </form>
        </div>
    </div>
@endsection
