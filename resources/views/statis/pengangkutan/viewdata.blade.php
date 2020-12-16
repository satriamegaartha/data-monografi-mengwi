@extends('layouts.master')

@section('header')
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet"> --}}
@endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">





                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Prasarana/Sarana Pengangkutan dan Komunikasi</h3>

                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/statis/pengangkutan/{{$pengangkutan->id}}/update">
                                <fieldset disabled>


                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                                <label for="tanggal">Tanggal</label>
                                                <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                    aria-describedby="" placeholder=""
                                                    value="{{$pengangkutan->tanggal}}">
                                                @if ($errors->has('tanggal'))
                                                <span class="help-block">{{$errors->first('tanggal')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('darat') ? 'has-error' : ''}} ">
                                        <label for="darat">8.1. - Lalu Lintas melalui darat di Kecamatan</label>
                                        <input name="darat" type="text" class="form-control" id="darat"
                                            aria-describedby="" placeholder="" value="{{$pengangkutan->darat}}">
                                        @if ($errors->has('darat'))
                                        <span class="help-block">{{$errors->first('darat')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('air') ? 'has-error' : ''}} ">
                                        <label for="air">- Lalu Lintas melalui Air/Sungai/Laut</label>
                                        <input name="air" type="text" class="form-control" id="air" aria-describedby=""
                                            placeholder="" value="{{$pengangkutan->air}}">
                                        @if ($errors->has('air'))
                                        <span class="help-block">{{$errors->first('air')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('dermaga') ? 'has-error' : ''}} ">
                                        <label for="dermaga">8.2. Apabila melalui dermaga/Laut/Sungai, Jumlah
                                            Dermaga</label>
                                        <input name="dermaga" type="text" class="form-control" id="dermaga"
                                            aria-describedby="" placeholder="" value="{{$pengangkutan->dermaga}}">
                                        @if ($errors->has('dermaga'))
                                        <span class="help-block">{{$errors->first('dermaga')}}</span>
                                        @endif
                                    </div>
                                    <label for="">8.3. Lalu Lintas darat Melalui</label>
                                    <div class="form-group {{$errors->has('aspal') ? 'has-error' : ''}} ">
                                        <label for="aspal">
                                            <h5>- Jalan Aspal</h5>
                                        </label>
                                        <input name="aspal" type="text" class="form-control" id="aspal"
                                            aria-describedby="" placeholder="Km" value="{{$pengangkutan->aspal}}">
                                        @if ($errors->has('aspal'))
                                        <span class="help-block">{{$errors->first('aspal')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('diperkeras') ? 'has-error' : ''}} ">
                                        <label for="diperkeras">
                                            <h5>- Jalan Diperkeras</h5>
                                        </label>
                                        <input name="diperkeras" type="text" class="form-control" id="diperkeras"
                                            aria-describedby="" placeholder="Km" value="{{$pengangkutan->diperkeras}}">
                                        @if ($errors->has('diperkeras'))
                                        <span class="help-block">{{$errors->first('diperkeras')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tanah') ? 'has-error' : ''}} ">
                                        <label for="tanah">
                                            <h5>- Jalan Tanah</h5>
                                        </label>
                                        <input name="tanah" type="text" class="form-control" id="tanah"
                                            aria-describedby="" placeholder="Km" value="{{$pengangkutan->tanah}}">
                                        @if ($errors->has('tanah'))
                                        <span class="help-block">{{$errors->first('tanah')}}</span>
                                        @endif
                                    </div>
                                    <label for="">8.4. Sarana Umum yang dapat digunakan oleh Penduduk Kecamatan :
                                    </label>
                                    <div class="form-group {{$errors->has('motor_air') ? 'has-error' : ''}} ">
                                        <label for="motor_air">
                                            <h5>- Motor Air</h5>
                                        </label>
                                        <input name="motor_air" type="text" class="form-control" id="motor_air"
                                            aria-describedby="" placeholder="Km" value="{{$pengangkutan->motor_air}}">
                                        @if ($errors->has('motor_air'))
                                        <span class="help-block">{{$errors->first('motor_air')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sepeda') ? 'has-error' : ''}} ">
                                        <label for="sepeda">
                                            <h5>- Sepeda/Ojek</h5>
                                        </label>
                                        <input name="sepeda" type="text" class="form-control" id="sepeda"
                                            aria-describedby="" placeholder="Km" value="{{$pengangkutan->sepeda}}">
                                        @if ($errors->has('sepeda'))
                                        <span class="help-block">{{$errors->first('sepeda')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('delman') ? 'has-error' : ''}} ">
                                        <label for="delman">
                                            <h5>- Delman</h5>
                                        </label>
                                        <input name="delman" type="text" class="form-control" id="delman"
                                            aria-describedby="" placeholder="Km" value="{{$pengangkutan->delman}}">
                                        @if ($errors->has('delman'))
                                        <span class="help-block">{{$errors->first('delman')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('lain_becak') ? 'has-error' : ''}} ">
                                        <label for="lain_becak">
                                            <h5>- Dan Lain-lain / Becak</h5>
                                        </label>
                                        <input name="lain_becak" type="text" class="form-control" id="lain_becak"
                                            aria-describedby="" placeholder="Km" value="{{$pengangkutan->lain_becak}}">
                                        @if ($errors->has('lain_becak'))
                                        <span class="help-block">{{$errors->first('lain_becak')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah') ? 'has-error' : ''}} ">
                                        <label for="jumlah">
                                            <h5>- Jumlah</h5>
                                        </label>
                                        <input name="jumlah" type="text" class="form-control" id="jumlah"
                                            aria-describedby="" placeholder="Km" value="{{$pengangkutan->jumlah}}">
                                        @if ($errors->has('jumlah'))
                                        <span class="help-block">{{$errors->first('jumlah')}}</span>
                                        @endif
                                    </div>


                                </fieldset>
                            </form>
                            <a href="/statis/pengangkutan/{{$pengangkutan->id}}/edit"
                                class="btn btn-warning btn-sm">Edit</a>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

    <script>
        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy'
        });
    </script> --}}
@endsection