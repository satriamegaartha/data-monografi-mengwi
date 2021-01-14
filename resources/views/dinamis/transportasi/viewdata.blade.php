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
                            <h3 class="panel-title">Transportasi</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/dinamis/transportasi/{{$transportasi->id}}/update">
                                <fieldset disabled="disabled">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                                <label for="tanggal">Tanggal</label>
                                                <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                    aria-describedby="" placeholder=""
                                                    value="{{$transportasi->tanggal}}">
                                                @if ($errors->has('tanggal'))
                                                <span class="help-block">{{$errors->first('tanggal')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">
                                        <h5><strong>G. TRANSPORTASI</strong></h5>
                                    </label><br>
                                    <label for="">
                                        <h5><strong>1. Jenis Alat Angkutan Lokal Yang Digunakan Di Kecamatan</strong>
                                        </h5>
                                    </label>
                                    <div class="form-group {{$errors->has('sepeda') ? 'has-error' : ''}} ">
                                        <label for="sepeda">
                                            <h5>1.1. Sepeda</h5>
                                        </label>
                                        <input name="sepeda" type="text" class="form-control" id="sepeda"
                                            aria-describedby="" placeholder="" value="{{$transportasi->sepeda}}">
                                        @if ($errors->has('sepeda'))
                                        <span class="help-block">{{$errors->first('sepeda')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('dokar') ? 'has-error' : ''}} ">
                                        <label for="dokar">
                                            <h5>1.2. Dokar/Delman</h5>
                                        </label>
                                        <input name="dokar" type="text" class="form-control" id="dokar"
                                            aria-describedby="" placeholder="" value="{{$transportasi->dokar}}">
                                        @if ($errors->has('dokar'))
                                        <span class="help-block">{{$errors->first('dokar')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('gerobak') ? 'has-error' : ''}} ">
                                        <label for="gerobak">
                                            <h5>1.3. Gerobak/Cikar</h5>
                                        </label>
                                        <input name="gerobak" type="text" class="form-control" id="gerobak"
                                            aria-describedby="" placeholder="" value="{{$transportasi->gerobak}}">
                                        @if ($errors->has('gerobak'))
                                        <span class="help-block">{{$errors->first('gerobak')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('becak') ? 'has-error' : ''}} ">
                                        <label for="becak">
                                            <h5>1.4. Becak</h5>
                                        </label>
                                        <input name="becak" type="text" class="form-control" id="becak"
                                            aria-describedby="" placeholder="" value="{{$transportasi->becak}}">
                                        @if ($errors->has('becak'))
                                        <span class="help-block">{{$errors->first('becak')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('roda3') ? 'has-error' : ''}} ">
                                        <label for="roda3">
                                            <h5>1.5. Kendaran Bermotor Roda 3</h5>
                                        </label>
                                        <input name="roda3" type="text" class="form-control" id="roda3"
                                            aria-describedby="" placeholder="" value="{{$transportasi->roda3}}">
                                        @if ($errors->has('roda3'))
                                        <span class="help-block">{{$errors->first('roda3')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('motor') ? 'has-error' : ''}} ">
                                        <label for="motor">
                                            <h5>1.6. Sepeda Motor</h5>
                                        </label>
                                        <input name="motor" type="text" class="form-control" id="motor"
                                            aria-describedby="" placeholder="" value="{{$transportasi->motor}}">
                                        @if ($errors->has('motor'))
                                        <span class="help-block">{{$errors->first('motor')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('oplet') ? 'has-error' : ''}} ">
                                        <label for="oplet">
                                            <h5>1.7. Oplet/Mikrolet</h5>
                                        </label>
                                        <input name="oplet" type="text" class="form-control" id="oplet"
                                            aria-describedby="" placeholder="" value="{{$transportasi->oplet}}">
                                        @if ($errors->has('oplet'))
                                        <span class="help-block">{{$errors->first('oplet')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('taksi') ? 'has-error' : ''}} ">
                                        <label for="taksi">
                                            <h5>1.8. Taksi</h5>
                                        </label>
                                        <input name="taksi" type="text" class="form-control" id="taksi"
                                            aria-describedby="" placeholder="" value="{{$transportasi->taksi}}">
                                        @if ($errors->has('taksi'))
                                        <span class="help-block">{{$errors->first('taksi')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('mobil_dinas') ? 'has-error' : ''}} ">
                                        <label for="mobil_dinas">
                                            <h5>1.9. Mobil Dinas</h5>
                                        </label>
                                        <input name="mobil_dinas" type="text" class="form-control" id="mobil_dinas"
                                            aria-describedby="" placeholder="" value="{{$transportasi->mobil_dinas}}">
                                        @if ($errors->has('mobil_dinas'))
                                        <span class="help-block">{{$errors->first('mobil_dinas')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('mobil_pribadi') ? 'has-error' : ''}} ">
                                        <label for="mobil_pribadi">
                                            <h5>1.10. Mobil Pribadi</h5>
                                        </label>
                                        <input name="mobil_pribadi" type="text" class="form-control" id="mobil_pribadi"
                                            aria-describedby="" placeholder="" value="{{$transportasi->mobil_pribadi}}">
                                        @if ($errors->has('mobil_pribadi'))
                                        <span class="help-block">{{$errors->first('mobil_pribadi')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('truck') ? 'has-error' : ''}} ">
                                        <label for="truck">
                                            <h5>1.11. Truck</h5>
                                        </label>
                                        <input name="truck" type="text" class="form-control" id="truck"
                                            aria-describedby="" placeholder="" value="{{$transportasi->truck}}">
                                        @if ($errors->has('truck'))
                                        <span class="help-block">{{$errors->first('truck')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('bus_umum') ? 'has-error' : ''}} ">
                                        <label for="bus_umum">
                                            <h5>1.12 . Bus Umum</h5>
                                        </label>
                                        <input name="bus_umum" type="text" class="form-control" id="bus_umum"
                                            aria-describedby="" placeholder="" value="{{$transportasi->bus_umum}}">
                                        @if ($errors->has('bus_umum'))
                                        <span class="help-block">{{$errors->first('bus_umum')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('bus_kota') ? 'has-error' : ''}} ">
                                        <label for="bus_kota">
                                            <h5>1.13. Bus Kota</h5>
                                        </label>
                                        <input name="bus_kota" type="text" class="form-control" id="bus_kota"
                                            aria-describedby="" placeholder="" value="{{$transportasi->bus_kota}}">
                                        @if ($errors->has('bus_kota'))
                                        <span class="help-block">{{$errors->first('bus_kota')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('perahu_dayung') ? 'has-error' : ''}} ">
                                        <label for="perahu_dayung">
                                            <h5>1.14 . Perahu Dayung/Sampan</h5>
                                        </label>
                                        <input name="perahu_dayung" type="text" class="form-control" id="perahu_dayung"
                                            aria-describedby="" placeholder="" value="{{$transportasi->perahu_dayung}}">
                                        @if ($errors->has('perahu_dayung'))
                                        <span class="help-block">{{$errors->first('perahu_dayung')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('perahu_motor') ? 'has-error' : ''}} ">
                                        <label for="perahu_motor">
                                            <h5>1.15. Perahu Motor</h5>
                                        </label>
                                        <input name="perahu_motor" type="text" class="form-control" id="perahu_motor"
                                            aria-describedby="" placeholder="" value="{{$transportasi->perahu_motor}}">
                                        @if ($errors->has('perahu_motor'))
                                        <span class="help-block">{{$errors->first('perahu_motor')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('perahu_layar') ? 'has-error' : ''}} ">
                                        <label for="perahu_layar">
                                            <h5>1.16. Perahu Layar</h5>
                                        </label>
                                        <input name="perahu_layar" type="text" class="form-control" id="perahu_layar"
                                            aria-describedby="" placeholder="" value="{{$transportasi->perahu_layar}}">
                                        @if ($errors->has('perahu_layar'))
                                        <span class="help-block">{{$errors->first('perahu_layar')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('lainnya') ? 'has-error' : ''}} ">
                                        <label for="lainnya">
                                            <h5>1.17. Lain-lain</h5>
                                        </label>
                                        <input name="lainnya" type="text" class="form-control" id="lainnya"
                                            aria-describedby="" placeholder="" value="{{$transportasi->lainnya}}">
                                        @if ($errors->has('lainnya'))
                                        <span class="help-block">{{$errors->first('lainnya')}}</span>
                                        @endif
                                    </div>









                                    <label for="">
                                        <h5><strong>2. Komunikasi</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('tv_umum') ? 'has-error' : ''}} ">
                                        <label for="tv_umum">
                                            <h5>2.1. TV Umum</h5>
                                        </label>
                                        <input name="tv_umum" type="text" class="form-control" id="tv_umum"
                                            aria-describedby="" placeholder="" value="{{$transportasi->tv_umum}}">
                                        @if ($errors->has('tv_umum'))
                                        <span class="help-block">{{$errors->first('tv_umum')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('telp_umum') ? 'has-error' : ''}} ">
                                        <label for="telp_umum">
                                            <h5>2.2. Telepon Umum</h5>
                                        </label>
                                        <input name="telp_umum" type="text" class="form-control" id="telp_umum"
                                            aria-describedby="" placeholder="" value="{{$transportasi->telp_umum}}">
                                        @if ($errors->has('telp_umum'))
                                        <span class="help-block">{{$errors->first('telp_umum')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('kantor_pos') ? 'has-error' : ''}} ">
                                        <label for="kantor_pos">
                                            <h5>2.3. Kantor Pos/Kantor Pos Pembantu</h5>
                                        </label>
                                        <input name="kantor_pos" type="text" class="form-control" id="kantor_pos"
                                            aria-describedby="" placeholder="" value="{{$transportasi->kantor_pos}}">
                                        @if ($errors->has('kantor_pos'))
                                        <span class="help-block">{{$errors->first('kantor_pos')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('orari') ? 'has-error' : ''}} ">
                                        <label for="orari">
                                            <h5>2.4. ORARI/KRAP</h5>
                                        </label>
                                        <input name="orari" type="text" class="form-control" id="orari"
                                            aria-describedby="" placeholder="" value="{{$transportasi->orari}}">
                                        @if ($errors->has('orari'))
                                        <span class="help-block">{{$errors->first('orari')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pemancar_radio') ? 'has-error' : ''}} ">
                                        <label for="pemancar_radio">
                                            <h5>2.5. Pemancar Radio</h5>
                                        </label>
                                        <input name="pemancar_radio" type="text" class="form-control"
                                            id="pemancar_radio" aria-describedby="" placeholder=""
                                            value="{{$transportasi->pemancar_radio}}">
                                        @if ($errors->has('pemancar_radio'))
                                        <span class="help-block">{{$errors->first('pemancar_radio')}}</span>
                                        @endif
                                    </div>

                                    <label for="">
                                        <h5>2.6. Penduduk kecamatan yang menggunakan Fasilitas Listrik</h5>
                                    </label>
                                    <div class="form-group {{$errors->has('listrik_pln') ? 'has-error' : ''}} ">
                                        <label for="listrik_pln">
                                            <h5>- Listrik PLN</h5>
                                        </label>
                                        <input name="listrik_pln" type="text" class="form-control" id="listrik_pln"
                                            aria-describedby="" placeholder="" value="{{$transportasi->listrik_pln}}">
                                        @if ($errors->has('listrik_pln'))
                                        <span class="help-block">{{$errors->first('listrik_pln')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('listrik_non_pln') ? 'has-error' : ''}} ">
                                        <label for="listrik_non_pln">
                                            <h5>- Listrik Non PLN</h5>
                                        </label>
                                        <input name="listrik_non_pln" type="text" class="form-control"
                                            id="listrik_non_pln" aria-describedby="" placeholder=""
                                            value="{{$transportasi->listrik_non_pln}}">
                                        @if ($errors->has('listrik_non_pln'))
                                        <span class="help-block">{{$errors->first('listrik_non_pln')}}</span>
                                        @endif
                                    </div>

                                    <label for="">
                                        <h5>2.7. Penduduk Kecamatan yang memakai Air minum</h5>
                                    </label>
                                    <div class="form-group {{$errors->has('pdm') ? 'has-error' : ''}} ">
                                        <label for="pdm">
                                            <h5>- PDM</h5>
                                        </label>
                                        <input name="pdm" type="text" class="form-control" id="pdm" aria-describedby=""
                                            placeholder="" value="{{$transportasi->pdm}}">
                                        @if ($errors->has('pdm'))
                                        <span class="help-block">{{$errors->first('pdm')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('badan_pengelola_air') ? 'has-error' : ''}} ">
                                        <label for="badan_pengelola_air">
                                            <h5>- Badan Pengelola Air</h5>
                                        </label>
                                        <input name="badan_pengelola_air" type="text" class="form-control"
                                            id="badan_pengelola_air" aria-describedby="" placeholder=""
                                            value="{{$transportasi->badan_pengelola_air}}">
                                        @if ($errors->has('badan_pengelola_air'))
                                        <span class="help-block">{{$errors->first('badan_pengelola_air')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pompa') ? 'has-error' : ''}} ">
                                        <label for="pompa">
                                            <h5>- Pompa Jet/Pompa Tangan</h5>
                                        </label>
                                        <input name="pompa" type="text" class="form-control" id="pompa"
                                            aria-describedby="" placeholder="" value="{{$transportasi->pompa}}">
                                        @if ($errors->has('pompa'))
                                        <span class="help-block">{{$errors->first('pompa')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sumur') ? 'has-error' : ''}} ">
                                        <label for="sumur">
                                            <h5>- Sumur</h5>
                                        </label>
                                        <input name="sumur" type="text" class="form-control" id="sumur"
                                            aria-describedby="" placeholder="" value="{{$transportasi->sumur}}">
                                        @if ($errors->has('sumur'))
                                        <span class="help-block">{{$errors->first('sumur')}}</span>
                                        @endif
                                    </div>





                                </fieldset>

                            </form>
                            <a href="/dinamis/transportasi/{{$transportasi->id}}/edit"
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