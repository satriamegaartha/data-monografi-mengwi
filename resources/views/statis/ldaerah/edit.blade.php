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
                            <h3 class="panel-title">Data Luas Daerah/Wilayah</h3>

                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/statis/ldaerah/{{$ldaerah->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$ldaerah->tanggal}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('tanah_sawah') ? 'has-error' : ''}} ">
                                    <label for="tanah_sawah">2.1. Tanah Sawah (Ha)</label>
                                    <input name="tanah_sawah" type="text" class="form-control" id="tanah_sawah"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tanah_sawah}}">
                                    @if ($errors->has('tanah_sawah'))
                                    <span class="help-block">{{$errors->first('tanah_sawah')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('ts_iteknis') ? 'has-error' : ''}} ">
                                    <label for="ts_iteknis">
                                        <h5>a. Irigasi Teknis (Ha)</h5>
                                    </label>
                                    <input name="ts_iteknis" type="text" class="form-control" id="ts_iteknis"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->ts_iteknis}}">
                                    @if ($errors->has('ts_iteknis'))
                                    <span class="help-block">{{$errors->first('ts_iteknis')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('ts_isteknis') ? 'has-error' : ''}} ">
                                    <label for="ts_isteknis">
                                        <h5>b. Irigasi setengah Teknis (Ha)</h5>
                                    </label>
                                    <input name="ts_isteknis" type="text" class="form-control" id="ts_isteknis"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->ts_isteknis}}">
                                    @if ($errors->has('ts_isteknis'))
                                    <span class="help-block">{{$errors->first('ts_isteknis')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('ts_isederhana') ? 'has-error' : ''}} ">
                                    <label for="ts_isederhana">
                                        <h5>c. Irigasi sederhana (Ha)</h5>
                                    </label>
                                    <input name="ts_isederhana" type="text" class="form-control" id="ts_isederhana"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->ts_isederhana}}">
                                    @if ($errors->has('ts_isederhana'))
                                    <span class="help-block">{{$errors->first('ts_isederhana')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('ts_tadah_hujan') ? 'has-error' : ''}} ">
                                    <label for="ts_tadah_hujan">
                                        <h5>d. Tadah hujan/sawah rendengan (Ha)</h5>
                                    </label>
                                    <input name="ts_tadah_hujan" type="text" class="form-control" id="ts_tadah_hujan"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->ts_tadah_hujan}}">
                                    @if ($errors->has('ts_tadah_hujan'))
                                    <span class="help-block">{{$errors->first('ts_tadah_hujan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('ts_sawah') ? 'has-error' : ''}} ">
                                    <label for="ts_sawah">
                                        <h5>e. Sawah Padang Surut (Ha)</h5>
                                    </label>
                                    <input name="ts_sawah" type="text" class="form-control" id="ts_sawah"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->ts_sawah}}">
                                    @if ($errors->has('ts_sawah'))
                                    <span class="help-block">{{$errors->first('ts_sawah')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('tanah_kering') ? 'has-error' : ''}} ">
                                    <label for="tanah_kering">2.2. Tanah Kering (Ha)</label>
                                    <input name="tanah_kering" type="text" class="form-control" id="tanah_kering"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tanah_kering}}">
                                    @if ($errors->has('tanah_kering'))
                                    <span class="help-block">{{$errors->first('tanah_kering')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('tk_pekarangan') ? 'has-error' : ''}} ">
                                    <label for="tk_pekarangan">
                                        <h5>a. Pekarangan/bangunan/emplasemen (Ha)</h5>
                                    </label>
                                    <input name="tk_pekarangan" type="text" class="form-control" id="tk_pekarangan"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tk_pekarangan}}">
                                    @if ($errors->has('tk_pekarangan'))
                                    <span class="help-block">{{$errors->first('tk_pekarangan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tk_tegal') ? 'has-error' : ''}} ">
                                    <label for="tk_tegal">
                                        <h5>b. Tegal/kebun (Ha)</h5>
                                    </label>
                                    <input name="tk_tegal" type="text" class="form-control" id="tk_tegal"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tk_tegal}}">
                                    @if ($errors->has('tk_tegal'))
                                    <span class="help-block">{{$errors->first('tk_tegal')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tk_ladang') ? 'has-error' : ''}} ">
                                    <label for="tk_ladang">
                                        <h5>c. Ladang / tanah huma (Ha)</h5>
                                    </label>
                                    <input name="tk_ladang" type="text" class="form-control" id="tk_ladang"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tk_ladang}}">
                                    @if ($errors->has('tk_ladang'))
                                    <span class="help-block">{{$errors->first('tk_ladang')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tk_penggembalaan') ? 'has-error' : ''}} ">
                                    <label for="tk_penggembalaan">
                                        <h5>d. Ladang penggembalaan/pangonan (Ha)</h5>
                                    </label>
                                    <input name="tk_penggembalaan" type="text" class="form-control"
                                        id="tk_penggembalaan" aria-describedby="" placeholder="Ha"
                                        value="{{$ldaerah->tk_penggembalaan}}">
                                    @if ($errors->has('tk_penggembalaan'))
                                    <span class="help-block">{{$errors->first('tk_penggembalaan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_basah') ? 'has-error' : ''}} ">
                                    <label for="tanah_basah">2.3. Tanah Basah : (Ha)</label>
                                    <input name="tanah_basah" type="text" class="form-control" id="tanah_basah"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tanah_basah}}">
                                    @if ($errors->has('tanah_basah'))
                                    <span class="help-block">{{$errors->first('tanah_basah')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tb_tambak') ? 'has-error' : ''}} ">
                                    <label for="tb_tambak">
                                        <h5>a. Tambak (Ha)</h5>
                                    </label>
                                    <input name="tb_tambak" type="text" class="form-control" id="tb_tambak"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tb_tambak}}">
                                    @if ($errors->has('tb_tambak'))
                                    <span class="help-block">{{$errors->first('tb_tambak')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tb_rawa') ? 'has-error' : ''}} ">
                                    <label for="tb_rawa">
                                        <h5>b. Rawa/Pasang Surut (Ha)</h5>
                                    </label>
                                    <input name="tb_rawa" type="text" class="form-control" id="tb_rawa"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tb_rawa}}">
                                    @if ($errors->has('tb_rawa'))
                                    <span class="help-block">{{$errors->first('tb_rawa')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tb_balong') ? 'has-error' : ''}} ">
                                    <label for="tb_balong">
                                        <h5>c. Balong/Empang/Kolam (Ha)</h5>
                                    </label>
                                    <input name="tb_balong" type="text" class="form-control" id="tb_balong"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tb_balong}}">
                                    @if ($errors->has('tb_balong'))
                                    <span class="help-block">{{$errors->first('tb_balong')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tb_gambut') ? 'has-error' : ''}} ">
                                    <label for="tb_gambut">
                                        <h5>d. Tanah Gambut (Ha)</h5>
                                    </label>
                                    <input name="tb_gambut" type="text" class="form-control" id="tb_gambut"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tb_gambut}}">
                                    @if ($errors->has('tb_gambut'))
                                    <span class="help-block">{{$errors->first('tb_gambut')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_hutan') ? 'has-error' : ''}} ">
                                    <label for="tanah_hutan">2.4. Tanah Hutan : (Ha)</label>
                                    <input name="tanah_hutan" type="text" class="form-control" id="tanah_hutan"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tanah_hutan}}">
                                    @if ($errors->has('tanah_hutan'))
                                    <span class="help-block">{{$errors->first('tanah_hutan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('th_lebat') ? 'has-error' : ''}} ">
                                    <label for="th_lebat">
                                        <h5>a. Hutan Lebat (Ha)</h5>
                                    </label>
                                    <input name="th_lebat" type="text" class="form-control" id="th_lebat"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->th_lebat}}">
                                    @if ($errors->has('th_lebat'))
                                    <span class="help-block">{{$errors->first('th_lebat')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('th_belukar') ? 'has-error' : ''}} ">
                                    <label for="th_belukar">
                                        <h5>b. Hutan Belukar (Ha)</h5>
                                    </label>
                                    <input name="th_belukar" type="text" class="form-control" id="th_belukar"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->th_belukar}}">
                                    @if ($errors->has('th_belukar'))
                                    <span class="help-block">{{$errors->first('th_belukar')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('th_sejenis1') ? 'has-error' : ''}} ">
                                    <label for="th_sejenis1">
                                        <h5>c. Hutan Sejenis (Ha)</h5>
                                    </label>
                                    <input name="th_sejenis1" type="text" class="form-control" id="th_sejenis1"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->th_sejenis1}}">
                                    @if ($errors->has('th_sejenis1'))
                                    <span class="help-block">{{$errors->first('th_sejenis1')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('th_sejenis2') ? 'has-error' : ''}} ">
                                    <label for="th_sejenis2">
                                        <h5>d. Hutan Sejenis (Ha)</h5>
                                    </label>
                                    <input name="th_sejenis2" type="text" class="form-control" id="th_sejenis2"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->th_sejenis2}}">
                                    @if ($errors->has('th_sejenis2'))
                                    <span class="help-block">{{$errors->first('th_sejenis2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('th_rawa') ? 'has-error' : ''}} ">
                                    <label for="th_rawa">
                                        <h5>e. Hutan Rawa (Ha)</h5>
                                    </label>
                                    <input name="th_rawa" type="text" class="form-control" id="th_rawa"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->th_rawa}}">
                                    @if ($errors->has('th_rawa'))
                                    <span class="help-block">{{$errors->first('th_rawa')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_perkebunan') ? 'has-error' : ''}} ">
                                    <label for="tanah_perkebunan">2.5. Tanah Perkebunan : (Ha)</label>
                                    <input name="tanah_perkebunan" type="text" class="form-control"
                                        id="tanah_perkebunan" aria-describedby="" placeholder="Ha"
                                        value="{{$ldaerah->tanah_perkebunan}}">
                                    @if ($errors->has('tanah_perkebunan'))
                                    <span class="help-block">{{$errors->first('tanah_perkebunan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tp_negara') ? 'has-error' : ''}} ">
                                    <label for="tp_negara">
                                        <h5>a. Perkebunan Negara (Ha)</h5>
                                    </label>
                                    <input name="tp_negara" type="text" class="form-control" id="tp_negara"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tp_negara}}">
                                    @if ($errors->has('tp_negara'))
                                    <span class="help-block">{{$errors->first('tp_negara')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tp_swasta') ? 'has-error' : ''}} ">
                                    <label for="tp_swasta">
                                        <h5>b. Perkebunan Swasta (Ha)</h5>
                                    </label>
                                    <input name="tp_swasta" type="text" class="form-control" id="tp_swasta"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tp_swasta}}">
                                    @if ($errors->has('tp_swasta'))
                                    <span class="help-block">{{$errors->first('tp_swasta')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_umum') ? 'has-error' : ''}} ">
                                    <label for="tanah_umum">2.6. Tanah Keperluan Fasilitas Umum (Ha)</label>
                                    <input name="tanah_umum" type="text" class="form-control" id="tanah_umum"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tanah_umum}}">
                                    @if ($errors->has('tanah_umum'))
                                    <span class="help-block">{{$errors->first('tanah_umum')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tu_lapangan') ? 'has-error' : ''}} ">
                                    <label for="tu_lapangan">
                                        <h5>a. Lapangan Olah Raga (Ha)</h5>
                                    </label>
                                    <input name="tu_lapangan" type="text" class="form-control" id="tu_lapangan"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tu_lapangan}}">
                                    @if ($errors->has('tu_lapangan'))
                                    <span class="help-block">{{$errors->first('tu_lapangan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tu_rekreasi') ? 'has-error' : ''}} ">
                                    <label for="tu_rekreasi">
                                        <h5>b. Taman Rekreasi (Ha)</h5>
                                    </label>
                                    <input name="tu_rekreasi" type="text" class="form-control" id="tu_rekreasi"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tu_rekreasi}}">
                                    @if ($errors->has('tu_rekreasi'))
                                    <span class="help-block">{{$errors->first('tu_rekreasi')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tu_jalur_hijau') ? 'has-error' : ''}} ">
                                    <label for="tu_jalur_hijau">
                                        <h5>c. Jalur Hijau (Ha)</h5>
                                    </label>
                                    <input name="tu_jalur_hijau" type="text" class="form-control" id="tu_jalur_hijau"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tu_jalur_hijau}}">
                                    @if ($errors->has('tu_jalur_hijau'))
                                    <span class="help-block">{{$errors->first('tu_jalur_hijau')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tu_kuburan') ? 'has-error' : ''}} ">
                                    <label for="tu_kuburan">
                                        <h5>d. Kuburan (Ha)</h5>
                                    </label>
                                    <input name="tu_kuburan" type="text" class="form-control" id="tu_kuburan"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tu_kuburan}}">
                                    @if ($errors->has('tu_kuburan'))
                                    <span class="help-block">{{$errors->first('tu_kuburan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tanah_lain_lain') ? 'has-error' : ''}} ">
                                    <label for="tanah_lain_lain">2.7. Lain-lain (tanah tandus, tanah pasir) (Ha)</label>
                                    <input name="tanah_lain_lain" type="text" class="form-control" id="tanah_lain_lain"
                                        aria-describedby="" placeholder="Ha" value="{{$ldaerah->tanah_lain_lain}}">
                                    @if ($errors->has('tanah_lain_lain'))
                                    <span class="help-block">{{$errors->first('tanah_lain_lain')}}</span>
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