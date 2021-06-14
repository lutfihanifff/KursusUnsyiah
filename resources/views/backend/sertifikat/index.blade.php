@extends('layouts.dash')

@section('style')
	@include('layouts.lib.datatablesJSCSS')
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Sertifikat Kursus</h1>
          </div>
          <div class="col-sm-6 ">
          	<span class="float-sm-right">
            <a href="{{route('sertifikat.create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah</a> 
            </span>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

    	@include('layouts.com.alert')
      
      <div class="row">
        <div class="col-12">
          <div class="card">
         
            <!-- /.card-header -->
            <div class="card-body table-responsive">
            	<table id="datatabel" class="table table-hover nowrap" style="width: 100%" data-page-length="7">
	                <thead>
	                <tr>
	                  <th>No. Sertifikat</th>
	                  <th>Peserta Kursus</th>
                    <th>Program Kursus</th>
                    <th>Nilai Akhir</th>
	          
	                  <th class="no-sort"></th>
	                
	                </tr>
	                </thead>
	                <tbody>
	                @foreach($sertifikat as $ser)
	                <tr>
	                  <td>{{$ser->no_sertifikat}}</td>
	                  <td><strong>{{$ser->kursus->peserta->id}}</strong> | {{$ser->kursus->peserta->nama}}</td>
	                  <td>{{$ser->kursus->program->program}}</td>
                    <td>Grade {{$ser->nilai_akhir()}} | {{$ser->nilai_akhir}}</td>
 
	                  <td>

	                  	<form class="form-{{$ser->id}}" method="POST" action="{{route('sertifikat.delete', $ser->id)}}" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                       			@method('DELETE')
                       			@csrf
	                         <button type="submit" class="btn bg-gradient-danger"><i class="fas fa-trash"></i> Hapus</button>	
                      </form>
	                  	
	                  </td>
	                </tr>
	               	@endforeach
	            </table>
            </div>
          </div>
        </div>
      </div>
     </section>
  </div>
@endsection


@section('script')
	@include('layouts.lib.datatablesJS')
@stop