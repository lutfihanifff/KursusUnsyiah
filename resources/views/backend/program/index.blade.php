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
            <h1>Data Program Kursus</h1>
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
            	<table id="datatabel" class="table table-hover nowrap" style="width: 100%" data-page-length="7">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Program Kursus</th>
                    <th>Lama</th>
	                  <th>Keterangan</th>
	                  <th class="no-sort"></th>
	                
	                </tr>
	                </thead>
	                <tbody>
	                @foreach($program as $prog)
	                <tr>
	                  <td>{{$prog->id}}</td>
	                  <td>{{$prog->program}}</td>
                    <td>{{$prog->lama}} hari</td>
	                  <td>{{$prog->keterangan}}</td>
	                  <td>
	                  	<form class="form-{{$prog->id}}" method="POST" action="{{ route($rDel, $prog->id) }}" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                       			@method('DELETE')
                       			@csrf
	                  			<a href="{{route($rEdit, $prog->id)}}" class="btn bg-gradient-warning"><i class="fas fa-edit"></i> Ubah</a>

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