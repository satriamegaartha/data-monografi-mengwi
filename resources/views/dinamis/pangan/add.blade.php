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
                            <h3 class="panel-title">Pangan</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/dinamis/pangan/create">
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
                                    <h5><strong>E. DATA PANGAN</strong></h5>
                                </label>
                                <div class="form-group {{$errors->has('luas_bimas_padi_insus') ? 'has-error' : ''}} ">
                                    <label for="luas_bimas_padi_insus">
                                        <h5>Luas Tambah Tanam Bimas Padi Insus</h5>
                                    </label>
                                    <input name="luas_bimas_padi_insus" type="text" class="form-control"
                                        id="luas_bimas_padi_insus" aria-describedby="" placeholder=""
                                        value="{{old('luas_bimas_padi_insus')}}">
                                    @if ($errors->has('luas_bimas_padi_insus'))
                                    <span class="help-block">{{$errors->first('luas_bimas_padi_insus')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_bimas_padi_inmum') ? 'has-error' : ''}} ">
                                    <label for="luas_bimas_padi_inmum">
                                        <h5>Luas Tambah Tanam Binas Padi Inmum</h5>
                                    </label>
                                    <input name="luas_bimas_padi_inmum" type="text" class="form-control"
                                        id="luas_bimas_padi_inmum" aria-describedby="" placeholder=""
                                        value="{{old('luas_bimas_padi_inmum')}}">
                                    @if ($errors->has('luas_bimas_padi_inmum'))
                                    <span class="help-block">{{$errors->first('luas_bimas_padi_inmum')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_inmas_padi_insus') ? 'has-error' : ''}} ">
                                    <label for="luas_inmas_padi_insus">
                                        <h5>Luas Tambah Tanam Inmas Padi Insus</h5>
                                    </label>
                                    <input name="luas_inmas_padi_insus" type="text" class="form-control"
                                        id="luas_inmas_padi_insus" aria-describedby="" placeholder=""
                                        value="{{old('luas_inmas_padi_insus')}}">
                                    @if ($errors->has('luas_inmas_padi_insus'))
                                    <span class="help-block">{{$errors->first('luas_inmas_padi_insus')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_inmas_padi_inmum') ? 'has-error' : ''}} ">
                                    <label for="luas_inmas_padi_inmum">
                                        <h5>Luas Tambah Tanam Inmas Padi Inmum</h5>
                                    </label>
                                    <input name="luas_inmas_padi_inmum" type="text" class="form-control"
                                        id="luas_inmas_padi_inmum" aria-describedby="" placeholder=""
                                        value="{{old('luas_inmas_padi_inmum')}}">
                                    @if ($errors->has('luas_inmas_padi_inmum'))
                                    <span class="help-block">{{$errors->first('luas_inmas_padi_inmum')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_padi_intensifikasi') ? 'has-error' : ''}} ">
                                    <label for="luas_padi_intensifikasi">
                                        <h5>Luas Tambah Panen Areal Padi Intensifikasi</h5>
                                    </label>
                                    <input name="luas_padi_intensifikasi" type="text" class="form-control"
                                        id="luas_padi_intensifikasi" aria-describedby="" placeholder=""
                                        value="{{old('luas_padi_intensifikasi')}}">
                                    @if ($errors->has('luas_padi_intensifikasi'))
                                    <span class="help-block">{{$errors->first('luas_padi_intensifikasi')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_hama_wereng') ? 'has-error' : ''}} ">
                                    <label for="luas_hama_wereng">
                                        <h5>Luas Serangan Hama Wereng</h5>
                                    </label>
                                    <input name="luas_hama_wereng" type="text" class="form-control"
                                        id="luas_hama_wereng" aria-describedby="" placeholder=""
                                        value="{{old('luas_hama_wereng')}}">
                                    @if ($errors->has('luas_hama_wereng'))
                                    <span class="help-block">{{$errors->first('luas_hama_wereng')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_hama_tikus') ? 'has-error' : ''}} ">
                                    <label for="luas_hama_tikus">
                                        <h5>Luas Serangan Hama Tikus</h5>
                                    </label>
                                    <input name="luas_hama_tikus" type="text" class="form-control" id="luas_hama_tikus"
                                        aria-describedby="" placeholder="" value="{{old('luas_hama_tikus')}}">
                                    @if ($errors->has('luas_hama_tikus'))
                                    <span class="help-block">{{$errors->first('luas_hama_tikus')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_hama_lainnya') ? 'has-error' : ''}} ">
                                    <label for="luas_hama_lainnya">
                                        <h5>Luas Serangan Hama/Penyakit Lainnya</h5>
                                    </label>
                                    <input name="luas_hama_lainnya" type="text" class="form-control"
                                        id="luas_hama_lainnya" aria-describedby="" placeholder=""
                                        value="{{old('luas_hama_lainnya')}}">
                                    @if ($errors->has('luas_hama_lainnya'))
                                    <span class="help-block">{{$errors->first('luas_hama_lainnya')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_puso_wereng') ? 'has-error' : ''}} ">
                                    <label for="luas_puso_wereng">
                                        <h5>Luas Tambah Areal Puso karena wereng</h5>
                                    </label>
                                    <input name="luas_puso_wereng" type="text" class="form-control"
                                        id="luas_puso_wereng" aria-describedby="" placeholder=""
                                        value="{{old('luas_puso_wereng')}}">
                                    @if ($errors->has('luas_puso_wereng'))
                                    <span class="help-block">{{$errors->first('luas_puso_wereng')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_puso_tikus') ? 'has-error' : ''}} ">
                                    <label for="luas_puso_tikus">
                                        <h5>Luas Tambah Areal Puso Karena Tikus</h5>
                                    </label>
                                    <input name="luas_puso_tikus" type="text" class="form-control" id="luas_puso_tikus"
                                        aria-describedby="" placeholder="" value="{{old('luas_puso_tikus')}}">
                                    @if ($errors->has('luas_puso_tikus'))
                                    <span class="help-block">{{$errors->first('luas_puso_tikus')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_puso_banjir') ? 'has-error' : ''}} ">
                                    <label for="luas_puso_banjir">
                                        <h5>Luas Tambah Areal Puso Karena Banjir</h5>
                                    </label>
                                    <input name="luas_puso_banjir" type="text" class="form-control"
                                        id="luas_puso_banjir" aria-describedby="" placeholder=""
                                        value="{{old('luas_puso_banjir')}}">
                                    @if ($errors->has('luas_puso_banjir'))
                                    <span class="help-block">{{$errors->first('luas_puso_banjir')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('luas_puso_kekeringan') ? 'has-error' : ''}} ">
                                    <label for="luas_puso_kekeringan">
                                        <h5>Luas Tambah Areal Puso Karena Kekeringan</h5>
                                    </label>
                                    <input name="luas_puso_kekeringan" type="text" class="form-control"
                                        id="luas_puso_kekeringan" aria-describedby="" placeholder=""
                                        value="{{old('luas_puso_kekeringan')}}">
                                    @if ($errors->has('luas_puso_kekeringan'))
                                    <span class="help-block">{{$errors->first('luas_puso_kekeringan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('penyalur_urea') ? 'has-error' : ''}} ">
                                    <label for="penyalur_urea">
                                        <h5>Penyalur Urea Lini IV dalam Minggu Pelaporan</h5>
                                    </label>
                                    <input name="penyalur_urea" type="text" class="form-control" id="penyalur_urea"
                                        aria-describedby="" placeholder="" value="{{old('penyalur_urea')}}">
                                    @if ($errors->has('penyalur_urea'))
                                    <span class="help-block">{{$errors->first('penyalur_urea')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('penyalur_tps') ? 'has-error' : ''}} ">
                                    <label for="penyalur_tps">
                                        <h5>Penyalur TPS Lini IV Dalam Minggu Pelaporan</h5>
                                    </label>
                                    <input name="penyalur_tps" type="text" class="form-control" id="penyalur_tps"
                                        aria-describedby="" placeholder="" value="{{old('penyalur_tps')}}">
                                    @if ($errors->has('penyalur_tps'))
                                    <span class="help-block">{{$errors->first('penyalur_tps')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('penyalur_insektisida') ? 'has-error' : ''}} ">
                                    <label for="penyalur_insektisida">
                                        <h5>Penyalur Insektisida Lini IV Dalam Minggu Pelaporan</h5>
                                    </label>
                                    <input name="penyalur_insektisida" type="text" class="form-control"
                                        id="penyalur_insektisida" aria-describedby="" placeholder=""
                                        value="{{old('penyalur_insektisida')}}">
                                    @if ($errors->has('penyalur_insektisida'))
                                    <span class="help-block">{{$errors->first('penyalur_insektisida')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('penyalur_rodentisida') ? 'has-error' : ''}} ">
                                    <label for="penyalur_rodentisida">
                                        <h5>Penyalur Rodentisida Lini IV Dalam Minggu Pelaporan</h5>
                                    </label>
                                    <input name="penyalur_rodentisida" type="text" class="form-control"
                                        id="penyalur_rodentisida" aria-describedby="" placeholder=""
                                        value="{{old('penyalur_rodentisida')}}">
                                    @if ($errors->has('penyalur_rodentisida'))
                                    <span class="help-block">{{$errors->first('penyalur_rodentisida')}}</span>
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