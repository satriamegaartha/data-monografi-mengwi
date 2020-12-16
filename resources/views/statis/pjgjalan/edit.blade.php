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
                            <h3 class="panel-title">Tambah Data Panjang Jalan dan Jembatan</h3>

                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/statis/pjgjalan/{{$pjgjalan->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$pjgjalan->tanggal}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <label for="">9.1. Jenis Jalan</label>
                                <div class="form-group {{$errors->has('j_negara') ? 'has-error' : ''}} ">
                                    <label for="j_negara">
                                        <h5>a. Jalan Negara</h5>
                                    </label>
                                    <input name="j_negara" type="text" class="form-control" id="j_negara"
                                        aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_negara}}">
                                    @if ($errors->has('j_negara'))
                                    <span class="help-block">{{$errors->first('j_negara')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('j_propinsi') ? 'has-error' : ''}} ">
                                    <label for="j_propinsi">
                                        <h5>b. Jalan Propinsi</h5>
                                    </label>
                                    <input name="j_propinsi" type="text" class="form-control" id="j_propinsi"
                                        aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_propinsi}}">
                                    @if ($errors->has('j_propinsi'))
                                    <span class="help-block">{{$errors->first('j_propinsi')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('j_kota') ? 'has-error' : ''}} ">
                                    <label for="j_kota">
                                        <h5>c. Jalan Kota</h5>
                                    </label>
                                    <input name="j_kota" type="text" class="form-control" id="j_kota"
                                        aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kota}}">
                                    @if ($errors->has('j_kota'))
                                    <span class="help-block">{{$errors->first('j_kota')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('j_desa') ? 'has-error' : ''}} ">
                                    <label for="j_desa">
                                        <h5>d. Jalan Kelurahan/Desa </h5>
                                    </label>
                                    <input name="j_desa" type="text" class="form-control" id="j_desa"
                                        aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_desa}}">
                                    @if ($errors->has('j_desa'))
                                    <span class="help-block">{{$errors->first('j_desa')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('j_jumlah') ? 'has-error' : ''}} ">
                                    <label for="j_jumlah">
                                        <h5>Jumlah</h5>
                                    </label>
                                    <input name="j_jumlah" type="text" class="form-control" id="j_jumlah"
                                        aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_jumlah}}">
                                    @if ($errors->has('j_jumlah'))
                                    <span class="help-block">{{$errors->first('j_jumlah')}}</span>
                                    @endif
                                </div>


                                <label for="">9.2. Kelas Jalan</label>
                                <div class="form-group row {{$errors->has('j_kls1') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="j_kls1">
                                            <h5>a. Jalan Kelas I</h5>
                                        </label>
                                        <input name="j_kls1" type="text" class="form-control" id="j_kls1"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls1}}">
                                        @if ($errors->has('j_kls1'))
                                        <span class="help-block">{{$errors->first('j_kls1')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="j_kls1_r">
                                            <h5>Rusak</h5>
                                        </label>
                                        <input name="j_kls1_r" type="text" class="form-control" id="j_kls1_r"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls1_r}}">
                                        @if ($errors->has('j_kls1_r'))
                                        <span class="help-block">{{$errors->first('j_kls1_r')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{$errors->has('j_kls2') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="j_kls2">
                                            <h5>b. Jalan Kelas II</h5>
                                        </label>
                                        <input name="j_kls2" type="text" class="form-control" id="j_kls2"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls2}}">
                                        @if ($errors->has('j_kls2'))
                                        <span class="help-block">{{$errors->first('j_kls2')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="j_kls2_r">
                                            <h5>Rusak</h5>
                                        </label>
                                        <input name="j_kls2_r" type="text" class="form-control" id="j_kls2_r"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls2_r}}">
                                        @if ($errors->has('j_kls2_r'))
                                        <span class="help-block">{{$errors->first('j_kls2_r')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{$errors->has('j_kls3') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="j_kls3">
                                            <h5>c. Jalan Kelas III</h5>
                                        </label>
                                        <input name="j_kls3" type="text" class="form-control" id="j_kls3"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls3}}">
                                        @if ($errors->has('j_kls3'))
                                        <span class="help-block">{{$errors->first('j_kls3')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="j_kls3_r">
                                            <h5>Rusak</h5>
                                        </label>
                                        <input name="j_kls3_r" type="text" class="form-control" id="j_kls3_r"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls3_r}}">
                                        @if ($errors->has('j_kls3_r'))
                                        <span class="help-block">{{$errors->first('j_kls3_r')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{$errors->has('j_kls3a') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="j_kls3a">
                                            <h5>d. Jalan Kelas IIIa</h5>
                                        </label>
                                        <input name="j_kls3a" type="text" class="form-control" id="j_kls3a"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls3a}}">
                                        @if ($errors->has('j_kls3a'))
                                        <span class="help-block">{{$errors->first('j_kls3a')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="j_kls3a_r">
                                            <h5>Rusak</h5>
                                        </label>
                                        <input name="j_kls3a_r" type="text" class="form-control" id="j_kls3a_r"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls3a_r}}">
                                        @if ($errors->has('j_kls3a_r'))
                                        <span class="help-block">{{$errors->first('j_kls3a_r')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{$errors->has('j_kls4') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="j_kls4">
                                            <h5>e. Jalan Kelas IV</h5>
                                        </label>
                                        <input name="j_kls4" type="text" class="form-control" id="j_kls4"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls4}}">
                                        @if ($errors->has('j_kls4'))
                                        <span class="help-block">{{$errors->first('j_kls4')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="j_kls4_r">
                                            <h5>Rusak</h5>
                                        </label>
                                        <input name="j_kls4_r" type="text" class="form-control" id="j_kls4_r"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls4_r}}">
                                        @if ($errors->has('j_kls4_r'))
                                        <span class="help-block">{{$errors->first('j_kls4_r')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{$errors->has('j_klsdesa') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="j_klsdesa">
                                            <h5>f. Jalan Kelas Desa</h5>
                                        </label>
                                        <input name="j_klsdesa" type="text" class="form-control" id="j_klsdesa"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_klsdesa}}">
                                        @if ($errors->has('j_klsdesa'))
                                        <span class="help-block">{{$errors->first('j_klsdesa')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="j_klsdesa_r">
                                            <h5>Rusak</h5>
                                        </label>
                                        <input name="j_klsdesa_r" type="text" class="form-control" id="j_klsdesa_r"
                                            aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_klsdesa_r}}">
                                        @if ($errors->has('j_klsdesa_r'))
                                        <span class="help-block">{{$errors->first('j_klsdesa_r')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('j_kls_jumlah') ? 'has-error' : ''}} ">
                                    <label for="j_kls_jumlah">
                                        <h5>Jumlah</h5>
                                    </label>
                                    <input name="j_kls_jumlah" type="text" class="form-control" id="j_kls_jumlah"
                                        aria-describedby="" placeholder="Km" value="{{$pjgjalan->j_kls_jumlah}}">
                                    @if ($errors->has('j_kls_jumlah'))
                                    <span class="help-block">{{$errors->first('j_kls_jumlah')}}</span>
                                    @endif
                                </div>




                                <div class="form-group {{$errors->has('jembatan') ? 'has-error' : ''}} ">
                                    <label for="jembatan">9.4 Jembatan</label>
                                    <input name="jembatan" type="text" class="form-control" id="jembatan"
                                        aria-describedby="" placeholder="Buah" value="{{$pjgjalan->jembatan}}">
                                    @if ($errors->has('jembatan'))
                                    <span class="help-block">{{$errors->first('jembatan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jem_beton') ? 'has-error' : ''}} ">
                                    <label for="jem_beton">
                                        <h5>a. Jembatan Beton/Batu/bata</h5>
                                    </label>
                                    <input name="jem_beton" type="text" class="form-control" id="jem_beton"
                                        aria-describedby="" placeholder="Buah" value="{{$pjgjalan->jem_beton}}">
                                    @if ($errors->has('jem_beton'))
                                    <span class="help-block">{{$errors->first('jem_beton')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jem_besi') ? 'has-error' : ''}} ">
                                    <label for="jem_besi">
                                        <h5>b. Jembatan Besi</h5>
                                    </label>
                                    <input name="jem_besi" type="text" class="form-control" id="jem_besi"
                                        aria-describedby="" placeholder="Buah" value="{{$pjgjalan->jem_besi}}">
                                    @if ($errors->has('jem_besi'))
                                    <span class="help-block">{{$errors->first('jem_besi')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jem_kayu') ? 'has-error' : ''}} ">
                                    <label for="jem_kayu">
                                        <h5>c. Jembatan Kayu/Bambu </h5>
                                    </label>
                                    <input name="jem_kayu" type="text" class="form-control" id="jem_kayu"
                                        aria-describedby="" placeholder="Buah" value="{{$pjgjalan->jem_kayu}}">
                                    @if ($errors->has('jem_kayu'))
                                    <span class="help-block">{{$errors->first('jem_kayu')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jem_lain') ? 'has-error' : ''}} ">
                                    <label for="jem_lain">
                                        <h5>d. Jembatan Lain-lain </h5>
                                    </label>
                                    <input name="jem_lain" type="text" class="form-control" id="jem_lain"
                                        aria-describedby="" placeholder="Buah" value="{{$pjgjalan->jem_lain}}">
                                    @if ($errors->has('jem_lain'))
                                    <span class="help-block">{{$errors->first('jem_lain')}}</span>
                                    @endif
                                </div>












                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
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