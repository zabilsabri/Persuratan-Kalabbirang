<!DOCTYPE html>
<html lang="en">

<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 95vh;
    }

    .form-control{
        border: 2px solid #4FB96E !important;
    }

    .main-title{
        color: #4FB96E;
        font-size: 19px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Tracking Surat</title>
</head>
<body>
    <div class="main text-center w-50">
        <img src="{{ asset('image/Logo.png') }}" width="400px" height="auto" class="img-fluid" alt="logo kalabbirang">
        <p class="main-title" >Silahkan masukkan ID yang telah diberikan oleh Admin</p>
        <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example">
        <div class="d-grid gap-2 col-6 mx-auto mt-3">
            <button class="btn btn-success" type="button">Cari</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>