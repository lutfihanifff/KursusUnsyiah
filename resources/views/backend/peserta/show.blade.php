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
          <div class="col-8">
            <h1>Detail Kursus</h1>
          </div>
          <div class="col-4">
            <span class="float-sm-right">
            <a href="{{route('kursus.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
          </div>
         
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    	@include('layouts.com.alert')

      <div class="row">
      	<div class="col-12 col-md-4">
          <div class="card">
            <div class="card-header">
            <h3 class="card-title"><i class="far fa-address-card"></i> Peserta Kursus</h3>
            </div>
            <div class="card-body p-2">
              <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link">
                      <i class="far fa-user mr-1"></i> {{$peserta->id}} | {{$peserta->nama}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">
                      <i class="fas fa-venus-mars"></i> {{$peserta->gender == 'L' ? 'Laki-laki' : 'Perempuan'}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">
                      <i class="far fa-calendar-alt mr-1"></i> {{$peserta->tempat_lahir}}, {{$peserta->tanggal_lahir}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">
                     <i class="far fa-envelope mr-1"></i> {{$peserta->user->email}} |&nbsp; <i class="fas fa-phone mr-1"></i> {{$peserta->nohp}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">
                      <i class="far fa-map mr-1"></i> {{$peserta->alamat}}
                    </a>
                  </li>
                </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8">
          <div class="card">
          	<div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><strong class="nav-link text-reset">KURSUS :</strong></li>
                  	@foreach($peserta->kursus as $ks)
                  <li class="nav-item"><a class="nav-link {{$peserta->first_kursus()->id == $ks->id ? 'active' : ''}}" href="#kursus-{{$ks->id}}" data-toggle="tab" role="tab">{{$ks->program->program}}</a></li>
                 	@endforeach
                  <li class="nav-item ml-2 float-sm-right">| <a class="btn btn-default btn-sm" href="{{route('kursus.create', $peserta->id)}}"><i class="fas fa-plus-square"></i> Tambah Kursus</a></li>
                </ul>
             </div>
            <div class="card-body">
            	<div class="tab-content ">
            		@foreach($peserta->kursus as $ksp)
            		<div class="tab-pane {{$peserta->first_kursus()->id == $ksp->id ? 'active' : ''}}" id="kursus-{{$ksp->id}}">
            			<div class="row">
            				<div class="col-12 text-right">
            					<form class="form-{{$ksp->id}}" method="POST" action="{{route('kursus.delete', $ksp->id)}}" onsubmit="return confirm('Anda yakin ingin menghapus data kursus ini?, data lain yang terkait akan ikut terhapus.')">
                       			@method('DELETE')
                       			@csrf

                            @if($ksp->status == 'mulai')
	                  			    <a href="{{route('kursus.edit', $ksp->id)}}" class="btn bg-gradient-warning"><i class="fas fa-edit"></i> Ubah</a>
                            @endif
	                            <button type="submit" class="btn bg-gradient-danger"><i class="fas fa-trash"></i> Hapus</button>	
                        		</form>
                        		<br>
            				</div>
	            			<ul class="list-group col-12 col-lg-6">
      							  <li class="list-group-item">Keterangan : {{$ksp->program->keterangan}}</li>
                      <li class="list-group-item">Instruktur : {{$ksp->instruktur->nama}}</li>
                      <li class="list-group-item">Status : {{$ksp->status}}</li>  
                      
      							</ul>
      							<ul class="list-group col-12 col-lg-6">
      							  <li class="list-group-item">Absensi :  <span class="badge bg-success">Hadir : {{$ksp->hadir()}}</span>
                      <span class="badge bg-warning">Izin : {{$ksp->izin()}}</span>
                      <span class="badge bg-danger">Tidak Hadir : {{$ksp->tidakhadir()}}</span></li> 
                      <li class="list-group-item">Nilai Teori : {{$ksp->nilai_teori()}}</li> 
                      <li class="list-group-item">Nilai Praktik : {{$ksp->nilai_praktik() ?: 'Nilai Belum Ada'}}</li> 
      							</ul>
							
						</div>
                  		
                  	</div>
                  	@endforeach
               
                </div>
               
              	
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


