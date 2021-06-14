@extends('layouts.dash')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$title}}</h1>
          </div>
          <div class="col-sm-6">
            <span class="float-sm-right">
            <a href="{{route('materi.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      	<div class="card">
	      	<div class="card-body">
	      		<form action="{{$action}}" method="post">
	      			@csrf
	     			@method($method)
	     			<div class="row">
	     				<div class="col-12">
	     					<div class="form-group">
			                  <label>Program</label>
			                  <select name="program_id" class="form-control select2" style="width: 100%;">
			                  	@foreach($program as $prog)
			                    <option value="{{$prog->id}}" {{ ( old('program_id') ?? ($materi->id != '' ? $materi->program->id : '') ) == $prog->id ? 'selected' : '' }} >{{$prog->program}}</option>
			                    @endforeach
			                  </select>
			                  	@error('program_id')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
	     				</div>
	     				<div class="col-12">
	     					<div class="form-group">
			                    <label >Materi</label>
			                    <textarea name="materi" rows="3" class="form-control @error('materi') is-invalid @enderror"placeholder="Masukan materi">{{ old('materi') ?? $materi->materi }}</textarea>
			                    @error('materi')
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