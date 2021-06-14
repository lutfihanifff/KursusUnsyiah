@extends('layouts.dash')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      	<div class="card">
	      	<div class="card-body">
	      		<form action="{{route('laporan.exins')}}" method="post">
	      			@csrf
	     			<div class="row">
	     				
	     				<div class="col-12">
	     					<h2>Laporan Instruktur</h2>
	     					<br>
	     				</div>
	     				<div class="col-12 col-md-6">
	     					
	     					<div class="form-group">
			                  <label>Bulan</label>
			                  <select name="bulan" class="form-control @error('bulan') is-invalid @enderror" style="width: 100%;">
			                  	<option value="ALL" selected>Semua</option>
			                  	<option value="1">Januari</option>
			                  	<option value="2">Februari</option>
			                  	<option value="3">Maret</option>
			                  	<option value="4">April</option>
			                  	<option value="5">Mei</option>
			                  	<option value="6">Juni</option>
			                  	<option value="7">Juli</option>
			                  	<option value="8">Agustus</option>
			                  	<option value="9">September</option>
			                  	<option value="10">Oktober</option>
			                  	<option value="11">November</option>
			                  	<option value="12">Desember</option>
			                  </select>
			                  	@error('bulan')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
	     	
	     				</div>
	     				<div class="col-12 col-md-6">
	     					<div class="form-group">
			                    <label >Tahun</label>
			                    <input name="tahun" type="number" maxlength="4" size="4" class="form-control @error('tahun') is-invalid @enderror" value="{{date('Y')}}" required>
			                    @error('tahun')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
	     				</div>
	     				<div class="col-12 text-right">
	     					<button type="submit" class="btn btn-app btn-block"><i class="fas fa-print"></i> Cetak Laporan</button>
	     				</div>	
	     			</div>	
	     			
	      		</form>
	      	</div>	
      
  		</div>
    </section>
    
   </div>
    
@endsection