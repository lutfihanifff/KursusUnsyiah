@extends('layouts.dash')


@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Data User</h1>
          </div>
          <div class="col-sm-6">
            <span class="float-sm-right">
            <a href="{{route('user.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
          </div>
         
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-12 col-md">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  User
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <dl>
                  <dt>Username</dt>
                  <dd>{{$user->username}}</dd>
                  <dt>Email</dt>
                  <dd>{{$user->email}}</dd>
                  <dt>Hak Akses</dt>
                  <dd>{{$user->role}}</dd>
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        @if($user->role == 'instruktur')
        <div class="col-12 col-md-6">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Data Diri
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body row">
                <dl class="col-12 col-md-6">
                  <dt>Nama</dt>
                  <dd>{{$user->instruktur->nama}}</dd>
                  <dt>Gender</dt>
                  <dd>{{$user->instruktur->gender == 'L' ? 'Laki-laki' : 'Perempuan'}}</dd>
                  <dt>Tempat & Tanggal Lahir</dt>
                  <dd>{{$user->instruktur->tempat_lahir.', '.$user->instruktur->tanggal_lahir}}</dd>
                  <dt>No Handphone</dt>
                  <dd>{{$user->instruktur->nohp}}</dd>
                </dl>
                <dl class="col-12 col-md-6">
                  <dt>Alamat</dt>
                  <dd>{{$user->instruktur->alamat}}</dd>
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        @endif
      </div>
    </section>
  </div>
@stop