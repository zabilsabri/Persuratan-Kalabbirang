<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Montserrat:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    

    {{-- ion icon --}}
    <link rel="stylesheet" href="{{ asset('style/node_modules/ionicons201/css/ionicons.min.css') }}">

    <!-- user style -->
    <link rel="stylesheet" href="{{ asset('style/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/user.css') }}">

    <link rel="stylesheet"
        href="{{ asset('style/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('style/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-green" style="padding-left: 30px; padding-right: 30px;">
        <div class="container-fluid">
            {{-- <img src="{{ asset('image/Lambang_Kabupaten_Takalar.png') }}" alt="Lambang_Kabupaten_Takalar">
            <a class="navbar-brand">Kallabirang</a> --}}
            <img src="{{ asset('image/Logo-black.png') }} " alt="">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('beranda') ? 'active' : '' }} " href="/">Beranda</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('riwayat') || Route::is('riwayat.kosong') ? 'active' : '' }}" href="riwayat">Riwayat</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('berita') || Route::is('detail.berita') ? 'active' : '' }} " href="berita">Berita</a>
                    </li>
                </ul>
                <div class="d-flex">
                    @auth
                    <a href="{{ route('notifikasi') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ffff"
                            class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                        </svg>
                    </a>
                    @endauth
                    <div class="dropdown">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 30px;" width="25" height="25"
                            fill="#ffff" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                    </a>
                    <!-- Jika User Login -->
                    @auth
                    <ul class="dropdown-menu dropdown-menu-lg-end" style="padding-bottom: 0px; min-width:225px;">
                        <div class="profile-dropdown">
                            <img src="{{ asset('temp_file/profile/' . Auth::user()->profil) }}" onerror="this.onerror=null;this.src='{{ asset('style/img/avatar/avatar-1.png') }}';" class="profile-picture-dropdown" alt="profile-picture">
                            <p class="profile-dropdown-name" style="margin-left: 53px;" > {{ Auth::user()->username }} <br> <span class="profile-dropdown-status" > {{ Auth::user()->role->nama }} </span></p>
                        </div>
                        <li class="dropdown-li" >
                            <a class="dropdown-item" href="profil-user">
                                <i class="far fa-user"></i>
                                <span class="dropdown-text">Profil Saya</span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider" style="
                            margin-top: 0px;
                            margin-bottom: 0px;
                        "></li>
                        <li><hr class="dropdown-divider" style="
                            margin-top: 0px;
                            margin-bottom: 0px;
                        "></li>
                        <li class="dropdown-li" >
                            <a class="dropdown-item" href="{{ route('logout') }}">
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 18C1.45 18 0.979 17.8043 0.587 17.413C0.195667 17.021 0 16.55 0 16V2C0 1.45 0.195667 0.979 0.587 0.587C0.979 0.195667 1.45 0 2 0H8C8.55229 0 9 0.447715 9 1C9 1.55228 8.55228 2 8 2H5.5C3.567 2 2 3.567 2 5.5V12.5C2 14.433 3.567 16 5.5 16H8C8.55229 16 9 16.4477 9 17C9 17.5523 8.55228 18 8 18H2ZM13.7252 13.2748C13.3279 13.6721 12.681 13.6636 12.2943 13.2558C11.9218 12.863 11.93 12.245 12.3127 11.8623L12.3579 11.8171C13.0285 11.1465 12.5536 10 11.6053 10H7C6.44771 10 6 9.55229 6 9C6 8.44771 6.44772 8 7 8H11.6053C12.5536 8 13.0285 6.85348 12.3579 6.18294L12.3127 6.13775C11.93 5.755 11.9218 5.13701 12.2943 4.74424C12.681 4.33644 13.3279 4.32786 13.7252 4.72525L15.5332 6.53318C16.8956 7.89557 16.8956 10.1044 15.5332 11.4668L13.7252 13.2748Z" fill="black"/>
                            </svg>
                                <span class="dropdown-text">Keluar</span>
                            </a>
                        </li>
                    </ul>
                    @endauth
                    <!-- Jika User Login -->

                    <!-- Jika User Tidak Login -->
                    <ul class="dropdown-menu dropdown-menu-lg-end" style="padding-bottom: 0px; min-width:225px;">
                        <div class="profile-dropdown">
                            <img src="{{ asset('style/img/avatar/avatar-1.png') }}" class="profile-picture-dropdown" alt="profile-picture">
                            <p class="profile-dropdown-name" style="margin-left: 53px;" >Warga Kalabbirang <br> <span class="profile-dropdown-status" > Guest </span></p>
                        </div>
                        <li class="dropdown-li" >
                            <a class="dropdown-item" href="profil-user">
                                <i class="far fa-user"></i>
                                <span class="dropdown-text">Profil Saya</span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider" style="
                            margin-top: 0px;
                            margin-bottom: 0px;
                        "></li>
                        <li class="dropdown-li" >
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="far fa-user"></i>
                                <span class="dropdown-text">Login</span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider" style="
                            margin-top: 0px;
                            margin-bottom: 0px;
                        "></li>
                    </ul>
                    <!-- Jika User Tidak Login -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
     <script src="{{ asset('style/node_modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('style/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('style/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('style/js/page/modules-ion-icons.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#tableDokumen').DataTable();
        } );
    </script>
    <script>
    $(document).ready( function () {
            $('#tableArsipSurat').DataTable();
        } );
    </script>
</body>

</html>
