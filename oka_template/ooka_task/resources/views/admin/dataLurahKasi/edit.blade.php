@extends('admin.layouts.app', ['title' => 'Edit Profile'])
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">
@section('content')
    <div class="hal-body pt-4">
        <img src="{{ asset('style/img/avatar/avatar-1.png') }}" class="profile-picture-user mb-4" width="300px" height="305px" alt="...">
        <div class="profil-input">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Lorem Ipsum Dolor" value="Lorem Ipsum Dolor">
                            <label for="floatingInput" class="profil-input-label">Nama Lengkap</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="00000000000000000000000" value="00000000000000000000000">
                            <label for="floatingInput" class="profil-input-label">No. Kartu Kasi</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="00000000000000000000000" value="00000000000000000000000">
                            <label for="floatingInput" class="profil-input-label">NIP</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Lorem Ipsum Dolor" value="Lorem Ipsum Dolor">
                            <label for="floatingInput" class="profil-input-label">Jabatan</label>
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
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Lorem Ipsum" value="Lorem Ipsum">
                            <label for="floatingInput" class="profil-input-label">Alamat</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="signature-pad text-right mt-4">
                            <p class="signature-pad-text" > Tanda Tangan Digital </p>
                            <div id="sig" style="width: 80%"></div>
                            <br/>
                            <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a class="btn btn-success w-25" href="{{ route('edit-lurah-kasi') }}" role="button">UBAH DATA</a>
                </div>
        </div>
    </div>
    
    <script type="text/javascript">
        var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
@endsection
