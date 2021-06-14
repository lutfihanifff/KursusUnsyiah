@extends('layouts.dash')

@section('style')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- e-editable 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/xeditable/css/bootstrap-editable.css')}}">
@stop

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Isi Nilai Praktik</h1>
          </div>
          <div class="col-sm-6">
            <span class="float-sm-right">
            <a href="{{route('nilai.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      	<div class="card">
      		<div class="card-body">
      			<center>
      				<h3>Kursus : {{$kursus->program->program}}</h3>
      				<br>
      			</center>
      			<table class="table table-striped">
                  <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Soal</th>
                    <th style="width: 30%">Nilai</th>
                 
                  </tr>
      			   @foreach($nilai as $ni)

                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$ni->materi->materi}}.</td>
                    
                    <td><h3><a href="#" class="xnilai" id="x-{{$ni->id}}" data-name="nilai" data-type="number" data-pk="{{$ni->id}}" data-url="{{route('nilai.update', $ni->id)}}" data-title="Masukan nilai">{{$ni->nilai}}</a></h3></td>
                  </tr>
                 
                
               
                @endforeach 
                </tbody></table>
            </div>
	      	
      
  		</div>
    </section>
    
   </div>
    
@endsection

@section('script')
	
	<!-- xeditable 4 -->
	<script src="{{asset('assets/plugins/xeditable/js/bootstrap-editable.min.js')}}"></script>

	<script type="text/javascript">

		$(document).ready(function() {
			 $.ajaxSetup({

		        headers: {

		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

		        }

		    });

			$.fn.editable.defaults.mode = 'inline';

		  $('.xnilai').editable();

		});
	</script>

@stop

