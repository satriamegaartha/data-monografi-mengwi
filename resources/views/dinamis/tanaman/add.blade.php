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
                            <h3 class="panel-title">Tanaman</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/dinamis/tanaman/create">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{old('tanggal')}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <label for="">
                                    <h5><strong>D. TANAM-TANAMAN</strong></h5>
                                </label>
                                <br>
                                <label for="">
                                    <h5>1. Luas dan Produksi Tanaman Utama </h5>
                                </label>
                                <br>
                                <label for="">
                                    <h5><strong>Padi</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('padi_luas_tanaman') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="padi_luas_tanaman">
                                            <h5>Luas Tanaman</h5>
                                        </label>
                                        <input name="padi_luas_tanaman" type="text" class="form-control"
                                            id="padi_luas_tanaman" aria-describedby="" placeholder="Ha"
                                            value="{{old('padi_luas_tanaman')}}">
                                        @if ($errors->has('padi_luas_tanaman'))
                                        <span class="help-block">{{$errors->first('padi_luas_tanaman')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="padi_luas_panen">
                                            <h5>Luas yang Panen</h5>
                                        </label>
                                        <input name="padi_luas_panen" type="text" class="form-control"
                                            id="padi_luas_panen" aria-describedby="" placeholder="Ha"
                                            value="{{old('padi_luas_panen')}}">
                                        @if ($errors->has('padi_luas_panen'))
                                        <span class="help-block">{{$errors->first('padi_luas_panen')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="padi_rata2_produksi">
                                            <h5>Rata-Rata Produksi</h5>
                                        </label>
                                        <input name="padi_rata2_produksi" type="text" class="form-control"
                                            id="padi_rata2_produksi" aria-describedby="" placeholder="Ton"
                                            value="{{old('padi_rata2_produksi')}}">
                                        @if ($errors->has('padi_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('padi_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="padi_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="padi_jumlah" type="text" class="form-control" id="padi_jumlah"
                                            aria-describedby="" placeholder="" value="{{old('padi_jumlah')}}">
                                        @if ($errors->has('padi_jumlah'))
                                        <span class="help-block">{{$errors->first('padi_jumlah')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Jagung</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('jagung_luas_tanaman') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="jagung_luas_tanaman">
                                            <h5>Luas Tanaman</h5>
                                        </label>
                                        <input name="jagung_luas_tanaman" type="text" class="form-control"
                                            id="jagung_luas_tanaman" aria-describedby="" placeholder="Ha"
                                            value="{{old('jagung_luas_tanaman')}}">
                                        @if ($errors->has('jagung_luas_tanaman'))
                                        <span class="help-block">{{$errors->first('jagung_luas_tanaman')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="jagung_luas_panen">
                                            <h5>Luas yang Panen</h5>
                                        </label>
                                        <input name="jagung_luas_panen" type="text" class="form-control"
                                            id="jagung_luas_panen" aria-describedby="" placeholder="Ha"
                                            value="{{old('jagung_luas_panen')}}">
                                        @if ($errors->has('jagung_luas_panen'))
                                        <span class="help-block">{{$errors->first('jagung_luas_panen')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="jagung_rata2_produksi">
                                            <h5>Rata-Rata Produksi</h5>
                                        </label>
                                        <input name="jagung_rata2_produksi" type="text" class="form-control"
                                            id="jagung_rata2_produksi" aria-describedby="" placeholder="Ton"
                                            value="{{old('jagung_rata2_produksi')}}">
                                        @if ($errors->has('jagung_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('jagung_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="jagung_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="jagung_jumlah" type="text" class="form-control" id="jagung_jumlah"
                                            aria-describedby="" placeholder="" value="{{old('jagung_jumlah')}}">
                                        @if ($errors->has('jagung_jumlah'))
                                        <span class="help-block">{{$errors->first('jagung_jumlah')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Ketela Pohon</strong></h5>
                                </label>
                                <div
                                    class="form-group row {{$errors->has('ketela_pohon_luas_tanaman') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="ketela_pohon_luas_tanaman">
                                            <h5>Luas Tanaman</h5>
                                        </label>
                                        <input name="ketela_pohon_luas_tanaman" type="text" class="form-control"
                                            id="ketela_pohon_luas_tanaman" aria-describedby="" placeholder="Ha"
                                            value="{{old('ketela_pohon_luas_tanaman')}}">
                                        @if ($errors->has('ketela_pohon_luas_tanaman'))
                                        <span class="help-block">{{$errors->first('ketela_pohon_luas_tanaman')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="ketela_pohon_luas_panen">
                                            <h5>Luas yang Panen</h5>
                                        </label>
                                        <input name="ketela_pohon_luas_panen" type="text" class="form-control"
                                            id="ketela_pohon_luas_panen" aria-describedby="" placeholder="Ha"
                                            value="{{old('ketela_pohon_luas_panen')}}">
                                        @if ($errors->has('ketela_pohon_luas_panen'))
                                        <span class="help-block">{{$errors->first('ketela_pohon_luas_panen')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="ketela_pohon_rata2_produksi">
                                            <h5>Rata-Rata Produksi</h5>
                                        </label>
                                        <input name="ketela_pohon_rata2_produksi" type="text" class="form-control"
                                            id="ketela_pohon_rata2_produksi" aria-describedby="" placeholder="Ton"
                                            value="{{old('ketela_pohon_rata2_produksi')}}">
                                        @if ($errors->has('ketela_pohon_rata2_produksi'))
                                        <span
                                            class="help-block">{{$errors->first('ketela_pohon_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="ketela_pohon_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="ketela_pohon_jumlah" type="text" class="form-control"
                                            id="ketela_pohon_jumlah" aria-describedby="" placeholder=""
                                            value="{{old('ketela_pohon_jumlah')}}">
                                        @if ($errors->has('ketela_pohon_jumlah'))
                                        <span class="help-block">{{$errors->first('ketela_pohon_jumlah')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Ketela Rambat</strong></h5>
                                </label>
                                <div
                                    class="form-group row {{$errors->has('ketela_rambat_luas_tanaman') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="ketela_rambat_luas_tanaman">
                                            <h5>Luas Tanaman</h5>
                                        </label>
                                        <input name="ketela_rambat_luas_tanaman" type="text" class="form-control"
                                            id="ketela_rambat_luas_tanaman" aria-describedby="" placeholder="Ha"
                                            value="{{old('ketela_rambat_luas_tanaman')}}">
                                        @if ($errors->has('ketela_rambat_luas_tanaman'))
                                        <span class="help-block">{{$errors->first('ketela_rambat_luas_tanaman')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="ketela_rambat_luas_panen">
                                            <h5>Luas yang Panen</h5>
                                        </label>
                                        <input name="ketela_rambat_luas_panen" type="text" class="form-control"
                                            id="ketela_rambat_luas_panen" aria-describedby="" placeholder="Ha"
                                            value="{{old('ketela_rambat_luas_panen')}}">
                                        @if ($errors->has('ketela_rambat_luas_panen'))
                                        <span class="help-block">{{$errors->first('ketela_rambat_luas_panen')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="ketela_rambat_rata2_produksi">
                                            <h5>Rata-Rata Produksi</h5>
                                        </label>
                                        <input name="ketela_rambat_rata2_produksi" type="text" class="form-control"
                                            id="ketela_rambat_rata2_produksi" aria-describedby="" placeholder="Ton"
                                            value="{{old('ketela_rambat_rata2_produksi')}}">
                                        @if ($errors->has('ketela_rambat_rata2_produksi'))
                                        <span
                                            class="help-block">{{$errors->first('ketela_rambat_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="ketela_rambat_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="ketela_rambat_jumlah" type="text" class="form-control"
                                            id="ketela_rambat_jumlah" aria-describedby="" placeholder=""
                                            value="{{old('ketela_rambat_jumlah')}}">
                                        @if ($errors->has('ketela_rambat_jumlah'))
                                        <span class="help-block">{{$errors->first('ketela_rambat_jumlah')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Kacang Tanah</strong></h5>
                                </label>
                                <div
                                    class="form-group row {{$errors->has('kacang_tanah_luas_tanaman') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="kacang_tanah_luas_tanaman">
                                            <h5>Luas Tanaman</h5>
                                        </label>
                                        <input name="kacang_tanah_luas_tanaman" type="text" class="form-control"
                                            id="kacang_tanah_luas_tanaman" aria-describedby="" placeholder="Ha"
                                            value="{{old('kacang_tanah_luas_tanaman')}}">
                                        @if ($errors->has('kacang_tanah_luas_tanaman'))
                                        <span class="help-block">{{$errors->first('kacang_tanah_luas_tanaman')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kacang_tanah_luas_panen">
                                            <h5>Luas yang Panen</h5>
                                        </label>
                                        <input name="kacang_tanah_luas_panen" type="text" class="form-control"
                                            id="kacang_tanah_luas_panen" aria-describedby="" placeholder="Ha"
                                            value="{{old('kacang_tanah_luas_panen')}}">
                                        @if ($errors->has('kacang_tanah_luas_panen'))
                                        <span class="help-block">{{$errors->first('kacang_tanah_luas_panen')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kacang_tanah_rata2_produksi">
                                            <h5>Rata-Rata Produksi</h5>
                                        </label>
                                        <input name="kacang_tanah_rata2_produksi" type="text" class="form-control"
                                            id="kacang_tanah_rata2_produksi" aria-describedby="" placeholder="Ton"
                                            value="{{old('kacang_tanah_rata2_produksi')}}">
                                        @if ($errors->has('kacang_tanah_rata2_produksi'))
                                        <span
                                            class="help-block">{{$errors->first('kacang_tanah_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kacang_tanah_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="kacang_tanah_jumlah" type="text" class="form-control"
                                            id="kacang_tanah_jumlah" aria-describedby="" placeholder=""
                                            value="{{old('kacang_tanah_jumlah')}}">
                                        @if ($errors->has('kacang_tanah_jumlah'))
                                        <span class="help-block">{{$errors->first('kacang_tanah_jumlah')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Kedelai</strong></h5>
                                </label>
                                <div
                                    class="form-group row {{$errors->has('kedelai_luas_tanaman') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="kedelai_luas_tanaman">
                                            <h5>Luas Tanaman</h5>
                                        </label>
                                        <input name="kedelai_luas_tanaman" type="text" class="form-control"
                                            id="kedelai_luas_tanaman" aria-describedby="" placeholder="Ha"
                                            value="{{old('kedelai_luas_tanaman')}}">
                                        @if ($errors->has('kedelai_luas_tanaman'))
                                        <span class="help-block">{{$errors->first('kedelai_luas_tanaman')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kedelai_luas_panen">
                                            <h5>Luas yang Panen</h5>
                                        </label>
                                        <input name="kedelai_luas_panen" type="text" class="form-control"
                                            id="kedelai_luas_panen" aria-describedby="" placeholder="Ha"
                                            value="{{old('kedelai_luas_panen')}}">
                                        @if ($errors->has('kedelai_luas_panen'))
                                        <span class="help-block">{{$errors->first('kedelai_luas_panen')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kedelai_rata2_produksi">
                                            <h5>Rata-Rata Produksi</h5>
                                        </label>
                                        <input name="kedelai_rata2_produksi" type="text" class="form-control"
                                            id="kedelai_rata2_produksi" aria-describedby="" placeholder="Ton"
                                            value="{{old('kedelai_rata2_produksi')}}">
                                        @if ($errors->has('kedelai_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('kedelai_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kedelai_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="kedelai_jumlah" type="text" class="form-control"
                                            id="kedelai_jumlah" aria-describedby="" placeholder=""
                                            value="{{old('kedelai_jumlah')}}">
                                        @if ($errors->has('kedelai_jumlah'))
                                        <span class="help-block">{{$errors->first('kedelai_jumlah')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Sayur-Sayuran</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('sayur_luas_tanaman') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="sayur_luas_tanaman">
                                            <h5>Luas Tanaman</h5>
                                        </label>
                                        <input name="sayur_luas_tanaman" type="text" class="form-control"
                                            id="sayur_luas_tanaman" aria-describedby="" placeholder="Ha"
                                            value="{{old('sayur_luas_tanaman')}}">
                                        @if ($errors->has('sayur_luas_tanaman'))
                                        <span class="help-block">{{$errors->first('sayur_luas_tanaman')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="sayur_luas_panen">
                                            <h5>Luas yang Panen</h5>
                                        </label>
                                        <input name="sayur_luas_panen" type="text" class="form-control"
                                            id="sayur_luas_panen" aria-describedby="" placeholder="Ha"
                                            value="{{old('sayur_luas_panen')}}">
                                        @if ($errors->has('sayur_luas_panen'))
                                        <span class="help-block">{{$errors->first('sayur_luas_panen')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="sayur_rata2_produksi">
                                            <h5>Rata-Rata Produksi</h5>
                                        </label>
                                        <input name="sayur_rata2_produksi" type="text" class="form-control"
                                            id="sayur_rata2_produksi" aria-describedby="" placeholder="Ton"
                                            value="{{old('sayur_rata2_produksi')}}">
                                        @if ($errors->has('sayur_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('sayur_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="sayur_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="sayur_jumlah" type="text" class="form-control" id="sayur_jumlah"
                                            aria-describedby="" placeholder="" value="{{old('sayur_jumlah')}}">
                                        @if ($errors->has('sayur_jumlah'))
                                        <span class="help-block">{{$errors->first('sayur_jumlah')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Buah-Buahan</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('buah_luas_tanaman') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="buah_luas_tanaman">
                                            <h5>Luas Tanaman</h5>
                                        </label>
                                        <input name="buah_luas_tanaman" type="text" class="form-control"
                                            id="buah_luas_tanaman" aria-describedby="" placeholder="Ha"
                                            value="{{old('buah_luas_tanaman')}}">
                                        @if ($errors->has('buah_luas_tanaman'))
                                        <span class="help-block">{{$errors->first('buah_luas_tanaman')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="buah_luas_panen">
                                            <h5>Luas yang Panen</h5>
                                        </label>
                                        <input name="buah_luas_panen" type="text" class="form-control"
                                            id="buah_luas_panen" aria-describedby="" placeholder="Ha"
                                            value="{{old('buah_luas_panen')}}">
                                        @if ($errors->has('buah_luas_panen'))
                                        <span class="help-block">{{$errors->first('buah_luas_panen')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="buah_rata2_produksi">
                                            <h5>Rata-Rata Produksi</h5>
                                        </label>
                                        <input name="buah_rata2_produksi" type="text" class="form-control"
                                            id="buah_rata2_produksi" aria-describedby="" placeholder="Ton"
                                            value="{{old('buah_rata2_produksi')}}">
                                        @if ($errors->has('buah_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('buah_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="buah_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="buah_jumlah" type="text" class="form-control" id="buah_jumlah"
                                            aria-describedby="" placeholder="" value="{{old('buah_jumlah')}}">
                                        @if ($errors->has('buah_jumlah'))
                                        <span class="help-block">{{$errors->first('buah_jumlah')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Dan Lain-Lain</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('lain_luas_tanaman') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="lain_luas_tanaman">
                                            <h5>Luas Tanaman</h5>
                                        </label>
                                        <input name="lain_luas_tanaman" type="text" class="form-control"
                                            id="lain_luas_tanaman" aria-describedby="" placeholder="Ha"
                                            value="{{old('lain_luas_tanaman')}}">
                                        @if ($errors->has('lain_luas_tanaman'))
                                        <span class="help-block">{{$errors->first('lain_luas_tanaman')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="lain_luas_panen">
                                            <h5>Luas yang Panen</h5>
                                        </label>
                                        <input name="lain_luas_panen" type="text" class="form-control"
                                            id="lain_luas_panen" aria-describedby="" placeholder="Ha"
                                            value="{{old('lain_luas_panen')}}">
                                        @if ($errors->has('lain_luas_panen'))
                                        <span class="help-block">{{$errors->first('lain_luas_panen')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="lain_rata2_produksi">
                                            <h5>Rata-Rata Produksi</h5>
                                        </label>
                                        <input name="lain_rata2_produksi" type="text" class="form-control"
                                            id="lain_rata2_produksi" aria-describedby="" placeholder="Ton"
                                            value="{{old('lain_rata2_produksi')}}">
                                        @if ($errors->has('lain_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('lain_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="lain_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="lain_jumlah" type="text" class="form-control" id="lain_jumlah"
                                            aria-describedby="" placeholder="" value="{{old('lain_jumlah')}}">
                                        @if ($errors->has('lain_jumlah'))
                                        <span class="help-block">{{$errors->first('lain_jumlah')}}</span>
                                        @endif
                                    </div>
                                </div>
















                                <hr style="border: 2px solid grey">
                                <label for="">
                                    <h5>2. Tanaman Perdagangan </h5>
                                </label>
                                <br>
                                <label for="">
                                    <h5><strong>Cengkeh</strong></h5>
                                </label>
                                <div
                                    class="form-group row {{$errors->has('cengkeh_blm_produksi') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="cengkeh_blm_produksi">
                                            <h5>Belum Produksi/muda</h5>
                                        </label>
                                        <input name="cengkeh_blm_produksi" type="text" class="form-control"
                                            id="cengkeh_blm_produksi" aria-describedby=""
                                            value="{{old('cengkeh_blm_produksi')}}">
                                        @if ($errors->has('cengkeh_blm_produksi'))
                                        <span class="help-block">{{$errors->first('cengkeh_blm_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="cengkeh_produksi">
                                            <h5>Berproduksi</h5>
                                        </label>
                                        <input name="cengkeh_produksi" type="text" class="form-control"
                                            id="cengkeh_produksi" aria-describedby=""
                                            value="{{old('cengkeh_produksi')}}">
                                        @if ($errors->has('cengkeh_produksi'))
                                        <span class="help-block">{{$errors->first('cengkeh_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="cengkeh_tak_produksi">
                                            <h5>Tak Berproduksi</h5>
                                        </label>
                                        <input name="cengkeh_tak_produksi" type="text" class="form-control"
                                            id="cengkeh_tak_produksi" aria-describedby=""
                                            value="{{old('cengkeh_tak_produksi')}}">
                                        @if ($errors->has('cengkeh_tak_produksi'))
                                        <span class="help-block">{{$errors->first('cengkeh_tak_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="cengkeh_jml_produksi">
                                            <h5>Jumlah Produksi</h5>
                                        </label>
                                        <input name="cengkeh_jml_produksi" type="text" class="form-control"
                                            id="cengkeh_jml_produksi" aria-describedby="" placeholder=""
                                            value="{{old('cengkeh_jml_produksi')}}">
                                        @if ($errors->has('cengkeh_jml_produksi'))
                                        <span class="help-block">{{$errors->first('cengkeh_jml_produksi')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Pala</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('pala_blm_produksi') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="pala_blm_produksi">
                                            <h5>Belum Produksi/muda</h5>
                                        </label>
                                        <input name="pala_blm_produksi" type="text" class="form-control"
                                            id="pala_blm_produksi" aria-describedby=""
                                            value="{{old('pala_blm_produksi')}}">
                                        @if ($errors->has('pala_blm_produksi'))
                                        <span class="help-block">{{$errors->first('pala_blm_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="pala_produksi">
                                            <h5>Berproduksi</h5>
                                        </label>
                                        <input name="pala_produksi" type="text" class="form-control" id="pala_produksi"
                                            aria-describedby="" value="{{old('pala_produksi')}}">
                                        @if ($errors->has('pala_produksi'))
                                        <span class="help-block">{{$errors->first('pala_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="pala_tak_produksi">
                                            <h5>Tak Berproduksi</h5>
                                        </label>
                                        <input name="pala_tak_produksi" type="text" class="form-control"
                                            id="pala_tak_produksi" aria-describedby=""
                                            value="{{old('pala_tak_produksi')}}">
                                        @if ($errors->has('pala_tak_produksi'))
                                        <span class="help-block">{{$errors->first('pala_tak_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="pala_jml_produksi">
                                            <h5>Jumlah Produksi</h5>
                                        </label>
                                        <input name="pala_jml_produksi" type="text" class="form-control"
                                            id="pala_jml_produksi" aria-describedby="" placeholder=""
                                            value="{{old('pala_jml_produksi')}}">
                                        @if ($errors->has('pala_jml_produksi'))
                                        <span class="help-block">{{$errors->first('pala_jml_produksi')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <label for="">
                                    <h5><strong>Tembakau</strong></h5>
                                </label>
                                <div
                                    class="form-group row {{$errors->has('tembakau_blm_produksi') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="tembakau_blm_produksi">
                                            <h5>Belum Produksi/muda</h5>
                                        </label>
                                        <input name="tembakau_blm_produksi" type="text" class="form-control"
                                            id="tembakau_blm_produksi" aria-describedby=""
                                            value="{{old('tembakau_blm_produksi')}}">
                                        @if ($errors->has('tembakau_blm_produksi'))
                                        <span class="help-block">{{$errors->first('tembakau_blm_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="tembakau_produksi">
                                            <h5>Berproduksi</h5>
                                        </label>
                                        <input name="tembakau_produksi" type="text" class="form-control"
                                            id="tembakau_produksi" aria-describedby=""
                                            value="{{old('tembakau_produksi')}}">
                                        @if ($errors->has('tembakau_produksi'))
                                        <span class="help-block">{{$errors->first('tembakau_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="tembakau_tak_produksi">
                                            <h5>Tak Berproduksi</h5>
                                        </label>
                                        <input name="tembakau_tak_produksi" type="text" class="form-control"
                                            id="tembakau_tak_produksi" aria-describedby=""
                                            value="{{old('tembakau_tak_produksi')}}">
                                        @if ($errors->has('tembakau_tak_produksi'))
                                        <span class="help-block">{{$errors->first('tembakau_tak_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="tembakau_jml_produksi">
                                            <h5>Jumlah Produksi</h5>
                                        </label>
                                        <input name="tembakau_jml_produksi" type="text" class="form-control"
                                            id="tembakau_jml_produksi" aria-describedby="" placeholder=""
                                            value="{{old('tembakau_jml_produksi')}}">
                                        @if ($errors->has('tembakau_jml_produksi'))
                                        <span class="help-block">{{$errors->first('tembakau_jml_produksi')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <label for="">
                                    <h5><strong>Kelapa</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('kelapa_blm_produksi') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="kelapa_blm_produksi">
                                            <h5>Belum Produksi/muda</h5>
                                        </label>
                                        <input name="kelapa_blm_produksi" type="text" class="form-control"
                                            id="kelapa_blm_produksi" aria-describedby=""
                                            value="{{old('kelapa_blm_produksi')}}">
                                        @if ($errors->has('kelapa_blm_produksi'))
                                        <span class="help-block">{{$errors->first('kelapa_blm_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kelapa_produksi">
                                            <h5>Berproduksi</h5>
                                        </label>
                                        <input name="kelapa_produksi" type="text" class="form-control"
                                            id="kelapa_produksi" aria-describedby="" value="{{old('kelapa_produksi')}}">
                                        @if ($errors->has('kelapa_produksi'))
                                        <span class="help-block">{{$errors->first('kelapa_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kelapa_tak_produksi">
                                            <h5>Tak Berproduksi</h5>
                                        </label>
                                        <input name="kelapa_tak_produksi" type="text" class="form-control"
                                            id="kelapa_tak_produksi" aria-describedby=""
                                            value="{{old('kelapa_tak_produksi')}}">
                                        @if ($errors->has('kelapa_tak_produksi'))
                                        <span class="help-block">{{$errors->first('kelapa_tak_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kelapa_jml_produksi">
                                            <h5>Jumlah Produksi</h5>
                                        </label>
                                        <input name="kelapa_jml_produksi" type="text" class="form-control"
                                            id="kelapa_jml_produksi" aria-describedby="" placeholder=""
                                            value="{{old('kelapa_jml_produksi')}}">
                                        @if ($errors->has('kelapa_jml_produksi'))
                                        <span class="help-block">{{$errors->first('kelapa_jml_produksi')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Kelapa Sawit</strong></h5>
                                </label>
                                <div
                                    class="form-group row {{$errors->has('kelapa_sawit_blm_produksi') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="kelapa_sawit_blm_produksi">
                                            <h5>Belum Produksi/muda</h5>
                                        </label>
                                        <input name="kelapa_sawit_blm_produksi" type="text" class="form-control"
                                            id="kelapa_sawit_blm_produksi" aria-describedby=""
                                            value="{{old('kelapa_sawit_blm_produksi')}}">
                                        @if ($errors->has('kelapa_sawit_blm_produksi'))
                                        <span class="help-block">{{$errors->first('kelapa_sawit_blm_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kelapa_sawit_produksi">
                                            <h5>Berproduksi</h5>
                                        </label>
                                        <input name="kelapa_sawit_produksi" type="text" class="form-control"
                                            id="kelapa_sawit_produksi" aria-describedby=""
                                            value="{{old('kelapa_sawit_produksi')}}">
                                        @if ($errors->has('kelapa_sawit_produksi'))
                                        <span class="help-block">{{$errors->first('kelapa_sawit_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kelapa_sawit_tak_produksi">
                                            <h5>Tak Berproduksi</h5>
                                        </label>
                                        <input name="kelapa_sawit_tak_produksi" type="text" class="form-control"
                                            id="kelapa_sawit_tak_produksi" aria-describedby=""
                                            value="{{old('kelapa_sawit_tak_produksi')}}">
                                        @if ($errors->has('kelapa_sawit_tak_produksi'))
                                        <span class="help-block">{{$errors->first('kelapa_sawit_tak_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kelapa_sawit_jml_produksi">
                                            <h5>Jumlah Produksi</h5>
                                        </label>
                                        <input name="kelapa_sawit_jml_produksi" type="text" class="form-control"
                                            id="kelapa_sawit_jml_produksi" aria-describedby="" placeholder=""
                                            value="{{old('kelapa_sawit_jml_produksi')}}">
                                        @if ($errors->has('kelapa_sawit_jml_produksi'))
                                        <span class="help-block">{{$errors->first('kelapa_sawit_jml_produksi')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <label for="">
                                    <h5><strong>Kopi</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('kopi_blm_produksi') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="kopi_blm_produksi">
                                            <h5>Belum Produksi/muda</h5>
                                        </label>
                                        <input name="kopi_blm_produksi" type="text" class="form-control"
                                            id="kopi_blm_produksi" aria-describedby=""
                                            value="{{old('kopi_blm_produksi')}}">
                                        @if ($errors->has('kopi_blm_produksi'))
                                        <span class="help-block">{{$errors->first('kopi_blm_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kopi_produksi">
                                            <h5>Berproduksi</h5>
                                        </label>
                                        <input name="kopi_produksi" type="text" class="form-control" id="kopi_produksi"
                                            aria-describedby="" value="{{old('kopi_produksi')}}">
                                        @if ($errors->has('kopi_produksi'))
                                        <span class="help-block">{{$errors->first('kopi_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kopi_tak_produksi">
                                            <h5>Tak Berproduksi</h5>
                                        </label>
                                        <input name="kopi_tak_produksi" type="text" class="form-control"
                                            id="kopi_tak_produksi" aria-describedby=""
                                            value="{{old('kopi_tak_produksi')}}">
                                        @if ($errors->has('kopi_tak_produksi'))
                                        <span class="help-block">{{$errors->first('kopi_tak_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="kopi_jml_produksi">
                                            <h5>Jumlah Produksi</h5>
                                        </label>
                                        <input name="kopi_jml_produksi" type="text" class="form-control"
                                            id="kopi_jml_produksi" aria-describedby="" placeholder=""
                                            value="{{old('kopi_jml_produksi')}}">
                                        @if ($errors->has('kopi_jml_produksi'))
                                        <span class="help-block">{{$errors->first('kopi_jml_produksi')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <label for="">
                                    <h5><strong>Coklat</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('coklat_blm_produksi') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="coklat_blm_produksi">
                                            <h5>Belum Produksi/muda</h5>
                                        </label>
                                        <input name="coklat_blm_produksi" type="text" class="form-control"
                                            id="coklat_blm_produksi" aria-describedby=""
                                            value="{{old('coklat_blm_produksi')}}">
                                        @if ($errors->has('coklat_blm_produksi'))
                                        <span class="help-block">{{$errors->first('coklat_blm_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="coklat_produksi">
                                            <h5>Berproduksi</h5>
                                        </label>
                                        <input name="coklat_produksi" type="text" class="form-control"
                                            id="coklat_produksi" aria-describedby="" value="{{old('coklat_produksi')}}">
                                        @if ($errors->has('coklat_produksi'))
                                        <span class="help-block">{{$errors->first('coklat_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="coklat_tak_produksi">
                                            <h5>Tak Berproduksi</h5>
                                        </label>
                                        <input name="coklat_tak_produksi" type="text" class="form-control"
                                            id="coklat_tak_produksi" aria-describedby=""
                                            value="{{old('coklat_tak_produksi')}}">
                                        @if ($errors->has('coklat_tak_produksi'))
                                        <span class="help-block">{{$errors->first('coklat_tak_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="coklat_jml_produksi">
                                            <h5>Jumlah Produksi</h5>
                                        </label>
                                        <input name="coklat_jml_produksi" type="text" class="form-control"
                                            id="coklat_jml_produksi" aria-describedby="" placeholder=""
                                            value="{{old('coklat_jml_produksi')}}">
                                        @if ($errors->has('coklat_jml_produksi'))
                                        <span class="help-block">{{$errors->first('coklat_jml_produksi')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Panili</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('panili_blm_produksi') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="panili_blm_produksi">
                                            <h5>Belum Produksi/muda</h5>
                                        </label>
                                        <input name="panili_blm_produksi" type="text" class="form-control"
                                            id="panili_blm_produksi" aria-describedby=""
                                            value="{{old('panili_blm_produksi')}}">
                                        @if ($errors->has('panili_blm_produksi'))
                                        <span class="help-block">{{$errors->first('panili_blm_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="panili_produksi">
                                            <h5>Berproduksi</h5>
                                        </label>
                                        <input name="panili_produksi" type="text" class="form-control"
                                            id="panili_produksi" aria-describedby="" value="{{old('panili_produksi')}}">
                                        @if ($errors->has('panili_produksi'))
                                        <span class="help-block">{{$errors->first('panili_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="panili_tak_produksi">
                                            <h5>Tak Berproduksi</h5>
                                        </label>
                                        <input name="panili_tak_produksi" type="text" class="form-control"
                                            id="panili_tak_produksi" aria-describedby=""
                                            value="{{old('panili_tak_produksi')}}">
                                        @if ($errors->has('panili_tak_produksi'))
                                        <span class="help-block">{{$errors->first('panili_tak_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="panili_jml_produksi">
                                            <h5>Jumlah Produksi</h5>
                                        </label>
                                        <input name="panili_jml_produksi" type="text" class="form-control"
                                            id="panili_jml_produksi" aria-describedby="" placeholder=""
                                            value="{{old('panili_jml_produksi')}}">
                                        @if ($errors->has('panili_jml_produksi'))
                                        <span class="help-block">{{$errors->first('panili_jml_produksi')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Lain</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('lain_blm_produksi') ? 'has-error' : ''}} ">
                                    <div class="col-sm-3">
                                        <label for="lain_blm_produksi">
                                            <h5>Belum Produksi/muda</h5>
                                        </label>
                                        <input name="lain_blm_produksi" type="text" class="form-control"
                                            id="lain_blm_produksi" aria-describedby=""
                                            value="{{old('lain_blm_produksi')}}">
                                        @if ($errors->has('lain_blm_produksi'))
                                        <span class="help-block">{{$errors->first('lain_blm_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="lain_produksi">
                                            <h5>Berproduksi</h5>
                                        </label>
                                        <input name="lain_produksi" type="text" class="form-control" id="lain_produksi"
                                            aria-describedby="" value="{{old('lain_produksi')}}">
                                        @if ($errors->has('lain_produksi'))
                                        <span class="help-block">{{$errors->first('lain_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="lain_tak_produksi">
                                            <h5>Tak Berproduksi</h5>
                                        </label>
                                        <input name="lain_tak_produksi" type="text" class="form-control"
                                            id="lain_tak_produksi" aria-describedby=""
                                            value="{{old('lain_tak_produksi')}}">
                                        @if ($errors->has('lain_tak_produksi'))
                                        <span class="help-block">{{$errors->first('lain_tak_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="lain_jml_produksi">
                                            <h5>Jumlah Produksi</h5>
                                        </label>
                                        <input name="lain_jml_produksi" type="text" class="form-control"
                                            id="lain_jml_produksi" aria-describedby="" placeholder=""
                                            value="{{old('lain_jml_produksi')}}">
                                        @if ($errors->has('lain_jml_produksi'))
                                        <span class="help-block">{{$errors->first('lain_jml_produksi')}}</span>
                                        @endif
                                    </div>
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