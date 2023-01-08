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
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('riwayat') || Route::is('riwayat.kosong') ? 'active' : '' }}" href="riwayat">Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('berita') || Route::is('detail.berita') ? 'active' : '' }} " href="berita">Berita</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ffff"
                            class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 30px;" width="25" height="25"
                            fill="#ffff" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('style/js/page/modules-ion-icons.js') }}"></script>


</body>

</html>
