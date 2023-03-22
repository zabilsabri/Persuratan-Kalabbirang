@extends('user.layouts.app', ['title' => 'data-ubah'])
@section('content')
<link rel="stylesheet" href="{{ asset('style/css/data-simpan-ubah.css') }}">
<div class="data-simpan">
    <h2 class="head-data-simpan text-center" >Data Pribadi</h2>
    @if ($errors->any())
        <div class="alert-container p-5">
            <div class="alert alert-danger alert-dismissible fade show m-5" role="alert">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    @if($message = Session::get('success'))
        <div class="alert-container p-5">
            <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                <strong> {{$message}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <form action="{{ route('update-data', [Auth::user()->id]) }}" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Nomor Kartu Keluarga</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;background-color: #e9ecef;">
                    <img src="{{ asset('image/icon/form-staff.svg') }}"></img>                        
                </span>
                <input type="number" class="form-control" value="{{ Auth::user()->nomor_kk }}" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;" disabled readonly>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Nomor Induk Kependudukan</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;background-color: #e9ecef;">
                    <img src="{{ asset('image/icon/Id-card.svg') }}"></img>
                </span>
                <input type="number" class="form-control" value="{{ Auth::user()->nik }}" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;" disabled readonly>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Nama Lengkap Sesuai KTP</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;background-color: #e9ecef;">
                    <img src="{{ asset('image/icon/person.svg') }}"></img>
                </span>
                <input type="text" class="form-control" value="{{ Auth::user()->nama }}" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;" disabled readonly>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Nomor Telepon</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;">
                    <img src="{{ asset('image/icon/phone.svg') }}"></img>
                </span>
                <input type="text" name="nomor_telp" class="form-control" value="{{ Auth::user()->nomor_telp }}" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;">
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label for="nomorTelpon" class="form-label">Alamat Email</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;">
                    <img src="{{ asset('image/icon/email.svg') }}"></img>
                </span>
                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;">
            </div>
        </div>
    </div>

    <div class="col-sm-6 mt-5">
        <div class="alert alert-success" role="alert">
        <svg width="30" height="28" style="float: left; margin-right: 15px;" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.7223 0.208008C22.7332 0.208008 29.2269 6.25487 29.2269 13.7145C29.2269 21.1741 22.7332 27.221 14.7223 27.221C6.71147 27.221 0.217773 21.1741 0.217773 13.7145C0.217773 6.25487 6.71147 0.208008 14.7223 0.208008ZM14.7223 2.90931C11.6449 2.90931 8.69343 4.04771 6.51732 6.07407C4.34121 8.10044 3.11869 10.8488 3.11869 13.7145C3.11869 16.5802 4.34121 19.3286 6.51732 21.3549C8.69343 23.3813 11.6449 24.5197 14.7223 24.5197C17.7998 24.5197 20.7513 23.3813 22.9274 21.3549C25.1035 19.3286 26.326 16.5802 26.326 13.7145C26.326 10.8488 25.1035 8.10044 22.9274 6.07407C20.7513 4.04771 17.7998 2.90931 14.7223 2.90931ZM14.7078 11.0132C15.5172 11.0132 16.1728 11.6237 16.1728 12.3774V19.2981C16.4493 19.4468 16.6654 19.6762 16.7876 19.9509C16.9098 20.2256 16.9312 20.5301 16.8485 20.8173C16.7659 21.1045 16.5838 21.3583 16.3305 21.5393C16.0772 21.7203 15.7669 21.8184 15.4476 21.8184H14.7369C14.5445 21.8184 14.354 21.7831 14.1762 21.7146C13.9985 21.646 13.837 21.5455 13.701 21.4188C13.5649 21.2922 13.457 21.1418 13.3834 20.9763C13.3098 20.8108 13.2719 20.6334 13.2719 20.4542V13.7145C12.8872 13.7145 12.5183 13.5722 12.2463 13.3189C11.9742 13.0656 11.8214 12.7221 11.8214 12.3639C11.8214 12.0056 11.9742 11.6621 12.2463 11.4088C12.5183 11.1555 12.8872 11.0132 13.2719 11.0132H14.7078ZM14.7223 6.96125C15.107 6.96125 15.476 7.10356 15.748 7.35685C16.02 7.61015 16.1728 7.95369 16.1728 8.3119C16.1728 8.67012 16.02 9.01366 15.748 9.26696C15.476 9.52025 15.107 9.66255 14.7223 9.66255C14.3377 9.66255 13.9687 9.52025 13.6967 9.26696C13.4247 9.01366 13.2719 8.67012 13.2719 8.3119C13.2719 7.95369 13.4247 7.61015 13.6967 7.35685C13.9687 7.10356 14.3377 6.96125 14.7223 6.96125Z" fill="#0f5132"/>
        </svg>
        <h5>Informasi</h5>
        <p class="lh-sm" >Data dalam kolom abu-abu tidak dapat diubah Jika ada kesalahan, silahkan hubungi Admin</p>
        </div>
    </div>

    </div>

    <div class="form-footer">
        <button type="submit" class="btn btn-success">SIMPAN</button>
    </div>

  </form>

</div>

@endsection