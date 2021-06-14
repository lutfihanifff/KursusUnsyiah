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
            <h1>Data Kursus</h1>
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
	                  <th>Nomor Induk</th>
                    <th>Peserta</th>
	                  <th>Tanggal Daftar</th>
                    <th>Status</th>
	                  <th class="no-sort"></th>
	                
	                </tr>
	                </thead>
	                <tbody>
                  
	                @foreach($peserta as $pst)
	                <tr>
	                  <td>{{$pst->id}}</td>
                    <td>{{$pst->nama}}</td>
                    <td>{{$pst->created_at}}</td>
                    <td>
                      {{$pst->status()}}
                    </td>
	                  <td>
	                  	<a href="{{route('peserta.show', $pst->id)}}" class="btn bg-gradient-primary"><i class="fas fa-chevron-circle-right"></i> Detail Kursus</a>
	                  	
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