<div class="main-sidebar sidebar-style-2">
   <aside id="sidebar-wrapper">
       <div class="sidebar-brand mb-4">
           <a href="{{ route('dashboard-admin') }}">
               <img src="{{ asset('image/Logo.png') }}" alt="">
           </a>
       </div>
       <div class="sidebar-brand sidebar-brand-sm">
           <a href="index.html">
               <img src="{{ asset('image/icon.png') }}" alt="">
           </a>
       </div>
       <ul class="sidebar-menu">
           <li class="menu-header">Home</li>
           <li class="{{ Route::is('dashboard-admin') ? 'active' : '' }}" ><a class="nav-link" href="{{ route('dashboard-admin') }}"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
           <li class="nav-item dropdown {{ Route::is('surat-masuk-admin') || Route::is('surat-keluar-admin') || Route::is('surat-arsip-admin') || Route::is('surat-antar') ? 'active' : '' }}">
               <a href="#" class="nav-link has-dropdown"><i
                       class="fas fa-th-large"></i><span>Surat</span></a>
               <ul class="dropdown-menu">
                   <li class="{{ Route::is('surat-masuk-admin') ? 'active' : '' }}" >
                        <a class="nav-link" href="{{ route('surat-masuk-admin') }} "> 
                            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.6673 21.8882C15.6673 21.5057 15.714 21.1344 15.7723 20.7632H5.16732V9.51318L14.5007 15.1382L23.834 9.51318V15.2394C24.674 15.3744 25.4557 15.6557 26.1673 16.0494V7.26318C26.1673 6.02568 25.1173 5.01318 23.834 5.01318H5.16732C3.88398 5.01318 2.83398 6.02568 2.83398 7.26318V20.7632C2.83398 22.0007 3.88398 23.0132 5.16732 23.0132H15.7723C15.714 22.6419 15.6673 22.2707 15.6673 21.8882ZM23.834 7.26318L14.5007 12.8882L5.16732 7.26318H23.834ZM21.5007 18.5132V20.7632H26.1673V23.0132H21.5007V25.2632L18.0007 21.8882L21.5007 18.5132Z" fill="#4FB96E"/>
                            </svg> <span class="ms-2">Surat Masuk</span>
                        </a>
                   </li>
                   <li class="{{ Route::is('surat-keluar-admin') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('surat-keluar-admin') }} "> 
                            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.6673 21.8882C15.6673 21.5057 15.714 21.1344 15.7723 20.7632H5.16732V9.51318L14.5007 15.1382L23.834 9.51318V15.2394C24.674 15.3744 25.4557 15.6557 26.1673 16.0494V7.26318C26.1673 6.02568 25.1173 5.01318 23.834 5.01318H5.16732C3.88398 5.01318 2.83398 6.02568 2.83398 7.26318V20.7632C2.83398 22.0007 3.88398 23.0132 5.16732 23.0132H15.7723C15.714 22.6419 15.6673 22.2707 15.6673 21.8882ZM23.834 7.26318L14.5007 12.8882L5.16732 7.26318H23.834ZM23.834 25.2632V23.0132H19.1673V20.7632H23.834V18.5132L27.334 21.8882L23.834 25.2632Z" fill="#4FB96E"/>
                            </svg> <span class="ms-2">Surat Keluar</span>
                        </a>
                   </li>
                   <li class="{{ Route::is('surat-arsip-admin') ? 'active' : '' }}" >
                        <a class="nav-link" href="{{ route('surat-arsip-admin') }}"> 
                        <svg width="31" height="28" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.66667 24.25C4.93333 24.25 4.30533 24.0299 3.78267 23.5896C3.26089 23.1486 3 22.6187 3 22V7.9375C3 7.65625 3.05556 7.40312 3.16667 7.17812C3.27778 6.95312 3.42222 6.7375 3.6 6.53125L5.46667 4.61875C5.64444 4.4125 5.86667 4.25763 6.13333 4.15413C6.4 4.05138 6.68889 4 7 4H23C23.3111 4 23.6 4.05138 23.8667 4.15413C24.1333 4.25763 24.3556 4.4125 24.5333 4.61875L26.4 6.53125C26.5778 6.7375 26.7222 6.95312 26.8333 7.17812C26.9444 7.40312 27 7.65625 27 7.9375V22C27 22.6187 26.7391 23.1486 26.2173 23.5896C25.6947 24.0299 25.0667 24.25 24.3333 24.25H5.66667ZM6.2 7.375H23.8L22.6667 6.25H7.33333L6.2 7.375ZM5.66667 22H24.3333V9.625H5.66667V22ZM15 20.3969C15.1778 20.3969 15.3444 20.3732 15.5 20.326C15.6556 20.2795 15.8 20.2 15.9333 20.0875L19.4 17.1625C19.6444 16.9563 19.7667 16.6938 19.7667 16.375C19.7667 16.0562 19.6444 15.7937 19.4 15.5875C19.1556 15.3813 18.8444 15.2781 18.4667 15.2781C18.0889 15.2781 17.7778 15.3813 17.5333 15.5875L16.3333 16.6V13C16.3333 12.6812 16.2058 12.4139 15.9507 12.1979C15.6947 11.9826 15.3778 11.875 15 11.875C14.6222 11.875 14.3058 11.9826 14.0507 12.1979C13.7947 12.4139 13.6667 12.6812 13.6667 13V16.6L12.4667 15.5875C12.2222 15.3813 11.9111 15.2781 11.5333 15.2781C11.1556 15.2781 10.8444 15.3813 10.6 15.5875C10.3556 15.7937 10.2333 16.0562 10.2333 16.375C10.2333 16.6938 10.3556 16.9563 10.6 17.1625L14.0667 20.0875C14.2 20.2 14.3444 20.2795 14.5 20.326C14.6556 20.3732 14.8222 20.3969 15 20.3969Z" fill="#4FB96E"/>
                        </svg> <span class="ms-2">Arsip Surat</span>
                        </a>
                   </li>
                   <li class="{{ Route::is('surat-antar') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('surat-antar') }}"> 
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1476_5295)">
                            <path d="M23.8333 5.01318C24.422 5.013 24.989 5.22739 25.4206 5.61337C25.8523 5.99934 26.1167 6.52838 26.1608 7.09443L26.1667 7.26318V20.7632C26.1669 21.3308 25.9445 21.8776 25.5443 22.2938C25.144 22.71 24.5953 22.965 24.0083 23.0076L23.8333 23.0132H5.16667C4.57799 23.0134 4.01101 22.799 3.57936 22.413C3.14772 22.027 2.88332 21.498 2.83917 20.9319L2.83333 20.7632V19.6382H5.16667V20.7632H23.8333V8.85393L15.7367 16.6614C15.4304 16.9567 15.0215 17.132 14.589 17.1534C14.1565 17.1748 13.7312 17.0408 13.3952 16.7773L13.2622 16.6614L5.16667 8.85393V9.51318H2.83333V7.26318C2.83315 6.69554 3.05547 6.1488 3.45575 5.73257C3.85602 5.31634 4.40465 5.06138 4.99167 5.01881L5.16667 5.01318H23.8333ZM7.5 15.1382C7.80942 15.1382 8.10616 15.2567 8.32496 15.4677C8.54375 15.6787 8.66667 15.9648 8.66667 16.2632C8.66667 16.5616 8.54375 16.8477 8.32496 17.0587C8.10616 17.2697 7.80942 17.3882 7.5 17.3882H1.66667C1.35725 17.3882 1.0605 17.2697 0.841709 17.0587C0.622916 16.8477 0.5 16.5616 0.5 16.2632C0.5 15.9648 0.622916 15.6787 0.841709 15.4677C1.0605 15.2567 1.35725 15.1382 1.66667 15.1382H7.5ZM22.1837 7.26318H6.81633L14.5 14.6724L22.1837 7.26318ZM6.33333 11.7632C6.63069 11.7635 6.9167 11.8733 7.13293 12.0701C7.34915 12.267 7.47927 12.536 7.4967 12.8223C7.51413 13.1085 7.41755 13.3904 7.22669 13.6102C7.03584 13.8301 6.76511 13.9714 6.46983 14.0053L6.33333 14.0132H2.83333C2.53597 14.0129 2.24996 13.9031 2.03374 13.7062C1.81751 13.5094 1.68739 13.2404 1.66997 12.9541C1.65254 12.6679 1.74912 12.386 1.93998 12.1661C2.13083 11.9462 2.40155 11.8049 2.69683 11.7711L2.83333 11.7632H6.33333Z" fill="#4FB96E"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_1476_5295">
                            <rect width="28" height="27" fill="white" transform="translate(0.5 0.513184)"/>
                            </clipPath>
                            </defs>
                        </svg> <span class="ms-2">Antar Surat</span>
                        </a>
                   </li>
               </ul>
           </li>
           <li class="nav-item dropdown {{ Route::is('berita-admin') ? 'active' : '' }}">
               <a href="#" class="nav-link has-dropdown"><i
                       class="fas fa-th-large"></i><span>Berita</span></a>
               <ul class="dropdown-menu">
                   <li class="{{ Route::is('berita-admin') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('berita-admin') }} "> 
                        <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.75 8.32568C5.51794 8.32568 5.29538 8.40799 5.13128 8.55451C4.96719 8.70102 4.875 8.89973 4.875 9.10693C4.875 9.31413 4.96719 9.51285 5.13128 9.65936C5.29538 9.80587 5.51794 9.88818 5.75 9.88818H21.5C21.7321 9.88818 21.9546 9.80587 22.1187 9.65936C22.2828 9.51285 22.375 9.31413 22.375 9.10693C22.375 8.89973 22.2828 8.70102 22.1187 8.55451C21.9546 8.40799 21.7321 8.32568 21.5 8.32568H5.75ZM5.3125 11.4507C5.19647 11.4507 5.08519 11.4918 5.00314 11.5651C4.92109 11.6384 4.875 11.7377 4.875 11.8413C4.875 11.9449 4.92109 12.0443 5.00314 12.1175C5.08519 12.1908 5.19647 12.2319 5.3125 12.2319H21.9375C22.0535 12.2319 22.1648 12.1908 22.2469 12.1175C22.3289 12.0443 22.375 11.9449 22.375 11.8413C22.375 11.7377 22.3289 11.6384 22.2469 11.5651C22.1648 11.4918 22.0535 11.4507 21.9375 11.4507H5.3125ZM17.125 14.1851C17.125 14.0815 17.1711 13.9821 17.2531 13.9088C17.3352 13.8356 17.4465 13.7944 17.5625 13.7944H21.9375C22.0535 13.7944 22.1648 13.8356 22.2469 13.9088C22.3289 13.9821 22.375 14.0815 22.375 14.1851C22.375 14.2887 22.3289 14.388 22.2469 14.4613C22.1648 14.5345 22.0535 14.5757 21.9375 14.5757H17.5625C17.4465 14.5757 17.3352 14.5345 17.2531 14.4613C17.1711 14.388 17.125 14.2887 17.125 14.1851ZM17.5625 16.1382C17.4465 16.1382 17.3352 16.1793 17.2531 16.2526C17.1711 16.3259 17.125 16.4252 17.125 16.5288C17.125 16.6324 17.1711 16.7318 17.2531 16.805C17.3352 16.8783 17.4465 16.9194 17.5625 16.9194H21.9375C22.0535 16.9194 22.1648 16.8783 22.2469 16.805C22.3289 16.7318 22.375 16.6324 22.375 16.5288C22.375 16.4252 22.3289 16.3259 22.2469 16.2526C22.1648 16.1793 22.0535 16.1382 21.9375 16.1382H17.5625ZM17.125 18.8726C17.125 18.769 17.1711 18.6696 17.2531 18.5963C17.3352 18.5231 17.4465 18.4819 17.5625 18.4819H21.9375C22.0535 18.4819 22.1648 18.5231 22.2469 18.5963C22.3289 18.6696 22.375 18.769 22.375 18.8726C22.375 18.9762 22.3289 19.0755 22.2469 19.1488C22.1648 19.222 22.0535 19.2632 21.9375 19.2632H17.5625C17.4465 19.2632 17.3352 19.222 17.2531 19.1488C17.1711 19.0755 17.125 18.9762 17.125 18.8726ZM17.5625 20.8257C17.4465 20.8257 17.3352 20.8668 17.2531 20.9401C17.1711 21.0134 17.125 21.1127 17.125 21.2163C17.125 21.3199 17.1711 21.4193 17.2531 21.4925C17.3352 21.5658 17.4465 21.6069 17.5625 21.6069H21.9375C22.0535 21.6069 22.1648 21.5658 22.2469 21.4925C22.3289 21.4193 22.375 21.3199 22.375 21.2163C22.375 21.1127 22.3289 21.0134 22.2469 20.9401C22.1648 20.8668 22.0535 20.8257 21.9375 20.8257H17.5625ZM4.875 15.3569C4.875 14.9425 5.05937 14.5451 5.38756 14.2521C5.71575 13.9591 6.16087 13.7944 6.625 13.7944H13.625C14.0891 13.7944 14.5342 13.9591 14.8624 14.2521C15.1906 14.5451 15.375 14.9425 15.375 15.3569V20.0444C15.375 20.4588 15.1906 20.8563 14.8624 21.1493C14.5342 21.4423 14.0891 21.6069 13.625 21.6069H6.625C6.16087 21.6069 5.71575 21.4423 5.38756 21.1493C5.05937 20.8563 4.875 20.4588 4.875 20.0444V15.3569Z" fill="#4FB96E"/>
                            <path d="M7.5 3.63818C7.03587 3.63818 6.59075 3.8028 6.26256 4.09583C5.93437 4.38885 5.75 4.78628 5.75 5.20068H3.96675C2.4705 5.20068 1.375 6.3085 1.375 7.54443V21.6069C1.375 23.2741 2.84762 24.7319 4.80762 24.7319H25.8899C26.3514 24.7284 26.7927 24.5623 27.1177 24.2696C27.4427 23.977 27.625 23.5815 27.625 23.1694V5.20068C27.625 4.78628 27.4406 4.38885 27.1124 4.09583C26.7842 3.8028 26.3391 3.63818 25.875 3.63818H7.5ZM23.2833 6.76318C23.6858 6.76318 24.0235 7.02568 24.1058 7.37725C24.118 7.43115 24.125 7.48662 24.125 7.54443V21.6069C24.125 22.0213 24.3094 22.4188 24.6376 22.7118C24.9658 23.0048 25.4109 23.1694 25.875 23.1694H4.80762C3.87837 23.1694 3.125 22.4702 3.125 21.6069V7.54443C3.125 7.11318 3.50125 6.76318 3.96675 6.76318H23.2833Z" fill="#4FB96E"/>
                        </svg> <span class="ms-2">Berita</span>
                        </a>
                   </li>
               </ul>
           </li>
           <li class="nav-item dropdown {{ Route::is('data-lurah-kasi') || Route::is('verifikasi') ? 'active' : '' }}">
               <a href="#" class="nav-link has-dropdown"><i
                       class="fas fa-th-large"></i><span>Data User</span></a>
               <ul class="dropdown-menu">
                    <li class="{{ Route::is('data-lurah-kasi') ? 'active' : '' }}" >
                        <a class="nav-link" href="{{ route('data-lurah-kasi') }} "> 
                        <svg width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1476_5280)">
                            <path d="M14 6.55493C12.9557 6.55493 11.9542 7.0005 11.2158 7.79363C10.4773 8.58675 10.0625 9.66245 10.0625 10.7841C10.0625 11.9057 10.4773 12.9814 11.2158 13.7746C11.9542 14.5677 12.9557 15.0133 14 15.0133C15.0443 15.0133 16.0458 14.5677 16.7842 13.7746C17.5227 12.9814 17.9375 11.9057 17.9375 10.7841C17.9375 9.66245 17.5227 8.58675 16.7842 7.79363C16.0458 7.0005 15.0443 6.55493 14 6.55493ZM14 8.9716C14.4476 8.9716 14.8768 9.16256 15.1932 9.50247C15.5097 9.84238 15.6875 10.3034 15.6875 10.7841C15.6875 11.2648 15.5097 11.7258 15.1932 12.0657C14.8768 12.4056 14.4476 12.5966 14 12.5966C13.5524 12.5966 13.1232 12.4056 12.8068 12.0657C12.4903 11.7258 12.3125 11.2648 12.3125 10.7841C12.3125 10.3034 12.4903 9.84238 12.8068 9.50247C13.1232 9.16256 13.5524 8.9716 14 8.9716ZM6.6875 10.1799C5.94158 10.1799 5.22621 10.4982 4.69876 11.0647C4.17132 11.6312 3.875 12.3996 3.875 13.2008C3.875 14.3366 4.47125 15.3153 5.32625 15.8349C5.73125 16.0766 6.1925 16.2216 6.6875 16.2216C7.1825 16.2216 7.64375 16.0766 8.04875 15.8349C8.465 15.5812 8.81375 15.2187 9.0725 14.7837C8.25292 13.6365 7.80988 12.2301 7.8125 10.7841V10.4458C7.475 10.2766 7.0925 10.1799 6.6875 10.1799ZM21.3125 10.1799C20.9075 10.1799 20.525 10.2766 20.1875 10.4458V10.7841C20.1875 12.2341 19.7487 13.6358 18.9275 14.7837C19.0625 15.0133 19.2088 15.1945 19.3775 15.3758C19.8963 15.916 20.5899 16.2192 21.3125 16.2216C21.8075 16.2216 22.2687 16.0766 22.6737 15.8349C23.5287 15.3153 24.125 14.3366 24.125 13.2008C24.125 12.3996 23.8287 11.6312 23.3012 11.0647C22.7738 10.4982 22.0584 10.1799 21.3125 10.1799ZM14 17.4299C11.3675 17.4299 6.125 18.8437 6.125 21.6591V23.4716H21.875V21.6591C21.875 18.8437 16.6325 17.4299 14 17.4299ZM5.79875 18.0945C3.6275 18.3724 0.5 19.5566 0.5 21.6591V23.4716H3.875V21.1395C3.875 19.9191 4.65125 18.9041 5.79875 18.0945ZM22.2013 18.0945C23.3488 18.9041 24.125 19.9191 24.125 21.1395V23.4716H27.5V21.6591C27.5 19.5566 24.3725 18.3724 22.2013 18.0945ZM14 19.8466C15.7212 19.8466 17.645 20.4508 18.7587 21.0549H9.24125C10.355 20.4508 12.2788 19.8466 14 19.8466Z" fill="#4FB96E"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_1476_5280">
                            <rect width="27" height="29" fill="white" transform="translate(0.5 0.513184)"/>
                            </clipPath>
                            </defs>
                        </svg> <span class="ms-2">Data Pegawai</span>
                        </a>
                   </li>
                   <li class="{{ Route::is('verifikasi') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('verifikasi') }} "> 
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5 25.3882C8.22789 25.3882 3.125 20.2853 3.125 14.0132C3.125 7.74107 8.22789 2.63818 14.5 2.63818C20.7721 2.63818 25.875 7.74107 25.875 14.0132C25.875 20.2853 20.7721 25.3882 14.5 25.3882ZM14.5 4.38818C9.19531 4.38818 4.875 8.7085 4.875 14.0132C4.875 19.3179 9.19531 23.6382 14.5 23.6382C19.8047 23.6382 24.125 19.3206 24.125 14.0132C24.125 8.70576 19.8074 4.38818 14.5 4.38818Z" fill="#4FB96E"/>
                            <path d="M18.2003 15.9819C17.2488 15.9819 16.3295 15.5597 15.6114 14.7936C14.9012 14.0232 14.4765 13.0326 14.4083 11.987C14.3279 10.855 14.6752 9.81318 15.3861 9.05467C16.097 8.29615 17.0907 7.88818 18.2003 7.88818C19.3017 7.88818 20.2987 8.3049 21.0074 9.06178C21.7162 9.81865 22.0722 10.8665 21.9918 11.9881C21.9223 13.0331 21.4978 14.0229 20.7887 14.7936C20.0701 15.5597 19.1513 15.9819 18.2003 15.9819ZM9.45852 16.1657C7.83102 16.1657 6.39984 14.6612 6.26859 12.8117C6.20133 11.8645 6.49555 10.989 7.0982 10.3464C7.70086 9.70381 8.53211 9.36201 9.45797 9.36201C10.3838 9.36201 11.2145 9.7142 11.8134 10.354C12.4122 10.9939 12.7157 11.8754 12.6473 12.815C12.5139 14.6618 11.0833 16.1657 9.45852 16.1657ZM23.4886 19.4426C23.4016 19.1855 23.19 18.9115 22.7656 18.6518C21.4827 17.8681 19.9044 17.4536 18.2003 17.4536C16.5285 17.4536 14.9065 17.8856 13.6323 18.6704C12.1967 19.5547 11.232 20.8442 10.8432 22.399C10.7513 22.7648 10.6173 23.4457 10.7606 23.8269C13.06 24.7012 15.5931 24.7414 17.919 23.9402C20.2449 23.1391 22.216 21.5475 23.4891 19.4426H23.4886ZM9.44813 21.9631C9.83477 20.4204 10.6578 19.1341 11.9348 18.094C11.9951 18.0442 12.041 17.9791 12.0677 17.9055C12.0943 17.8319 12.1008 17.7525 12.0863 17.6756C12.0718 17.5987 12.037 17.5271 11.9854 17.4682C11.9339 17.4093 11.8675 17.3654 11.7931 17.3409C11.1369 17.1315 10.3877 17.0194 9.45852 17.0194C8.15586 17.0194 6.77281 17.3721 5.73211 18.013C5.4368 18.1951 5.14695 18.2651 4.92383 18.3275C5.81965 20.3074 7.30524 21.9622 9.17742 23.0656L9.27531 23.058C9.29672 22.6882 9.3546 22.3215 9.44813 21.9631Z" fill="#4FB96E"/>
                        </svg> <span class="ms-2">Data Warga</span>
                        </a>
                   </li>
               </ul>
           </li>
       </ul>
   </aside>
</div>