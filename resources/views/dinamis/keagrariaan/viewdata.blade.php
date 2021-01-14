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
                            <form method="POST" action="#">
                                <fieldset disabled="disabled">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                                <label for="tanggal">Tanggal</label>
                                                <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                    aria-describedby="" placeholder=""
                                                    value="{{$keagrariaan->tanggal}}">
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
                                    <div
                                        class="form-group {{$errors->has('tanah_hak_pengelolaan') ? 'has-error' : ''}} ">
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
                                        <input name="tanah_hak_pakai" type="text" class="form-control"
                                            id="tanah_hak_pakai" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->tanah_hak_pakai}}">
                                        @if ($errors->has('tanah_hak_pakai'))
                                        <span class="help-block">{{$errors->first('tanah_hak_pakai')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('tanah_hak_guna_bangunan') ? 'has-error' : ''}} ">
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
                                    <div
                                        class="form-group {{$errors->has('tanah_hak_guna_usaha') ? 'has-error' : ''}} ">
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



                                    <label for="">
                                        <h5><strong> 2. Perubahan penggunaan tanah </strong></h5>
                                    </label>
                                    <label for="">
                                        <h5><strong>a. Sawah berubah menjadi</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('sawah_perumahan') ? 'has-error' : ''}} ">
                                        <label for="sawah_perumahan">
                                            <h5>- Perumahan</h5>
                                        </label>
                                        <input name="sawah_perumahan" type="text" class="form-control"
                                            id="sawah_perumahan" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->sawah_perumahan}}">
                                        @if ($errors->has('sawah_perumahan'))
                                        <span class="help-block">{{$errors->first('sawah_perumahan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sawah_industri') ? 'has-error' : ''}} ">
                                        <label for="sawah_industri">
                                            <h5>- Industri</h5>
                                        </label>
                                        <input name="sawah_industri" type="text" class="form-control"
                                            id="sawah_industri" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->sawah_industri}}">
                                        @if ($errors->has('sawah_industri'))
                                        <span class="help-block">{{$errors->first('sawah_industri')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sawah_jasa') ? 'has-error' : ''}} ">
                                        <label for="sawah_jasa">
                                            <h5>- Jasa</h5>
                                        </label>
                                        <input name="sawah_jasa" type="text" class="form-control" id="sawah_jasa"
                                            aria-describedby="" placeholder="M" value="{{$keagrariaan->sawah_jasa}}">
                                        @if ($errors->has('sawah_jasa'))
                                        <span class="help-block">{{$errors->first('sawah_jasa')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('sawah_perusahaan_dll') ? 'has-error' : ''}} ">
                                        <label for="sawah_perusahaan_dll">
                                            <h5>- Perusahaan dan lain-lain</h5>
                                        </label>
                                        <input name="sawah_perusahaan_dll" type="text" class="form-control"
                                            id="sawah_perusahaan_dll" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->sawah_perusahaan_dll}}">
                                        @if ($errors->has('sawah_perusahaan_dll'))
                                        <span class="help-block">{{$errors->first('sawah_perusahaan_dll')}}</span>
                                        @endif
                                    </div>






                                    <label for="">
                                        <h5><strong>b. Tegalan berubah menjadi</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('tegalan_perumahan') ? 'has-error' : ''}} ">
                                        <label for="tegalan_perumahan">
                                            <h5>- Perumahan</h5>
                                        </label>
                                        <input name="tegalan_perumahan" type="text" class="form-control"
                                            id="tegalan_perumahan" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->tegalan_perumahan}}">
                                        @if ($errors->has('tegalan_perumahan'))
                                        <span class="help-block">{{$errors->first('tegalan_perumahan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tegalan_industri') ? 'has-error' : ''}} ">
                                        <label for="tegalan_industri">
                                            <h5>- Industri</h5>
                                        </label>
                                        <input name="tegalan_industri" type="text" class="form-control"
                                            id="tegalan_industri" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->tegalan_industri}}">
                                        @if ($errors->has('tegalan_industri'))
                                        <span class="help-block">{{$errors->first('tegalan_industri')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tegalan_jasa') ? 'has-error' : ''}} ">
                                        <label for="tegalan_jasa">
                                            <h5>- Jasa</h5>
                                        </label>
                                        <input name="tegalan_jasa" type="text" class="form-control" id="tegalan_jasa"
                                            aria-describedby="" placeholder="M" value="{{$keagrariaan->tegalan_jasa}}">
                                        @if ($errors->has('tegalan_jasa'))
                                        <span class="help-block">{{$errors->first('tegalan_jasa')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('tegalan_perusahaan_dll') ? 'has-error' : ''}} ">
                                        <label for="tegalan_perusahaan_dll">
                                            <h5>- Perusahaan dan lain-lain</h5>
                                        </label>
                                        <input name="tegalan_perusahaan_dll" type="text" class="form-control"
                                            id="tegalan_perusahaan_dll" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->tegalan_perusahaan_dll}}">
                                        @if ($errors->has('tegalan_perusahaan_dll'))
                                        <span class="help-block">{{$errors->first('tegalan_perusahaan_dll')}}</span>
                                        @endif
                                    </div>






                                    <label for="">
                                        <h5><strong>c. Perkebunan berubah menjadi</strong></h5>
                                    </label>
                                    <div
                                        class="form-group {{$errors->has('perkebunan_perumahan') ? 'has-error' : ''}} ">
                                        <label for="perkebunan_perumahan">
                                            <h5>- Perumahan</h5>
                                        </label>
                                        <input name="perkebunan_perumahan" type="text" class="form-control"
                                            id="perkebunan_perumahan" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->perkebunan_perumahan}}">
                                        @if ($errors->has('perkebunan_perumahan'))
                                        <span class="help-block">{{$errors->first('perkebunan_perumahan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('perkebunan_industri') ? 'has-error' : ''}} ">
                                        <label for="perkebunan_industri">
                                            <h5>- Industri</h5>
                                        </label>
                                        <input name="perkebunan_industri" type="text" class="form-control"
                                            id="perkebunan_industri" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->perkebunan_industri}}">
                                        @if ($errors->has('perkebunan_industri'))
                                        <span class="help-block">{{$errors->first('perkebunan_industri')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('perkebunan_jasa') ? 'has-error' : ''}} ">
                                        <label for="perkebunan_jasa">
                                            <h5>- Jasa</h5>
                                        </label>
                                        <input name="perkebunan_jasa" type="text" class="form-control"
                                            id="perkebunan_jasa" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->perkebunan_jasa}}">
                                        @if ($errors->has('perkebunan_jasa'))
                                        <span class="help-block">{{$errors->first('perkebunan_jasa')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('perkebunan_perusahaan_dll') ? 'has-error' : ''}} ">
                                        <label for="perkebunan_perusahaan_dll">
                                            <h5>- Perusahaan dan lain-lain</h5>
                                        </label>
                                        <input name="perkebunan_perusahaan_dll" type="text" class="form-control"
                                            id="perkebunan_perusahaan_dll" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->perkebunan_perusahaan_dll}}">
                                        @if ($errors->has('perkebunan_perusahaan_dll'))
                                        <span class="help-block">{{$errors->first('perkebunan_perusahaan_dll')}}</span>
                                        @endif
                                    </div>





                                    <label for="">
                                        <h5><strong>d. Hutan berubah menjadi</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('hutan_perumahan') ? 'has-error' : ''}} ">
                                        <label for="hutan_perumahan">
                                            <h5>- Perumahan</h5>
                                        </label>
                                        <input name="hutan_perumahan" type="text" class="form-control"
                                            id="hutan_perumahan" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->hutan_perumahan}}">
                                        @if ($errors->has('hutan_perumahan'))
                                        <span class="help-block">{{$errors->first('hutan_perumahan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('hutan_industri') ? 'has-error' : ''}} ">
                                        <label for="hutan_industri">
                                            <h5>- Industri</h5>
                                        </label>
                                        <input name="hutan_industri" type="text" class="form-control"
                                            id="hutan_industri" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->hutan_industri}}">
                                        @if ($errors->has('hutan_industri'))
                                        <span class="help-block">{{$errors->first('hutan_industri')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('hutan_jasa') ? 'has-error' : ''}} ">
                                        <label for="hutan_jasa">
                                            <h5>- Jasa</h5>
                                        </label>
                                        <input name="hutan_jasa" type="text" class="form-control" id="hutan_jasa"
                                            aria-describedby="" placeholder="M" value="{{$keagrariaan->hutan_jasa}}">
                                        @if ($errors->has('hutan_jasa'))
                                        <span class="help-block">{{$errors->first('hutan_jasa')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('hutan_perusahaan_dll') ? 'has-error' : ''}} ">
                                        <label for="hutan_perusahaan_dll">
                                            <h5>- Perusahaan dan lain-lain</h5>
                                        </label>
                                        <input name="hutan_perusahaan_dll" type="text" class="form-control"
                                            id="hutan_perusahaan_dll" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->hutan_perusahaan_dll}}">
                                        @if ($errors->has('hutan_perusahaan_dll'))
                                        <span class="help-block">{{$errors->first('hutan_perusahaan_dll')}}</span>
                                        @endif
                                    </div>


                                    <label for="">
                                        <h5><strong>e. tambak berubah menjadi</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('tambak_perumahan') ? 'has-error' : ''}} ">
                                        <label for="tambak_perumahan">
                                            <h5>- Perumahan</h5>
                                        </label>
                                        <input name="tambak_perumahan" type="text" class="form-control"
                                            id="tambak_perumahan" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->tambak_perumahan}}">
                                        @if ($errors->has('tambak_perumahan'))
                                        <span class="help-block">{{$errors->first('tambak_perumahan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tambak_industri') ? 'has-error' : ''}} ">
                                        <label for="tambak_industri">
                                            <h5>- Industri</h5>
                                        </label>
                                        <input name="tambak_industri" type="text" class="form-control"
                                            id="tambak_industri" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->tambak_industri}}">
                                        @if ($errors->has('tambak_industri'))
                                        <span class="help-block">{{$errors->first('tambak_industri')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tambak_jasa') ? 'has-error' : ''}} ">
                                        <label for="tambak_jasa">
                                            <h5>- Jasa</h5>
                                        </label>
                                        <input name="tambak_jasa" type="text" class="form-control" id="tambak_jasa"
                                            aria-describedby="" placeholder="M" value="{{$keagrariaan->tambak_jasa}}">
                                        @if ($errors->has('tambak_jasa'))
                                        <span class="help-block">{{$errors->first('tambak_jasa')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('tambak_perusahaan_dll') ? 'has-error' : ''}} ">
                                        <label for="tambak_perusahaan_dll">
                                            <h5>- Perusahaan dan lain-lain</h5>
                                        </label>
                                        <input name="tambak_perusahaan_dll" type="text" class="form-control"
                                            id="tambak_perusahaan_dll" aria-describedby="" placeholder="M"
                                            value="{{$keagrariaan->tambak_perusahaan_dll}}">
                                        @if ($errors->has('tambak_perusahaan_dll'))
                                        <span class="help-block">{{$errors->first('tambak_perusahaan_dll')}}</span>
                                        @endif
                                    </div>

                                </fieldset>
                            </form>
                            <a href="/dinamis/keagrariaan/{{$keagrariaan->id}}/edit"
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