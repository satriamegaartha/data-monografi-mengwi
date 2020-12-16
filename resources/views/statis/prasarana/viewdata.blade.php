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
                            <h3 class="panel-title">Data Pemerintahan Desa/Kelurahan</h3>

                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/statis/prasarana/{{$prasarana->id}}/update">
                                <fieldset disabled>


                                    @csrf

                                    <div class="form-group {{$errors->has('balai_desa') ? 'has-error' : ''}} ">
                                        <label for="balai_desa">4.1. Balai Desa/Kelurahan (Buah)</label>
                                        <input name="balai_desa" type="text" class="form-control" id="balai_desa"
                                            aria-describedby="" placeholder="Buah" value="{{$prasarana->balai_desa}}">
                                        @if ($errors->has('balai_desa'))
                                        <span class="help-block">{{$errors->first('balai_desa')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('kantor_desa') ? 'has-error' : ''}} ">
                                        <label for="kantor_desa">4.2. Kantor Desa/Kelurahan (Buah)</label>
                                        <input name="kantor_desa" type="text" class="form-control" id="kantor_desa"
                                            aria-describedby="" placeholder="Buah" value="{{$prasarana->kantor_desa}}">
                                        @if ($errors->has('kantor_desa'))
                                        <span class="help-block">{{$errors->first('kantor_desa')}}</span>
                                        @endif
                                    </div>
                                    <label>4.3. Banyaknya Bengkok Perangkat Desa : </label><br>
                                    <div class="form-group {{$errors->has('bengkok_sawah') ? 'has-error' : ''}} ">
                                        <label for="bengkok_sawah">
                                            <h5>a. Tanah Sawah (Ha)</h5>
                                        </label>
                                        <input name="bengkok_sawah" type="text" class="form-control" id="bengkok_sawah"
                                            aria-describedby="" placeholder="Ha" value="{{$prasarana->bengkok_sawah}}">
                                        @if ($errors->has('bengkok_sawah'))
                                        <span class="help-block">{{$errors->first('bengkok_sawah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('bengkok_kering') ? 'has-error' : ''}} ">
                                        <label for="bengkok_kering">
                                            <h5>b. Tanah Kering (Ha)</h5>
                                        </label>
                                        <input name="bengkok_kering" type="text" class="form-control"
                                            id="bengkok_kering" aria-describedby="" placeholder="Ha"
                                            value="{{$prasarana->bengkok_kering}}">
                                        @if ($errors->has('bengkok_kering'))
                                        <span class="help-block">{{$errors->first('bengkok_kering')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('bengkok_tambak') ? 'has-error' : ''}} ">
                                        <label for="bengkok_tambak">
                                            <h5>c. Tambak/Kolam (Ha)</h5>
                                        </label>
                                        <input name="bengkok_tambak" type="text" class="form-control"
                                            id="bengkok_tambak" aria-describedby="" placeholder="Ha"
                                            value="{{$prasarana->bengkok_tambak}}">
                                        @if ($errors->has('bengkok_tambak'))
                                        <span class="help-block">{{$errors->first('bengkok_tambak')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('bengkok_lain') ? 'has-error' : ''}} ">
                                        <label for="bengkok_lain">
                                            <h5>d. Lain-lain (Ha)</h5>
                                        </label>
                                        <input name="bengkok_lain" type="text" class="form-control" id="bengkok_lain"
                                            aria-describedby="" placeholder="Ha" value="{{$prasarana->bengkok_lain}}">
                                        @if ($errors->has('bengkok_lain'))
                                        <span class="help-block">{{$errors->first('bengkok_lain')}}</span>
                                        @endif
                                    </div>
                                    <label>4.4. Tanah Kas Desa/Areal Lainnya untuk Kepentingan Desa/Kelurahan
                                    </label><br>
                                    <div class="form-group {{$errors->has('kas_sawah') ? 'has-error' : ''}} ">
                                        <label for="kas_sawah">
                                            <h5>a. Tanah Sawah (Ha)</h5>
                                        </label>
                                        <input name="kas_sawah" type="text" class="form-control" id="kas_sawah"
                                            aria-describedby="" placeholder="Ha" value="{{$prasarana->kas_sawah}}">
                                        @if ($errors->has('kas_sawah'))
                                        <span class="help-block">{{$errors->first('kas_sawah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('kas_kering') ? 'has-error' : ''}} ">
                                        <label for="kas_kering">
                                            <h5>b. Tanah Kering (Ha)</h5>
                                        </label>
                                        <input name="kas_kering" type="text" class="form-control" id="kas_kering"
                                            aria-describedby="" placeholder="Ha" value="{{$prasarana->kas_kering}}">
                                        @if ($errors->has('kas_kering'))
                                        <span class="help-block">{{$errors->first('kas_kering')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('kas_tambak') ? 'has-error' : ''}} ">
                                        <label for="kas_tambak">
                                            <h5>c. Tambak/Kolam (Ha)</h5>
                                        </label>
                                        <input name="kas_tambak" type="text" class="form-control" id="kas_tambak"
                                            aria-describedby="" placeholder="Ha" value="{{$prasarana->kas_tambak}}">
                                        @if ($errors->has('kas_tambak'))
                                        <span class="help-block">{{$errors->first('kas_tambak')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('kas_rawa') ? 'has-error' : ''}} ">
                                        <label for="kas_rawa">
                                            <h5>d. Rawa-rawa (Ha)</h5>
                                        </label>
                                        <input name="kas_rawa" type="text" class="form-control" id="kas_rawa"
                                            aria-describedby="" placeholder="Ha" value="{{$prasarana->kas_rawa}}">
                                        @if ($errors->has('kas_rawa'))
                                        <span class="help-block">{{$errors->first('kas_rawa')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('kas_lain') ? 'has-error' : ''}} ">
                                        <label for="kas_lain">
                                            <h5>e. Lain-lain (Ha)</h5>
                                        </label>
                                        <input name="kas_lain" type="text" class="form-control" id="kas_lain"
                                            aria-describedby="" placeholder="Ha" value="{{$prasarana->kas_lain}}">
                                        @if ($errors->has('kas_lain'))
                                        <span class="help-block">{{$errors->first('kas_lain')}}</span>
                                        @endif
                                    </div>

                                </fieldset>
                            </form>
                            <a href="/statis/prasarana/{{$prasarana->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

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