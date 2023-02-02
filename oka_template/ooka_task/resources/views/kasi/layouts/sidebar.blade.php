<div class="main-sidebar sidebar-style-2">
   <aside id="sidebar-wrapper">
       <div class="sidebar-brand mb-4">
           <a href="{{ route('dashboard-kasi') }}">
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
           <li class="nav-item dropdown">
               <a href="#" class="nav-link has-dropdown"><i
                       class="fas fa-th-large"></i><span>Dashboard</span></a>
               <ul class="dropdown-menu">
                   <li>
                       <a class="nav-link" href="{{ route('surat-masuk-kasi') }} ">Surat Masuk</a>
                   </li>
                   <li>
                       <a class="nav-link" href="{{ route('surat-keluar-kasi') }} ">Surat Keluar</a>
                   </li>
                   <li>
                       <a class="nav-link" href="{{ route('surat-arsip-kasi') }}">Arsip Surat</a>
                   </li>
                   
               </ul>
           </li>
       </ul>
   </aside>
</div>