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
                            <h3 class="panel-title">Jumlah Perusahaan / Usaha</h3>

                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/statis/jumlahusaha/{{$jumlahusaha->id}}/update">

                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$jumlahusaha->tanggal}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <label for=""> 11.1 Industri </label>
                                <div class="form-group row {{$errors->has('industri_besar') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="industri_besar">
                                            <h5>a. Besar dan Sedang </h5>
                                        </label>
                                        <input name="industri_besar" type="text" class="form-control"
                                            id="industri_besar" aria-describedby="" placeholder="Buah"
                                            value="{{$jumlahusaha->industri_besar}}">
                                        @if ($errors->has('industri_besar'))
                                        <span class="help-block">{{$errors->first('industri_besar')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="industri_besar_tk">
                                            <h5>Tenaga Kerja</h5>
                                        </label>
                                        <input name="industri_besar_tk" type="text" class="form-control"
                                            id="industri_besar_tk" aria-describedby="" placeholder=""
                                            value="{{$jumlahusaha->industri_besar_tk}}">
                                        @if ($errors->has('industri_besar_tk'))
                                        <span class="help-block">{{$errors->first('industri_besar_tk')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row {{$errors->has('industri_kecil') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="industri_kecil">
                                            <h5>b. Kecil</h5>
                                        </label>
                                        <input name="industri_kecil" type="text" class="form-control"
                                            id="industri_kecil" aria-describedby="" placeholder="Buah"
                                            value="{{$jumlahusaha->industri_kecil}}">
                                        @if ($errors->has('industri_kecil'))
                                        <span class="help-block">{{$errors->first('industri_kecil')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="industri_kecil_tk">
                                            <h5>Tenaga Kerja</h5>
                                        </label>
                                        <input name="industri_kecil_tk" type="text" class="form-control"
                                            id="industri_kecil_tk" aria-describedby="" placeholder=""
                                            value="{{$jumlahusaha->industri_kecil_tk}}">
                                        @if ($errors->has('industri_kecil_tk'))
                                        <span class="help-block">{{$errors->first('industri_kecil_tk')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row {{$errors->has('industri_rtangga') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="industri_rtangga">
                                            <h5>c. Rumah Tangga</h5>
                                        </label>
                                        <input name="industri_rtangga" type="text" class="form-control"
                                            id="industri_rtangga" aria-describedby="" placeholder="Buah"
                                            value="{{$jumlahusaha->industri_rtangga}}">
                                        @if ($errors->has('industri_rtangga'))
                                        <span class="help-block">{{$errors->first('industri_rtangga')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="industri_rtangga_tk">
                                            <h5>Tenaga Kerja</h5>
                                        </label>
                                        <input name="industri_rtangga_tk" type="text" class="form-control"
                                            id="industri_rtangga_tk" aria-describedby="" placeholder=""
                                            value="{{$jumlahusaha->industri_rtangga_tk}}">
                                        @if ($errors->has('industri_rtangga_tk'))
                                        <span class="help-block">{{$errors->first('industri_rtangga_tk')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row {{$errors->has('hotel') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="hotel">
                                            <h5><strong>11.2. Perhotelan/Losmen/Penginapan</strong></h5>
                                        </label>
                                        <input name="hotel" type="text" class="form-control" id="hotel"
                                            aria-describedby="" placeholder="Buah" value="{{$jumlahusaha->hotel}}">
                                        @if ($errors->has('hotel'))
                                        <span class="help-block">{{$errors->first('hotel')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="hotel_tk">
                                            <h5>Tenaga Kerja</h5>
                                        </label>
                                        <input name="hotel_tk" type="text" class="form-control" id="hotel_tk"
                                            aria-describedby="" placeholder="" value="{{$jumlahusaha->hotel_tk}}">
                                        @if ($errors->has('hotel_tk'))
                                        <span class="help-block">{{$errors->first('hotel_tk')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row {{$errors->has('rm_makan') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="rm_makan">
                                            <h5><strong>11.3. Rumah Makan/Warung Makan</strong></h5>
                                        </label>
                                        <input name="rm_makan" type="text" class="form-control" id="rm_makan"
                                            aria-describedby="" placeholder="Buah" value="{{$jumlahusaha->rm_makan}}">
                                        @if ($errors->has('rm_makan'))
                                        <span class="help-block">{{$errors->first('rm_makan')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="rm_makan_tk">
                                            <h5>Tenaga Kerja</h5>
                                        </label>
                                        <input name="rm_makan_tk" type="text" class="form-control" id="rm_makan_tk"
                                            aria-describedby="" placeholder="" value="{{$jumlahusaha->rm_makan_tk}}">
                                        @if ($errors->has('rm_makan_tk'))
                                        <span class="help-block">{{$errors->first('rm_makan_tk')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{$errors->has('perdagangan') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="perdagangan">
                                            <h5><strong>11.4. Perdagangan</strong></h5>
                                        </label>
                                        <input name="perdagangan" type="text" class="form-control" id="perdagangan"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$jumlahusaha->perdagangan}}">
                                        @if ($errors->has('perdagangan'))
                                        <span class="help-block">{{$errors->first('perdagangan')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="perdagangan_tk">
                                            <h5>Tenaga Kerja</h5>
                                        </label>
                                        <input name="perdagangan_tk" type="text" class="form-control"
                                            id="perdagangan_tk" aria-describedby="" placeholder=""
                                            value="{{$jumlahusaha->perdagangan_tk}}">
                                        @if ($errors->has('perdagangan_tk'))
                                        <span class="help-block">{{$errors->first('perdagangan_tk')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{$errors->has('angkutan') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="angkutan">
                                            <h5><strong>11.5. Angkutan</strong></h5>
                                        </label>
                                        <input name="angkutan" type="text" class="form-control" id="angkutan"
                                            aria-describedby="" placeholder="Buah" value="{{$jumlahusaha->angkutan}}">
                                        @if ($errors->has('angkutan'))
                                        <span class="help-block">{{$errors->first('angkutan')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="angkutan_tk">
                                            <h5>Tenaga Kerja</h5>
                                        </label>
                                        <input name="angkutan_tk" type="text" class="form-control" id="angkutan_tk"
                                            aria-describedby="" placeholder="" value="{{$jumlahusaha->angkutan_tk}}">
                                        @if ($errors->has('angkutan_tk'))
                                        <span class="help-block">{{$errors->first('angkutan_tk')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{$errors->has('lain') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="lain">
                                            <h5><strong>11.6. Lain-lain</strong></h5>
                                        </label>
                                        <input name="lain" type="text" class="form-control" id="lain"
                                            aria-describedby="" placeholder="Buah" value="{{$jumlahusaha->lain}}">
                                        @if ($errors->has('lain'))
                                        <span class="help-block">{{$errors->first('lain')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lain_tk">
                                            <h5>Tenaga Kerja</h5>
                                        </label>
                                        <input name="lain_tk" type="text" class="form-control" id="lain_tk"
                                            aria-describedby="" placeholder="" value="{{$jumlahusaha->lain_tk}}">
                                        @if ($errors->has('lain_tk'))
                                        <span class="help-block">{{$errors->first('lain_tk')}}</span>
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