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
            <h1>Data Nilai Praktik</h1>
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
              <table id="datatabel" class="table table-hover nowrap" style="width: 100%" data-page-length="5">
                  <thead>
                  <tr>
                    <th>Peserta</th>
                    <th>Program Kursus </th>
                    <th>Nilai Praktik</th>
                 
                    
                  
                    <th class="no-sort"></th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($peserta as $pst)
                  <tr>
                    <td><strong>{{$pst->id}}</strong> | {{$pst->nama}}</td>
                    <td>{{$pst->first_kursus()->program->program}}</td>
                    <td>
                      @if($pst->first_kursus()->nilai->count() != null)
                        Grade {{$pst->first_kursus()->nilai_predikat()}} | {{$pst->first_kursus()->nilai_praktik()}}
                      @else
                        Nilai Belum Ada
                      @endif
                    </td>
                    
                    <td>
                      @if($pst->first_kursus()->sertifikat)
                        <a href="" class="btn bg-gradient-dark disabled"><i class="fas fa-info-circle"></i> Kursus Sudah Selesai</a>
                      @else
                        @if($pst->first_kursus()->nilai->count() != null)
                          <a href="{{route('nilai.create', $pst->first_kursus()->id)}}" class="btn bg-gradient-warning"><i class="fas fa-chevron-circle-right"></i> Ubah Nilai</a>
                        @else
                          <a href="{{route('nilai.create', $pst->first_kursus()->id)}}" class="btn bg-gradient-primary"><i class="fas fa-chevron-circle-right"></i> Isi Nilai</a>
                        @endif
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