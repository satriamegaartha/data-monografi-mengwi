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
                            <h3 class="panel-title">keagrariaan</h3>

                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/dinamis/keagrariaan/{{$keagrariaan->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$keagrariaan->tanggal}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <label for="">
                                    <h5><strong>C. KEAGRARIAAN</strong></h5>
                                </label>
                                <br>
                                <label for="">
                                    <h5><strong> 1. Status tanah </strong></h5>
                                </label>
                                <div class="form-group {{$errors->has('tm_sertifikat') ? 'has-error' : ''}} ">
                                    <label for="tm_sertifikat">
                                        <h5>a. Tanah Milik Bersertifikat </h5>
                                    </label>
                                    <input name="tm_sertifikat" type="text" class="form-control" id="tm_sertifikat"
                                        aria-describedby="" placeholder="M" value="{{$keagrariaan->tm_sertifikat}}">
                                    @if ($errors->has('tm_sertifikat'))
                                    <span class="help-block">{{$errors->first('tm_sertifikat')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tm_blm_sertifikat') ? 'has-error' : ''}} ">
                                    <label for="tm_blm_sertifikat">
                                        <h5>b. Tanah Milik Belum Bersertifikat</h5>
                                    </label>
                                    <input name="tm_blm_sertifikat" type="text" class="form-control"
                                        id="tm_blm_sertifikat" aria-describedby="" placeholder="M"
                                        value="{{$keagrariaan->tm_blm_sertifikat}}">
                                    @if ($errors->has('tm_blm_sertifikat'))
                                    <span class="help-block">{{$errors->first('tm_blm_sertifikat')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_hak_pengelolaan') ? 'has-error' : ''}} ">
                                    <label for="tanah_hak_pengelolaan">
                                        <h5>c. Tanah Hak Pengelolaan </h5>
                                    </label>
                                    <input name="tanah_hak_pengelolaan" type="text" class="form-control"
                                        id="tanah_hak_pengelolaan" aria-describedby="" placeholder="M"
                                        value="{{$keagrariaan->tanah_hak_pengelolaan}}">
                                    @if ($errors->has('tanah_hak_pengelolaan'))
                                    <span class="help-block">{{$errors->first('tanah_hak_pengelolaan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_negara') ? 'has-error' : ''}} ">
                                    <label for="tanah_negara">
                                        <h5>d. Tanah Negara</h5>
                                    </label>
                                    <input name="tanah_negara" type="text" class="form-control" id="tanah_negara"
                                        aria-describedby="" placeholder="M" value="{{$keagrariaan->tanah_negara}}">
                                    @if ($errors->has('tanah_negara'))
                                    <span class="help-block">{{$errors->first('tanah_negara')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_bebas') ? 'has-error' : ''}} ">
                                    <label for="tanah_bebas">
                                        <h5>e. Tanah Bebas </h5>
                                    </label>
                                    <input name="tanah_bebas" type="text" class="form-control" id="tanah_bebas"
                                        aria-describedby="" placeholder="M" value="{{$keagrariaan->tanah_bebas}}">
                                    @if ($errors->has('tanah_bebas'))
                                    <span class="help-block">{{$errors->first('tanah_bebas')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_hak_pakai') ? 'has-error' : ''}} ">
                                    <label for="tanah_hak_pakai">
                                        <h5>f. Tanah Hak Pakai </h5>
                                    </label>
                                    <input name="tanah_hak_pakai" type="text" class="form-control" id="tanah_hak_pakai"
                                        aria-describedby="" placeholder="M" value="{{$keagrariaan->tanah_hak_pakai}}">
                                    @if ($errors->has('tanah_hak_pakai'))
                                    <span class="help-block">{{$errors->first('tanah_hak_pakai')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_hak_guna_bangunan') ? 'has-error' : ''}} ">
                                    <label for="tanah_hak_guna_bangunan">
                                        <h5>g. Tanah Hak guna bangunan</h5>
                                    </label>
                                    <input name="tanah_hak_guna_bangunan" type="text" class="form-control"
                                        id="tanah_hak_guna_bangunan" aria-describedby="" placeholder="M"
                                        value="{{$keagrariaan->tanah_hak_guna_bangunan}}">
                                    @if ($errors->has('tanah_hak_guna_bangunan'))
                                    <span class="help-block">{{$errors->first('tanah_hak_guna_bangunan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_hak_guna_usaha') ? 'has-error' : ''}} ">
                                    <label for="tanah_hak_guna_usaha">
                                        <h5>h. Tanah Hak guna usaha </h5>
                                    </label>
                                    <input name="tanah_hak_guna_usaha" type="text" class="form-control"
                                        id="tanah_hak_guna_usaha" aria-describedby="" placeholder="M"
                                        value="{{$keagrariaan->tanah_hak_guna_usaha}}">
                                    @if ($errors->has('tanah_hak_guna_usaha'))
                                    <span class="help-block">{{$errors->first('tanah_hak_guna_usaha')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_adat') ? 'has-error' : ''}} ">
                                    <label for="tanah_adat">
                                        <h5> i. Tanah Adat </h5>
                                    </label>
                                    <input name="tanah_adat" type="text" class="form-control" id="tanah_adat"
                                        aria-describedby="" placeholder="M" value="{{$keagrariaan->tanah_adat}}">
                                    @if ($errors->has('tanah_adat'))
                                    <span class="help-block">{{$errors->first('tanah_adat')}}</span>
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