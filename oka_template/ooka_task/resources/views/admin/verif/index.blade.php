@extends('admin.layouts.app', ['title' => 'Verifikasi User'])
<link rel="stylesheet" href="{{ asset('style/css/verifikasiUser.css')}}">

@section('content')
    <div class="hal-head">
        <h1>Verifikasi Warga</h1>
    </div>
    <div class="section-body">
        <div class="inner-section-body">
            <div class="row ps-4 pe-4 justify-content-between">
                
                <div class="col-sm-2">
                    <div class="dataTables_length " id="table-1_length">
                        <div class="d-flex mt-4">
                            <span class=" mx-2 mt-2">Tampilkan </span>
                            <select name="table-1_length" aria-controls="table-1" style="width: 50px;"
                                class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span class="mx-2 mt-2"> entri</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="mt-3">
                        <div id="table-1_filter" class="dataTables_filter">
                            <select class="form-control" id="floatingInput" style="width: 200px;"> 
                                <option>Semua</option>
                                <option>Status Verifikasi</option>
                                <option>Belum Terverifikasi</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        
            <div class="row">
                <div class="user-box col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="25" cy="25" r="25" fill="#FF5757"/>
                                        <path d="M28.4357 25.7144L37.0813 17.0826L37.0815 17.0823C37.4443 16.7195 37.6481 16.2275 37.6481 15.7144C37.6481 15.2014 37.4443 14.7094 37.0815 14.3466C36.7188 13.9838 36.2267 13.78 35.7137 13.78C35.2007 13.78 34.7086 13.9838 34.3459 14.3466L34.3456 14.3469L25.7137 22.9925L17.0818 14.3469L17.0815 14.3466C16.7188 13.9838 16.2267 13.78 15.7137 13.78C15.2007 13.78 14.7086 13.9838 14.3459 14.3466C13.9831 14.7094 13.7793 15.2014 13.7793 15.7144C13.7793 16.2275 13.9831 16.7195 14.3459 17.0823L14.3462 17.0826L22.9918 25.7144L14.3473 34.3452C14.3471 34.3453 14.3469 34.3455 14.3467 34.3457C14.1663 34.5249 14.023 34.738 13.9252 34.9728L14.3867 35.165L13.9252 34.9728C13.8273 35.2078 13.7769 35.4598 13.7769 35.7144C13.7769 35.969 13.8273 36.2211 13.9252 36.4561L14.3861 36.2641L13.9252 36.4561C14.0228 36.6905 14.1658 36.9033 14.3459 37.0823C14.5249 37.2624 14.7376 37.4053 14.972 37.503C15.207 37.6009 15.4591 37.6513 15.7137 37.6513C15.9683 37.6513 16.2204 37.6009 16.4554 37.503C16.69 37.4052 16.903 37.2621 17.0821 37.0818C17.0824 37.0815 17.0827 37.0811 17.083 37.0808L25.7137 28.4364L34.3444 37.0808C34.3446 37.081 34.3448 37.0813 34.3451 37.0815C34.5242 37.2619 34.7373 37.4052 34.972 37.503C35.207 37.6009 35.4591 37.6513 35.7137 37.6513C35.9683 37.6513 36.2204 37.6009 36.4554 37.503C36.6898 37.4053 36.9026 37.2624 37.0816 37.0823C37.2616 36.9033 37.4046 36.6905 37.5022 36.4561C37.6002 36.2211 37.6506 35.969 37.6506 35.7144C37.6506 35.4599 37.6002 35.2078 37.5022 34.9728C37.4044 34.738 37.2612 34.5249 37.0807 34.3458C37.0805 34.3456 37.0803 34.3454 37.0801 34.3452L28.4357 25.7144Z" fill="white" stroke="white"/>
                                    </svg>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="nama-user"><a href="{{ route('not-verif') }}" class="text-black stretched-link">Mamet</a></h6>
                                        <p class="tanggal-user" >11/01/2023</p>
                                    </div>
                                    <h6 class="telpon-user-red">+62 8XX XXXX XXXX</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-box col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#4FB96E"/>
                                    <path d="M13.2808 26.6748L21.0933 34.4873L36.7183 17.7462" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="nama-user"><a href="{{ route('yes-verif') }}" class="text-black stretched-link">Zabil</a></h6>
                                        <p class="tanggal-user" >10/05/2003</p>
                                    </div>
                                    <h6 class="telpon-user-green">+62 8XX XXXX XXXX</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
