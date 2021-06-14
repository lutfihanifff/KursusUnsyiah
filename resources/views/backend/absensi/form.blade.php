@extends('layouts.dash')

@section('style')
<!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">


@stop

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Absensi</h1>
          </div>
          <div class="col-sm-6">
            <span class="float-sm-right">
            <a href="{{route('absensi.show', $kursus->id)}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      	<div class="card">
	      	<div class="card-body">
	      		<form action="{{route('absensi.store')}}" method="post">
	      			@csrf
	     			<div class="row">
	     				<div class="col-12 col-md-2">
	     					<div class="form-group">
			                  <label>Kursus : {{$kursus->program->program}}</label>
			                  <input name="kursus_id" type="text" value="{{$kursus->id}}" class="form-control" readonly />
			                </div>
	     				</div>


	     				<div class="col-12 col-md-4">
	     					<div class="form-group">
	                          <label >Tanggal Masuk</label>
	                          <input name="tanggal_masuk" id="tgl" type="text" class="form-control @error('tanggal_masuk') is-invalid @enderror">
	                          @error('tanggal_masuk')
	                              <span class="invalid-feedback" role="alert">
	                                  <strong>{{ $message }}</strong>
	                              </span>
	                          @enderror
	                      </div>
	     				</div>

	     				<div class="col-12 col-md-6">
	     					<div class="form-group">
	                          <label >Keterangan</label>
	                          <select name="status" class="form-control " style="width: 100%;">
	                            
	                            <option value="hadir" {{ old('hadir') == 'L' ? 'selected' : ''}} >Hadir</option>
	                            <option value="izin" {{ old('izin') == 'P' ? 'selected' : ''}} >Izin</option>
	                            <option value="tidak" {{ old('tidak') == 'P' ? 'selected' : ''}} >Tidak Hadir</option>
	                            
	                          </select>
	                          @error('status')
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
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript">
  $(function () {
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