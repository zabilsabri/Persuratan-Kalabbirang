@extends('kasi.layouts.app', ['title' => 'Edit Profile'])
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">

<style>
    #upload{
        display:none
    }
</style>

@section('content')
    <div class="hal-head">
        <div class="row ms-4 me-4">
            <div class="col-md-6 mt-5">
                <p class="hal-title" > Edit Profil Saya </p>
            </div>
            <div class="col-md-6 text-right mt-5">
                <p class="hal-breadcrump" > Profil / Kasi </p>
            </div>
        </div>
    </div>
    <form action="{{ route('update-data-kasi') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="hal-body">
        <img src="{{ asset('temp_file/profile/' . Auth::user()->profil) }}" onerror="this.onerror=null;this.src='{{ asset('style/img/avatar/avatar-1.png') }}';" id="output_image" class="profile-picture mb-4" alt="...">
        <div class="container">
            <div class="profil-button row justify-content-center g-3">
                <div class="col-md-4">
                    <input id="upload" name="profil" type="file" onchange="preview(event)"/>
                    <a href="" id="upload_link" style="text-decoration: none;">
                        <div class="up_foto_profil p-2">
                            <svg width="15" style="float:left;" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.16406 0C0.921638 4.19235e-09 0.689143 0.0790285 0.517723 0.2197C0.346303 0.360372 0.25 0.551164 0.25 0.750105C0.25 0.949045 0.346303 1.13984 0.517723 1.28051C0.689143 1.42118 0.921638 1.50021 1.16406 1.50021H13.9609C14.2034 1.50021 14.4359 1.42118 14.6073 1.28051C14.7787 1.13984 14.875 0.949045 14.875 0.750105C14.875 0.551164 14.7787 0.360372 14.6073 0.2197C14.4359 0.0790285 14.2034 4.19235e-09 13.9609 0H1.16406ZM8.47169 15.3521C8.44012 15.5404 8.32264 15.7118 8.14299 15.8318C7.96334 15.9517 7.73491 16.0112 7.50385 15.9983C7.2728 15.9853 7.05635 15.9009 6.89825 15.762C6.74014 15.6231 6.65216 15.4402 6.65209 15.2501V5.0587L3.02875 8.02812L2.92638 8.10113C2.74088 8.21428 2.51004 8.26556 2.28032 8.24465C2.0506 8.22374 1.83906 8.13219 1.68829 7.98843C1.53751 7.84468 1.4587 7.65938 1.46772 7.46986C1.47673 7.28033 1.57291 7.10065 1.73687 6.96697L6.96531 2.68037C7.05657 2.61477 7.16314 2.56509 7.27853 2.53435L7.37603 2.51135C7.43653 2.50078 7.49821 2.49542 7.56006 2.49535L7.63319 2.49735L7.7185 2.50535L7.86475 2.53535L7.97566 2.57336L8.02075 2.59336L8.13044 2.65337L8.21819 2.71538L13.3881 6.96597L13.4771 7.05098C13.607 7.19559 13.6693 7.37365 13.6528 7.55279C13.6362 7.73193 13.5419 7.90024 13.3869 8.02712L13.2845 8.10013C13.1083 8.20673 12.8913 8.25789 12.673 8.24431C12.4547 8.23073 12.2496 8.1533 12.095 8.02612L8.48022 5.0557V15.2501L8.47169 15.3511V15.3521Z" fill="#118934"/>
                            </svg>
                            <p class="profil-button-text" style="color: #118934; margin-bottom: 0px;"> Upload Foto Profil </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" onclick='kosongkanGambar()' style="text-decoration: none;">
                        <div class="del_foto p-2">
                            <svg width="19" style="float:left;" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.14483 14.4C7.41464 14.4 7.67341 14.3052 7.86419 14.1364C8.05498 13.9676 8.16217 13.7387 8.16217 13.5V8.1C8.16217 7.8613 8.05498 7.63239 7.86419 7.4636C7.67341 7.29482 7.41464 7.2 7.14483 7.2C6.87501 7.2 6.61625 7.29482 6.42546 7.4636C6.23467 7.63239 6.12748 7.8613 6.12748 8.1V13.5C6.12748 13.7387 6.23467 13.9676 6.42546 14.1364C6.61625 14.3052 6.87501 14.4 7.14483 14.4ZM17.3182 3.6H13.2489V2.7C13.2489 1.98392 12.9273 1.29716 12.355 0.790812C11.7826 0.284464 11.0063 0 10.1968 0H8.16217C7.35272 0 6.57643 0.284464 6.00406 0.790812C5.43169 1.29716 5.11014 1.98392 5.11014 2.7V3.6H1.04078C0.770963 3.6 0.512198 3.69482 0.32141 3.8636C0.130621 4.03239 0.0234375 4.2613 0.0234375 4.5C0.0234375 4.73869 0.130621 4.96761 0.32141 5.1364C0.512198 5.30518 0.770963 5.4 1.04078 5.4H2.05812V15.3C2.05812 16.0161 2.37967 16.7028 2.95204 17.2092C3.5244 17.7155 4.3007 18 5.11014 18H13.2489C14.0583 18 14.8346 17.7155 15.407 17.2092C15.9793 16.7028 16.3009 16.0161 16.3009 15.3V5.4H17.3182C17.5881 5.4 17.8468 5.30518 18.0376 5.1364C18.2284 4.96761 18.3356 4.73869 18.3356 4.5C18.3356 4.2613 18.2284 4.03239 18.0376 3.8636C17.8468 3.69482 17.5881 3.6 17.3182 3.6ZM7.14483 2.7C7.14483 2.46131 7.25201 2.23239 7.4428 2.0636C7.63359 1.89482 7.89235 1.8 8.16217 1.8H10.1968C10.4667 1.8 10.7254 1.89482 10.9162 2.0636C11.107 2.23239 11.2142 2.46131 11.2142 2.7V3.6H7.14483V2.7ZM14.2662 15.3C14.2662 15.5387 14.159 15.7676 13.9682 15.9364C13.7775 16.1052 13.5187 16.2 13.2489 16.2H5.11014C4.84033 16.2 4.58156 16.1052 4.39077 15.9364C4.19999 15.7676 4.0928 15.5387 4.0928 15.3V5.4H14.2662V15.3ZM11.2142 14.4C11.484 14.4 11.7428 14.3052 11.9336 14.1364C12.1243 13.9676 12.2315 13.7387 12.2315 13.5V8.1C12.2315 7.8613 12.1243 7.63239 11.9336 7.4636C11.7428 7.29482 11.484 7.2 11.2142 7.2C10.9444 7.2 10.6856 7.29482 10.4948 7.4636C10.304 7.63239 10.1968 7.8613 10.1968 8.1V13.5C10.1968 13.7387 10.304 13.9676 10.4948 14.1364C10.6856 14.3052 10.9444 14.4 11.2142 14.4Z" fill="#ED3232"/>
                            </svg>
                            <p class="profil-button-text" style="color: #ED3232; margin-bottom: 0px;"> Hapus Foto Profil </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="profil-input">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset disabled>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="disabledTextInput" value="{{ Auth::user()->nama }}">
                            <label for="floatingInput" class="profil-input-label">Nama Lengkap</label>
                        </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset disabled>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="disabledTextInput" value="{{ Auth::user()->nomor_kp }}">
                            <label for="floatingInput" class="profil-input-label">No. Kartu Pegawai</label>
                        </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset disabled>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="disabledTextInput" value="{{ Auth::user()->nip }}">
                            <label for="floatingInput" class="profil-input-label">NIP</label>
                        </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset disabled>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="disabledTextInput" value="{{ Auth::user()->role->nama }}">
                            <label for="floatingInput" class="profil-input-label">Jabatan</label>
                        </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="floatingInput" value="{{ Auth::user()->email }}">
                            <label for="floatingInput" class="profil-input-label">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nomor_telp" id="floatingInput" value="{{ Auth::user()->nomor_telp }}">
                            <label for="floatingInput" class="profil-input-label">No. Telpon</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="alamat" id="floatingInput" value="{{ Auth::user()->alamat }}">
                            <label for="floatingInput" class="profil-input-label">Alamat</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="alert alert-success" role="alert">
                        <svg width="30" height="28" style="float: left; margin-right: 15px;" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.7223 0.208008C22.7332 0.208008 29.2269 6.25487 29.2269 13.7145C29.2269 21.1741 22.7332 27.221 14.7223 27.221C6.71147 27.221 0.217773 21.1741 0.217773 13.7145C0.217773 6.25487 6.71147 0.208008 14.7223 0.208008ZM14.7223 2.90931C11.6449 2.90931 8.69343 4.04771 6.51732 6.07407C4.34121 8.10044 3.11869 10.8488 3.11869 13.7145C3.11869 16.5802 4.34121 19.3286 6.51732 21.3549C8.69343 23.3813 11.6449 24.5197 14.7223 24.5197C17.7998 24.5197 20.7513 23.3813 22.9274 21.3549C25.1035 19.3286 26.326 16.5802 26.326 13.7145C26.326 10.8488 25.1035 8.10044 22.9274 6.07407C20.7513 4.04771 17.7998 2.90931 14.7223 2.90931ZM14.7078 11.0132C15.5172 11.0132 16.1728 11.6237 16.1728 12.3774V19.2981C16.4493 19.4468 16.6654 19.6762 16.7876 19.9509C16.9098 20.2256 16.9312 20.5301 16.8485 20.8173C16.7659 21.1045 16.5838 21.3583 16.3305 21.5393C16.0772 21.7203 15.7669 21.8184 15.4476 21.8184H14.7369C14.5445 21.8184 14.354 21.7831 14.1762 21.7146C13.9985 21.646 13.837 21.5455 13.701 21.4188C13.5649 21.2922 13.457 21.1418 13.3834 20.9763C13.3098 20.8108 13.2719 20.6334 13.2719 20.4542V13.7145C12.8872 13.7145 12.5183 13.5722 12.2463 13.3189C11.9742 13.0656 11.8214 12.7221 11.8214 12.3639C11.8214 12.0056 11.9742 11.6621 12.2463 11.4088C12.5183 11.1555 12.8872 11.0132 13.2719 11.0132H14.7078ZM14.7223 6.96125C15.107 6.96125 15.476 7.10356 15.748 7.35685C16.02 7.61015 16.1728 7.95369 16.1728 8.3119C16.1728 8.67012 16.02 9.01366 15.748 9.26696C15.476 9.52025 15.107 9.66255 14.7223 9.66255C14.3377 9.66255 13.9687 9.52025 13.6967 9.26696C13.4247 9.01366 13.2719 8.67012 13.2719 8.3119C13.2719 7.95369 13.4247 7.61015 13.6967 7.35685C13.9687 7.10356 14.3377 6.96125 14.7223 6.96125Z" fill="#FFFFFF"/>
                        </svg>
                        <h5>Informasi</h5>
                        <p class="lh-sm" >Data dalam kolom abu-abu tidak dapat diubah Jika ada kesalahan, silahkan hubungi Admin</p>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-submit btn-success btn-lg">SIMPAN</button>
                </div>
        </div>
    </div>
    </form>

    <script>
        $(function(){
            $("#upload_link").on('click', function(e){
                e.preventDefault();
                $("#upload:hidden").trigger('click');
            });
        });
    </script>

    <script type='text/javascript'>
        function preview(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <script>
        function kosongkanGambar() {
            var nilai = document.getElementById("upload").value;
            var newSrc = "{{ asset('style/img/avatar/avatar-1.png') }}";
            document.getElementById("output_image").src = newSrc;
            nilai = null;
        }
    </script>
    
@endsection
