@extends('layouts.dash')

@section('style')
<!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
@stop

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Input</h1>
          </div>
          <div class="col-sm-6">
            <span class="float-sm-right">
            <a href="{{route('peserta.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
          </div>
         
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <h3 class="card-title"><i class="fas fa-user mr-3"></i> Tambah Peserta Kursus</h3>
            </div>
            <div class="card-body">
              <form method="post" action="{{route('peserta.store')}}">
                @csrf
                <div class="row">
                 
                  <div class="col-12 col-md-4">
                      <div class="form-group">
                          <label >Nomor Induk</label>
                          <input name="id" type="text" value="{{ old('id') ?? $no_induk }}" class="form-control @error('id') is-invalid @enderror" maxlength="8" />
                          @error('id')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12 col-md-8">
                      <div class="form-group">
                          <label >Email</label>
                          <input name="email" type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" />
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12">
                      <hr>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="form-group">
                          <label >Nama Lengkap</label>
                          <input name="nama" type="text" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror"/>
                          @error('nama')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="form-group">
                          <label >Gender</label>
                          <select name="gender" class="form-control select2" style="width: 100%;">
                            
                            <option value="L" {{ old('gender') == 'L' ? 'selected' : ''}} >Laki-laki</option>
                            <option value="P" {{ old('gender') == 'P' ? 'selected' : ''}} >Perempuan</option>
                            
                          </select>
                          @error('gender')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12 col-md-3">
                      <div class="form-group">
                          <label >Tempat Lahir</label>
                          <input name="tempat_lahir" type="text" value="{{old('tempat_lahir')}}" class="form-control @error('tempat_lahir') is-invalid @enderror"/>
                          @error('tempat_lahir')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12 col-md-3">
                      <div class="form-group">
                          <label >Tanggal Lahir</label>
                          <input name="tanggal_lahir" id="tgl" type="text" value="{{old('tanggal_lahir')}}" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                          @error('tanggal_lahir')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="form-group">
                          <label >No Handphone</label>
                          <input name="nohp" type="text" value="{{old('nohp')}}" class="form-control @error('nohp') is-invalid @enderror"/>
                          @error('nohp')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                              <label >Alamat</label>
                              <textarea name="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror">{{old('alamat')}}</textarea>
                              @error('alamat')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                  </div>
                  <div class="col-12 text-right">
                    <button type="submit" class="btn btn-app"><i class="fas fa-save"></i> Simpan</button>
                  </div>  
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    
   </div>
    
@endsection

@section('script')
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript">
  $(function () {
    //Date range picker
    $('#tgl').daterangepicker({
      singleDatePicker: true,
      locale: {
        format: 'YYYY-MM-DD'
      }
    });
  });
</script>
@stop