<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $title }}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('style/node_modules/selectric/public/selectric.css')}}">
  {{-- <link rel="stylesheet" href="{{ asset('style/node_modules/dropzone/dist/min/dropzone.min.css')}}"> --}}

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('style/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('style/css/components.css')}}">
  <link rel="stylesheet" href="{{ asset('style/css/custom-style/dropzone.css')}}">
  <link rel="icon" href="{{ asset('image/Lambang_Kabupaten_Takalar.png') }}">
</head>

<body style="background: #4FB96E">
  <div id="app">
    <section class="sections">
      <div class="container mt-5 ">
        <div class="row">
          <div class="mx-auto col-12 col-sm-10 col-md-10  col-lg-10  col-xl-10 ">
            
            @yield('content')
            
              
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('style/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('style/node_modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
  <script src="{{ asset('style/node_modules/selectric/public/jquery.selectric.min.js')}}"></script>
  <script src="{{ asset('style/node_modules/cleave.js/dist/addons/cleave-phone.us.js')}}"></script>

  {{-- <script src="{{ asset('style/node_modules/dropzone/dist/min/dropzone.min.js')}}"></script> --}}


  <!-- Template JS File -->
  <script src="{{ asset('style/js/scripts.js')}}"></script>
  <script src="{{ asset('style/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('style/js/page/auth-register.js')}}"></script>
  <script src="{{ asset('style/js/custom-js/dropzone.js')}}"></script>
  <script src="{{ asset('style/js/page/forms-advanced-forms.js')}}"></script>


</body>
</html>
