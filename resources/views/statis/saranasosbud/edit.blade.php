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
                            <h3 class="panel-title">Data Sarana Sosial/Budaya</h3>

                        </div>
                        <div class="panel-body">
                            <form method="POST" action="/statis/saranasosbud/{{$saranasosbud->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$saranasosbud->tanggal}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>



                                {{-- tk --}}
                                <div>
                                    <label for="">
                                        <h5><strong>11.1. Pendidikan</strong></h5>
                                    </label><br>

                                    <label for="">
                                        <h5><strong>11.1.1. TK</strong></h5>
                                    </label><br>
                                    <label for="">
                                        <h5><strong>a. TK Negeri</strong></h5>
                                    </label><br>
                                    <div class="form-group {{$errors->has('tkn_sekolah') ? 'has-error' : ''}} ">
                                        <label for="tkn_sekolah">
                                            <h5>- Jumlah Sekolah</h5>
                                        </label>
                                        <input name="tkn_sekolah" type="text" class="form-control" id="tkn_sekolah"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->tkn_sekolah}}">
                                        @if ($errors->has('tkn_sekolah'))
                                        <span class="help-block">{{$errors->first('tkn_sekolah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tkn_murid') ? 'has-error' : ''}} ">
                                        <label for="tkn_murid">
                                            <h5>- Jumlah Murid </h5>
                                        </label>
                                        <input name="tkn_murid" type="text" class="form-control" id="tkn_murid"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->tkn_murid}}">
                                        @if ($errors->has('tkn_murid'))
                                        <span class="help-block">{{$errors->first('tkn_murid')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tkn_guru') ? 'has-error' : ''}} ">
                                        <label for="tkn_guru">
                                            <h5>- Jumlah Guru/Pengajar</h5>
                                        </label>
                                        <input name="tkn_guru" type="text" class="form-control" id="tkn_guru"
                                            aria-describedby="" placeholder="Orang" value="{{$saranasosbud->tkn_guru}}">
                                        @if ($errors->has('tkn_guru'))
                                        <span class="help-block">{{$errors->first('tkn_guru')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tkn_prasarana') ? 'has-error' : ''}} ">
                                        <label for="tkn_prasarana">
                                            <h5>- Prasarana fisik</h5>
                                        </label>
                                        <input name="tkn_prasarana" type="text" class="form-control" id="tkn_prasarana"
                                            aria-describedby="" placeholder="Lokal"
                                            value="{{$saranasosbud->tkn_prasarana}}">
                                        @if ($errors->has('tkn_prasarana'))
                                        <span class="help-block">{{$errors->first('tkn_prasarana')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tkn_perpustakaan') ? 'has-error' : ''}} ">
                                        <label for="tkn_perpustakaan">
                                            <h5>- Perpustakaan</h5>
                                        </label>
                                        <input name="tkn_perpustakaan" type="text" class="form-control"
                                            id="tkn_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->tkn_perpustakaan}}">
                                        @if ($errors->has('tkn_perpustakaan'))
                                        <span class="help-block">{{$errors->first('tkn_perpustakaan')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <label for="">
                                    <h5><strong>b. TK Swasta Umum</strong></h5>
                                </label><br>
                                <div class="form-group {{$errors->has('tksu_sekolah') ? 'has-error' : ''}} ">
                                    <label for="tksu_sekolah">
                                        <h5>- Jumlah Sekolah</h5>
                                    </label>
                                    <input name="tksu_sekolah" type="text" class="form-control" id="tksu_sekolah"
                                        aria-describedby="" placeholder="Buah" value="{{$saranasosbud->tksu_sekolah}}">
                                    @if ($errors->has('tksu_sekolah'))
                                    <span class="help-block">{{$errors->first('tksu_sekolah')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tksu_murid') ? 'has-error' : ''}} ">
                                    <label for="tksu_murid">
                                        <h5>- Jumlah Murid </h5>
                                    </label>
                                    <input name="tksu_murid" type="text" class="form-control" id="tksu_murid"
                                        aria-describedby="" placeholder="Orang" value="{{$saranasosbud->tksu_murid}}">
                                    @if ($errors->has('tksu_murid'))
                                    <span class="help-block">{{$errors->first('tksu_murid')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tksu_guru') ? 'has-error' : ''}} ">
                                    <label for="tksu_guru">
                                        <h5>- Jumlah Guru/Pengajar</h5>
                                    </label>
                                    <input name="tksu_guru" type="text" class="form-control" id="tksu_guru"
                                        aria-describedby="" placeholder="Orang" value="{{$saranasosbud->tksu_guru}}">
                                    @if ($errors->has('tksu_guru'))
                                    <span class="help-block">{{$errors->first('tksu_guru')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tksu_prasarana') ? 'has-error' : ''}} ">
                                    <label for="tksu_prasarana">
                                        <h5>- Prasarana fisik</h5>
                                    </label>
                                    <input name="tksu_prasarana" type="text" class="form-control" id="tksu_prasarana"
                                        aria-describedby="" placeholder="Lokal"
                                        value="{{$saranasosbud->tksu_prasarana}}">
                                    @if ($errors->has('tksu_prasarana'))
                                    <span class="help-block">{{$errors->first('tksu_prasarana')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tksu_perpustakaan') ? 'has-error' : ''}} ">
                                    <label for="tksu_perpustakaan">
                                        <h5>- Perpustakaan</h5>
                                    </label>
                                    <input name="tksu_perpustakaan" type="text" class="form-control"
                                        id="tksu_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                        value="{{$saranasosbud->tksu_perpustakaan}}">
                                    @if ($errors->has('tksu_perpustakaan'))
                                    <span class="help-block">{{$errors->first('tksu_perpustakaan')}}</span>
                                    @endif
                                </div>
                                {{-- </div> --}}

                                {{-- sdn --}}
                                <div>

                                    <label for="">
                                        <h5><strong>11.1.2. Sekolah Dasar</strong></h5>
                                    </label><br>
                                    <label for="">
                                        <h5><strong>a. Sekolah Dasar Negeri</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('sdn_sekolah') ? 'has-error' : ''}} ">
                                        <label for="sdn_sekolah">
                                            <h5>- Jumlah Sekolah</h5>
                                        </label>
                                        <input name="sdn_sekolah" type="text" class="form-control" id="sdn_sekolah"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->sdn_sekolah}}">
                                        @if ($errors->has('sdn_sekolah'))
                                        <span class="help-block">{{$errors->first('sdn_sekolah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sdn_murid') ? 'has-error' : ''}} ">
                                        <label for="sdn_murid">
                                            <h5>- Jumlah Murid </h5>
                                        </label>
                                        <input name="sdn_murid" type="text" class="form-control" id="sdn_murid"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->sdn_murid}}">
                                        @if ($errors->has('sdn_murid'))
                                        <span class="help-block">{{$errors->first('sdn_murid')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sdn_guru') ? 'has-error' : ''}} ">
                                        <label for="sdn_guru">
                                            <h5>- Jumlah Guru/Pengajar</h5>
                                        </label>
                                        <input name="sdn_guru" type="text" class="form-control" id="sdn_guru"
                                            aria-describedby="" placeholder="Orang" value="{{$saranasosbud->sdn_guru}}">
                                        @if ($errors->has('sdn_guru'))
                                        <span class="help-block">{{$errors->first('sdn_guru')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sdn_prasarana') ? 'has-error' : ''}} ">
                                        <label for="sdn_prasarana">
                                            <h5>- Prasarana fisik</h5>
                                        </label>
                                        <input name="sdn_prasarana" type="text" class="form-control" id="sdn_prasarana"
                                            aria-describedby="" placeholder="Lokal"
                                            value="{{$saranasosbud->sdn_prasarana}}">
                                        @if ($errors->has('sdn_prasarana'))
                                        <span class="help-block">{{$errors->first('sdn_prasarana')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sdn_perpustakaan') ? 'has-error' : ''}} ">
                                        <label for="sdn_perpustakaan">
                                            <h5>- Perpustakaan</h5>
                                        </label>
                                        <input name="sdn_perpustakaan" type="text" class="form-control"
                                            id="sdn_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->sdn_perpustakaan}}">
                                        @if ($errors->has('sdn_perpustakaan'))
                                        <span class="help-block">{{$errors->first('sdn_perpustakaan')}}</span>
                                        @endif
                                    </div>

                                    <label for="">
                                        <h5><strong>b. Sekolah Dasar Swasta Umum</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('sdsu_sekolah') ? 'has-error' : ''}} ">
                                        <label for="sdsu_sekolah">
                                            <h5>- Jumlah Sekolah</h5>
                                        </label>
                                        <input name="sdsu_sekolah" type="text" class="form-control" id="sdsu_sekolah"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->sdsu_sekolah}}">
                                        @if ($errors->has('sdsu_sekolah'))
                                        <span class="help-block">{{$errors->first('sdsu_sekolah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sdsu_murid') ? 'has-error' : ''}} ">
                                        <label for="sdsu_murid">
                                            <h5>- Jumlah Murid </h5>
                                        </label>
                                        <input name="sdsu_murid" type="text" class="form-control" id="sdsu_murid"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->sdsu_murid}}">
                                        @if ($errors->has('sdsu_murid'))
                                        <span class="help-block">{{$errors->first('sdsu_murid')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sdsu_guru') ? 'has-error' : ''}} ">
                                        <label for="sdsu_guru">
                                            <h5>- Jumlah Guru/Pengajar</h5>
                                        </label>
                                        <input name="sdsu_guru" type="text" class="form-control" id="sdsu_guru"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->sdsu_guru}}">
                                        @if ($errors->has('sdsu_guru'))
                                        <span class="help-block">{{$errors->first('sdsu_guru')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sdsu_prasarana') ? 'has-error' : ''}} ">
                                        <label for="sdsu_prasarana">
                                            <h5>- Prasarana fisik</h5>
                                        </label>
                                        <input name="sdsu_prasarana" type="text" class="form-control"
                                            id="sdsu_prasarana" aria-describedby="" placeholder="Lokal"
                                            value="{{$saranasosbud->sdsu_prasarana}}">
                                        @if ($errors->has('sdsu_prasarana'))
                                        <span class="help-block">{{$errors->first('sdsu_prasarana')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sdsu_perpustakaan') ? 'has-error' : ''}} ">
                                        <label for="sdsu_perpustakaan">
                                            <h5>- Perpustakaan</h5>
                                        </label>
                                        <input name="sdsu_perpustakaan" type="text" class="form-control"
                                            id="sdsu_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->sdsu_perpustakaan}}">
                                        @if ($errors->has('sdsu_perpustakaan'))
                                        <span class="help-block">{{$errors->first('sdsu_perpustakaan')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- sltp smtp negeri --}}
                                <div>
                                    <label for="">
                                        <h5><strong>11.1.3. Sekolah Lanjutan Pertama (SLTP)</strong></h5>
                                    </label><br>
                                    <label for="">
                                        <h5><strong>a. SMTP Negeri</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('smtpn_sekolah') ? 'has-error' : ''}} ">
                                        <label for="smtpn_sekolah">
                                            <h5>- Jumlah Sekolah</h5>
                                        </label>
                                        <input name="smtpn_sekolah" type="text" class="form-control" id="smtpn_sekolah"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->smtpn_sekolah}}">
                                        @if ($errors->has('smtpn_sekolah'))
                                        <span class="help-block">{{$errors->first('smtpn_sekolah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtpn_murid') ? 'has-error' : ''}} ">
                                        <label for="smtpn_murid">
                                            <h5>- Jumlah Murid </h5>
                                        </label>
                                        <input name="smtpn_murid" type="text" class="form-control" id="smtpn_murid"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->smtpn_murid}}">
                                        @if ($errors->has('smtpn_murid'))
                                        <span class="help-block">{{$errors->first('smtpn_murid')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtpn_guru') ? 'has-error' : ''}} ">
                                        <label for="smtpn_guru">
                                            <h5>- Jumlah Guru/Pengajar</h5>
                                        </label>
                                        <input name="smtpn_guru" type="text" class="form-control" id="smtpn_guru"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->smtpn_guru}}">
                                        @if ($errors->has('smtpn_guru'))
                                        <span class="help-block">{{$errors->first('smtpn_guru')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtpn_prasarana') ? 'has-error' : ''}} ">
                                        <label for="smtpn_prasarana">
                                            <h5>- Prasarana fisik</h5>
                                        </label>
                                        <input name="smtpn_prasarana" type="text" class="form-control"
                                            id="smtpn_prasarana" aria-describedby="" placeholder="Lokal"
                                            value="{{$saranasosbud->smtpn_prasarana}}">
                                        @if ($errors->has('smtpn_prasarana'))
                                        <span class="help-block">{{$errors->first('smtpn_prasarana')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtpn_perpustakaan') ? 'has-error' : ''}} ">
                                        <label for="smtpn_perpustakaan">
                                            <h5>- Perpustakaan</h5>
                                        </label>
                                        <input name="smtpn_perpustakaan" type="text" class="form-control"
                                            id="smtpn_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->smtpn_perpustakaan}}">
                                        @if ($errors->has('smtpn_perpustakaan'))
                                        <span class="help-block">{{$errors->first('smtpn_perpustakaan')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- sltp smtp swasta umum--}}
                                <div>
                                    <label for="">
                                        <h5><strong>b. SMTP Swasta Umum </strong></h5>
                                    </label><br>
                                    <div class="form-group {{$errors->has('smtpsu_sekolah') ? 'has-error' : ''}} ">
                                        <label for="smtpsu_sekolah">
                                            <h5>- Jumlah Sekolah</h5>
                                        </label>
                                        <input name="smtpsu_sekolah" type="text" class="form-control"
                                            id="smtpsu_sekolah" aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->smtpsu_sekolah}}">
                                        @if ($errors->has('smtpsu_sekolah'))
                                        <span class="help-block">{{$errors->first('smtpsu_sekolah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtpsu_murid') ? 'has-error' : ''}} ">
                                        <label for="smtpsu_murid">
                                            <h5>- Jumlah Murid </h5>
                                        </label>
                                        <input name="smtpsu_murid" type="text" class="form-control" id="smtpsu_murid"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->smtpsu_murid}}">
                                        @if ($errors->has('smtpsu_murid'))
                                        <span class="help-block">{{$errors->first('smtpsu_murid')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtpsu_guru') ? 'has-error' : ''}} ">
                                        <label for="smtpsu_guru">
                                            <h5>- Jumlah Guru/Pengajar</h5>
                                        </label>
                                        <input name="smtpsu_guru" type="text" class="form-control" id="smtpsu_guru"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->smtpsu_guru}}">
                                        @if ($errors->has('smtpsu_guru'))
                                        <span class="help-block">{{$errors->first('smtpsu_guru')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtpsu_prasarana') ? 'has-error' : ''}} ">
                                        <label for="smtpsu_prasarana">
                                            <h5>- Prasarana fisik</h5>
                                        </label>
                                        <input name="smtpsu_prasarana" type="text" class="form-control"
                                            id="smtpsu_prasarana" aria-describedby="" placeholder="Lokal"
                                            value="{{$saranasosbud->smtpsu_prasarana}}">
                                        @if ($errors->has('smtpsu_prasarana'))
                                        <span class="help-block">{{$errors->first('smtpsu_prasarana')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtpsu_perpustakaan') ? 'has-error' : ''}} ">
                                        <label for="smtpsu_perpustakaan">
                                            <h5>- Perpustakaan</h5>
                                        </label>
                                        <input name="smtpsu_perpustakaan" type="text" class="form-control"
                                            id="smtpsu_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->smtpsu_perpustakaan}}">
                                        @if ($errors->has('smtpsu_perpustakaan'))
                                        <span class="help-block">{{$errors->first('smtpsu_perpustakaan')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- smta negeri --}}
                                <div>
                                    <label for="">
                                        <h5><strong>11.1.4. Sekolah Menengah Tingkat Atas</strong></h5>
                                    </label><br>
                                    <label for="">
                                        <h5><strong>a. SMTA Negeri</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('smtan_sekolah') ? 'has-error' : ''}} ">
                                        <label for="smtan_sekolah">
                                            <h5>- Jumlah Sekolah</h5>
                                        </label>
                                        <input name="smtan_sekolah" type="text" class="form-control" id="smtan_sekolah"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->smtan_sekolah}}">
                                        @if ($errors->has('smtan_sekolah'))
                                        <span class="help-block">{{$errors->first('smtan_sekolah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtan_murid') ? 'has-error' : ''}} ">
                                        <label for="smtan_murid">
                                            <h5>- Jumlah Murid </h5>
                                        </label>
                                        <input name="smtan_murid" type="text" class="form-control" id="smtan_murid"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->smtan_murid}}">
                                        @if ($errors->has('smtan_murid'))
                                        <span class="help-block">{{$errors->first('smtan_murid')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtan_guru') ? 'has-error' : ''}} ">
                                        <label for="smtan_guru">
                                            <h5>- Jumlah Guru/Pengajar</h5>
                                        </label>
                                        <input name="smtan_guru" type="text" class="form-control" id="smtan_guru"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->smtan_guru}}">
                                        @if ($errors->has('smtan_guru'))
                                        <span class="help-block">{{$errors->first('smtan_guru')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtan_prasarana') ? 'has-error' : ''}} ">
                                        <label for="smtan_prasarana">
                                            <h5>- Prasarana fisik</h5>
                                        </label>
                                        <input name="smtan_prasarana" type="text" class="form-control"
                                            id="smtan_prasarana" aria-describedby="" placeholder="Lokal"
                                            value="{{$saranasosbud->smtan_prasarana}}">
                                        @if ($errors->has('smtan_prasarana'))
                                        <span class="help-block">{{$errors->first('smtan_prasarana')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtan_lab') ? 'has-error' : ''}} ">
                                        <label for="smtan_lab">
                                            <h5>- Fasilitas Laboratorium</h5>
                                        </label>
                                        <input name="smtan_lab" type="text" class="form-control" id="smtan_lab"
                                            aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->smtan_lab}}">
                                        @if ($errors->has('smtan_lab'))
                                        <span class="help-block">{{$errors->first('smtan_lab')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtan_perpustakaan') ? 'has-error' : ''}} ">
                                        <label for="smtan_perpustakaan">
                                            <h5>- Perpustakaan</h5>
                                        </label>
                                        <input name="smtan_perpustakaan" type="text" class="form-control"
                                            id="smtan_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->smtan_perpustakaan}}">
                                        @if ($errors->has('smtan_perpustakaan'))
                                        <span class="help-block">{{$errors->first('smtan_perpustakaan')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- smta swasta umum --}}
                                <div>

                                    <label for="">
                                        <h5><strong>b. SMTA Swasta Umum</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('smtasu_sekolah') ? 'has-error' : ''}} ">
                                        <label for="smtasu_sekolah">
                                            <h5>- Jumlah Sekolah</h5>
                                        </label>
                                        <input name="smtasu_sekolah" type="text" class="form-control"
                                            id="smtasu_sekolah" aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->smtasu_sekolah}}">
                                        @if ($errors->has('smtasu_sekolah'))
                                        <span class="help-block">{{$errors->first('smtasu_sekolah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtasu_murid') ? 'has-error' : ''}} ">
                                        <label for="smtasu_murid">
                                            <h5>- Jumlah Murid </h5>
                                        </label>
                                        <input name="smtasu_murid" type="text" class="form-control" id="smtasu_murid"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->smtasu_murid}}">
                                        @if ($errors->has('smtasu_murid'))
                                        <span class="help-block">{{$errors->first('smtasu_murid')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtasu_guru') ? 'has-error' : ''}} ">
                                        <label for="smtasu_guru">
                                            <h5>- Jumlah Guru/Pengajar</h5>
                                        </label>
                                        <input name="smtasu_guru" type="text" class="form-control" id="smtasu_guru"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->smtasu_guru}}">
                                        @if ($errors->has('smtasu_guru'))
                                        <span class="help-block">{{$errors->first('smtasu_guru')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtasu_prasarana') ? 'has-error' : ''}} ">
                                        <label for="smtasu_prasarana">
                                            <h5>- Prasarana fisik</h5>
                                        </label>
                                        <input name="smtasu_prasarana" type="text" class="form-control"
                                            id="smtasu_prasarana" aria-describedby="" placeholder="Lokal"
                                            value="{{$saranasosbud->smtasu_prasarana}}">
                                        @if ($errors->has('smtasu_prasarana'))
                                        <span class="help-block">{{$errors->first('smtasu_prasarana')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtasu_lab') ? 'has-error' : ''}} ">
                                        <label for="smtasu_lab">
                                            <h5>- Fasilitas Laboratorium</h5>
                                        </label>
                                        <input name="smtasu_lab" type="text" class="form-control" id="smtasu_lab"
                                            aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->smtasu_lab}}">
                                        @if ($errors->has('smtasu_lab'))
                                        <span class="help-block">{{$errors->first('smtasu_lab')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('smtasu_perpustakaan') ? 'has-error' : ''}} ">
                                        <label for="smtasu_perpustakaan">
                                            <h5>- Perpustakaan</h5>
                                        </label>
                                        <input name="smtasu_perpustakaan" type="text" class="form-control"
                                            id="smtasu_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->smtasu_perpustakaan}}">
                                        @if ($errors->has('smtasu_perpustakaan'))
                                        <span class="help-block">{{$errors->first('smtasu_perpustakaan')}}</span>
                                        @endif
                                    </div>
                                </div>






                                {{-- ptn --}}
                                <div>
                                    <label for="">
                                        <h5><strong>11.1.5. Perguruan Tinggi</strong></h5>
                                    </label><br>
                                    <label for="">
                                        <h5><strong>a. Perguruan Tinggi Negeri</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('ptn_jumlah') ? 'has-error' : ''}} ">
                                        <label for="ptn_jumlah">
                                            <h5>- Jumlah</h5>
                                        </label>
                                        <input name="ptn_jumlah" type="text" class="form-control" id="ptn_jumlah"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->ptn_jumlah}}">
                                        @if ($errors->has('ptn_jumlah'))
                                        <span class="help-block">{{$errors->first('ptn_jumlah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptn_mahasiswa') ? 'has-error' : ''}} ">
                                        <label for="ptn_mahasiswa">
                                            <h5>- Jumlah Mahasiswa</h5>
                                        </label>
                                        <input name="ptn_mahasiswa" type="text" class="form-control" id="ptn_mahasiswa"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->ptn_mahasiswa}}">
                                        @if ($errors->has('ptn_mahasiswa'))
                                        <span class="help-block">{{$errors->first('ptn_mahasiswa')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptn_dosen') ? 'has-error' : ''}} ">
                                        <label for="ptn_dosen">
                                            <h5>- Jumlah Dosen/Pengajar</h5>
                                        </label>
                                        <input name="ptn_dosen" type="text" class="form-control" id="ptn_dosen"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->ptn_dosen}}">
                                        @if ($errors->has('ptn_dosen'))
                                        <span class="help-block">{{$errors->first('ptn_dosen')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptn_prasarana') ? 'has-error' : ''}} ">
                                        <label for="ptn_prasarana">
                                            <h5>- Prasarana fisik</h5>
                                        </label>
                                        <input name="ptn_prasarana" type="text" class="form-control" id="ptn_prasarana"
                                            aria-describedby="" placeholder="Lokal"
                                            value="{{$saranasosbud->ptn_prasarana}}">
                                        @if ($errors->has('ptn_prasarana'))
                                        <span class="help-block">{{$errors->first('ptn_prasarana')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptn_lab') ? 'has-error' : ''}} ">
                                        <label for="ptn_lab">
                                            <h5>- Fasilitas Laboratorium</h5>
                                        </label>
                                        <input name="ptn_lab" type="text" class="form-control" id="ptn_lab"
                                            aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->ptn_lab}}">
                                        @if ($errors->has('ptn_lab'))
                                        <span class="help-block">{{$errors->first('ptn_lab')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptn_perpustakaan') ? 'has-error' : ''}} ">
                                        <label for="ptn_perpustakaan">
                                            <h5>- Perpustakaan</h5>
                                        </label>
                                        <input name="ptn_perpustakaan" type="text" class="form-control"
                                            id="ptn_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->ptn_perpustakaan}}">
                                        @if ($errors->has('ptn_perpustakaan'))
                                        <span class="help-block">{{$errors->first('ptn_perpustakaan')}}</span>
                                        @endif
                                    </div>
                                </div>


                                {{-- ptsu --}}
                                <div>

                                    <label for="">
                                        <h5><strong>b. Perguruan Tinggi Swasta</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('ptsu_jumlah') ? 'has-error' : ''}} ">
                                        <label for="ptsu_jumlah">
                                            <h5>- Jumlah</h5>
                                        </label>
                                        <input name="ptsu_jumlah" type="text" class="form-control" id="ptsu_jumlah"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->ptsu_jumlah}}">
                                        @if ($errors->has('ptsu_jumlah'))
                                        <span class="help-block">{{$errors->first('ptsu_jumlah')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptsu_mahasiswa') ? 'has-error' : ''}} ">
                                        <label for="ptsu_mahasiswa">
                                            <h5>- Jumlah Mahasiswa</h5>
                                        </label>
                                        <input name="ptsu_mahasiswa" type="text" class="form-control"
                                            id="ptsu_mahasiswa" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->ptsu_mahasiswa}}">
                                        @if ($errors->has('ptsu_mahasiswa'))
                                        <span class="help-block">{{$errors->first('ptsu_mahasiswa')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptsu_dosen') ? 'has-error' : ''}} ">
                                        <label for="ptsu_dosen">
                                            <h5>- Jumlah Dosen/Pengajar</h5>
                                        </label>
                                        <input name="ptsu_dosen" type="text" class="form-control" id="ptsu_dosen"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->ptsu_dosen}}">
                                        @if ($errors->has('ptsu_dosen'))
                                        <span class="help-block">{{$errors->first('ptsu_dosen')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptsu_prasarana') ? 'has-error' : ''}} ">
                                        <label for="ptsu_prasarana">
                                            <h5>- Prasarana fisik</h5>
                                        </label>
                                        <input name="ptsu_prasarana" type="text" class="form-control"
                                            id="ptsu_prasarana" aria-describedby="" placeholder="Lokal"
                                            value="{{$saranasosbud->ptsu_prasarana}}">
                                        @if ($errors->has('ptsu_prasarana'))
                                        <span class="help-block">{{$errors->first('ptsu_prasarana')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptsu_lab') ? 'has-error' : ''}} ">
                                        <label for="ptsu_lab">
                                            <h5>- Fasilitas Laboratorium</h5>
                                        </label>
                                        <input name="ptsu_lab" type="text" class="form-control" id="ptsu_lab"
                                            aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->ptsu_lab}}">
                                        @if ($errors->has('ptsu_lab'))
                                        <span class="help-block">{{$errors->first('ptsu_lab')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('ptsu_perpustakaan') ? 'has-error' : ''}} ">
                                        <label for="ptsu_perpustakaan">
                                            <h5>- Perpustakaan</h5>
                                        </label>
                                        <input name="ptsu_perpustakaan" type="text" class="form-control"
                                            id="ptsu_perpustakaan" aria-describedby="" placeholder="Ada/Tidak Ada"
                                            value="{{$saranasosbud->ptsu_perpustakaan}}">
                                        @if ($errors->has('ptsu_perpustakaan'))
                                        <span class="help-block">{{$errors->first('ptsu_perpustakaan')}}</span>
                                        @endif
                                    </div>
                                </div>




                                {{-- tempat ibadah --}}
                                <div>
                                    <label for="">
                                        <h5><strong>11.2. Jumlah tempat ibadah </strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('masjid') ? 'has-error' : ''}} ">
                                        <label for="masjid">
                                            <h5>a. Masjid</h5>
                                        </label>
                                        <input name="masjid" type="text" class="form-control" id="masjid"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->masjid}}">
                                        @if ($errors->has('masjid'))
                                        <span class="help-block">{{$errors->first('masjid')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('surau') ? 'has-error' : ''}} ">
                                        <label for="surau">
                                            <h5>b. Surau/Musholla </h5>
                                        </label>
                                        <input name="surau" type="text" class="form-control" id="surau"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->surau}}">
                                        @if ($errors->has('surau'))
                                        <span class="help-block">{{$errors->first('surau')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('gereja') ? 'has-error' : ''}} ">
                                        <label for="gereja">
                                            <h5>c. Gereja</h5>
                                        </label>
                                        <input name="gereja" type="text" class="form-control" id="gereja"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->gereja}}">
                                        @if ($errors->has('gereja'))
                                        <span class="help-block">{{$errors->first('gereja')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('kuil') ? 'has-error' : ''}} ">
                                        <label for="kuil">
                                            <h5>d. Kuil/Pura</h5>
                                        </label>
                                        <input name="kuil" type="text" class="form-control" id="kuil"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->kuil}}">
                                        @if ($errors->has('kuil'))
                                        <span class="help-block">{{$errors->first('kuil')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- pariwisata , tempat rekreasi --}}
                                <div>
                                    <label for="">
                                        <h5><strong>11.4. Pariwisata</strong></h5>
                                    </label><br>
                                    <label for="">
                                        <h5><strong>a. Tempat Rekreasi </strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('taman') ? 'has-error' : ''}} ">
                                        <label for="taman">
                                            <h5>- Taman</h5>
                                        </label>
                                        <input name="taman" type="text" class="form-control" id="taman"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->taman}}">
                                        @if ($errors->has('taman'))
                                        <span class="help-block">{{$errors->first('taman')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pantai') ? 'has-error' : ''}} ">
                                        <label for="pantai">
                                            <h5>- Pantai </h5>
                                        </label>
                                        <input name="pantai" type="text" class="form-control" id="pantai"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->pantai}}">
                                        @if ($errors->has('pantai'))
                                        <span class="help-block">{{$errors->first('pantai')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('permandian') ? 'has-error' : ''}} ">
                                        <label for="permandian">
                                            <h5>- Permandian </h5>
                                        </label>
                                        <input name="permandian" type="text" class="form-control" id="permandian"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->permandian}}">
                                        @if ($errors->has('permandian'))
                                        <span class="help-block">{{$errors->first('permandian')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('hutan_lindung') ? 'has-error' : ''}} ">
                                        <label for="hutan_lindung">
                                            <h5>- Hutan Lindung</h5>
                                        </label>
                                        <input name="hutan_lindung" type="text" class="form-control" id="hutan_lindung"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->hutan_lindung}}">
                                        @if ($errors->has('hutan_lindung'))
                                        <span class="help-block">{{$errors->first('hutan_lindung')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('tradisional') ? 'has-error' : ''}} ">
                                        <label for="tradisional">
                                            <h5>- Tempat tradisional (wayang/ketoprak, dll)</h5>
                                        </label>
                                        <input name="tradisional" type="text" class="form-control" id="tradisional"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->tradisional}}">
                                        @if ($errors->has('tradisional'))
                                        <span class="help-block">{{$errors->first('tradisional')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('rekreasi_lain') ? 'has-error' : ''}} ">
                                        <label for="rekreasi_lain">
                                            <h5>- Tempat Rekreasi lain (alam, Sejarah) </h5>
                                        </label>
                                        <input name="rekreasi_lain" type="text" class="form-control" id="rekreasi_lain"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->rekreasi_lain}}">
                                        @if ($errors->has('rekreasi_lain'))
                                        <span class="help-block">{{$errors->first('rekreasi_lain')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('cinderamata') ? 'has-error' : ''}} ">
                                        <label for="cinderamata">
                                            <h5>- Toko Cinderamata/Souvenir</h5>
                                        </label>
                                        <input name="cinderamata" type="text" class="form-control" id="cinderamata"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->cinderamata}}">
                                        @if ($errors->has('cinderamata'))
                                        <span class="help-block">{{$errors->first('cinderamata')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- pariwisata, kebudayaan --}}
                                <div>
                                    <label for="">
                                        <h5><strong> b. Kebudayaan/Kesenian </strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('jml_sanggar') ? 'has-error' : ''}} ">
                                        <label for="jml_sanggar">
                                            <h5>- Jumlah Perkumpulan Kebudayaan/Sanggar Kesenian</h5>
                                        </label>
                                        <input name="jml_sanggar" type="text" class="form-control" id="jml_sanggar"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->jml_sanggar}}">
                                        @if ($errors->has('jml_sanggar'))
                                        <span class="help-block">{{$errors->first('jml_sanggar')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_budayawan') ? 'has-error' : ''}} ">
                                        <label for="jml_budayawan">
                                            <h5>- Jumlah Anggota Budayawan </h5>
                                        </label>
                                        <input name="jml_budayawan" type="text" class="form-control" id="jml_budayawan"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->jml_budayawan}}">
                                        @if ($errors->has('jml_budayawan'))
                                        <span class="help-block">{{$errors->first('jml_budayawan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jml_seniman') ? 'has-error' : ''}} ">
                                        <label for="jml_seniman">
                                            <h5>- Jumlah Anggota Seniman</h5>
                                        </label>
                                        <input name="jml_seniman" type="text" class="form-control" id="jml_seniman"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->jml_seniman}}">
                                        @if ($errors->has('jml_seniman'))
                                        <span class="help-block">{{$errors->first('jml_seniman')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- bioskop penginapan kesenian --}}
                                <div>
                                    <div class="form-group {{$errors->has('bioskop') ? 'has-error' : ''}} ">
                                        <label for="bioskop">
                                            <h5><strong>c. Bioskop </strong></h5>
                                        </label>
                                        <input name="bioskop" type="text" class="form-control" id="bioskop"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->bioskop}}">
                                        @if ($errors->has('bioskop'))
                                        <span class="help-block">{{$errors->first('bioskop')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('penginapan') ? 'has-error' : ''}} ">
                                        <label for="penginapan">
                                            <h5><strong>d. Penginapan </strong></h5>
                                        </label>
                                        <input name="penginapan" type="text" class="form-control" id="penginapan"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->penginapan}}">
                                        @if ($errors->has('penginapan'))
                                        <span class="help-block">{{$errors->first('penginapan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('restoran') ? 'has-error' : ''}} ">
                                        <label for="restoran">
                                            <h5><strong>e. Restoran</strong></h5>
                                        </label>
                                        <input name="restoran" type="text" class="form-control" id="restoran"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->restoran}}">
                                        @if ($errors->has('restoran'))
                                        <span class="help-block">{{$errors->first('restoran')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- kesehatan rumah sakit umum --}}
                                <div>
                                    <label for="">
                                        <h5><strong>11.5. Kesehatan</strong></h5>
                                    </label> <br>
                                    <label for="">
                                        <h5><strong>a. Rumah Sakit Umum</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('rsu_pem') ? 'has-error' : ''}} ">
                                        <label for="rsu_pem">
                                            <h5>- RSU Pemerintah</h5>
                                        </label>
                                        <input name="rsu_pem" type="text" class="form-control" id="rsu_pem"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->rsu_pem}}">
                                        @if ($errors->has('rsu_pem'))
                                        <span class="help-block">{{$errors->first('rsu_pem')}}</span>
                                        @endif
                                    </div>
                                    <label for="">
                                        <h5><strong>- Pengunjung yang sakit</strong> </h5>
                                    </label>
                                    <div class="form-group {{$errors->has('rsu_pem_pengunjung1') ? 'has-error' : ''}} ">
                                        <label for="rsu_pem_pengunjung1">
                                            <h5>- Januari s/d Juni</h5>
                                        </label>
                                        <input name="rsu_pem_pengunjung1" type="text" class="form-control"
                                            id="rsu_pem_pengunjung1" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->rsu_pem_pengunjung1}}">
                                        @if ($errors->has('rsu_pem_pengunjung1'))
                                        <span class="help-block">{{$errors->first('rsu_pem_pengunjung1')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('rsu_pem_pengunjung2') ? 'has-error' : ''}} ">
                                        <label for="rsu_pem_pengunjung2">
                                            <h5>- Juli s/d Desember</h5>
                                        </label>
                                        <input name="rsu_pem_pengunjung2" type="text" class="form-control"
                                            id="rsu_pem_pengunjung2" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->rsu_pem_pengunjung2}}">
                                        @if ($errors->has('rsu_pem_pengunjung2'))
                                        <span class="help-block">{{$errors->first('rsu_pem_pengunjung2')}}</span>
                                        @endif
                                    </div>




                                    <div class="form-group {{$errors->has('rsu_sw') ? 'has-error' : ''}} ">
                                        <label for="rsu_sw">
                                            <h5><strong> - RSU Swasta</strong></h5>
                                        </label>
                                        <input name="rsu_sw" type="text" class="form-control" id="rsu_sw"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->rsu_sw}}">
                                        @if ($errors->has('rsu_sw'))
                                        <span class="help-block">{{$errors->first('rsu_sw')}}</span>
                                        @endif
                                    </div>
                                    <label for="">
                                        <h5><strong> - Pengunjung yang sakit</strong> </h5>
                                    </label>
                                    <div class="form-group {{$errors->has('rsu_sw_pengunjung1') ? 'has-error' : ''}} ">
                                        <label for="rsu_sw_pengunjung1">
                                            <h5>- Januari s/d Juni</h5>
                                        </label>
                                        <input name="rsu_sw_pengunjung1" type="text" class="form-control"
                                            id="rsu_sw_pengunjung1" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->rsu_sw_pengunjung1}}">
                                        @if ($errors->has('rsu_sw_pengunjung1'))
                                        <span class="help-block">{{$errors->first('rsu_sw_pengunjung1')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('rsu_sw_pengunjung2') ? 'has-error' : ''}} ">
                                        <label for="rsu_sw_pengunjung2">
                                            <h5>- Juli s/d Desember</h5>
                                        </label>
                                        <input name="rsu_sw_pengunjung2" type="text" class="form-control"
                                            id="rsu_sw_pengunjung2" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->rsu_sw_pengunjung2}}">
                                        @if ($errors->has('rsu_sw_pengunjung2'))
                                        <span class="help-block">{{$errors->first('rsu_sw_pengunjung2')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- kesehatan rumah sakit khusus pemerintah --}}
                                <div>
                                    <label for="">
                                        <h5><strong>b. Rumah Sakit Khusus Pemerintah </strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('rskp_pem') ? 'has-error' : ''}} ">
                                        <label for="rskp_pem">
                                            <h5><strong>- RSU Pemerintah</strong></h5>
                                        </label>
                                        <input name="rskp_pem" type="text" class="form-control" id="rskp_pem"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->rskp_pem}}">
                                        @if ($errors->has('rskp_pem'))
                                        <span class="help-block">{{$errors->first('rskp_pem')}}</span>
                                        @endif
                                    </div>
                                    <label for="">
                                        <h5><strong>- Pengunjung yang sakit</strong></h5>
                                    </label>
                                    <div
                                        class="form-group {{$errors->has('rskp_pem_pengunjung1') ? 'has-error' : ''}} ">
                                        <label for="rskp_pem_pengunjung1">
                                            <h5>- Januari s/d Juni</h5>
                                        </label>
                                        <input name="rskp_pem_pengunjung1" type="text" class="form-control"
                                            id="rskp_pem_pengunjung1" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->rskp_pem_pengunjung1}}">
                                        @if ($errors->has('rskp_pem_pengunjung1'))
                                        <span class="help-block">{{$errors->first('rskp_pem_pengunjung1')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('rskp_pem_pengunjung2') ? 'has-error' : ''}} ">
                                        <label for="rskp_pem_pengunjung2">
                                            <h5>- Juli s/d Desember</h5>
                                        </label>
                                        <input name="rskp_pem_pengunjung2" type="text" class="form-control"
                                            id="rskp_pem_pengunjung2" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->rskp_pem_pengunjung2}}">
                                        @if ($errors->has('rskp_pem_pengunjung2'))
                                        <span class="help-block">{{$errors->first('rskp_pem_pengunjung2')}}</span>
                                        @endif
                                    </div>




                                    <div class="form-group {{$errors->has('rskp_sw') ? 'has-error' : ''}} ">
                                        <label for="rskp_sw">
                                            <h5><strong>- Rumah Sakit Khusus Swasta</strong></h5>
                                        </label>
                                        <input name="rskp_sw" type="text" class="form-control" id="rskp_sw"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->rskp_sw}}">
                                        @if ($errors->has('rskp_sw'))
                                        <span class="help-block">{{$errors->first('rskp_sw')}}</span>
                                        @endif
                                    </div>
                                    <label for="">
                                        <h5><strong>- Pengunjung yang sakit</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('rskp_sw_pengunjung1') ? 'has-error' : ''}} ">
                                        <label for="rskp_sw_pengunjung1">
                                            <h5>- Januari s/d Juni</h5>
                                        </label>
                                        <input name="rskp_sw_pengunjung1" type="text" class="form-control"
                                            id="rskp_sw_pengunjung1" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->rskp_sw_pengunjung1}}">
                                        @if ($errors->has('rskp_sw_pengunjung1'))
                                        <span class="help-block">{{$errors->first('rskp_sw_pengunjung1')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('rskp_sw_pengunjung2') ? 'has-error' : ''}} ">
                                        <label for="rskp_sw_pengunjung2">
                                            <h5>- Juli s/d Desember</h5>
                                        </label>
                                        <input name="rskp_sw_pengunjung2" type="text" class="form-control"
                                            id="rskp_sw_pengunjung2" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->rskp_sw_pengunjung2}}">
                                        @if ($errors->has('rskp_sw_pengunjung2'))
                                        <span class="help-block">{{$errors->first('rskp_sw_pengunjung2')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- kesehatan c. Rumah Bersalin/BKIA   --}}
                                <div>
                                    <div class="form-group {{$errors->has('bersalin') ? 'has-error' : ''}} ">
                                        <label for="bersalin">
                                            <h5><strong>c. Rumah Bersalin/BKIA</strong></h5>
                                        </label>
                                        <input name="bersalin" type="text" class="form-control" id="bersalin"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->bersalin}}">
                                        @if ($errors->has('bersalin'))
                                        <span class="help-block">{{$errors->first('bersalin')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('bersalin_pem') ? 'has-error' : ''}} ">
                                        <label for="bersalin_pem">
                                            <h5><strong>- RSU Pemerintah</strong></h5>
                                        </label>
                                        <input name="bersalin_pem" type="text" class="form-control" id="bersalin_pem"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->bersalin_pem}}">
                                        @if ($errors->has('bersalin_pem'))
                                        <span class="help-block">{{$errors->first('bersalin_pem')}}</span>
                                        @endif
                                    </div>
                                    <label for="">
                                        <h5><strong>- Pengunjung yang sakit</strong></h5>
                                    </label>
                                    <div
                                        class="form-group {{$errors->has('bersalin_pem_pengunjung1') ? 'has-error' : ''}} ">
                                        <label for="bersalin_pem_pengunjung1">
                                            <h5>- Januari s/d Juni</h5>
                                        </label>
                                        <input name="bersalin_pem_pengunjung1" type="text" class="form-control"
                                            id="bersalin_pem_pengunjung1" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->bersalin_pem_pengunjung1}}">
                                        @if ($errors->has('bersalin_pem_pengunjung1'))
                                        <span class="help-block">{{$errors->first('bersalin_pem_pengunjung1')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('bersalin_pem_pengunjung2') ? 'has-error' : ''}} ">
                                        <label for="bersalin_pem_pengunjung2">
                                            <h5>- Juli s/d Desember</h5>
                                        </label>
                                        <input name="bersalin_pem_pengunjung2" type="text" class="form-control"
                                            id="bersalin_pem_pengunjung2" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->bersalin_pem_pengunjung2}}">
                                        @if ($errors->has('bersalin_pem_pengunjung2'))
                                        <span class="help-block">{{$errors->first('bersalin_pem_pengunjung2')}}</span>
                                        @endif
                                    </div>




                                    <div class="form-group {{$errors->has('bersalin_poli') ? 'has-error' : ''}} ">
                                        <label for="bersalin_poli">
                                            <h5><strong>- Poliklinik/Balai Pengobatan</strong></h5>
                                        </label>
                                        <input name="bersalin_poli" type="text" class="form-control" id="bersalin_poli"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->bersalin_poli}}">
                                        @if ($errors->has('bersalin_poli'))
                                        <span class="help-block">{{$errors->first('bersalin_poli')}}</span>
                                        @endif
                                    </div>
                                    <label for="">
                                        <h5><strong>- Pengunjung yang sakit</strong></h5>
                                    </label>
                                    <div
                                        class="form-group {{$errors->has('bersalin_poli_pengunjung1') ? 'has-error' : ''}} ">
                                        <label for="bersalin_poli_pengunjung1">
                                            <h5>- Januari s/d Juni</h5>
                                        </label>
                                        <input name="bersalin_poli_pengunjung1" type="text" class="form-control"
                                            id="bersalin_poli_pengunjung1" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->bersalin_poli_pengunjung1}}">
                                        @if ($errors->has('bersalin_poli_pengunjung1'))
                                        <span class="help-block">{{$errors->first('bersalin_poli_pengunjung1')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('bersalin_poli_pengunjung2') ? 'has-error' : ''}} ">
                                        <label for="bersalin_poli_pengunjung2">
                                            <h5>- Juli s/d Desember</h5>
                                        </label>
                                        <input name="bersalin_poli_pengunjung2" type="text" class="form-control"
                                            id="bersalin_poli_pengunjung2" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->bersalin_poli_pengunjung2}}">
                                        @if ($errors->has('bersalin_poli_pengunjung2'))
                                        <span class="help-block">{{$errors->first('bersalin_poli_pengunjung2')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- kesehatan d. puskesmas   --}}
                                <div>

                                    <div class="form-group {{$errors->has('puskesmas') ? 'has-error' : ''}} ">
                                        <label for="puskesmas">
                                            <h5><strong>d. Puskesmas </strong></h5>
                                        </label>
                                        <input name="puskesmas" type="text" class="form-control" id="puskesmas"
                                            aria-describedby="" placeholder="Buah" value="{{$saranasosbud->puskesmas}}">
                                        @if ($errors->has('puskesmas'))
                                        <span class="help-block">{{$errors->first('puskesmas')}}</span>
                                        @endif
                                    </div>
                                    <label for="">
                                        <h5><strong>- Pengunjung yang sakit</strong></h5>
                                    </label>
                                    <div
                                        class="form-group {{$errors->has('puskesmas_pengunjung1') ? 'has-error' : ''}} ">
                                        <label for="puskesmas_pengunjung1">
                                            <h5>- Januari s/d Juni</h5>
                                        </label>
                                        <input name="puskesmas_pengunjung1" type="text" class="form-control"
                                            id="puskesmas_pengunjung1" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->puskesmas_pengunjung1}}">
                                        @if ($errors->has('puskesmas_pengunjung1'))
                                        <span class="help-block">{{$errors->first('puskesmas_pengunjung1')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('puskesmas_pengunjung2') ? 'has-error' : ''}} ">
                                        <label for="puskesmas_pengunjung2">
                                            <h5>- Juli s/d Desember</h5>
                                        </label>
                                        <input name="puskesmas_pengunjung2" type="text" class="form-control"
                                            id="puskesmas_pengunjung2" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->puskesmas_pengunjung2}}">
                                        @if ($errors->has('puskesmas_pengunjung2'))
                                        <span class="help-block">{{$errors->first('puskesmas_pengunjung2')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('puskesmas_pengunjung_dokter') ? 'has-error' : ''}} ">
                                        <label for="puskesmas_pengunjung_dokter">
                                            <h5>- Dokter</h5>
                                        </label>
                                        <input name="puskesmas_pengunjung_dokter" type="text" class="form-control"
                                            id="puskesmas_pengunjung_dokter" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->puskesmas_pengunjung_dokter}}">
                                        @if ($errors->has('puskesmas_pengunjung_dokter'))
                                        <span
                                            class="help-block">{{$errors->first('puskesmas_pengunjung_dokter')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('puskesmas_pengunjung_perawat') ? 'has-error' : ''}} ">
                                        <label for="puskesmas_pengunjung_perawat">
                                            <h5>- Perawat</h5>
                                        </label>
                                        <input name="puskesmas_pengunjung_perawat" type="text" class="form-control"
                                            id="puskesmas_pengunjung_perawat" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->puskesmas_pengunjung_perawat}}">
                                        @if ($errors->has('puskesmas_pengunjung_perawat'))
                                        <span
                                            class="help-block">{{$errors->first('puskesmas_pengunjung_perawat')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('puskesmas_pengunjung_bidan') ? 'has-error' : ''}} ">
                                        <label for="puskesmas_pengunjung_bidan">
                                            <h5>- Bidan</h5>
                                        </label>
                                        <input name="puskesmas_pengunjung_bidan" type="text" class="form-control"
                                            id="puskesmas_pengunjung_bidan" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->puskesmas_pengunjung_bidan}}">
                                        @if ($errors->has('puskesmas_pengunjung_bidan'))
                                        <span class="help-block">{{$errors->first('puskesmas_pengunjung_bidan')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group {{$errors->has('puskesmas_pembantu') ? 'has-error' : ''}} ">
                                        <label for="puskesmas_pembantu">
                                            <h5><strong>- Puskesmas Pembantu</strong></h5>
                                        </label>
                                        <input name="puskesmas_pembantu" type="text" class="form-control"
                                            id="puskesmas_pembantu" aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->puskesmas_pembantu}}">
                                        @if ($errors->has('puskesmas_pembantu'))
                                        <span class="help-block">{{$errors->first('puskesmas_pembantu')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('puskesmas_pembantu_dokter') ? 'has-error' : ''}} ">
                                        <label for="puskesmas_pembantu_dokter">
                                            <h5>- Dokter</h5>
                                        </label>
                                        <input name="puskesmas_pembantu_dokter" type="text" class="form-control"
                                            id="puskesmas_pembantu_dokter" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->puskesmas_pembantu_dokter}}">
                                        @if ($errors->has('puskesmas_pembantu_dokter'))
                                        <span class="help-block">{{$errors->first('puskesmas_pembantu_dokter')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('puskesmas_pembantu_perawat') ? 'has-error' : ''}} ">
                                        <label for="puskesmas_pembantu_perawat">
                                            <h5>- Perawat</h5>
                                        </label>
                                        <input name="puskesmas_pembantu_perawat" type="text" class="form-control"
                                            id="puskesmas_pembantu_perawat" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->puskesmas_pembantu_perawat}}">
                                        @if ($errors->has('puskesmas_pembantu_perawat'))
                                        <span class="help-block">{{$errors->first('puskesmas_pembantu_perawat')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('puskesmas_pembantu_bidan') ? 'has-error' : ''}} ">
                                        <label for="puskesmas_pembantu_bidan">
                                            <h5>- Bidan</h5>
                                        </label>
                                        <input name="puskesmas_pembantu_bidan" type="text" class="form-control"
                                            id="puskesmas_pembantu_bidan" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->puskesmas_pembantu_bidan}}">
                                        @if ($errors->has('puskesmas_pembantu_bidan'))
                                        <span class="help-block">{{$errors->first('puskesmas_pembantu_bidan')}}</span>
                                        @endif
                                    </div>
                                </div>


                                {{-- kesehatan e. dokter_umum   --}}
                                <div>
                                    <label for="">
                                        <h5><strong>e. Praktek Dokter : </strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('dokter_umum') ? 'has-error' : ''}} ">
                                        <label for="dokter_umum">
                                            <h5>- Dokter Umum</h5>
                                        </label>
                                        <input name="dokter_umum" type="text" class="form-control" id="dokter_umum"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->dokter_umum}}">
                                        @if ($errors->has('dokter_umum'))
                                        <span class="help-block">{{$errors->first('dokter_umum')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('dokter_anak') ? 'has-error' : ''}} ">
                                        <label for="dokter_anak">
                                            <h5>- Dokter Anak</h5>
                                        </label>
                                        <input name="dokter_anak" type="text" class="form-control" id="dokter_anak"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->dokter_anak}}">
                                        @if ($errors->has('dokter_anak'))
                                        <span class="help-block">{{$errors->first('dokter_anak')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('dokter_kandungan') ? 'has-error' : ''}} ">
                                        <label for="dokter_kandungan">
                                            <h5>- Dokter kebidanan/kandungan</h5>
                                        </label>
                                        <input name="dokter_kandungan" type="text" class="form-control"
                                            id="dokter_kandungan" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->dokter_kandungan}}">
                                        @if ($errors->has('dokter_kandungan'))
                                        <span class="help-block">{{$errors->first('dokter_kandungan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('dokter_kulit') ? 'has-error' : ''}} ">
                                        <label for="dokter_kulit">
                                            <h5>- Dokter Kulit/Kelamin</h5>
                                        </label>
                                        <input name="dokter_kulit" type="text" class="form-control" id="dokter_kulit"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->dokter_kulit}}">
                                        @if ($errors->has('dokter_kulit'))
                                        <span class="help-block">{{$errors->first('dokter_kulit')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('dokter_lain') ? 'has-error' : ''}} ">
                                        <label for="dokter_lain">
                                            <h5>- Dokter ahli lainnya</h5>
                                        </label>
                                        <input name="dokter_lain" type="text" class="form-control" id="dokter_lain"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->dokter_lain}}">
                                        @if ($errors->has('dokter_lain'))
                                        <span class="help-block">{{$errors->first('dokter_lain')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- f. Dukun khitan/sunat   dll --}}
                                <div>
                                    <div class="form-group {{$errors->has('dukun_khitan') ? 'has-error' : ''}} ">
                                        <label for="dukun_khitan">
                                            <h5><strong>f. Dukun khitan/sunat </strong></h5>
                                        </label>
                                        <input name="dukun_khitan" type="text" class="form-control" id="dukun_khitan"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->dukun_khitan}}">
                                        @if ($errors->has('dukun_khitan'))
                                        <span class="help-block">{{$errors->first('dukun_khitan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('dukun_bayi') ? 'has-error' : ''}} ">
                                        <label for="dukun_bayi">
                                            <h5><strong>g.Dukun Bayi </strong></h5>
                                        </label>
                                        <input name="dukun_bayi" type="text" class="form-control" id="dukun_bayi"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->dukun_bayi}}">
                                        @if ($errors->has('dukun_bayi'))
                                        <span class="help-block">{{$errors->first('dukun_bayi')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sanatorium') ? 'has-error' : ''}} ">
                                        <label for="sanatorium">
                                            <h5><strong>h. Sanatorium </strong></h5>
                                        </label>
                                        <input name="sanatorium" type="text" class="form-control" id="sanatorium"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->sanatorium}}">
                                        @if ($errors->has('sanatorium'))
                                        <span class="help-block">{{$errors->first('sanatorium')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('apotik') ? 'has-error' : ''}} ">
                                        <label for="apotik">
                                            <h5><strong>i. Apotik/ Depot obat</strong></h5>
                                        </label>
                                        <input name="apotik" type="text" class="form-control" id="apotik"
                                            aria-describedby="" placeholder="Orang" value="{{$saranasosbud->apotik}}">
                                        @if ($errors->has('apotik'))
                                        <span class="help-block">{{$errors->first('apotik')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('panti_pijat') ? 'has-error' : ''}} ">
                                        <label for="panti_pijat">
                                            <h5><strong>j. Panji Pijat </strong></h5>
                                        </label>
                                        <input name="panti_pijat" type="text" class="form-control" id="panti_pijat"
                                            aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->panti_pijat}}">
                                        @if ($errors->has('panti_pijat'))
                                        <span class="help-block">{{$errors->first('panti_pijat')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- 11.6. Keluarga Berencana (KB)  --}}
                                <div>
                                    <label for="">
                                        <h5><strong>11.6. Keluarga Berencana (KB)</strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('jumlah_pos_kb') ? 'has-error' : ''}} ">
                                        <label for="jumlah_pos_kb">
                                            <h5>a. Jumlah Pos/Klinik KB</h5>
                                        </label>
                                        <input name="jumlah_pos_kb" type="text" class="form-control" id="jumlah_pos_kb"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->jumlah_pos_kb}}">
                                        @if ($errors->has('jumlah_pos_kb'))
                                        <span class="help-block">{{$errors->first('jumlah_pos_kb')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_pus') ? 'has-error' : ''}} ">
                                        <label for="jumlah_pus">
                                            <h5>b. Jumlah PUS(Pasangan Usia Subur)</h5>
                                        </label>
                                        <input name="jumlah_pus" type="text" class="form-control" id="jumlah_pus"
                                            aria-describedby="" placeholder="Pasangan"
                                            value="{{$saranasosbud->jumlah_pus}}">
                                        @if ($errors->has('jumlah_pus'))
                                        <span class="help-block">{{$errors->first('jumlah_pus')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_pus_kb') ? 'has-error' : ''}} ">
                                        <label for="jumlah_pus_kb">
                                            <h5>c. Jumlah PUS masuk KB</h5>
                                        </label>
                                        <input name="jumlah_pus_kb" type="text" class="form-control" id="jumlah_pus_kb"
                                            aria-describedby="" placeholder="Pasangan"
                                            value="{{$saranasosbud->jumlah_pus_kb}}">
                                        @if ($errors->has('jumlah_pus_kb'))
                                        <span class="help-block">{{$errors->first('jumlah_pus_kb')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_posyandu') ? 'has-error' : ''}} ">
                                        <label for="jumlah_posyandu">
                                            <h5>d. Jumlah Posyandu</h5>
                                        </label>
                                        <input name="jumlah_posyandu" type="text" class="form-control"
                                            id="jumlah_posyandu" aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->jumlah_posyandu}}">
                                        @if ($errors->has('jumlah_posyandu'))
                                        <span class="help-block">{{$errors->first('jumlah_posyandu')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_akseptor') ? 'has-error' : ''}} ">
                                        <label for="jumlah_akseptor">
                                            <h5>e. Jumlah Akseptor KB s/d Tahun 2015</h5>
                                        </label>
                                        <input name="jumlah_akseptor" type="text" class="form-control"
                                            id="jumlah_akseptor" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->jumlah_akseptor}}">
                                        @if ($errors->has('jumlah_akseptor'))
                                        <span class="help-block">{{$errors->first('jumlah_akseptor')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_akseptor_pil') ? 'has-error' : ''}} ">
                                        <label for="jumlah_akseptor_pil">
                                            <h5>- Pil</h5>
                                        </label>
                                        <input name="jumlah_akseptor_pil" type="text" class="form-control"
                                            id="jumlah_akseptor_pil" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->jumlah_akseptor_pil}}">
                                        @if ($errors->has('jumlah_akseptor_pil'))
                                        <span class="help-block">{{$errors->first('jumlah_akseptor_pil')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_akseptor_iud') ? 'has-error' : ''}} ">
                                        <label for="jumlah_akseptor_iud">
                                            <h5>- IUD</h5>
                                        </label>
                                        <input name="jumlah_akseptor_iud" type="text" class="form-control"
                                            id="jumlah_akseptor_iud" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->jumlah_akseptor_iud}}">
                                        @if ($errors->has('jumlah_akseptor_iud'))
                                        <span class="help-block">{{$errors->first('jumlah_akseptor_iud')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('jumlah_akseptor_kondom') ? 'has-error' : ''}} ">
                                        <label for="jumlah_akseptor_kondom">
                                            <h5>- Kondom </h5>
                                        </label>
                                        <input name="jumlah_akseptor_kondom" type="text" class="form-control"
                                            id="jumlah_akseptor_kondom" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->jumlah_akseptor_kondom}}">
                                        @if ($errors->has('jumlah_akseptor_kondom'))
                                        <span class="help-block">{{$errors->first('jumlah_akseptor_kondom')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('jumlah_akseptor_suntik') ? 'has-error' : ''}} ">
                                        <label for="jumlah_akseptor_suntik">
                                            <h5>- Suntik </h5>
                                        </label>
                                        <input name="jumlah_akseptor_suntik" type="text" class="form-control"
                                            id="jumlah_akseptor_suntik" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->jumlah_akseptor_suntik}}">
                                        @if ($errors->has('jumlah_akseptor_suntik'))
                                        <span class="help-block">{{$errors->first('jumlah_akseptor_suntik')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_akseptor_mop') ? 'has-error' : ''}} ">
                                        <label for="jumlah_akseptor_mop">
                                            <h5>- MOP </h5>
                                        </label>
                                        <input name="jumlah_akseptor_mop" type="text" class="form-control"
                                            id="jumlah_akseptor_mop" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->jumlah_akseptor_mop}}">
                                        @if ($errors->has('jumlah_akseptor_mop'))
                                        <span class="help-block">{{$errors->first('jumlah_akseptor_mop')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_akseptor_mow') ? 'has-error' : ''}} ">
                                        <label for="jumlah_akseptor_mow">
                                            <h5>- MOW </h5>
                                        </label>
                                        <input name="jumlah_akseptor_mow" type="text" class="form-control"
                                            id="jumlah_akseptor_mow" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->jumlah_akseptor_mow}}">
                                        @if ($errors->has('jumlah_akseptor_mow'))
                                        <span class="help-block">{{$errors->first('jumlah_akseptor_mow')}}</span>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('jumlah_akseptor_kbmandiri') ? 'has-error' : ''}} ">
                                        <label for="jumlah_akseptor_kbmandiri">
                                            <h5>- KB Mandiri</h5>
                                        </label>
                                        <input name="jumlah_akseptor_kbmandiri" type="text" class="form-control"
                                            id="jumlah_akseptor_kbmandiri" aria-describedby="" placeholder="Orang"
                                            value="{{$saranasosbud->jumlah_akseptor_kbmandiri}}">
                                        @if ($errors->has('jumlah_akseptor_kbmandiri'))
                                        <span class="help-block">{{$errors->first('jumlah_akseptor_kbmandiri')}}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- 11.7. Penderita Cacat  --}}
                                <div>
                                    <label for="">
                                        <h5><strong>11.7. Penderita Cacat </strong></h5>
                                    </label>
                                    <div class="form-group {{$errors->has('cacat_fisik') ? 'has-error' : ''}} ">
                                        <label for="cacat_fisik">
                                            <h5>- Cacat Fisik/fatal </h5>
                                        </label>
                                        <input name="cacat_fisik" type="text" class="form-control" id="cacat_fisik"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->cacat_fisik}}">
                                        @if ($errors->has('cacat_fisik'))
                                        <span class="help-block">{{$errors->first('cacat_fisik')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('cacat_mental') ? 'has-error' : ''}} ">
                                        <label for="cacat_mental">
                                            <h5>- Cacat Mental </h5>
                                        </label>
                                        <input name="cacat_mental" type="text" class="form-control" id="cacat_mental"
                                            aria-describedby="" placeholder="Buah"
                                            value="{{$saranasosbud->cacat_mental}}">
                                        @if ($errors->has('cacat_mental'))
                                        <span class="help-block">{{$errors->first('cacat_mental')}}</span>
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