<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Monografi</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="{{asset('frontend/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{asset('frontend/css/stylish-portfolio.min.css')}}" rel="stylesheet">

  {{-- TOASTR --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">     
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Data Penduduk</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Informasi</a>
      </li>
      {{-- <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li> --}}
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex" style="background: url({{asset('frontend/img/atas.jpg')}});">
    <div class="container text-center my-auto">
      <h1 class="mb-1 text-white">Data Monografi</h1>
      <h3 class="mb-5 text-white">
        <em>Pemerintah Kecamatan Mengwi</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{"/login"}}">Find Out More</a>
    </div>
    <div class="overlay"></div>
  </header>

 
  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">        
        <h3 class="text-secondary mb-0">Data Penduduk</h3>
        <h4 class="">Periode : {{$sem}}</h4>
        <div class="row mb-5 justify-content-center">
          <a type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#chartModal">
            Pilih Grafik
          </a>
          <a type="button" class="btn btn-light btn-sm text-dark" data-toggle="modal" data-target="#exportpdfModal">
            Laporan Monografi
          </a>
        </div>
      </div>
      <div class="row">
                                   
        <div class="col-md-6">
            <div id="chartUsia">

            </div>
        </div>
        <div class="col-md-6">          
          <div id="chartPekerjaan" >

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-5">Informasi Pemeritahan</h3>
        
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="https://badungkab.go.id/">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Kabupaten Badung</div>
                <p class="mb-0">Website Pemerintahan Kab. Badung</p>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('frontend/img/bali-beach.jpg')}}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="http://desamengwi.badungkab.go.id/">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Kecamatan Mengwi</div>
                <p class="mb-0">Website Pemerintahan Kec. Mengwi</p>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('frontend/img/bbb1.jpg')}}" alt="">
          </a>
        </div>        
      </div>
    </div>
  </section>






<!-- Modal -->
<div class="modal fade" id="exportpdfModal" tabindex="-1" aria-labelledby="exportpdfModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exportpdfModalLabel">Laporan Data Monografi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="GET" action="/front/exportpdf">
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
        <button type="submit" class="btn btn-primary">Laporan</button>                                     
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
        <form method="POST" action="/">
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












  <!-- Footer -->
  <footer class="footer bg-primary text-center">
    <div class="container">     
      <p class="small mb-0 text-white">Copyright &copy; Kecamatan Mengwi 2020</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('frontend/js/stylish-portfolio.min.js')}}"></script>
 
  {{-- CHART --}}
  <script src="https://code.highcharts.com/highcharts.js"></script>


  <script>
    Highcharts.chart('chartUsia', {
        chart: {
            type: 'bar',
            backgroundColor: '#ccf8ff'
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
            data: {!! json_encode($data_usia) !!},
            color: '#00899e'
        }]
    });
  </script>


  <script>
    Highcharts.chart('chartPekerjaan', {
        chart: {
            type: 'bar',
            backgroundColor: '#fffbeb'
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
            color: '#ffd429'
        }]
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		@if(Session::has('message'))
		toastr.success("{{Session::get('message')}}", "Success")
		@endif
		@if(Session::has('error'))
		toastr.error("{{Session::get('error')}}", "Error")
		@endif
		@if(Session::has('delete'))
		toastr.error("{{Session::get('delete')}}", "Success")
		@endif
	</script>
</body>

</html>
