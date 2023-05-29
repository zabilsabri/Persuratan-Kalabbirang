<div class="main-sidebar sidebar-style-2">
   <aside id="sidebar-wrapper">
       <div class="sidebar-brand mb-4">
           <a href="{{ route('dashboard-lurah') }}">
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
            <li class="{{ Route::is('dashboard-lurah') ? 'active' : '' }}" ><a class="nav-link" href="{{ route('dashboard-lurah') }}"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
            <li class="nav-item dropdown {{ Route::is('surat-masuk-lurah') || Route::is('surat-keluar-lurah') || Route::is('surat-arsip-lurah') || Route::is('surat-antar') ? 'active' : '' }}">
               <a href="#" class="nav-link has-dropdown"><i
                       class="fas fa-th-large"></i><span>Surat</span></a>
               <ul class="dropdown-menu">
                   <li class="{{ Route::is('surat-masuk-lurah') ? 'active' : '' }}" >
                        <a class="nav-link" href="{{ route('surat-masuk-lurah') }} "> 
                            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.6673 21.8882C15.6673 21.5057 15.714 21.1344 15.7723 20.7632H5.16732V9.51318L14.5007 15.1382L23.834 9.51318V15.2394C24.674 15.3744 25.4557 15.6557 26.1673 16.0494V7.26318C26.1673 6.02568 25.1173 5.01318 23.834 5.01318H5.16732C3.88398 5.01318 2.83398 6.02568 2.83398 7.26318V20.7632C2.83398 22.0007 3.88398 23.0132 5.16732 23.0132H15.7723C15.714 22.6419 15.6673 22.2707 15.6673 21.8882ZM23.834 7.26318L14.5007 12.8882L5.16732 7.26318H23.834ZM21.5007 18.5132V20.7632H26.1673V23.0132H21.5007V25.2632L18.0007 21.8882L21.5007 18.5132Z" fill="#4FB96E"/>
                            </svg> <span class="ms-2">Surat Masuk</span>
                        </a>
                   </li> 
                   <li class="{{ Route::is('surat-arsip-lurah') ? 'active' : '' }}" >
                        <a class="nav-link" href="{{ route('surat-arsip-lurah') }}"> 
                        <svg width="31" height="28" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.66667 24.25C4.93333 24.25 4.30533 24.0299 3.78267 23.5896C3.26089 23.1486 3 22.6187 3 22V7.9375C3 7.65625 3.05556 7.40312 3.16667 7.17812C3.27778 6.95312 3.42222 6.7375 3.6 6.53125L5.46667 4.61875C5.64444 4.4125 5.86667 4.25763 6.13333 4.15413C6.4 4.05138 6.68889 4 7 4H23C23.3111 4 23.6 4.05138 23.8667 4.15413C24.1333 4.25763 24.3556 4.4125 24.5333 4.61875L26.4 6.53125C26.5778 6.7375 26.7222 6.95312 26.8333 7.17812C26.9444 7.40312 27 7.65625 27 7.9375V22C27 22.6187 26.7391 23.1486 26.2173 23.5896C25.6947 24.0299 25.0667 24.25 24.3333 24.25H5.66667ZM6.2 7.375H23.8L22.6667 6.25H7.33333L6.2 7.375ZM5.66667 22H24.3333V9.625H5.66667V22ZM15 20.3969C15.1778 20.3969 15.3444 20.3732 15.5 20.326C15.6556 20.2795 15.8 20.2 15.9333 20.0875L19.4 17.1625C19.6444 16.9563 19.7667 16.6938 19.7667 16.375C19.7667 16.0562 19.6444 15.7937 19.4 15.5875C19.1556 15.3813 18.8444 15.2781 18.4667 15.2781C18.0889 15.2781 17.7778 15.3813 17.5333 15.5875L16.3333 16.6V13C16.3333 12.6812 16.2058 12.4139 15.9507 12.1979C15.6947 11.9826 15.3778 11.875 15 11.875C14.6222 11.875 14.3058 11.9826 14.0507 12.1979C13.7947 12.4139 13.6667 12.6812 13.6667 13V16.6L12.4667 15.5875C12.2222 15.3813 11.9111 15.2781 11.5333 15.2781C11.1556 15.2781 10.8444 15.3813 10.6 15.5875C10.3556 15.7937 10.2333 16.0562 10.2333 16.375C10.2333 16.6938 10.3556 16.9563 10.6 17.1625L14.0667 20.0875C14.2 20.2 14.3444 20.2795 14.5 20.326C14.6556 20.3732 14.8222 20.3969 15 20.3969Z" fill="#4FB96E"/>
                        </svg> <span class="ms-2">Arsip Surat</span>
                        </a>
                   </li>
               </ul>
            </li>
       </ul>
   </aside>
</div>