<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Montserrat:wght@500&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="{{asset('style/css/login.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="container-title">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img src="{{asset('image/Lambang_Kabupaten_Takalar.png')}}" alt="Lambang_Kabupaten_Takalar">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="text-login" >Kalabbirang</h5>
                </div>
              </div>
        </div>
        <div class="container-body">
            <h6 class="body-title">Masuk</h6>
            <h6 class="body-subTitle">Lengkapi data untuk melanjutkan</h6>
            @if($message = Session::get('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> {{ $message }} </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nik" class="form-label">Nomor Induk Kependudukan</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">
                            <svg fill="none" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                                <path d="m0 0h48v48h-48z" fill="#fff" fill-opacity=".01"/>
                                <g stroke="#000" stroke-linejoin="round" stroke-width="2"><rect height="32" rx="2" width="40" x="4" y="8"/>
                                    <path d="m17 25c2.2091 0 4-1.7909 4-4s-1.7909-4-4-4-4 1.7909-4 4 1.7909 4 4 4z"/>
                                    <path d="m23 31c0-3.3137-2.6863-6-6-6s-6 2.6863-6 6" stroke-linecap="round"/>
                                    <path d="m28 20h8" stroke-linecap="round"/>
                                    <path d="m30 28h6" stroke-linecap="round"/>
                                </g>
                            </svg>
                        </span>
                        <input type="number" class="form-control" placeholder="Masukkan Nomor Induk Kependudukan" name="nik" aria-label="Username" aria-describedby="addon-wrapping" style="border-left-width: 0px;" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nomorTelpon" class="form-label">Nomor Telepon</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" style="border-right-style: solid;border-right-width: 0px;">
                            <svg fill="none" height="48" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg">
                                <path d="m0 0h48v48h-48z" fill="none" fill-opacity=".01"/>
                                <g stroke="#000" stroke-linejoin="round" stroke-width="1">
                                    <path d="m3 4.5v2.00657781c0 8.00812889 6.49187113 14.49999999 14.5 14.49999999h2c.8284271 0 1.5-.6715729 1.5-1.5v-2.5650594c0-.6456456-.4131451-1.2188538-1.0256584-1.4230249l-3.1832548-1.0610849c-.6417146-.2139049-1.3472031.0281537-1.7224171.5909746l-.7289668 1.0934503c-.375214.562821-1.0807025.8048796-1.7224171.5909747l-1.5253997-.5084666c-1.56427308-.5214243-2.76445443-1.7901331-3.19830573-3.3809212l-.62705678-2.2992082c-.20946791-.768049.21755678-1.56595193.97280409-1.81770104l.60255844-.20085281c.63038728-.21012909 1.01422021-.8476391.9049793-1.50308459l-.46152871-2.76917224c-.12054699-.72328196-.74633216-1.25340152-1.47959089-1.25340152h-3.30574582c-.82842712 0-1.5.67157288-1.5 1.5zm-1 0c0-1.38071187 1.11928813-2.5 2.5-2.5h3.30574582c1.22209789 0 2.26507318.88353261 2.46598478 2.08900253l.4615287 2.76917224c.1901374 1.14082387-.4779362 2.25043046-1.57514542 2.61616688l-.60255844.20085281c-.2517491.08391637-.39409066.34988404-.32426802.60590034l.62705677 2.2992082c.34587715 1.2682162 1.30269191 2.2796627 2.54976971 2.6953554l1.5253996.5084665c.2139049.0713016.4490677-.0093846.5741391-.1969916l.7289668-1.0934503c.6253566-.9380349 1.8011709-1.3414659 2.8706952-.9849577l3.1832548 1.0610849c1.0208554.3402851 1.7094306 1.2956322 1.7094306 2.3717082v2.5650594c0 1.3807119-1.1192881 2.5-2.5 2.5h-2c-8.56041362 0-15.5-6.9395864-15.5-15.49999999z"/>
                                </g>
                            </svg>
                        </span>
                        <input type="number" class="form-control" placeholder="Masukkan Nomor Telpon" aria-label="Username" name="nomor_telp" aria-describedby="addon-wrapping" style="border-left-width: 0px;" required>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-success">MASUK</button>
                    <p class="form-footer-text" >Belum Punya Akun? <a href="register">Daftar</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>