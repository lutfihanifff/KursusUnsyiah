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
            <h1>Data Peserta Kursus</h1>
          </div>
          <div class="col-sm-6 ">
          	<span class="float-sm-right">
            <a href="{{route('peserta.create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Peserta Kursus</a> 
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
            	<table id="datatabel" class="table table-hover nowrap" style="width: 100%" data-page-length="6">
	                <thead>
	                <tr>
	                  <th>Peserta</th>
	                  <th>Gender</th>
                    <th>TTL</th>
                    <th>No. Handphone</th>
                    <th>Alamat</th>
	                  <th class="no-sort"></th>
	                
	                </tr>
	                </thead>
	                <tbody>
                  
	                @foreach($peserta as $pst)
	                <tr>
	                  <td>{{$pst->id}} | {{$pst->nama}}<br>
                      <small>{{$pst->user->email}}</small>
                    </td>
                    <td>{{$pst->gender == 'L' ? 'Laki-laki' : 'Perempuan'}}</td>
	                  <td>{{$pst->tempat_lahir}}<br>
                      <small>{{$pst->tanggal_lahir}}</small>
                    </td>
                    <td>{{$pst->nohp}}</td>
                    <td>{{$pst->alamat}}</td>
	                  <td>
	                  	<form class="form-{{$pst->id}}" method="POST" action="{{route('peserta.delete', $pst->id)}}" onsubmit="return confirm('Anda yakin ingin menghapus data peserta ini?, data lain yang terkait akan ikut terhapus.')">
                       			@method('DELETE')
                       			@csrf
	                  			<a href="{{route('peserta.edit', $pst->id)}}" class="btn bg-gradient-warning"><i class="fas fa-edit"></i> Ubah</a>

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