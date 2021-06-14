@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
          
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12">
                  <center>
                    <div class="card card-default" style="border: 5px solid #eee;">
                      <div class="card-body">
                       
                        <img src="{{asset('assets/img/logo.png')}}" class="img-responsive pt-2" height="20%"><hr>
                        <h3>No.{{$sertifikat->no_sertifikat}}</h3>
                        <hr>
                        <h4 class="pb-3">Sertifikat kursus atas nama</h4>
                        <h2>{{$sertifikat->kursus->peserta->nama}}</h2>
                        <h4><strong>{{$sertifikat->kursus->peserta->id}}</strong></h4>
                        <h5 class="pt-4">Telah mengikuti dan menyelesaikan <strong>Kursus {{$sertifikat->kursus->program->program}}</strong> di LKP Cendana dan dinyatakan <strong>LULUS</strong> dengan Predikat <strong>{{$sertifikat->predikat()}}</strong>.</h5>
                        <hr class="mt-5">
                        <a href="{{route('kursus')}}" class="btn btn-lg btn-outline-info">Kembali</a>
                      </div>  
                    </div>
                  </center>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection	