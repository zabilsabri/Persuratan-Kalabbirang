@extends('admin.layouts.app', ['title' => 'Detail Profile'])
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">
@section('content')
    <div class="hal-body pt-4">
        <div class="row">
            <div class="profil-input col-6">
                <img src="{{ asset('style/img/avatar/avatar-1.png') }}" class="profile-picture-user mb-4" width="300px" height="305px" alt="...">
                <fieldset disabled>
                    <div class="row justify-content-center">
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-floating mb-3 w-50">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Lorem Ipsum Dolor" value="Lorem Ipsum Dolor">
                                <label for="floatingInput" class="profil-input-label">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="00000000000000000000000" value="00000000000000000000000">
                                <label for="floatingInput" class="profil-input-label">No. Kartu Keluarga</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="00000000000000000000000" value="00000000000000000000000">
                                <label for="floatingInput" class="profil-input-label">Nomor Induk Kependudukan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Loremipsum@gmail.com" value="Loremipsum@gmail.com">
                                <label for="floatingInput" class="profil-input-label">Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="000000000000000000" value="000000000000000000">
                                <label for="floatingInput" class="profil-input-label">No. Telepon</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="card col-4">
                <div class="card-header">
                <h4>Dokumen Tersimpan</h4>
                </div>
                <div class="card-body">
                <div class="gallery gallery-fw" data-item-height="100">
                    <!-- <div class="gallery-item" data-image="assets/img/news/img09.jpg" data-title="Image 1" href="assets/img/news/img09.jpg" title="Image 1" style="height: 100px; background-image: url(&quot;assets/img/news/img09.jpg&quot;);"></div>
                    <div class="gallery-item" data-image="assets/img/news/img10.jpg" data-title="Image 2" href="assets/img/news/img10.jpg" title="Image 2" style="height: 100px; background-image: url(&quot;assets/img/news/img10.jpg&quot;);"></div>
                    <div class="gallery-item gallery-more" data-image="assets/img/news/img08.jpg" data-title="Image 3" href="assets/img/news/img08.jpg" title="Image 3" style="height: 100px; background-image: url(&quot;assets/img/news/img08.jpg&quot;);">
                    <div style="line-height: 100px;">+2</div>
                    </div>
                    <div class="gallery-item gallery-hide" data-image="assets/img/news/img01.jpg" data-title="Image 4" href="assets/img/news/img01.jpg" title="Image 4" style="height: 100px; background-image: url(&quot;assets/img/news/img01.jpg&quot;);"></div> -->
                </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4 mb-3">
            <a class="btn btn-success w-25" href="{{ route('edit-warga') }}" role="button">UBAH DATA WARGA</a>
        </div>
    </div>
    
@endsection
