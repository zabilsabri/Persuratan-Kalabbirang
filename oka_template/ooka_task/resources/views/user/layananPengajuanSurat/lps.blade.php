@extends('user.layouts.app', ['title' => 'Layanan Pengajuan Surat'])
@section('content')
<link rel="stylesheet" href="{{asset('style/css/lps.css')}}">
<div class="lps-head row">
    <p class=" head-title col-md-6"> Layanan Pengajuan Surat </p>
    <div class="col-md-6 mt-2">
        <div class="input-group">
            <input type="text" style="border-top-width: 0px; border-left-width: 0px; border-bottom-width: 0px; border-right-width: 0px;" class="form-control" placeholder="Search this blog">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
            </div>
        </div>
    </div>
</div>

@endsection