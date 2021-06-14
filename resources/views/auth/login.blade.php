@extends('layouts.app')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark"><i class="fas fa-home"></i> Halaman Awal</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              
              <div class="card-body">
                <h6 class="card-title">Website ini digunakan untuk keperluan melihat nilai dan sertifikat bagi <b>Peserta</b> yang mengikuti kursus di Unsyiah. <br><br>
                    Peserta Kursus yang belum mendapatkan akun, silahkan hubungi staff di Unsyiah.
                </h6>

              </div>
            </div>
          </div>
          @if(auth::user())
          <div class="col-lg-6">
            <div class="alert alert-success">          
                  <h5><i class="icon fas fa-check"></i> Selamat datang {{auth::user()->username}}!</h5>
                  Saat ini anda telah login sebagai {{auth::user()->role}}.
                  @if(auth::user()->role != 'peserta')
                    <a href="{{route('dash.index')}}" class="btn btn-sm btn-primary ml-2">Halaman Aplikasi</a>
                  @endif
            </div>
          </div>

          @else
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Masuk ke Sistem</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('login') }}" method="POST">
                 @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Alamat Email</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Masukan email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label >Sandi</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="exampleCheck1">Ingat saya?</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-warning ">Login</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
          @endif
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
