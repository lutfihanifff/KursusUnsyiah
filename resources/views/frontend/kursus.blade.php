@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
          	<h1>Program Kursus</h1>
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
	                <div id="accordion">
	                  @foreach(auth::user()->peserta->kursus as $ks)
	                  <div class="card {{$ks->id == auth::user()->peserta->first_kursus()->id ? 'card-success' : 'card-light'}}">
	                    <div class="card-header">
	                      <h4 class="card-title">
	                        <a data-toggle="collapse" data-parent="#accordion" href="#col{{$ks->id}}">
	                          {{$ks->program->program}}
	                        </a>
	                      </h4>
	                    </div>
	                    <div id="col{{$ks->id}}" class="panel-collapse collapse {{$ks->id == auth::user()->peserta->first_kursus()->id ? 'show' : 'in'}}">
	                      <div class="card-body">
	                      	<div class="row">
		                        <ul class="list-group col-12 col-lg-6">
		      						<li class="list-group-item">Keterangan : {{$ks->program->keterangan}}</li>
		                      		<li class="list-group-item">Instruktur : {{$ks->instruktur->nama}}</li>
		                      		<li class="list-group-item">Status : {{$ks->status}}</li>
		                      		@if($ks->status == 'selesai')  
		                      			<li class="list-group-item">Sertifikat : <a href="{{route('sertifikat',$ks->sertifikat->id)}}" class="btn btn-outline-primary btn-sm ml-2">Lihat</a></li>  
		                      		@endif
		      					</ul>
		      					<ul class="list-group col-12 col-lg-6">
		      						<li class="list-group-item">Absensi :  <span class="badge bg-success">Hadir : {{$ks->hadir()}}</span>
			                      	<span class="badge bg-warning">Izin : {{$ks->izin()}}</span>
			                      	<span class="badge bg-danger">Tidak Hadir : {{$ks->tidakhadir()}}</span></li> 
			                      	<li class="list-group-item">Nilai Teori : {{$ks->nilai_teori()}}</li> 
			                      	<li class="list-group-item">Nilai Praktik: {{$ks->nilai_praktik()}}</li> 
			      				</ul>
			      			</div>
	                      </div>
	                    </div>
	                  </div>
	                  @endforeach
	                  
	                 
	          
	           		</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection	