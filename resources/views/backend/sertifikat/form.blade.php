@extends('layouts.dash')

@section('style')
<!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
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
            <h1>Tambah Sertifikat</h1>
          </div>
          <div class="col-sm-6">
            <span class="float-sm-right">
            <a href="{{route('sertifikat.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      	<div class="card">
	      	<div class="card-body">
	      		<form action="{{route('sertifikat.store')}}" method="post">
	      			@csrf
	     	
	     			<div class="row">
	     				<div class="col-12">
	     					<div class="form-group">
			                  <label class="h2">Kursus</label>
			                  <select name="kursus_id" class="form-control select2" style="width: 100%;">
			                  	@foreach($kursus as $ks)
			                    <option value="{{$ks->id}}" {{old('kursus_id') == $ks->id ? 'selected' : ''}} >{{$ks->peserta->id}} | {{$ks->peserta->nama}} | {{$ks->program->program}}</option>
			                    @endforeach
			                  </select>
			                  	@error('kursus_id')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
	     				</div>
	     				
	     				<div class="col-12 text-right">
	     					<br>
	     					<button type="submit" class="btn btn-app"><i class="fas fa-save"></i> Buat Sertifikat</button>
	     				</div>	
	     			</div>	
	     			
	      		</form>
	      	</div>	
      
  		</div>
    </section>
    
   </div>
    
@endsection

@section('script')
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

<script type="text/javascript">
$(function () {

    //Initialize Select2 Elements
    $('.select2').select2();


    //Date range picker
    $('#tgl').daterangepicker({
      singleDatePicker: true,
      locale: {
        format: 'YYYY-MM-DD'
      }
    });

});


</script>

@stop