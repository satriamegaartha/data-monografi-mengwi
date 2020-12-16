@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">





                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Keterangan Umum</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/statis/kumum/{{$kumum->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$kumum->tanggal}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{$errors->has('tinggi_pusat') ? 'has-error' : ''}} ">
                                    <label for="tinggi_pusat">1.1. Tinggi Pusat Pemerintahan Wilayah Kecamatan dari
                                        permukaan laut (M.DPL)</label>
                                    <input name="tinggi_pusat" type="text" class="form-control" id="tinggi_pusat"
                                        aria-describedby="" placeholder="" value="{{$kumum->tinggi_pusat}}">
                                    @if ($errors->has('tinggi_pusat'))
                                    <span class="help-block">{{$errors->first('tinggi_pusat')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('suhu_max_min') ? 'has-error' : ''}} ">
                                    <label for="suhu_max_min">1.2. Suhu maximum/minimum (c)</label>
                                    <input name="suhu_max_min" type="text" class="form-control" id="suhu_max_min"
                                        aria-describedby="" placeholder="" value="{{$kumum->suhu_max_min}}">
                                    @if ($errors->has('suhu_max_min'))
                                    <span class="help-block">{{$errors->first('suhu_max_min')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('jpp_desa') ? 'has-error' : ''}} ">
                                    <label for="">1.3. Jarak Pusat Pemerintahan Wilayah Kecamatan dengan :</label>
                                    <br>
                                    <label for="jpp_desa">a. Desa/Kelurahan yang terjauh (Km / Jam)</label>
                                    <input name="jpp_desa" type="text" class="form-control" id="jpp_desa"
                                        aria-describedby="" placeholder="" value="{{$kumum->jpp_desa}}">
                                    @if ($errors->has('jpp_desa'))
                                    <span class="help-block">{{$errors->first('jpp_desa')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('jpp_kabupaten') ? 'has-error' : ''}} ">
                                    <label for="jpp_kabupaten">b. Ibukota Kabupaten/Kota (Km / Jam)</label>
                                    <input name="jpp_kabupaten" type="text" class="form-control" id="jpp_kabupaten"
                                        aria-describedby="" placeholder="" value="{{$kumum->jpp_kabupaten}}">
                                    @if ($errors->has('jpp_kabupaten'))
                                    <span class="help-block">{{$errors->first('jpp_kabupaten')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('jpp_propinsi') ? 'has-error' : ''}} ">
                                    <label for="jpp_propinsi">c. Ibukota Propinsi</label>
                                    <input name="jpp_propinsi" type="text" class="form-control" id="jpp_propinsi"
                                        aria-describedby="" placeholder="" value="{{$kumum->jpp_propinsi}}">
                                    @if ($errors->has('jpp_propinsi'))
                                    <span class="help-block">{{$errors->first('jpp_propinsi')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('ch_jumlah_hari') ? 'has-error' : ''}} ">
                                    <label for="">1.4. Curah Hujan</label>
                                    <br>
                                    <label for="ch_jumlah_hari">a. Jumlah hari dengan curah hujan yang terbanyak
                                        (Hari)</label>
                                    <input name="ch_jumlah_hari" type="text" class="form-control" id="ch_jumlah_hari"
                                        aria-describedby="" placeholder="" value="{{$kumum->ch_jumlah_hari}}">
                                    @if ($errors->has('ch_jumlah_hari'))
                                    <span class="help-block">{{$errors->first('ch_jumlah_hari')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('ch_banyaknya') ? 'has-error' : ''}} ">
                                    <label for="ch_banyaknya">b. Banyaknya curah hujan (mm/thn)</label>
                                    <input name="ch_banyaknya" type="text" class="form-control" id="ch_banyaknya"
                                        aria-describedby="" placeholder="" value="{{$kumum->ch_banyaknya}}">
                                    @if ($errors->has('ch_banyaknya'))
                                    <span class="help-block">{{$errors->first('ch_banyaknya')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('bw_data_berombak') ? 'has-error' : ''}} ">
                                    <label for="">1.5. Bentuk Wilayah</label>
                                    <br>
                                    <label for="bw_data_berombak">a. Datar sampai berombak (%)</label>
                                    <input name="bw_data_berombak" type="text" class="form-control"
                                        id="bw_data_berombak" aria-describedby="" placeholder=""
                                        value="{{$kumum->bw_data_berombak}}">
                                    @if ($errors->has('bw_data_berombak'))
                                    <span class="help-block">{{$errors->first('bw_data_berombak')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('bw_berombak_berbukit') ? 'has-error' : ''}} ">
                                    <label for="bw_berombak_berbukit">b. Berombak sampai berbukit (%)</label>
                                    <input name="bw_berombak_berbukit" type="text" class="form-control"
                                        id="bw_berombak_berbukit" aria-describedby="" placeholder=""
                                        value="{{$kumum->bw_berombak_berbukit}}">
                                    @if ($errors->has('bw_berombak_berbukit'))
                                    <span class="help-block">{{$errors->first('bw_berombak_berbukit')}}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('bw_berbukit_bergunung') ? 'has-error' : ''}} ">
                                    <label for="bw_berbukit_bergunung">c. Berbukit sampai bergunung (%)</label>
                                    <input name="bw_berbukit_bergunung" type="text" class="form-control"
                                        id="bw_berbukit_bergunung" aria-describedby="" placeholder=""
                                        value="{{$kumum->bw_berbukit_bergunung}}">
                                    @if ($errors->has('bw_berbukit_bergunung'))
                                    <span class="help-block">{{$errors->first('bw_berbukit_bergunung')}}</span>
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