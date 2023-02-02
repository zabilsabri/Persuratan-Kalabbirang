<div class="navbar-bg bg-light"></div>
            <nav class="navbar navbar-expand-lg main-navbar">

                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" data-toggle="sidebar" class="test nav-link nav-link-lg"><i
                                class="fas fa-bars" style="height: 40px; padding-top: 5px;"></i></a>
                    </li>
                    <li>
                        
                    </li>
                </ul>

                <ul class="navbar-nav navbar-right" style="margin-top: 17px;">

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="" title="Administrator" src="{{ asset('style/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1" style="margin-bottom: 17px;"/>
                            <div class="d-sm-none d-lg-inline-block lh-1">
                                <span class="nama-navbar" > Hi, Ujang Maman </span>
                                <br>
                                <span class="level-navbar" > Kasi </span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <a href="{{ route('profil-kasi') }}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile Saya
                            </a>

                            <a href="#" class="dropdown-item has-icon text-danger" data-bs-toggle="modal" data-bs-target="#modalLogout">
                                <i class="fas fa-sign-out-alt"></i> Keluar
                            </a>
                        </div>
                    </li>
                </ul>

            </nav>

            <!-- Modal Logout -->
            <div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="modalLogoutLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-body-text">
                                <p>Apakah anda yakin ingin keluar?</p>
                            </div>
                            <div class="modal-body-button">
                                <button type="button" class="btn btn-modal btn-secondary-modal" data-bs-dismiss="modal">Tidak</button>
                                <button type="button" class="btn btn-modal btn-success-modal">Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>