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
            <h1>Data Materi Program</h1>
          </div>
          <div class="col-sm-6 ">
          	<span class="float-sm-right">
            <a href="{{route($rAdd)}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah</a> 
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
            	<table id="datatabel" class="table table-hover " style="width: 100%" data-page-length="7">
	                <thead>
	                <tr>
	                  <th>Program Kursus</th>
	                  <th>Materi</th>
	                  <th class="no-sort"></th>
	                
	                </tr>
	                </thead>
	                <tbody>
	                @foreach($materi as $mat)
	                <tr>
	                  <td>{{$mat->program->program}}</td>
	                  <td>{{$mat->materi}}</td>
	                  <td>
                      <a href="{{route($rEdit, $mat->id)}}" class="btn bg-gradient-warning"><i class="fas fa-edit"></i> Ubah</a>
	                  	<form class="form-{{$mat->id}} d-inline" method="POST" action="{{ route($rDel, $mat->id) }}" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
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