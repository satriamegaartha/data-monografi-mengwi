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
                            <form method="POST" action="/dinamis/tanaman/{{$tanaman->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$tanaman->tanggal}}">
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
                                            value="{{$tanaman->padi_luas_tanaman}}">
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
                                            value="{{$tanaman->padi_luas_panen}}">
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
                                            value="{{$tanaman->padi_rata2_produksi}}">
                                        @if ($errors->has('padi_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('padi_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="padi_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="padi_jumlah" type="text" class="form-control" id="padi_jumlah"
                                            aria-describedby="" placeholder="" value="{{$tanaman->padi_jumlah}}">
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
                                            value="{{$tanaman->jagung_luas_tanaman}}">
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
                                            value="{{$tanaman->jagung_luas_panen}}">
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
                                            value="{{$tanaman->jagung_rata2_produksi}}">
                                        @if ($errors->has('jagung_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('jagung_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="jagung_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="jagung_jumlah" type="text" class="form-control" id="jagung_jumlah"
                                            aria-describedby="" placeholder="" value="{{$tanaman->jagung_jumlah}}">
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
                                            value="{{$tanaman->ketela_pohon_luas_tanaman}}">
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
                                            value="{{$tanaman->ketela_pohon_luas_panen}}">
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
                                            value="{{$tanaman->ketela_pohon_rata2_produksi}}">
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
                                            value="{{$tanaman->ketela_pohon_jumlah}}">
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
                                            value="{{$tanaman->ketela_rambat_luas_tanaman}}">
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
                                            value="{{$tanaman->ketela_rambat_luas_panen}}">
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
                                            value="{{$tanaman->ketela_rambat_rata2_produksi}}">
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
                                            value="{{$tanaman->ketela_rambat_jumlah}}">
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
                                            value="{{$tanaman->kacang_tanah_luas_tanaman}}">
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
                                            value="{{$tanaman->kacang_tanah_luas_panen}}">
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
                                            value="{{$tanaman->kacang_tanah_rata2_produksi}}">
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
                                            value="{{$tanaman->kacang_tanah_jumlah}}">
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
                                            value="{{$tanaman->kedelai_luas_tanaman}}">
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
                                            value="{{$tanaman->kedelai_luas_panen}}">
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
                                            value="{{$tanaman->kedelai_rata2_produksi}}">
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
                                            value="{{$tanaman->kedelai_jumlah}}">
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
                                            value="{{$tanaman->sayur_luas_tanaman}}">
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
                                            value="{{$tanaman->sayur_luas_panen}}">
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
                                            value="{{$tanaman->sayur_rata2_produksi}}">
                                        @if ($errors->has('sayur_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('sayur_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="sayur_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="sayur_jumlah" type="text" class="form-control" id="sayur_jumlah"
                                            aria-describedby="" placeholder="" value="{{$tanaman->sayur_jumlah}}">
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
                                            value="{{$tanaman->buah_luas_tanaman}}">
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
                                            value="{{$tanaman->buah_luas_panen}}">
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
                                            value="{{$tanaman->buah_rata2_produksi}}">
                                        @if ($errors->has('buah_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('buah_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="buah_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="buah_jumlah" type="text" class="form-control" id="buah_jumlah"
                                            aria-describedby="" placeholder="" value="{{$tanaman->buah_jumlah}}">
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
                                            value="{{$tanaman->lain_luas_tanaman}}">
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
                                            value="{{$tanaman->lain_luas_panen}}">
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
                                            value="{{$tanaman->lain_rata2_produksi}}">
                                        @if ($errors->has('lain_rata2_produksi'))
                                        <span class="help-block">{{$errors->first('lain_rata2_produksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="lain_jumlah">
                                            <h5>Jumlah</h5>
                                        </label>
                                        <input name="lain_jumlah" type="text" class="form-control" id="lain_jumlah"
                                            aria-describedby="" placeholder="" value="{{$tanaman->lain_jumlah}}">
                                        @if ($errors->has('lain_jumlah'))
                                        <span class="help-block">{{$errors->first('lain_jumlah')}}</span>
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