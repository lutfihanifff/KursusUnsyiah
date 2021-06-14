@extends('layouts.dash')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>


      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        @if(auth::user()->role == 'admin')
        @include('backend.dash.admin')
        @else
        @include('backend.dash.instruktur')
        @endif
      </div>
    </div>
  </section>

</div>

@endsection

@section('script')
<!-- FLOT CHARTS -->
<script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('assets/plugins/flot-old/jquery.flot.resize.min.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('assets/plugins/flot-old/jquery.flot.pie.min.js')}}"></script>

<!-- Page script -->
<script>
  $(function() {

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data: {
        !!json_encode($barCount) !!
      },
      bars: {
        show: true
      }
    }
    $.plot('#bar-chart', [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor: '#f3f3f3'
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis: {
        ticks: [
          [1, 'Jan'],
          [2, 'Feb'],
          [3, 'Mar'],
          [4, 'Apr'],
          [5, 'Mei'],
          [6, 'Juni'],
          [7, 'Juli'],
          [8, 'Agus'],
          [9, 'Sep'],
          [10, 'Okto'],
          [11, 'Nov'],
          [12, 'Des']
        ]
      }
    })
    /* END BAR CHART */


    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [{
        label: 'Laki-laki',
        data: {
          !!json_encode($male) !!
        },
        color: '#3c8dbc'
      },
      {
        label: 'Perempuan',
        data: {
          !!json_encode($female) !!
        },
        color: '#0073b7'
      }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 3 / 4,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
      label +
      '<br>' +
      Math.round(series.percent) + '%</div>'
  }
</script>

@stop