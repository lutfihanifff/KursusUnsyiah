@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
          
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title"><i class="far fa-address-card"></i> Data Diri</h3>
                        </div>
                        <div class="card-body p-2">
                          <ul class="nav flex-column">
                              <li class="nav-item">
                                <a class="nav-link">
                                  <i class="far fa-user mr-1"></i> {{auth::user()->peserta->id}} | {{auth::user()->peserta->nama}}
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link">
                                  <i class="fas fa-venus-mars"></i> {{auth::user()->peserta->gender == 'L' ? 'Laki-laki' : 'Perempuan'}}
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link">
                                  <i class="far fa-calendar-alt mr-1"></i> {{auth::user()->peserta->tempat_lahir}}, {{auth::user()->peserta->tanggal_lahir}}
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link">
                                 <i class="far fa-envelope mr-1"></i> {{auth::user()->email}} |&nbsp; <i class="fas fa-phone mr-1"></i> {{auth::user()->peserta->nohp}}
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link">
                                  <i class="far fa-map mr-1"></i> {{auth::user()->peserta->alamat}}
                                </a>
                              </li>
                            </ul>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection	