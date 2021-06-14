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
            <h1>Data Absensi</h1>
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
                    <th >Peserta</th>
                    <th >Program Kursus</th>
                    <th >Absensi </th>
                   
                    <th class=" no-sort"></th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($peserta as $pst)
                  <tr>
                    <td><strong>{{$pst->id}}</strong> | {{$pst->nama}}</td>
                    <td>
                     @if($pst->first_kursus()->status == 'selesai')
                      <span class="badge bg-gray">Selesai</span>
                     @else
                      <span class="badge bg-info">Mulai</span>
                    @endif
                      {{$pst->first_kursus()->program->program}}
                    </td>
                    <td>
                      <span class="badge bg-success">Hadir : {{$pst->first_kursus()->hadir()}}</span>
                      <span class="badge bg-warning">Izin : {{$pst->first_kursus()->izin()}}</span>
                      <span class="badge bg-danger">Tidak Hadir : {{$pst->first_kursus()->tidakhadir()}}</span>
                    </td>
                   
                    <td>
                      @if($pst->first_kursus()->status == 'selesai')
                      <a href="{{route('absensi.show', $pst->first_kursus()->id)}}" class="btn bg-gradient-warning"><i class="fas fa-chevron-circle-right"></i> Kelola Absensi</a>
                      @else
                      <a href="{{route('absensi.show', $pst->first_kursus()->id)}}" class="btn bg-gradient-primary"><i class="fas fa-chevron-circle-right"></i> Buat Absensi</a>

                      @endif
                      
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