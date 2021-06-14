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
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6 ">
          	<span class="float-sm-right">
            <a href="{{route('user.create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Admin</a> 
            <a href="{{route('instruktur.create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Instruktur</a> 
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
	                  <th>Username</th>
                    <th>Email</th>
                    <th>Hak Akses</th>
	                  <th class="no-sort"></th>
	                
	                </tr>
	                </thead>
	                <tbody>
	                @foreach($user as $usr)
	                <tr>
	                  <td>{{$usr->id}}</td>
                    <td>{{$usr->username}}</td>
                    <td>{{$usr->email}}</td>
                    <td>{{$usr->role}}</td>
	                  <td>
	                  	<form class="form-{{$usr->id}}" method="POST" action="{{route('user.delete',$usr->id)}}" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                       			@method('DELETE')
                       			@csrf
	                  			<a href="{{route('user.show', $usr->id)}}" class="btn bg-gradient-secondary"><i class="fas fa-eye"></i> Detail</a>
                          @if($usr->role == 'instruktur')
                          <a href="{{route('instruktur.edit', $usr->instruktur->id)}}" class="btn bg-gradient-warning"><i class="fas fa-edit"></i> Ubah</a>
                          @else
                          <a href="{{route('user.edit', $usr->id)}}" class="btn bg-gradient-warning"><i class="fas fa-edit"></i> Ubah</a>
                          @endif
                          @if(auth::user()->id == $usr->id)
                              <a href="" class="btn bg-gradient-danger disabled"><i class="fas fa-trash"></i> Hapus</a>
                          @else
	                            <button type="submit" class="btn bg-gradient-danger"><i class="fas fa-trash"></i> Hapus</button>	
                          @endif
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