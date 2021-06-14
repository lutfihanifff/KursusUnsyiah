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
            <a href="{{route('program.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
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
			                    <label >Program</label>
			                    <input name="program" type="text" class="form-control @error('program') is-invalid @enderror" value="{{ old('program') ?? $program->program }}"  placeholder="Masukan program">
			                    @error('program')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
	     				</div>
	     				<div class="col-12">
	     					<div class="form-group">
			                    <label >Lama</label>
			                    <input name="lama" type="number" class="form-control @error('lama') is-invalid @enderror" value="{{ old('lama') ?? $program->lama }}"  placeholder="Masukan lama">
			                    @error('lama')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
	     				</div>
	     				<div class="col-12">
	     					<div class="form-group">
			                    <label >Keterangan</label>
			                    <textarea name="keterangan" rows="3" type="keterangan" class="form-control @error('keterangan') is-invalid @enderror"placeholder="Masukan keterangan">{{ old('keterangan') ?? $program->keterangan }}</textarea>
			                    @error('keterangan')
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