@extends('layouts.dash')


@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Isi Nilai Teori</h1>
          </div>
          <div class="col-sm-6">
            <span class="float-sm-right">
            <a href="{{route('nilat.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      	<div class="card">
	      	<div class="card-body">
	      		<form action="{{route('nilat.update', $kursus->id)}}" method="post">
	      			@csrf
	     			<div class="row">
	     				<div class="col-12 col-md-4">
	     					<div class="form-group">
			                  <label>Kursus : </label>
			                  <label class="form-control">{{$kursus->program->program}}</label>
			                 
			                </div>
	     				</div>


	     				<div class="col-12 col-md-8">
	     					<div class="form-group">
	                          <label >Nilai Teori</label>
	                          <input name="nilai_teori" type="text" value="{{$kursus->nilai_teori}}" class="form-control @error('nilai_teori') is-invalid @enderror">
	                          @error('nilai_teori')
	                              <span class="invalid-feedback" role="alert">
	                                  <strong>{{ $message }}</strong>
	                              </span>
	                          @enderror
	                      </div>
	     				</div>

	     				

	     				

	     				
	     				<div class="col-12 text-right">
	     					<button type="submit" class="btn btn-app"><i class="fas fa-save"></i> Simpan</button>
	     				</div>	
	     			</div>	
	     			
	      		</form>
	      	</div>	
      
  		</div>
    </section>
    
   </div>
    
@endsection

