@extends('admin.layouts.app', ['title' => 'Admin Berita'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/paginate.css') }}">
    <div class="section-header">
        <h1>Berita</h1>
    </div>

    <div class="section-body">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class=" text-right px-4 pt-4">
                        <a class="btn text-white btn-success">
                            <i class="ion ion-plus"></i> Tambah Berita
                        </a>
                    </div>
                    <div class="p-3 d-flex justify-content-between">

                        <div class="dataTables_length " id="table-1_length">
                            <div class="d-flex mt-4">
                                <span class=" mx-2 mt-2">Tampilkan </span>
                                <select name="table-1_length" aria-controls="table-1"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <span class="mx-2 mt-2"> entri</span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div id="table-1_filter" class="dataTables_filter">
                                <label>Cari:
                                    <input type="search" class="form-control form-control-sm" placeholder=""
                                        aria-controls="table-1">
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <thead class="bg-success  ">
                                    <tr>
                                        <th class="text-white text-center">
                                            No
                                        </th>
                                        <th class="text-white" width="35%">Judul Berita</th>
                                        <th class="text-white" width="20%">Sumber</th>
                                        <th class="text-center text-white">Tgl Publikasi</th>
                                        <th class="text-white" width="15%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            {{ Str::limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quos alkdjasmas , asdkasdoklasd sds adasdsd.', 50, '...') }}
                                        </td>

                                        <td>
                                            {{ Str::limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quos alkdjasmas , asdkasdoklasd sds adasdsd.', 25, '...') }}
                                        </td>

                                        <td class="text-center">2018-01-20</td>

                                        <td>
                                            <a href="#" class="btn btn-warning">
                                                <i class="ion ion-information"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary">
                                                <i class="ion ion-compose"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger">
                                                <i class="ion ion-trash-a"></i>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <nav class="d-inline-block">
                            <ul class="pagination  mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link " href="#" tabindex="-1"><i
                                            class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active "><a class="page-link" href="#">1 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
