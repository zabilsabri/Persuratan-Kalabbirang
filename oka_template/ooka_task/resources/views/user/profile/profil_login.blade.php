@extends('user.layouts.app', ['title' => 'profil-user'])
@section('content')
<link rel="stylesheet" href="{{asset('style/css/profilLogin.css')}}">
<div class="profile-head mt-5">
    <p>Profil</p>
</div>
<div class="profile-body">
<div class="row">
        <div class="col-md-6  col-12">
            <div class="card-body">
                <figure class="avatar mr-2 avatar-xxl img-fluid">
                    @guest
                    <img src="{{ asset('style/img/avatar/avatar-1.png') }}" class="profile-user-picture" alt="profile-pic">
                    @endguest

                    @auth
                    <img src="{{ asset('temp_file/profile/' . Auth::user()->profil) }}" onerror="this.onerror=null;this.src='{{ asset('style/img/avatar/avatar-1.png') }}';" class="profile-user-picture" alt="profile-pic">
                    <a class="my-box" href="" data-bs-toggle="modal" data-bs-target="#change-picture">
                        <i class=" ion ion-edit ic" style="font-size: 50px; color: #000;"> </i>
                    </a>
                    @endauth
                    
                </figure>

                @auth
                <!-- Modal -->
                <div class="modal fade" id="change-picture" tabindex="-1" aria-labelledby="change-pictureLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="change-pictureLabel">Ubah Photo Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('change-profile-picture', [Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <figure class="avatar mr-2 avatar-xxl">
                            <img id="output_image" src="{{ asset('temp_file/profile/' . Auth::user()->profil) }}" onerror="this.onerror=null;this.src='{{ asset('style/img/avatar/avatar-1.png') }}';" class="profile-user-picture" alt="profile-pic">
                        </figure>
                        <input type="file" name="profile_pic" onchange="preview(event)">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
                @endauth


                <!-- Jika User Login -->
                <div class="text-center mt-3">                
                    @auth
                    <h2 class="profile-user-name">{{ Auth::user()->nama}}</h2>
                    <h5 class="profile-email">{{ Auth::user()->email}}</h5>
                    @endauth

                    @guest
                    <h5 class="profile-email">Silahkan Masuk Terlebih Dahulu</h5>
                    @endguest

                </div>

                <div class="text-center" style="margin-top:30px;">

                @auth
                <a href="{{ route('logout') }}" class="btn btn-outline-success px-5 py-2 bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal">KELUAR</a>
                @endauth

                @guest
                <a href="{{ route('login') }}" class="btn btn-outline-success px-5 py-2 bg-white">MASUK</a>
                @endguest
                
                </div>

                <!-- Modal Logout -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="modal-body-text">
                                    <p>Apakah anda yakin ingin keluar?</p>
                                </div>
                                <div class="modal-body-button">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    <a href="{{ route('logout') }}" type="button" class="btn btn-success">Ya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-6  col-12">
            <h4 style="color:#4FB96E ;">Pengaturan</h4>
            <div class="card">
                <div class="card-body">
                <a href="{{ Auth()->user('id') == '' ? route('login') : route('data-simpan') }}" class="card-link">
                    <svg width="50" height="50" style="float:left;" viewBox="0 0 58 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse opacity="0.05" cx="28.9103" cy="31.4829" rx="28.7955" ry="30.678" fill="#4FB96E"/>
                        <path d="M28.9108 32.8635C21.2397 32.8635 18.5444 37.0051 18.5444 39.7661V43.9076H39.2772V39.7661C39.2772 37.0051 36.5819 32.8635 28.9108 32.8635Z" fill="#4FB96E"/>
                        <path d="M28.9107 31.4832C32.1311 31.4832 34.7418 28.7018 34.7418 25.2709C34.7418 21.8399 32.1311 19.0586 28.9107 19.0586C25.6903 19.0586 23.0796 21.8399 23.0796 25.2709C23.0796 28.7018 25.6903 31.4832 28.9107 31.4832Z" fill="#4FB96E"/>
                    </svg>
                    <div class="card-icon">
                        <div class="card-text">
                            <p class="card-box-text m-0" style="padding-top: 16px;padding-left: 20px;">Data Pribadi</p>
                        </div>
                        <div class="icon">
                            <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.07994 18.0504C2.53728 18.0504 2.90514 17.8935 3.22329 17.5795L10.7097 10.379C11.1372 9.95716 11.3261 9.54514 11.336 9.02521C11.336 8.51509 11.1372 8.08345 10.7097 7.67143L3.23323 0.461071C2.90514 0.15696 2.52734 0 2.07994 0C1.16527 0 0.409668 0.725941 0.409668 1.62846C0.409668 2.07972 0.60851 2.49174 0.946542 2.83509L7.43874 9.03502L0.946542 15.2153C0.598568 15.5587 0.409668 15.9707 0.409668 16.422C0.409668 17.3147 1.16527 18.0504 2.07994 18.0504Z" fill="#ABABAB"/>
                            </svg>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <a href="{{ Auth()->user('id') == '' ? route('login') : route('dokumen') }}" class="card-link">
                    <svg width="50" height="50" style="float:left;" viewBox="0 0 59 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse opacity="0.05" cx="29.3502" cy="30.9829" rx="28.7955" ry="30.678" fill="#4FB96E"/>
                        <path d="M20.7116 15.644C19.9479 15.644 19.2155 15.9673 18.6754 16.5426C18.1354 17.1179 17.832 17.8982 17.832 18.7118V43.2542C17.832 44.0678 18.1354 44.8481 18.6754 45.4235C19.2155 45.9988 19.9479 46.322 20.7116 46.322H37.9889C38.7526 46.322 39.485 45.9988 40.025 45.4235C40.5651 44.8481 40.8684 44.0678 40.8684 43.2542V24.8474L32.2298 15.644H20.7116ZM20.7116 18.7118H30.79V26.3813H37.9889V43.2542H20.7116V18.7118ZM23.5911 30.983V34.0508H35.1093V30.983H23.5911ZM23.5911 37.1186V40.1864H30.79V37.1186H23.5911Z" fill="#4FB96E"/>
                    </svg>
                    <div class="card-icon">
                        <div class="card-text">
                            <p class="card-box-text m-0" style="padding-top: 16px;padding-left: 20px;">Dokumen Saya</p>
                        </div>
                        <div class="icon">
                            <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.07994 18.0504C2.53728 18.0504 2.90514 17.8935 3.22329 17.5795L10.7097 10.379C11.1372 9.95716 11.3261 9.54514 11.336 9.02521C11.336 8.51509 11.1372 8.08345 10.7097 7.67143L3.23323 0.461071C2.90514 0.15696 2.52734 0 2.07994 0C1.16527 0 0.409668 0.725941 0.409668 1.62846C0.409668 2.07972 0.60851 2.49174 0.946542 2.83509L7.43874 9.03502L0.946542 15.2153C0.598568 15.5587 0.409668 15.9707 0.409668 16.422C0.409668 17.3147 1.16527 18.0504 2.07994 18.0504Z" fill="#ABABAB"/>
                            </svg>
                        </div>
                    </div>
                </a>
                </div>
            </div>


            <h4 class="mt-5" style="color:#4FB96E ;">Informasi Umum</h4>
            <div class="card">
                <div class="card-body">
                <a href="/faq" class="card-link">
                    <svg width="50" height="50" style="float:left;" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse opacity="0.05" cx="28.7375" cy="29.3845" rx="28.7151" ry="28.5" fill="#4FB96E"/>
                        <path d="M35.9163 32.947H21.5588L16.7729 37.697V18.697C16.7729 18.3821 16.899 18.08 17.1234 17.8573C17.3478 17.6346 17.6521 17.5095 17.9694 17.5095H35.9163C36.2337 17.5095 36.538 17.6346 36.7624 17.8573C36.9867 18.08 37.1128 18.3821 37.1128 18.697V31.7595C37.1128 32.0745 36.9867 32.3765 36.7624 32.5992C36.538 32.8219 36.2337 32.947 35.9163 32.947ZM41.8986 25.822V42.447L37.1128 37.697H23.9517C23.6344 37.697 23.3301 37.5719 23.1057 37.3492C22.8813 37.1265 22.7553 36.8245 22.7553 36.5095V35.322H39.5057V24.6345H40.7022C41.0195 24.6345 41.3238 24.7596 41.5482 24.9823C41.7726 25.205 41.8986 25.5071 41.8986 25.822ZM24.179 19.8845C23.1381 19.8845 22.3006 20.122 21.6545 20.5851C21.0324 21.072 20.7213 21.7489 20.7332 22.687L20.7452 22.7226H23.0544C23.0663 22.3664 23.174 22.0933 23.3894 21.9033C23.6109 21.7209 23.8913 21.624 24.179 21.6301C24.55 21.6301 24.861 21.7489 25.0764 21.9626C25.2918 22.1883 25.3875 22.497 25.3875 22.8533C25.3875 23.2333 25.3037 23.5539 25.1123 23.827C24.9448 24.1001 24.6935 24.3376 24.3824 24.5276C23.7723 24.9314 23.3535 25.2876 23.1262 25.6083C22.8869 25.917 22.7553 26.4158 22.7553 27.0095H25.1482C25.1482 26.6414 25.196 26.3445 25.3037 26.1308C25.4114 25.917 25.6148 25.7033 25.9139 25.5133C26.4523 25.2283 26.895 24.8839 27.242 24.4089C27.589 23.9339 27.7684 23.447 27.7684 22.8533C27.7684 21.9508 27.4454 21.2264 26.7993 20.692C26.1652 20.1576 25.2918 19.8845 24.179 19.8845ZM22.7553 28.197V30.572H25.1482V28.197H22.7553ZM29.934 30.572H32.327V28.197H29.934V30.572ZM29.934 19.8845V27.0095H32.327V19.8845H29.934Z" fill="#4FB96E"/>
                    </svg>

                        <div class="card-icon">
                            <div class="card-text">
                                <p class="card-box-text m-0" style="padding-top: 16px;padding-left: 20px;">FAQ</p>
                            </div>
                            <div class="icon">
                                <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.07994 18.0504C2.53728 18.0504 2.90514 17.8935 3.22329 17.5795L10.7097 10.379C11.1372 9.95716 11.3261 9.54514 11.336 9.02521C11.336 8.51509 11.1372 8.08345 10.7097 7.67143L3.23323 0.461071C2.90514 0.15696 2.52734 0 2.07994 0C1.16527 0 0.409668 0.725941 0.409668 1.62846C0.409668 2.07972 0.60851 2.49174 0.946542 2.83509L7.43874 9.03502L0.946542 15.2153C0.598568 15.5587 0.409668 15.9707 0.409668 16.422C0.409668 17.3147 1.16527 18.0504 2.07994 18.0504Z" fill="#ABABAB"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="/bantuan" class="card-link">
                    <svg width="50" height="50" style="float:left;" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse opacity="0.05" cx="29.1731" cy="29.1001" rx="28.7151" ry="28.5" fill="#4FB96E"/>
                        <path d="M29.1012 37.6501C29.6037 37.6501 30.0287 37.4777 30.3761 37.1328C30.7226 36.7889 30.8959 36.3676 30.8959 35.8688C30.8959 35.3701 30.7226 34.9488 30.3761 34.6049C30.0287 34.26 29.6037 34.0876 29.1012 34.0876C28.5987 34.0876 28.1737 34.26 27.8262 34.6049C27.4797 34.9488 27.3065 35.3701 27.3065 35.8688C27.3065 36.3676 27.4797 36.7889 27.8262 37.1328C28.1737 37.4777 28.5987 37.6501 29.1012 37.6501ZM27.809 32.1638H30.4651C30.4651 31.3801 30.5551 30.7626 30.7351 30.3113C30.9141 29.8601 31.4223 29.2426 32.2598 28.4588C32.882 27.8413 33.3726 27.2533 33.7315 26.6947C34.0904 26.137 34.2699 25.4663 34.2699 24.6826C34.2699 23.3526 33.7793 22.3313 32.7983 21.6188C31.8172 20.9063 30.6566 20.5501 29.3165 20.5501C27.9526 20.5501 26.8461 20.9063 25.9971 21.6188C25.1471 22.3313 24.5546 23.1863 24.2196 24.1838L26.5886 25.1101C26.7083 24.6826 26.9777 24.2195 27.3969 23.7207C27.8152 23.222 28.4551 22.9726 29.3165 22.9726C30.0823 22.9726 30.6566 23.1802 31.0395 23.5953C31.4223 24.0114 31.6138 24.4688 31.6138 24.9676C31.6138 25.4426 31.4702 25.8877 31.183 26.3028C30.8959 26.7189 30.5369 27.1051 30.1062 27.4613C29.0533 28.3876 28.4072 29.0882 28.1679 29.5632C27.9287 30.0382 27.809 30.9051 27.809 32.1638ZM29.173 43.3501C27.1868 43.3501 25.3204 42.9758 23.5735 42.2272C21.8267 41.4795 20.3072 40.4645 19.015 39.182C17.7228 37.8995 16.7001 36.3913 15.9468 34.6576C15.1926 32.9238 14.8154 31.0713 14.8154 29.1001C14.8154 27.1288 15.1926 25.2763 15.9468 23.5426C16.7001 21.8088 17.7228 20.3007 19.015 19.0182C20.3072 17.7357 21.8267 16.7202 23.5735 15.9716C25.3204 15.2239 27.1868 14.8501 29.173 14.8501C31.1591 14.8501 33.0256 15.2239 34.7724 15.9716C36.5192 16.7202 38.0388 17.7357 39.3309 19.0182C40.6231 20.3007 41.6458 21.8088 42.3991 23.5426C43.1534 25.2763 43.5305 27.1288 43.5305 29.1001C43.5305 31.0713 43.1534 32.9238 42.3991 34.6576C41.6458 36.3913 40.6231 37.8995 39.3309 39.182C38.0388 40.4645 36.5192 41.4795 34.7724 42.2272C33.0256 42.9758 31.1591 43.3501 29.173 43.3501ZM29.173 40.5001C32.3795 40.5001 35.0955 39.3957 37.3209 37.187C39.5463 34.9782 40.659 32.2826 40.659 29.1001C40.659 25.9176 39.5463 23.222 37.3209 21.0132C35.0955 18.8045 32.3795 17.7001 29.173 17.7001C25.9665 17.7001 23.2505 18.8045 21.0251 21.0132C18.7996 23.222 17.6869 25.9176 17.6869 29.1001C17.6869 32.2826 18.7996 34.9782 21.0251 37.187C23.2505 39.3957 25.9665 40.5001 29.173 40.5001Z" fill="#4FB96E"/>
                    </svg>
                    <div class="card-icon">
                        <div class="card-text">
                            <p class="card-box-text m-0" style="padding-top: 16px;padding-left: 20px;">Bantuan</p>
                        </div>
                        <div class="icon">
                            <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.07994 18.0504C2.53728 18.0504 2.90514 17.8935 3.22329 17.5795L10.7097 10.379C11.1372 9.95716 11.3261 9.54514 11.336 9.02521C11.336 8.51509 11.1372 8.08345 10.7097 7.67143L3.23323 0.461071C2.90514 0.15696 2.52734 0 2.07994 0C1.16527 0 0.409668 0.725941 0.409668 1.62846C0.409668 2.07972 0.60851 2.49174 0.946542 2.83509L7.43874 9.03502L0.946542 15.2153C0.598568 15.5587 0.409668 15.9707 0.409668 16.422C0.409668 17.3147 1.16527 18.0504 2.07994 18.0504Z" fill="#ABABAB"/>
                            </svg>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script type='text/javascript'>
        function preview(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
