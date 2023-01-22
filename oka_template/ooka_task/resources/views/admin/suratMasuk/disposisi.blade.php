@extends('admin.layouts.app', ['title' => 'Surat Masuk'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Kirim Disposisi </h1>
    </div>
    <div class="hal-body">
        <div class="row">
            <h6 class="no-surat">No. Surat</h6>
            <div class="col-sm-5">
                <table class="table table-borderless">
                    <tr>
                        <td class="surat-kategori">No. Agenda</td>
                        <td>:</td>
                        <td class="surat-detail">2 Desember 2022</td>
                    </tr>

                    <tr>
                        <td class="surat-kategori">Tanggal Surat</td>
                        <td>:</td>
                        <td class="surat-detail">2 Desember 2022</td>
                    </tr>

                    <tr>
                        <td class="surat-kategori">Jenis Surat</td>
                        <td>:</td>
                        <td class="surat-detail">Undangan</td>
                    </tr>

                    <tr>
                        <td class="surat-kategori">Perihal Surat</td>
                        <td>:</td>
                        <td class="surat-detail"></td>
                    </tr>

                    <tr>
                        <td class="surat-kategori"> Dari </td>
                        <td>:</td>
                        <td class="surat-detail">
                            Lorem ipsum
                            <br>
                            <span class="bidang-pengirim">Bidang Lorem Ipsum</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="surat-kategori">Kepada</td>
                        <td>:</td>
                        <td class="surat-detail"></td>
                    </tr>



                </table>



            </div>

            <div class="col-sm-3">

                <div class=" form-group">
                    <h4 class="surat-kategori col-form-label ">Tanggal Surat</h4>
                    <div class="">
                        <input type="date" class="form-control " id="floatingInput" placeholder="" value="">
                    </div>
                </div>
                <div class=" form-group">
                    <h4 class="surat-kategori col-form-label ">Penerima</h4>
                    <div class="">
                        <select class="form-control" id="floatingInput">
                            <option>Pilih Penerima</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
                <div class=" form-group">
                    <h4 class="surat-kategori col-form-label ">Instruksi</h4>
                    <div class="">
                        <select class="form-control" id="floatingInput">
                            <option>Pilih Instruksi</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>



            </div>
            <div class="col-sm-4">

                <div class="row form-group ms-0 ms-md-5">
                    <h4 class="surat-kategori col-form-label ">Sifat Surat</h4>
                    <div class="ms-4  ">

                        <div class="form-check">
                            <input class="form-check-input fs-3" type="checkbox" id="defaultCheck1">
                            <label class="form-check-label fs-4 px-0" for="defaultCheck1">
                                Rahasia
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input fs-3" type="checkbox" id="defaultCheck2">
                            <label class="form-check-label fs-4 px-0" for="defaultCheck2">
                                Penting
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input fs-3" type="checkbox" id="defaultCheck3">
                            <label class="form-check-label fs-4 px-0" for="defaultCheck3">
                                Biasa
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input fs-3" type="checkbox" id="defaultCheck4">
                            <label class="form-check-label fs-4 px-0" for="defaultCheck4">
                                Segera
                            </label>
                        </div>

                    </div>

                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 class="surat-kategori col-form-label ">Catatan</h4>
                <div class="row form-group">
                    <div class="col-sm-10 ">
                        <textarea class="form-control" style="height: 150px"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <button class="btn btn-success px-5 my-btn justify-content-center" style="margin-top: 140px; " type="submit">
                    <div class="button-text flex-grow-1  ">
                        Kirim Disposisi
                    </div>
                </button>

            </div>
        </div>
    </div>
@endsection
