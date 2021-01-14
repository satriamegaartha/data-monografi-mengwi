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
                            <h3 class="panel-title">Perikanan</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/dinamis/perikanan/{{$perikanan->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$perikanan->tanggal}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <label for="">
                                    <h5><strong>F. PERIKANAN</strong></h5>
                                </label>

                                <br>
                                <label for="">
                                    <h5><strong>Bandeng</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('bandeng_luas') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="bandeng_luas">
                                            <h5>Luas</h5>
                                        </label>
                                        <input name="bandeng_luas" type="text" class="form-control" id="bandeng_luas"
                                            aria-describedby="" value="{{$perikanan->bandeng_luas}}">
                                        @if ($errors->has('bandeng_luas'))
                                        <span class="help-block">{{$errors->first('bandeng_luas')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="bandeng_hasil">
                                            <h5>Hasil</h5>
                                        </label>
                                        <input name="bandeng_hasil" type="text" class="form-control" id="bandeng_hasil"
                                            aria-describedby="" value="{{$perikanan->bandeng_hasil}}">
                                        @if ($errors->has('bandeng_hasil'))
                                        <span class="help-block">{{$errors->first('bandeng_hasil')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Udang</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('udang_luas') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="udang_luas">
                                            <h5>Luas</h5>
                                        </label>
                                        <input name="udang_luas" type="text" class="form-control" id="udang_luas"
                                            aria-describedby="" value="{{$perikanan->udang_luas}}">
                                        @if ($errors->has('udang_luas'))
                                        <span class="help-block">{{$errors->first('udang_luas')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="udang_hasil">
                                            <h5>Hasil</h5>
                                        </label>
                                        <input name="udang_hasil" type="text" class="form-control" id="udang_hasil"
                                            aria-describedby="" value="{{$perikanan->udang_hasil}}">
                                        @if ($errors->has('udang_hasil'))
                                        <span class="help-block">{{$errors->first('udang_hasil')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Buaya</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('buaya_luas') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="buaya_luas">
                                            <h5>Luas</h5>
                                        </label>
                                        <input name="buaya_luas" type="text" class="form-control" id="buaya_luas"
                                            aria-describedby="" value="{{$perikanan->buaya_luas}}">
                                        @if ($errors->has('buaya_luas'))
                                        <span class="help-block">{{$errors->first('buaya_luas')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="buaya_hasil">
                                            <h5>Hasil</h5>
                                        </label>
                                        <input name="buaya_hasil" type="text" class="form-control" id="buaya_hasil"
                                            aria-describedby="" value="{{$perikanan->buaya_hasil}}">
                                        @if ($errors->has('buaya_hasil'))
                                        <span class="help-block">{{$errors->first('buaya_hasil')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <label for="">
                                    <h5><strong>Kura-Kura</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('kurakura_luas') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="kurakura_luas">
                                            <h5>Luas</h5>
                                        </label>
                                        <input name="kurakura_luas" type="text" class="form-control" id="kurakura_luas"
                                            aria-describedby="" value="{{$perikanan->kurakura_luas}}">
                                        @if ($errors->has('kurakura_luas'))
                                        <span class="help-block">{{$errors->first('kurakura_luas')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="kurakura_hasil">
                                            <h5>Hasil</h5>
                                        </label>
                                        <input name="kurakura_hasil" type="text" class="form-control"
                                            id="kurakura_hasil" aria-describedby=""
                                            value="{{$perikanan->kurakura_hasil}}">
                                        @if ($errors->has('kurakura_hasil'))
                                        <span class="help-block">{{$errors->first('kurakura_hasil')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>Lain-Lain</strong></h5>
                                </label>
                                <div class="form-group row {{$errors->has('lainnya_luas') ? 'has-error' : ''}} ">
                                    <div class="col-sm-6">
                                        <label for="lainnya_luas">
                                            <h5>Luas</h5>
                                        </label>
                                        <input name="lainnya_luas" type="text" class="form-control" id="lainnya_luas"
                                            aria-describedby="" value="{{$perikanan->lainnya_luas}}">
                                        @if ($errors->has('lainnya_luas'))
                                        <span class="help-block">{{$errors->first('lainnya_luas')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lainnya_hasil">
                                            <h5>Hasil</h5>
                                        </label>
                                        <input name="lainnya_hasil" type="text" class="form-control" id="lainnya_hasil"
                                            aria-describedby="" value="{{$perikanan->lainnya_hasil}}">
                                        @if ($errors->has('lainnya_hasil'))
                                        <span class="help-block">{{$errors->first('lainnya_hasil')}}</span>
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