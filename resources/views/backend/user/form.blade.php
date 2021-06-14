@extends('layouts.dash')

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
            <a href="{{route('user.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
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
            <div class="card-header">
            <h3 class="card-title"><i class="fas fa-user mr-3"></i> Tambah Admin</h3>
            </div>
            <div class="card-body">
              <form method="post" action="{{route('user.store')}}">
                @csrf
                <div class="row">
                  <div class="col-12 col-md-6">
                      <div class="form-group">
                          <label >Username</label>
                          <input name="username" type="text" class="form-control @error('username') is-invalid @enderror"/>
                          @error('username')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="form-group">
                          <label >Email</label>
                          <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" />
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="form-group">
                          <label >Password</label>
                          <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" />
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="form-group">
                          <label >Konfirmasi Password</label>
                          <input name="repassword" type="password" class="form-control @error('repassword') is-invalid @enderror" />
                          @error('repassword')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="form-group">
                          <label >Hak Akses</label>
                          <select name="role" class="form-control select2" style="width: 100%;">
                            
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : ''}} >Admin</option>
                            <option value="kepala" {{ old('role') == 'kepala' ? 'selected' : ''}} >Kepala</option>
                            
                          </select>
                          @error('role')
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