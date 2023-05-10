<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css" rel="stylesheet')}}" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/css/material-dashboard.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/material-dashboard.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/nucleo-icons.css')}}">
<link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />


    <!-- Scripts -->
</head>
<body class="g-sidenav-show  bg-gray-200">
    <div class="wrapper">
      @include('layouts.admin.sidebar')
      <div class="main-panel">
      @include('layouts.admin.navbar')
      <div class="content">
        @yield('content')
      </div>
      @include('layouts.admin.footer')


      </div>
      
    </div>

  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('assets/js/material-dashboard.min.js?v=3.0.4')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  @if(session('status')){
    <script>
      swal("{{session('status')}}")
    </script>
  }
  @endif
</body>
</html>
