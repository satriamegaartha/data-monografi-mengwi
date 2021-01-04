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
                            <h3 class="panel-title">Kependudukan</h3>

                        </div>
                        <div class="panel-body">
                            <form method="POST" action="#">
                                <fieldset disabled="disabled">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                                <label for="tanggal">Tanggal</label>
                                                <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                    aria-describedby="" placeholder=""
                                                    value="{{$kependudukan->tanggal}}">
                                                @if ($errors->has('tanggal'))
                                                <span class="help-block">{{$errors->first('tanggal')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">
                                        <h5><strong>B. KEPENDUDUKAN </strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('jml_kepala_keluarga') ? 'has-error' : ''}} ">
                                        <label for="jml_kepala_keluarga">
                                            <h5><strong>1. Jumlah Kepala Keluarga</strong></h5>
                                        </label>
                                        <input name="jml_kepala_keluarga" type="text" class="form-control"
                                            id="jml_kepala_keluarga" aria-describedby="" placeholder=""
                                            value="{{$kependudukan->jml_kepala_keluarga}}">
                                        @if ($errors->has('jml_kepala_keluarga'))
                                        <span class="help-block">{{$errors->first('jml_kepala_keluarga')}}</span>
                                        @endif
                                    </div>
                                    <label for="">
                                        <h5><strong>2. Penduduk menurut jenis kelamin</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('jml_laki') ? 'has-error' : ''}} ">
                                        <label for="jml_laki">
                                            <h5>2.1. Jumlah Laki-laki </h5>
                                        </label>
                                        <input name="jml_laki" type="text" class="form-control" id="jml_laki"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_laki}}">
                                        @if ($errors->has('jml_laki'))
                                        <span class="help-block">{{$errors->first('jml_laki')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_perempuan') ? 'has-error' : ''}} ">
                                        <label for="jml_perempuan">
                                            <h5>2.2. Jumlah Perempuan</h5>
                                        </label>
                                        <input name="jml_perempuan" type="text" class="form-control" id="jml_perempuan"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_perempuan}}">
                                        @if ($errors->has('jml_perempuan'))
                                        <span class="help-block">{{$errors->first('jml_perempuan')}}</span>
                                        @endif
                                    </div>

                                    <label for="">
                                        <h5><strong>3. Penduduk menurut kewarganegaraan</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('jml_wni_laki') ? 'has-error' : ''}} ">
                                        <label for="jml_wni_laki">
                                            <h5>3.1. WNI Laki-laki</h5>
                                        </label>
                                        <input name="jml_wni_laki" type="text" class="form-control" id="jml_wni_laki"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_wni_laki}}">
                                        @if ($errors->has('jml_wni_laki'))
                                        <span class="help-block">{{$errors->first('jml_wni_laki')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_wni_perempuan') ? 'has-error' : ''}} ">
                                        <label for="jml_wni_perempuan">
                                            <h5>WNI Perempuan</h5>
                                        </label>
                                        <input name="jml_wni_perempuan" type="text" class="form-control"
                                            id="jml_wni_perempuan" aria-describedby="" placeholder=""
                                            value="{{$kependudukan->jml_wni_perempuan}}">
                                        @if ($errors->has('jml_wni_perempuan'))
                                        <span class="help-block">{{$errors->first('jml_wni_perempuan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_wna_laki') ? 'has-error' : ''}} ">
                                        <label for="jml_wna_laki">
                                            <h5>3.2. WNA Laki-laki</h5>
                                        </label>
                                        <input name="jml_wna_laki" type="text" class="form-control" id="jml_wna_laki"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_wna_laki}}">
                                        @if ($errors->has('jml_wna_laki'))
                                        <span class="help-block">{{$errors->first('jml_wna_laki')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_wna_perempuan') ? 'has-error' : ''}} ">
                                        <label for="jml_wna_perempuan">
                                            <h5>WNI Perempuan</h5>
                                        </label>
                                        <input name="jml_wna_perempuan" type="text" class="form-control"
                                            id="jml_wna_perempuan" aria-describedby="" placeholder=""
                                            value="{{$kependudukan->jml_wna_perempuan}}">
                                        @if ($errors->has('jml_wna_perempuan'))
                                        <span class="help-block">{{$errors->first('jml_wna_perempuan')}}</span>
                                        @endif
                                    </div>

                                    <label for="">
                                        <h5><strong>4. Penduduk menurut agama </strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('jml_islam') ? 'has-error' : ''}} ">
                                        <label for="jml_islam">
                                            <h5>4.1. Islam</h5>
                                        </label>
                                        <input name="jml_islam" type="text" class="form-control" id="jml_islam"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_islam}}">
                                        @if ($errors->has('jml_islam'))
                                        <span class="help-block">{{$errors->first('jml_islam')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_katholik') ? 'has-error' : ''}} ">
                                        <label for="jml_katholik">
                                            <h5>4.2. Katholik </h5>
                                        </label>
                                        <input name="jml_katholik" type="text" class="form-control" id="jml_katholik"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_katholik}}">
                                        @if ($errors->has('jml_katholik'))
                                        <span class="help-block">{{$errors->first('jml_katholik')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_protestan') ? 'has-error' : ''}} ">
                                        <label for="jml_protestan">
                                            <h5>4.3. Protestan/Kristen</h5>
                                        </label>
                                        <input name="jml_protestan" type="text" class="form-control" id="jml_protestan"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_protestan}}">
                                        @if ($errors->has('jml_protestan'))
                                        <span class="help-block">{{$errors->first('jml_protestan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_hindu') ? 'has-error' : ''}} ">
                                        <label for="jml_hindu">
                                            <h5>4.4. Hindu</h5>
                                        </label>
                                        <input name="jml_hindu" type="text" class="form-control" id="jml_hindu"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_hindu}}">
                                        @if ($errors->has('jml_hindu'))
                                        <span class="help-block">{{$errors->first('jml_hindu')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_budha') ? 'has-error' : ''}} ">
                                        <label for="jml_budha">
                                            <h5>4.5. Budha</h5>
                                        </label>
                                        <input name="jml_budha" type="text" class="form-control" id="jml_budha"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_budha}}">
                                        @if ($errors->has('jml_budha'))
                                        <span class="help-block">{{$errors->first('jml_budha')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_penganut_aliran') ? 'has-error' : ''}} ">
                                        <label for="jml_penganut_aliran">
                                            <h5><strong>5. Penganut Aliran Kepercayaan kepada Tuhan Yang Maha Esa
                                                    :</strong></h5>
                                        </label>
                                        <input name="jml_penganut_aliran" type="text" class="form-control"
                                            id="jml_penganut_aliran" aria-describedby="" placeholder=""
                                            value="{{$kependudukan->jml_penganut_aliran}}">
                                        @if ($errors->has('jml_penganut_aliran'))
                                        <span class="help-block">{{$errors->first('jml_penganut_aliran')}}</span>
                                        @endif
                                    </div>

                                    <label for="">
                                        <h5><strong>6. Penduduk menurut usia </strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('jml_b_0_4') ? 'has-error' : ''}} ">
                                        <label for="jml_b_0_4">
                                            <h5>b. 0 - 4 tahun </h5>
                                        </label>
                                        <input name="jml_b_0_4" type="text" class="form-control" id="jml_b_0_4"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_b_0_4}}">
                                        @if ($errors->has('jml_b_0_4'))
                                        <span class="help-block">{{$errors->first('jml_b_0_4')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_b_5_9') ? 'has-error' : ''}} ">
                                        <label for="jml_b_5_9">
                                            <h5>5 - 9 tahun </h5>
                                        </label>
                                        <input name="jml_b_5_9" type="text" class="form-control" id="jml_b_5_9"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_b_5_9}}">
                                        @if ($errors->has('jml_b_5_9'))
                                        <span class="help-block">{{$errors->first('jml_b_5_9')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_b_10_14') ? 'has-error' : ''}} ">
                                        <label for="jml_b_10_14">
                                            <h5>10 - 14 tahun</h5>
                                        </label>
                                        <input name="jml_b_10_14" type="text" class="form-control" id="jml_b_10_14"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_b_10_14}}">
                                        @if ($errors->has('jml_b_10_14'))
                                        <span class="help-block">{{$errors->first('jml_b_10_14')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_b_15_19') ? 'has-error' : ''}} ">
                                        <label for="jml_b_15_19">
                                            <h5>15 - 19 tahun</h5>
                                        </label>
                                        <input name="jml_b_15_19" type="text" class="form-control" id="jml_b_15_19"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_b_15_19}}">
                                        @if ($errors->has('jml_b_15_19'))
                                        <span class="help-block">{{$errors->first('jml_b_15_19')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_b_20_24') ? 'has-error' : ''}} ">
                                        <label for="jml_b_20_24">
                                            <h5>20 - 24 tahun </h5>
                                        </label>
                                        <input name="jml_b_20_24" type="text" class="form-control" id="jml_b_20_24"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_b_20_24}}">
                                        @if ($errors->has('jml_b_20_24'))
                                        <span class="help-block">{{$errors->first('jml_b_20_24')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_b_25_29') ? 'has-error' : ''}} ">
                                        <label for="jml_b_25_29">
                                            <h5>25 - 29 tahun </h5>
                                        </label>
                                        <input name="jml_b_25_29" type="text" class="form-control" id="jml_b_25_29"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_b_25_29}}">
                                        @if ($errors->has('jml_b_25_29'))
                                        <span class="help-block">{{$errors->first('jml_b_25_29')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_b_30_34') ? 'has-error' : ''}} ">
                                        <label for="jml_b_30_34">
                                            <h5>30 - 34 tahun</h5>
                                        </label>
                                        <input name="jml_b_30_34" type="text" class="form-control" id="jml_b_30_34"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_b_30_34}}">
                                        @if ($errors->has('jml_b_30_34'))
                                        <span class="help-block">{{$errors->first('jml_b_30_34')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_b_35_39') ? 'has-error' : ''}} ">
                                        <label for="jml_b_35_39">
                                            <h5>35 - 39 tahun </h5>
                                        </label>
                                        <input name="jml_b_35_39" type="text" class="form-control" id="jml_b_35_39"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_b_35_39}}">
                                        @if ($errors->has('jml_b_35_39'))
                                        <span class="help-block">{{$errors->first('jml_b_35_39')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_b_40_up') ? 'has-error' : ''}} ">
                                        <label for="jml_b_40_up">
                                            <h5>40 tahun ke atas</h5>
                                        </label>
                                        <input name="jml_b_40_up" type="text" class="form-control" id="jml_b_40_up"
                                            aria-describedby="" placeholder="" value="{{$kependudukan->jml_b_40_up}}">
                                        @if ($errors->has('jml_b_40_up'))
                                        <span class="help-block">{{$errors->first('jml_b_40_up')}}</span>
                                        @endif
                                    </div>

                                    <label for="kepadatan">
                                        <h5><strong>7. Mutasi Penduduk</strong></h5>
                                    </label><br>
                                    <label for="">
                                        <h5>7.1. Pindah antar Kecamatan</h5>
                                    </label>
                                    <div class="form-group row {{$errors->has('pindah_l') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="pindah_l">
                                                <h5>- Laki-Laki</h5>
                                            </label>
                                            <input name="pindah_l" type="text" class="form-control" id="pindah_l"
                                                aria-describedby="" placeholder="" value="{{$kependudukan->pindah_l}}">
                                            @if ($errors->has('pindah_l'))
                                            <span class="help-block">{{$errors->first('pindah_l')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="pindah_p">
                                                <h5>- Perempuan</h5>
                                            </label>
                                            <input name="pindah_p" type="text" class="form-control" id="pindah_p"
                                                aria-describedby="" placeholder="" value="{{$kependudukan->pindah_p}}">
                                            @if ($errors->has('pindah_p'))
                                            <span class="help-block">{{$errors->first('pindah_p')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <label for="">
                                        <h5>7.2. Datang</h5>
                                    </label>
                                    <div class="form-group row {{$errors->has('datang_l') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="datang_l">
                                                <h5>- Laki-Laki</h5>
                                            </label>
                                            <input name="datang_l" type="text" class="form-control" id="datang_l"
                                                aria-describedby="" placeholder="" value="{{$kependudukan->datang_l}}">
                                            @if ($errors->has('datang_l'))
                                            <span class="help-block">{{$errors->first('datang_l')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="datang_p">
                                                <h5>- Perempuan</h5>
                                            </label>
                                            <input name="datang_p" type="text" class="form-control" id="datang_p"
                                                aria-describedby="" placeholder="" value="{{$kependudukan->datang_p}}">
                                            @if ($errors->has('datang_p'))
                                            <span class="help-block">{{$errors->first('datang_p')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <label for="">
                                        <h5>7.3. Lahir</h5>
                                    </label>
                                    <div class="form-group row {{$errors->has('lahir_l') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="lahir_l">
                                                <h5>- Laki-Laki</h5>
                                            </label>
                                            <input name="lahir_l" type="text" class="form-control" id="lahir_l"
                                                aria-describedby="" placeholder="" value="{{$kependudukan->lahir_l}}">
                                            @if ($errors->has('lahir_l'))
                                            <span class="help-block">{{$errors->first('lahir_l')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="lahir_p">
                                                <h5>- Perempuan</h5>
                                            </label>
                                            <input name="lahir_p" type="text" class="form-control" id="lahir_p"
                                                aria-describedby="" placeholder="" value="{{$kependudukan->lahir_p}}">
                                            @if ($errors->has('lahir_p'))
                                            <span class="help-block">{{$errors->first('lahir_p')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <label for="">
                                        <h5>7.4. Mati</h5>
                                    </label>
                                    <div class="form-group row {{$errors->has('mati_l') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="mati_l">
                                                <h5>- Laki-Laki</h5>
                                            </label>
                                            <input name="mati_l" type="text" class="form-control" id="mati_l"
                                                aria-describedby="" placeholder="" value="{{$kependudukan->mati_l}}">
                                            @if ($errors->has('mati_l'))
                                            <span class="help-block">{{$errors->first('mati_l')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="mati_p">
                                                <h5>- Perempuan</h5>
                                            </label>
                                            <input name="mati_p" type="text" class="form-control" id="mati_p"
                                                aria-describedby="" placeholder="" value="{{$kependudukan->mati_p}}">
                                            @if ($errors->has('mati_p'))
                                            <span class="help-block">{{$errors->first('mati_p')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <label for="">
                                        <h5>7.5. Mati < 5 Th</h5> </label> <div
                                                class="form-group row {{$errors->has('matikurang5_l') ? 'has-error' : ''}} ">
                                                <div class="col-sm-6">
                                                    <label for="matikurang5_l">
                                                        <h5>- Laki-Laki</h5>
                                                    </label>
                                                    <input name="matikurang5_l" type="text" class="form-control"
                                                        id="matikurang5_l" aria-describedby="" placeholder=""
                                                        value="{{$kependudukan->matikurang5_l}}">
                                                    @if ($errors->has('matikurang5_l'))
                                                    <span class="help-block">{{$errors->first('matikurang5_l')}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="matikurang5_p">
                                                        <h5>- Perempuan</h5>
                                                    </label>
                                                    <input name="matikurang5_p" type="text" class="form-control"
                                                        id="matikurang5_p" aria-describedby="" placeholder=""
                                                        value="{{$kependudukan->matikurang5_p}}">
                                                    @if ($errors->has('matikurang5_p'))
                                                    <span class="help-block">{{$errors->first('matikurang5_p')}}</span>
                                                    @endif
                                                </div>
                        </div>
                        <label for="">
                            <h5>7.6. Mati > 5 Th</h5>
                        </label>
                        <div class="form-group row {{$errors->has('matilebih5_l') ? 'has-error' : ''}} ">
                            <div class="col-sm-6">
                                <label for="matilebih5_l">
                                    <h5>- Laki-Laki</h5>
                                </label>
                                <input name="matilebih5_l" type="text" class="form-control" id="matilebih5_l"
                                    aria-describedby="" placeholder="" value="{{$kependudukan->matilebih5_l}}">
                                @if ($errors->has('matilebih5_l'))
                                <span class="help-block">{{$errors->first('matilebih5_l')}}</span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <label for="matilebih5_p">
                                    <h5>- Perempuan</h5>
                                </label>
                                <input name="matilebih5_p" type="text" class="form-control" id="matilebih5_p"
                                    aria-describedby="" placeholder="" value="{{$kependudukan->matilebih5_p}}">
                                @if ($errors->has('matilebih5_p'))
                                <span class="help-block">{{$errors->first('matilebih5_p')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{$errors->has('kepadatan') ? 'has-error' : ''}} ">
                            <label for="kepadatan">
                                <h5><strong>10. Kepadatan Penduduk </strong></h5>
                            </label>
                            <input name="kepadatan" type="text" class="form-control" id="kepadatan" aria-describedby=""
                                placeholder="per Km2" value="{{$kependudukan->kepadatan}}">
                            @if ($errors->has('kepadatan'))
                            <span class="help-block">{{$errors->first('kepadatan')}}</span>
                            @endif
                        </div>

                        <label for="">
                            <h5><strong>13. Penduduk menurut Mata Pencaharian</strong></h5>
                        </label><br>
                        <label for="">
                            <h5>13.1. Petani </h5>
                        </label>
                        <div class="form-group {{$errors->has('petani_pemilik') ? 'has-error' : ''}} ">
                            <label for="petani_pemilik">
                                <h5>- Petani pemilik tanah</h5>
                            </label>
                            <input name="petani_pemilik" type="text" class="form-control" id="petani_pemilik"
                                aria-describedby="" placeholder="" value="{{$kependudukan->petani_pemilik}}">
                            @if ($errors->has('petani_pemilik'))
                            <span class="help-block">{{$errors->first('petani_pemilik')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('petani_penggarap') ? 'has-error' : ''}} ">
                            <label for="petani_penggarap">
                                <h5>- Petani Penggarap tanah</h5>
                            </label>
                            <input name="petani_penggarap" type="text" class="form-control" id="petani_penggarap"
                                aria-describedby="" placeholder="" value="{{$kependudukan->petani_penggarap}}">
                            @if ($errors->has('petani_penggarap'))
                            <span class="help-block">{{$errors->first('petani_penggarap')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('petani_penyekap') ? 'has-error' : ''}} ">
                            <label for="petani_penyekap">
                                <h5>- Petani penggarap/penyekap </h5>
                            </label>
                            <input name="petani_penyekap" type="text" class="form-control" id="petani_penyekap"
                                aria-describedby="" placeholder="" value="{{$kependudukan->petani_penyekap}}">
                            @if ($errors->has('petani_penyekap'))
                            <span class="help-block">{{$errors->first('petani_penyekap')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('petani_buruh') ? 'has-error' : ''}} ">
                            <label for="petani_buruh">
                                <h5>- Buruh tani </h5>
                            </label>
                            <input name="petani_buruh" type="text" class="form-control" id="petani_buruh"
                                aria-describedby="" placeholder="" value="{{$kependudukan->petani_buruh}}">
                            @if ($errors->has('petani_buruh'))
                            <span class="help-block">{{$errors->first('petani_buruh')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('nelayan') ? 'has-error' : ''}} ">
                            <label for="nelayan">
                                <h5>13.2. Nelayan</h5>
                            </label>
                            <input name="nelayan" type="text" class="form-control" id="nelayan" aria-describedby=""
                                placeholder="" value="{{$kependudukan->nelayan}}">
                            @if ($errors->has('nelayan'))
                            <span class="help-block">{{$errors->first('nelayan')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('pengusaha_sedang') ? 'has-error' : ''}} ">
                            <label for="pengusaha_sedang">
                                <h5>13.3. Pengusaha sedang/besar </h5>
                            </label>
                            <input name="pengusaha_sedang" type="text" class="form-control" id="pengusaha_sedang"
                                aria-describedby="" placeholder="" value="{{$kependudukan->pengusaha_sedang}}">
                            @if ($errors->has('pengusaha_sedang'))
                            <span class="help-block">{{$errors->first('pengusaha_sedang')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('pengrajin') ? 'has-error' : ''}} ">
                            <label for="pengrajin">
                                <h5>13.4. Pengrajin/industri kecil</h5>
                            </label>
                            <input name="pengrajin" type="text" class="form-control" id="pengrajin" aria-describedby=""
                                placeholder="" value="{{$kependudukan->pengrajin}}">
                            @if ($errors->has('pengrajin'))
                            <span class="help-block">{{$errors->first('pengrajin')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('buruh_industri') ? 'has-error' : ''}} ">
                            <label for="buruh_industri">
                                <h5>13.5. Buruh Industri</h5>
                            </label>
                            <input name="buruh_industri" type="text" class="form-control" id="buruh_industri"
                                aria-describedby="" placeholder="" value="{{$kependudukan->buruh_industri}}">
                            @if ($errors->has('buruh_industri'))
                            <span class="help-block">{{$errors->first('buruh_industri')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('buruh_bangunan') ? 'has-error' : ''}} ">
                            <label for="buruh_bangunan">
                                <h5>13.6. Buruh Bangunan</h5>
                            </label>
                            <input name="buruh_bangunan" type="text" class="form-control" id="buruh_bangunan"
                                aria-describedby="" placeholder="" value="{{$kependudukan->buruh_bangunan}}">
                            @if ($errors->has('buruh_bangunan'))
                            <span class="help-block">{{$errors->first('buruh_bangunan')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('buruh_pertambangan') ? 'has-error' : ''}} ">
                            <label for="buruh_pertambangan">
                                <h5>13.7. Buruh Pertambangan</h5>
                            </label>
                            <input name="buruh_pertambangan" type="text" class="form-control" id="buruh_pertambangan"
                                aria-describedby="" placeholder="" value="{{$kependudukan->buruh_pertambangan}}">
                            @if ($errors->has('buruh_pertambangan'))
                            <span class="help-block">{{$errors->first('buruh_pertambangan')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('buruh_perkebunan') ? 'has-error' : ''}} ">
                            <label for="buruh_perkebunan">
                                <h5>13.8. Buruh perkebunan (besar+kecil)</h5>
                            </label>
                            <input name="buruh_perkebunan" type="text" class="form-control" id="buruh_perkebunan"
                                aria-describedby="" placeholder="" value="{{$kependudukan->buruh_perkebunan}}">
                            @if ($errors->has('buruh_perkebunan'))
                            <span class="help-block">{{$errors->first('buruh_perkebunan')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('pedagang') ? 'has-error' : ''}} ">
                            <label for="pedagang">
                                <h5>13.9. Pedagang</h5>
                            </label>
                            <input name="pedagang" type="text" class="form-control" id="pedagang" aria-describedby=""
                                placeholder="" value="{{$kependudukan->pedagang}}">
                            @if ($errors->has('pedagang'))
                            <span class="help-block">{{$errors->first('pedagang')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('pengangkutan') ? 'has-error' : ''}} ">
                            <label for="pengangkutan">
                                <h5>13.10 Pengangkutan</h5>
                            </label>
                            <input name="pengangkutan" type="text" class="form-control" id="pengangkutan"
                                aria-describedby="" placeholder="" value="{{$kependudukan->pengangkutan}}">
                            @if ($errors->has('pengangkutan'))
                            <span class="help-block">{{$errors->first('pengangkutan')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('pns') ? 'has-error' : ''}} ">
                            <label for="pns">
                                <h5>13.11. Pegawai Negeri Sipil</h5>
                            </label>
                            <input name="pns" type="text" class="form-control" id="pns" aria-describedby=""
                                placeholder="" value="{{$kependudukan->pns}}">
                            @if ($errors->has('pns'))
                            <span class="help-block">{{$errors->first('pns')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('abri') ? 'has-error' : ''}} ">
                            <label for="abri">
                                <h5>13.12. ABRI</h5>
                            </label>
                            <input name="abri" type="text" class="form-control" id="abri" aria-describedby=""
                                placeholder="" value="{{$kependudukan->abri}}">
                            @if ($errors->has('abri'))
                            <span class="help-block">{{$errors->first('abri')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('pensiun') ? 'has-error' : ''}} ">
                            <label for="pensiun">
                                <h5>13.13. Pensiun (PEGNEG/pensiun) </h5>
                            </label>
                            <input name="pensiun" type="text" class="form-control" id="pensiun" aria-describedby=""
                                placeholder="" value="{{$kependudukan->pensiun}}">
                            @if ($errors->has('pensiun'))
                            <span class="help-block">{{$errors->first('pensiun')}}</span>
                            @endif
                        </div>
                        <label for="">
                            <h5>13.14. Peternak : </h5>
                        </label>
                        <div class="form-group {{$errors->has('peternak_sapi_perah') ? 'has-error' : ''}} ">
                            <label for="peternak_sapi_perah">
                                <h5>a. Peternak Sapi Perah</h5>
                            </label>
                            <input name="peternak_sapi_perah" type="text" class="form-control" id="peternak_sapi_perah"
                                aria-describedby="" placeholder="" value="{{$kependudukan->peternak_sapi_perah}}">
                            @if ($errors->has('peternak_sapi_perah'))
                            <span class="help-block">{{$errors->first('peternak_sapi_perah')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('peternak_sapi_biasa') ? 'has-error' : ''}} ">
                            <label for="peternak_sapi_biasa">
                                <h5>b. Peternak Sapi Biasa</h5>
                            </label>
                            <input name="peternak_sapi_biasa" type="text" class="form-control" id="peternak_sapi_biasa"
                                aria-describedby="" placeholder="" value="{{$kependudukan->peternak_sapi_biasa}}">
                            @if ($errors->has('peternak_sapi_biasa'))
                            <span class="help-block">{{$errors->first('peternak_sapi_biasa')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('peternak_kerbau') ? 'has-error' : ''}} ">
                            <label for="peternak_kerbau">
                                <h5>c. Peternak Kerbau </h5>
                            </label>
                            <input name="peternak_kerbau" type="text" class="form-control" id="peternak_kerbau"
                                aria-describedby="" placeholder="" value="{{$kependudukan->peternak_kerbau}}">
                            @if ($errors->has('peternak_kerbau'))
                            <span class="help-block">{{$errors->first('peternak_kerbau')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('peternak_kambing') ? 'has-error' : ''}} ">
                            <label for="peternak_kambing">
                                <h5>d. Peternak Kambing </h5>
                            </label>
                            <input name="peternak_kambing" type="text" class="form-control" id="peternak_kambing"
                                aria-describedby="" placeholder="" value="{{$kependudukan->peternak_kambing}}">
                            @if ($errors->has('peternak_kambing'))
                            <span class="help-block">{{$errors->first('peternak_kambing')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('peternak_domba') ? 'has-error' : ''}} ">
                            <label for="peternak_domba">
                                <h5>e. Peternak Domba</h5>
                            </label>
                            <input name="peternak_domba" type="text" class="form-control" id="peternak_domba"
                                aria-describedby="" placeholder="" value="{{$kependudukan->peternak_domba}}">
                            @if ($errors->has('peternak_domba'))
                            <span class="help-block">{{$errors->first('peternak_domba')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('peternak_kuda') ? 'has-error' : ''}} ">
                            <label for="peternak_kuda">
                                <h5>f. Peternak Kuda</h5>
                            </label>
                            <input name="peternak_kuda" type="text" class="form-control" id="peternak_kuda"
                                aria-describedby="" placeholder="" value="{{$kependudukan->peternak_kuda}}">
                            @if ($errors->has('peternak_kuda'))
                            <span class="help-block">{{$errors->first('peternak_kuda')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('lain') ? 'has-error' : ''}} ">
                            <label for="lain">
                                <h5>13.15. Lain-lain</h5>
                            </label>
                            <input name="lain" type="text" class="form-control" id="lain" aria-describedby=""
                                placeholder="" value="{{$kependudukan->lain}}">
                            @if ($errors->has('lain'))
                            <span class="help-block">{{$errors->first('lain')}}</span>
                            @endif
                        </div>


                        </fieldset>
                        </form>
                        <a href="/dinamis/kependudukan/{{$kependudukan->id}}/edit"
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