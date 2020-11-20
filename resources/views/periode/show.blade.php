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
                            <h3 class="panel-title">Data Periode</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/periode/{{$periode->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal_mulai') ? 'has-error' : ''}} ">
                                            <label for="tanggal_mulai">Tanggal Mulai</label>
                                            <input name="tanggal_mulai" type="date" class="form-control"
                                                id="tanggal_mulai" aria-describedby="" placeholder=""
                                                value="{{old('tanggal_mulai') ?? $periode->tanggal_mulai}}" readonly>
                                            @if ($errors->has('tanggal_mulai'))
                                            <span class="help-block">{{$errors->first('tanggal_mulai')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal_selesai') ? 'has-error' : ''}} ">
                                            <label for="tanggal_selesai">Tanggal Selesai</label>
                                            <input name="tanggal_selesai" type="date" class="form-control"
                                                id="tanggal_selesai" aria-describedby="" placeholder=""
                                                value="{{old('tanggal_selesai')?? $periode->tanggal_selesai}}" readonly>
                                            @if ($errors->has('tanggal_selesai'))
                                            <span class="help-block">{{$errors->first('tanggal_selesai')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group {{$errors->has('semester') ? 'has-error' : ''}} ">
                                            <label for="semester">Semester</label>
                                            <input name="semester" type="text" class="form-control" id="semester"
                                                aria-describedby="" placeholder=""
                                                value="{{old('semester')?? $periode->semester}}" readonly>
                                            @if ($errors->has('semester'))
                                            <span class="help-block">{{$errors->first('semester')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group {{$errors->has('periode') ? 'has-error' : ''}} ">
                                            <label for="periode">Periode</label>
                                            <input name="periode" type="text" class="form-control" id="periode"
                                                aria-describedby="" placeholder=""
                                                value="{{old('periode')?? $periode->periode}}" readonly>
                                            @if ($errors->has('periode'))
                                            <span class="help-block">{{$errors->first('periode')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
                            </form>

                            <a href="/periode/{{$periode->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/periode/{{$periode->id}}/destroy" class="btn btn-danger btn-sm"
                                onclick="return confirm('Data akan dihapus?')">Delete</a>
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