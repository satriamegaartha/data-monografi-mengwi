@extends('layouts.master')

@section('content')
<div class="main">    
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="row">
                        <div class="col">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Dashboard</h3>         
                                    <div class="right">                                                                                                                        
                                        <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#chartModal">
                                            Choose Chart
                                        </a>
                                        <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exportpdfModal">
                                            Export PDF
                                        </a>
  
                                    </div>                           
                                </div>
                                
                                <div class="panel-body"> 
                                    <h4>Periode : {{$sem}}</h4>                           
                                    <div class="panel">
                                        <div id="chartUsia">
            
                                        </div>

                                        <div id="chartPekerjaan" style="margin-top: 20px">
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Modal -->
<div class="modal fade" id="exportpdfModal" tabindex="-1" aria-labelledby="exportpdfModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exportpdfModalLabel">Export data ke PDF</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="GET" action="/dashboard/exportpdf">
            @csrf                     
                <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">                                   
                        <label for="tanggal">Tanggal</label>
                        <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="" placeholder="" value="{{old('tanggal')}}">
                        @if ($errors->has('tanggal'))
                        <span class="help-block">{{$errors->first('tanggal')}}</span>
                        @endif                                    
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>          
          <button type="submit" class="btn btn-primary">Export PDF</button>                                     
        </div>
            </form>
      </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="chartModal" tabindex="-1" aria-labelledby="chartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="chartModalLabel">Choose Chart Period</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/dashboard">
            @csrf                     
                <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">                                   
                        <label for="tanggal">Tanggal</label>
                        <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="" placeholder="" value="{{old('tanggal')}}">
                        @if ($errors->has('tanggal'))
                        <span class="help-block">{{$errors->first('tanggal')}}</span>
                        @endif                                    
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>          
          <button type="submit" class="btn btn-primary">Submit</button>                                     
        </div>
            </form>
      </div>
    </div>
</div>

@endsection



@section('footer')       
  {{-- CHART --}}
  <script src="https://code.highcharts.com/highcharts.js"></script>


  <script>
    Highcharts.chart('chartUsia', {
        chart: {
            type: 'bar',
            backgroundColor: '#f7feff'
        },
        title: {
            text: 'Data Usia Penduduk'
        },        
        xAxis: {
            categories: {!! json_encode($categories_usia) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah',
            data: {!! json_encode($data_usia) !!}
        }]
    });
  </script>


<script>
    Highcharts.chart('chartPekerjaan', {
        chart: {
            type: 'bar',
            backgroundColor: '#fffaf7'
        },
        title: {
            text: 'Data Pekerjaan Penduduk'
        },        
        xAxis: {
            categories: {!! json_encode($categories_pekerjaan) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah',
            data: {!! json_encode($data_pekerjaan) !!},
            color: 'tomato'
        }]
    });
  </script>
@endsection