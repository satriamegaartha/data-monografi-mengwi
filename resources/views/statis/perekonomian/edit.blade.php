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
                            <h3 class="panel-title">Sarana Perekonomian</h3>

                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/statis/perekonomian/{{$perekonomian->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$perekonomian->tanggal}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <label for="">9.1. Koperasi : </label>
                                <div class="form-group {{$errors->has('ksp') ? 'has-error' : ''}} ">
                                    <label for="ksp">
                                        <h5>a. Koperasi Simpan Pinjam</h5>
                                    </label>
                                    <input name="ksp" type="text" class="form-control" id="ksp" aria-describedby=""
                                        placeholder="Buah" value="{{$perekonomian->ksp}}">
                                    @if ($errors->has('ksp'))
                                    <span class="help-block">{{$errors->first('ksp')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kud') ? 'has-error' : ''}} ">
                                    <label for="kud">
                                        <h5>b. Koperasi Unit Desa/KUD</h5>
                                    </label>
                                    <input name="kud" type="text" class="form-control" id="kud" aria-describedby=""
                                        placeholder="Buah" value="{{$perekonomian->kud}}">
                                    @if ($errors->has('kud'))
                                    <span class="help-block">{{$errors->first('kud')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('bkk') ? 'has-error' : ''}} ">
                                    <label for="bkk">
                                        <h5>c. BKK </h5>
                                    </label>
                                    <input name="bkk" type="text" class="form-control" id="bkk" aria-describedby=""
                                        placeholder="Buah" value="{{$perekonomian->bkk}}">
                                    @if ($errors->has('bkk'))
                                    <span class="help-block">{{$errors->first('bkk')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('bpkd') ? 'has-error' : ''}} ">
                                    <label for="bpkd">
                                        <h5>d. BPKD</h5>
                                    </label>
                                    <input name="bpkd" type="text" class="form-control" id="bpkd" aria-describedby=""
                                        placeholder="Buah" value="{{$perekonomian->bpkd}}">
                                    @if ($errors->has('bpkd'))
                                    <span class="help-block">{{$errors->first('bpkd')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('badan_kredit') ? 'has-error' : ''}} ">
                                    <label for="badan_kredit">
                                        <h5>e. Badan-Badan Kredit</h5>
                                    </label>
                                    <input name="badan_kredit" type="text" class="form-control" id="badan_kredit"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->badan_kredit}}">
                                    @if ($errors->has('badan_kredit'))
                                    <span class="help-block">{{$errors->first('badan_kredit')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kop_produksi') ? 'has-error' : ''}} ">
                                    <label for="kop_produksi">
                                        <h5>f. Koperasi Produksi </h5>
                                    </label>
                                    <input name="kop_produksi" type="text" class="form-control" id="kop_produksi"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->kop_produksi}}">
                                    @if ($errors->has('kop_produksi'))
                                    <span class="help-block">{{$errors->first('kop_produksi')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kop_konsumsi') ? 'has-error' : ''}} ">
                                    <label for="kop_konsumsi">
                                        <h5>g. Koperasi Konsumsi</h5>
                                    </label>
                                    <input name="kop_konsumsi" type="text" class="form-control" id="kop_konsumsi"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->kop_konsumsi}}">
                                    @if ($errors->has('kop_konsumsi'))
                                    <span class="help-block">{{$errors->first('kop_konsumsi')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kop_lain') ? 'has-error' : ''}} ">
                                    <label for="kop_lain">
                                        <h5>h. Koperasi Lainnya</h5>
                                    </label>
                                    <input name="kop_lain" type="text" class="form-control" id="kop_lain"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->kop_lain}}">
                                    @if ($errors->has('kop_lain'))
                                    <span class="help-block">{{$errors->first('kop_lain')}}</span>
                                    @endif
                                </div>
                                <label for="">9.2. Jumlah Pasar Selapan/Umum :</label>
                                <div class="form-group {{$errors->has('pasar_umum') ? 'has-error' : ''}} ">
                                    <label for="pasar_umum">
                                        <h5>a. Umum</h5>
                                    </label>
                                    <input name="pasar_umum" type="text" class="form-control" id="pasar_umum"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->pasar_umum}}">
                                    @if ($errors->has('pasar_umum'))
                                    <span class="help-block">{{$errors->first('pasar_umum')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('pasar_ikan') ? 'has-error' : ''}} ">
                                    <label for="pasar_ikan">
                                        <h5>b. Ikan</h5>
                                    </label>
                                    <input name="pasar_ikan" type="text" class="form-control" id="pasar_ikan"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->pasar_ikan}}">
                                    @if ($errors->has('pasar_ikan'))
                                    <span class="help-block">{{$errors->first('pasar_ikan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('pasar_hewan') ? 'has-error' : ''}} ">
                                    <label for="pasar_hewan">
                                        <h5>c. Hewan</h5>
                                    </label>
                                    <input name="pasar_hewan" type="text" class="form-control" id="pasar_hewan"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->pasar_hewan}}">
                                    @if ($errors->has('pasar_hewan'))
                                    <span class="help-block">{{$errors->first('pasar_hewan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('pasar_bangunan_permanen') ? 'has-error' : ''}} ">
                                    <label for="pasar_bangunan_permanen"> 9.3. Pasar Bangunan Permanen/Semi Permanen
                                    </label>
                                    <input name="pasar_bangunan_permanen" type="text" class="form-control"
                                        id="pasar_bangunan_permanen" aria-describedby="" placeholder="Buah"
                                        value="{{$perekonomian->pasar_bangunan_permanen}}">
                                    @if ($errors->has('pasar_bangunan_permanen'))
                                    <span class="help-block">{{$errors->first('pasar_bangunan_permanen')}}</span>
                                    @endif
                                </div>
                                <div
                                    class="form-group {{$errors->has('pasar_tanpa_bangunan_permanen') ? 'has-error' : ''}} ">
                                    <label for="pasar_tanpa_bangunan_permanen">9.4. Pasar tanpa bangunan semi
                                        permanen</label>
                                    <input name="pasar_tanpa_bangunan_permanen" type="text" class="form-control"
                                        id="pasar_tanpa_bangunan_permanen" aria-describedby="" placeholder="Buah"
                                        value="{{$perekonomian->pasar_tanpa_bangunan_permanen}}">
                                    @if ($errors->has('pasar_tanpa_bangunan_permanen'))
                                    <span class="help-block">{{$errors->first('pasar_tanpa_bangunan_permanen')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jumlah_toko') ? 'has-error' : ''}} ">
                                    <label for="jumlah_toko">9.5. Jumlah toko/kios/warung</label>
                                    <input name="jumlah_toko" type="text" class="form-control" id="jumlah_toko"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->jumlah_toko}}">
                                    @if ($errors->has('jumlah_toko'))
                                    <span class="help-block">{{$errors->first('jumlah_toko')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('bank') ? 'has-error' : ''}} ">
                                    <label for="bank">9.6. Bank</label>
                                    <input name="bank" type="text" class="form-control" id="bank" aria-describedby=""
                                        placeholder="Buah" value="{{$perekonomian->bank}}">
                                    @if ($errors->has('bank'))
                                    <span class="help-block">{{$errors->first('bank')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jumlah_lumbung_desa') ? 'has-error' : ''}} ">
                                    <label for="jumlah_lumbung_desa">9.7. Jumlah Lumbung Desa</label>
                                    <input name="jumlah_lumbung_desa" type="text" class="form-control"
                                        id="jumlah_lumbung_desa" aria-describedby="" placeholder="Buah"
                                        value="{{$perekonomian->jumlah_lumbung_desa}}">
                                    @if ($errors->has('jumlah_lumbung_desa'))
                                    <span class="help-block">{{$errors->first('jumlah_lumbung_desa')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('stasiun_udara') ? 'has-error' : ''}} ">
                                    <label for="stasiun_udara">9.8. Stasiun Kapal Udara</label>
                                    <input name="stasiun_udara" type="text" class="form-control" id="stasiun_udara"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->stasiun_udara}}">
                                    @if ($errors->has('stasiun_udara'))
                                    <span class="help-block">{{$errors->first('stasiun_udara')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('stasiun_laut') ? 'has-error' : ''}} ">
                                    <label for="stasiun_laut">9.9. Stasiun Kapal Laut </label>
                                    <input name="stasiun_laut" type="text" class="form-control" id="stasiun_laut"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->stasiun_laut}}">
                                    @if ($errors->has('stasiun_laut'))
                                    <span class="help-block">{{$errors->first('stasiun_laut')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('stasiun_kereta') ? 'has-error' : ''}} ">
                                    <label for="stasiun_kereta">9.10. Stasiun Kereta Api</label>
                                    <input name="stasiun_kereta" type="text" class="form-control" id="stasiun_kereta"
                                        aria-describedby="" placeholder="Buah"
                                        value="{{$perekonomian->stasiun_kereta}}">
                                    @if ($errors->has('stasiun_kereta'))
                                    <span class="help-block">{{$errors->first('stasiun_kereta')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('stasiun_bis') ? 'has-error' : ''}} ">
                                    <label for="stasiun_bis">9.11. Stasiun Bis </label>
                                    <input name="stasiun_bis" type="text" class="form-control" id="stasiun_bis"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->stasiun_bis}}">
                                    @if ($errors->has('stasiun_bis'))
                                    <span class="help-block">{{$errors->first('stasiun_bis')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('stasiun_oplet') ? 'has-error' : ''}} ">
                                    <label for="stasiun_oplet">9.12. Stasiun Oplet/Bemo/Taksi</label>
                                    <input name="stasiun_oplet" type="text" class="form-control" id="stasiun_oplet"
                                        aria-describedby="" placeholder="Buah" value="{{$perekonomian->stasiun_oplet}}">
                                    @if ($errors->has('stasiun_oplet'))
                                    <span class="help-block">{{$errors->first('stasiun_oplet')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jumlah_telp_umum') ? 'has-error' : ''}} ">
                                    <label for="jumlah_telp_umum">9.13. Jumlah Telepon Umum</label>
                                    <input name="jumlah_telp_umum" type="text" class="form-control"
                                        id="jumlah_telp_umum" aria-describedby="" placeholder="Buah"
                                        value="{{$perekonomian->jumlah_telp_umum}}">
                                    @if ($errors->has('jumlah_telp_umum'))
                                    <span class="help-block">{{$errors->first('jumlah_telp_umum')}}</span>
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