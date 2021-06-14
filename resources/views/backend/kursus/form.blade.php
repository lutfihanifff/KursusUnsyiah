@extends('layouts.dash')

@section('style')
<!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@stop

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kursus</h1>
          </div>
          <div class="col-sm-6">
            <span class="float-sm-right">
            <a href="{{route('peserta.show', $peserta->id)}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      	<div class="card">
	      	<div class="card-body">
	      		<form action="{{route('kursus.store')}}" method="post">
	      			@csrf
	     			<div class="row">
	     				<div class="col-12">
	     					<div class="form-group">
			                  <label>Peserta Kursus : {{$peserta->nama}}</label>
			                  <input name="peserta_id" type="text" value="{{$peserta->id}}" class="form-control" readonly />
			                </div>
	     				</div>


	     				<div class="col-12 col-md-6">
	     					<div class="form-group">
			                  <label>Program</label>
			                  <select name="program_id" class="form-control select2 " style="width: 100%;">
			                  	<option selected="selected">Pilih Program Kursus</option>
			                  	@foreach($program as $prog)
			                    <option value="{{$prog->id}}" {{ old('program_id') == $prog->id ? 'selected' : '' }} > {{$prog->program}}</option>
			                    @endforeach
			                  </select>
			                  	@error('program_id')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
	     				</div>

	     				<div class="col-12 col-md-6">
	     					<div class="form-group">
			                  <label>Instruktur</label>
			                  <select name="instruktur_id" class="form-control select2" style="width: 100%;">
			                  	<option selected="selected">Pilih Instruktur Kursus</option>
			                  	@foreach($instruktur as $ins)
			                    <option value="{{$ins->id}}" {{ old('instruktur_id') == $ins->id ? 'selected' : '' }} > {{$ins->nama}}</option>
			                    @endforeach
			                  </select>
			                  	@error('instruktur_id')
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

@section('script')
<!-- Select2 -->
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

<script type="text/javascript">
$(function () {

    //Initialize Select2 Elements
    $('.select2').select2();

});


</script>

@stop