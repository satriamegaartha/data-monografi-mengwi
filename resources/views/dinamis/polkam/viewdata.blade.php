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
                            <h3 class="panel-title">Polkam</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/dinamis/polkam/{{$polkam->id}}/update">
                                <fieldset disabled="disabled">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                                <label for="tanggal">Tanggal</label>
                                                <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                    aria-describedby="" placeholder="" value="{{$polkam->tanggal}}">
                                                @if ($errors->has('tanggal'))
                                                <span class="help-block">{{$errors->first('tanggal')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">
                                        <h5><strong>H. BIDANG POLKAM</strong></h5>
                                    </label>

                                    <br>
                                    <label for="">
                                        <h5><strong>1. Kejadian Kriminal</strong></h5>
                                    </label>
                                    <br>
                                    <label for="">
                                        <h5><strong>Pencurian</strong></h5>
                                    </label>
                                    <div
                                        class="form-group row {{$errors->has('pencurian_banyak') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="pencurian_banyak">
                                                <h5>Banyak Kejadian</h5>
                                            </label>
                                            <input name="pencurian_banyak" type="text" class="form-control"
                                                id="pencurian_banyak" aria-describedby=""
                                                value="{{$polkam->pencurian_banyak}}">
                                            @if ($errors->has('pencurian_banyak'))
                                            <span class="help-block">{{$errors->first('pencurian_banyak')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="pencurian_kerugian">
                                                <h5>Kerugian</h5>
                                            </label>
                                            <input name="pencurian_kerugian" type="text" class="form-control"
                                                id="pencurian_kerugian" aria-describedby=""
                                                value="{{$polkam->pencurian_kerugian}}">
                                            @if ($errors->has('pencurian_kerugian'))
                                            <span class="help-block">{{$errors->first('pencurian_kerugian')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <label for="">
                                        <h5><strong>Perampokan</strong></h5>
                                    </label>
                                    <div
                                        class="form-group row {{$errors->has('perampokan_banyak') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="perampokan_banyak">
                                                <h5>Banyak Kejadian</h5>
                                            </label>
                                            <input name="perampokan_banyak" type="text" class="form-control"
                                                id="perampokan_banyak" aria-describedby=""
                                                value="{{$polkam->perampokan_banyak}}">
                                            @if ($errors->has('perampokan_banyak'))
                                            <span class="help-block">{{$errors->first('perampokan_banyak')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="perampokan_kerugian">
                                                <h5>Kerugian</h5>
                                            </label>
                                            <input name="perampokan_kerugian" type="text" class="form-control"
                                                id="perampokan_kerugian" aria-describedby=""
                                                value="{{$polkam->perampokan_kerugian}}">
                                            @if ($errors->has('perampokan_kerugian'))
                                            <span class="help-block">{{$errors->first('perampokan_kerugian')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <label for="">
                                        <h5><strong>Pembunuhan</strong></h5>
                                    </label>
                                    <div
                                        class="form-group row {{$errors->has('pembunuhan_banyak') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="pembunuhan_banyak">
                                                <h5>Banyak Kejadian</h5>
                                            </label>
                                            <input name="pembunuhan_banyak" type="text" class="form-control"
                                                id="pembunuhan_banyak" aria-describedby=""
                                                value="{{$polkam->pembunuhan_banyak}}">
                                            @if ($errors->has('pembunuhan_banyak'))
                                            <span class="help-block">{{$errors->first('pembunuhan_banyak')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="pembunuhan_kerugian">
                                                <h5>Kerugian</h5>
                                            </label>
                                            <input name="pembunuhan_kerugian" type="text" class="form-control"
                                                id="pembunuhan_kerugian" aria-describedby=""
                                                value="{{$polkam->pembunuhan_kerugian}}">
                                            @if ($errors->has('pembunuhan_kerugian'))
                                            <span class="help-block">{{$errors->first('pembunuhan_kerugian')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <label for="">
                                        <h5><strong>Pemerkosaan</strong></h5>
                                    </label>
                                    <div
                                        class="form-group row {{$errors->has('pemerkosaan_banyak') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="pemerkosaan_banyak">
                                                <h5>Banyak Kejadian</h5>
                                            </label>
                                            <input name="pemerkosaan_banyak" type="text" class="form-control"
                                                id="pemerkosaan_banyak" aria-describedby=""
                                                value="{{$polkam->pemerkosaan_banyak}}">
                                            @if ($errors->has('pemerkosaan_banyak'))
                                            <span class="help-block">{{$errors->first('pemerkosaan_banyak')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="pemerkosaan_kerugian">
                                                <h5>Kerugian</h5>
                                            </label>
                                            <input name="pemerkosaan_kerugian" type="text" class="form-control"
                                                id="pemerkosaan_kerugian" aria-describedby=""
                                                value="{{$polkam->pemerkosaan_kerugian}}">
                                            @if ($errors->has('pemerkosaan_kerugian'))
                                            <span class="help-block">{{$errors->first('pemerkosaan_kerugian')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <label for="">
                                        <h5><strong>Pelanggaran Narkotika/Obat Terlarang</strong></h5>
                                    </label>
                                    <div class="form-group row {{$errors->has('narkoba_banyak') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="narkoba_banyak">
                                                <h5>Banyak Kejadian</h5>
                                            </label>
                                            <input name="narkoba_banyak" type="text" class="form-control"
                                                id="narkoba_banyak" aria-describedby=""
                                                value="{{$polkam->narkoba_banyak}}">
                                            @if ($errors->has('narkoba_banyak'))
                                            <span class="help-block">{{$errors->first('narkoba_banyak')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="narkoba_kerugian">
                                                <h5>Kerugian</h5>
                                            </label>
                                            <input name="narkoba_kerugian" type="text" class="form-control"
                                                id="narkoba_kerugian" aria-describedby=""
                                                value="{{$polkam->narkoba_kerugian}}">
                                            @if ($errors->has('narkoba_kerugian'))
                                            <span class="help-block">{{$errors->first('narkoba_kerugian')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <label for="">
                                        <h5><strong>Lain-lain</strong></h5>
                                    </label>
                                    <div class="form-group row {{$errors->has('lainnya_banyak') ? 'has-error' : ''}} ">
                                        <div class="col-sm-6">
                                            <label for="lainnya_banyak">
                                                <h5>Banyak Kejadian</h5>
                                            </label>
                                            <input name="lainnya_banyak" type="text" class="form-control"
                                                id="lainnya_banyak" aria-describedby=""
                                                value="{{$polkam->lainnya_banyak}}">
                                            @if ($errors->has('lainnya_banyak'))
                                            <span class="help-block">{{$errors->first('lainnya_banyak')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="lainnya_kerugian">
                                                <h5>Kerugian</h5>
                                            </label>
                                            <input name="lainnya_kerugian" type="text" class="form-control"
                                                id="lainnya_kerugian" aria-describedby=""
                                                value="{{$polkam->lainnya_kerugian}}">
                                            @if ($errors->has('lainnya_kerugian'))
                                            <span class="help-block">{{$errors->first('lainnya_kerugian')}}</span>
                                            @endif
                                        </div>
                                    </div>




                                    <label for="">
                                        <h5><strong>2. Pembinaan Kerentraman dan Pertahan Sipil</strong></h5>
                                    </label>
                                    <div class="form-group row {{$errors->has('jumlah_hansip') ? 'has-error' : ''}} ">
                                        <div class="col-sm-12">
                                            <label for="jumlah_hansip">
                                                <h5>2.1. Jumlah Anggota Hansip se Kecamatan</h5>
                                            </label>
                                            <input name="jumlah_hansip" type="text" class="form-control"
                                                id="jumlah_hansip" aria-describedby=""
                                                value="{{$polkam->jumlah_hansip}}">
                                            @if ($errors->has('jumlah_hansip'))
                                            <span class="help-block">{{$errors->first('jumlah_hansip')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row {{$errors->has('jumlah_menwa') ? 'has-error' : ''}} ">
                                        <div class="col-sm-12">
                                            <label for="jumlah_menwa">
                                                <h5>2.2. Jumlah Anggota Menwa se Kecamatan</h5>
                                            </label>
                                            <input name="jumlah_menwa" type="text" class="form-control"
                                                id="jumlah_menwa" aria-describedby="" value="{{$polkam->jumlah_menwa}}">
                                            @if ($errors->has('jumlah_menwa'))
                                            <span class="help-block">{{$errors->first('jumlah_menwa')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row {{$errors->has('jumlah_kemra') ? 'has-error' : ''}} ">
                                        <div class="col-sm-12">
                                            <label for="jumlah_kemra">
                                                <h5>2.3 Jumlah Anggota Kemra se Kecmatan</h5>
                                            </label>
                                            <input name="jumlah_kemra" type="text" class="form-control"
                                                id="jumlah_kemra" aria-describedby="" value="{{$polkam->jumlah_kemra}}">
                                            @if ($errors->has('jumlah_kemra'))
                                            <span class="help-block">{{$errors->first('jumlah_kemra')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div
                                        class="form-group row {{$errors->has('jumlah_pos_kamling') ? 'has-error' : ''}} ">
                                        <div class="col-sm-12">
                                            <label for="jumlah_pos_kamling">
                                                <h5>2.4. Jumlah Pos Kambling/Pos Ronda</h5>
                                            </label>
                                            <input name="jumlah_pos_kamling" type="text" class="form-control"
                                                id="jumlah_pos_kamling" aria-describedby=""
                                                value="{{$polkam->jumlah_pos_kamling}}">
                                            @if ($errors->has('jumlah_pos_kamling'))
                                            <span class="help-block">{{$errors->first('jumlah_pos_kamling')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                            <a href="/dinamis/polkam/{{$polkam->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
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