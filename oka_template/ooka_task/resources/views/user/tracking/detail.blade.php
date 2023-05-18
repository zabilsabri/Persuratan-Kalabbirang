<!DOCTYPE html>
<html lang="en">

<style>
    .status-title{
        font-family: 'Montserrat';
        font-style: italic;
        font-weight: 600;
        color: #0D4D23;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <title>Track Detail</title>
</head>
<body>
<div class="hal-head text-center">
    <img src="{{ asset('image/Logo.png') }}" width="300px" height="auto" class="img-fluid" alt="logo kalabbirang">
</div>
<div class="hal-body px-5">
    <div class="row">
        <div class="d-flex align-items-center mb-4">
            <div class="flex-shrink-0">
                <button type="button" class="btn btn-success">SEGERA</button>
                <button type="button" class="btn btn-primary">BIASA</button>
                <button type="button" class="btn btn-danger">PENTING</button>
                <button type="button" class="btn btn-dark">RAHASIA</button>    
            </div>
            <div class="flex-grow-1 ms-3 status-title">
                This is some content from a media component. You can replace this with any content and adjust it as needed.
            </div>
        </div>
        <h6 class="no-surat">test</h6>
        <div class="col-sm-6">
            <table class="table table-borderless">
                <tr>    
                    <td class="surat-kategori" >Tanggal Surat</td>
                    <td>:</td>
                    <td class="surat-detail" ></td>
                </tr>
                <tr>
                    <td class="surat-kategori" >Perihal Surat</td>
                    <td>:</td>
                    <td class="surat-detail"></td>
                </tr>
                <tr>
                    <td class="surat-kategori"> Dari </td>
                    <td>:</td>
                    <td class="surat-detail">
                        
                    </td>
                </tr>
                <tr>
                    <td class="surat-kategori" >Kepada</td>
                    <td>:</td>
                    <td class="surat-detail"></td>
                </tr>
                <tr>
                    <td class="surat-kategori" >Jenis Surat</td>
                    <td>:</td>
                    <td class="surat-detail"></td>
                </tr>
            </table>
            </table>
        </div>
        <div class="col-sm-6">
            <div class="lampiran">
                <svg width="30" style="float:left;" height="17" viewBox="0 0 30 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.25 17C5.95 17 4 16.1758 2.4 14.5273C0.8 12.8788 0 10.8697 0 8.5C0 6.1303 0.8 4.12121 2.4 2.47273C4 0.824243 5.95 0 8.25 0H24C25.65 0 27.0625 0.605303 28.2375 1.81591C29.4125 3.02652 30 4.48182 30 6.18182C30 7.88182 29.4125 9.33712 28.2375 10.5477C27.0625 11.7583 25.65 12.3636 24 12.3636H9.75C8.7 12.3636 7.8125 11.9902 7.0875 11.2432C6.3625 10.4962 6 9.58182 6 8.5C6 7.41818 6.3625 6.50379 7.0875 5.75682C7.8125 5.00985 8.7 4.63636 9.75 4.63636H24V6.95455H9.75C9.325 6.95455 8.969 7.10239 8.682 7.39809C8.394 7.69482 8.25 8.06212 8.25 8.5C8.25 8.93788 8.394 9.30467 8.682 9.60036C8.969 9.89709 9.325 10.0455 9.75 10.0455H24C25.05 10.0455 25.9375 9.67197 26.6625 8.925C27.3875 8.17803 27.75 7.26364 27.75 6.18182C27.75 5.1 27.3875 4.18561 26.6625 3.43864C25.9375 2.69167 25.05 2.31818 24 2.31818H8.25C6.6 2.31818 5.1875 2.92349 4.0125 4.13409C2.8375 5.3447 2.25 6.8 2.25 8.5C2.25 10.2 2.8375 11.6553 4.0125 12.8659C5.1875 14.0765 6.6 14.6818 8.25 14.6818H24V17H8.25Z" fill="#909090"/>
                </svg>
                <p class="lampiran-text">Lampiran</p>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#" class="stretched-link">TEST.PDF</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-5">
            <div class="col-sm-6">
                <table class="table table-borderless">
                    <tr>    
                        <td class="surat-kategori" >Pengajuan Pengantaran</td>
                        <td>:</td>
                        <td class="surat-detail" ></td>
                    </tr>
                    <tr>
                        <td class="surat-kategori" >Diterima Kurir</td>
                        <td>:</td>
                        <td class="surat-detail"></td>
                    </tr>
                    <tr>
                        <td class="surat-kategori" >Selesai Diantar</td>
                        <td>:</td>
                        <td class="surat-detail"></td>
                    </tr>
                </table>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>