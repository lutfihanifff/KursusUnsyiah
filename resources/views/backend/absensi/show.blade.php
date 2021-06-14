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
            <h1><a href="{{route('absensi.index')}}" class="btn btn-info"><i class="fas fa-undo"></i></a> Absensi : <strong>{{$kursus->peserta->id}}</strong> | {{$kursus->peserta->nama}} | {{$kursus->program->program}}</h1>
          </div>
          <div class="col-sm-6 ">
          	<span class="float-sm-right">
            @if ($kursus->hadir() >= $kursus->program->lama)
              <a class="btn btn-default disabled"><i class="fas fa-plus-square"></i> Absensi Telah Mencukupi</a>
            @else
              <a href="{{route('absensi.create', $kursus->id)}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah</a> 
            @endif
            
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
            	<table id="datatabel" class="table table-hover nowrap" style="width: 100%" data-page-length="4">
	                <thead>
	                <tr>
	                  <th>Tanggal</th>
	                  <th>Keterangan</th>
	                  <th class="no-sort"></th>
	                
	                </tr>
	                </thead>
	                <tbody>
	                @foreach($kursus->absensi as $ab)
	                <tr>
	                  <td>{{$ab->tanggal_masuk}}</td>
                    	<td>{{$ab->status}}</td>
               
               
	                  <td>
	                  	<form class="form-{{$ab->id}}" method="POST" action="{{route('absensi.delete', $ab->id)}}" onsubmit="return confirm('Anda yakin ingin menghapus data absensi ini?')">
               			@method('DELETE')
               			@csrf
              			<a href="{{route('absensi.edit', $ab->id)}}" class="btn bg-gradient-warning"><i class="fas fa-edit"></i> Ubah</a>

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