<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kursus Unsyiah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-info border-bottom">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="{{asset('assets/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle "
             style="opacity: .9">
        <span class="brand-text font-weight-light"><strong></strong></span>
      </a>

    @if(auth::user())
      @if(auth::user()->role == 'peserta')
      <!-- Left navbar links -->
      <ul class="navbar-nav d-sm-none d-md-block">
        <li class="nav-item mr-3">
        </li>
        <li class="nav-item d-none d-sm-inline-block ">
          <a href="{{route('profil')}}" class="nav-link {{ (request()->is('datadiri')) ? 'active' : '' }}"><i class="far fa-id-badge mr-2"></i> Data Diri</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block ">
          <a href="{{route('kursus')}}" class="nav-link {{ (request()->is('kursus')) ? 'active' : '' }}"><i class="fas fa-project-diagram mr-2"></i> Program Kursus</a>
        </li>

      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-user mr-2"></i> {{auth::user()->username}}
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item d-sm-block d-md-none"><i class="fas fa-id-badge mr-2"></i> Data Diri</a>
            <a href="#" class="dropdown-item d-sm-block d-md-none"><i class="fas fa-project-diagram mr-2"></i>Program Kursus</a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item bg-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-door-open mr-2"></i> Keluar</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>

        </li>
      </ul>
      @endif
    @endif
    </div>
  </nav>
  <!-- /.navbar -->

@yield('content')

<!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Kursus Unsyiah.com</a>
    </div>
    <!-- Default to the left -->
    Copyright &copy; 2021 Unsyiah . All rights reserved. |<a href='https://unsyiah.ac.id/' title='KursusUnsyiah.com' target='_blank'>Kursus Unsyiah</a>
    
  </footer>
</div>

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
