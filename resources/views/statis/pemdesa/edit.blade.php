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
                            <form method="POST" action="/statis/pemdesa/{{$pemdesa->id}}/update">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">
                                            <label for="tanggal">Tanggal</label>
                                            <input name="tanggal" type="date" class="form-control" id="tanggal"
                                                aria-describedby="" placeholder="" value="{{$pemdesa->tanggal}}">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">{{$errors->first('tanggal')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{$errors->has('desa') ? 'has-error' : ''}} ">
                                    <label for="desa">3.1. Desa (Buah)</label>
                                    <input name="desa" type="text" class="form-control" id="desa" aria-describedby=""
                                        placeholder="Buah" value="{{$pemdesa->desa}}">
                                    @if ($errors->has('desa'))
                                    <span class="help-block">{{$errors->first('desa')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kelurahan') ? 'has-error' : ''}} ">
                                    <label for="kelurahan">3.2. Kelurahan (Buah)</label>
                                    <input name="kelurahan" type="text" class="form-control" id="kelurahan"
                                        aria-describedby="" placeholder="Buah" value="{{$pemdesa->kelurahan}}">
                                    @if ($errors->has('kelurahan'))
                                    <span class="help-block">{{$errors->first('kelurahan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('dusun') ? 'has-error' : ''}} ">
                                    <label for="dusun">3.3. Lingkungan / Dusun (Buah)</label>
                                    <input name="dusun" type="text" class="form-control" id="dusun" aria-describedby=""
                                        placeholder="Buah" value="{{$pemdesa->dusun}}">
                                    @if ($errors->has('dusun'))
                                    <span class="help-block">{{$errors->first('dusun')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rw') ? 'has-error' : ''}} ">
                                    <label for="rw">3.4. Rukun Warga (RW) (Buah)</label>
                                    <input name="rw" type="text" class="form-control" id="rw" aria-describedby=""
                                        placeholder="Buah" value="{{$pemdesa->rw}}">
                                    @if ($errors->has('rw'))
                                    <span class="help-block">{{$errors->first('rw')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rt') ? 'has-error' : ''}} ">
                                    <label for="rt">3.5. Rukun Tetangga (RT) (Buah)</label>
                                    <input name="rt" type="text" class="form-control" id="rt" aria-describedby=""
                                        placeholder="Buah" value="{{$pemdesa->rt}}">
                                    @if ($errors->has('rt'))
                                    <span class="help-block">{{$errors->first('rt')}}</span>
                                    @endif
                                </div>

                                <label>3.6. Desa / Kelurahan:</label><br>
                                <div class="form-group {{$errors->has('desa_swadaya') ? 'has-error' : ''}} ">
                                    <label for="desa_swadaya">
                                        <h5>a. Desa Swadaya (Buah)</h5>
                                    </label>
                                    <input name="desa_swadaya" type="text" class="form-control" id="desa_swadaya"
                                        aria-describedby="" placeholder="Buah" value="{{$pemdesa->desa_swadaya}}">
                                    @if ($errors->has('desa_swadaya'))
                                    <span class="help-block">{{$errors->first('desa_swadaya')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('desa_swakarya') ? 'has-error' : ''}} ">
                                    <label for="desa_swakarya">
                                        <h5>b. Desa Swakarya (Buah)</h5>
                                    </label>
                                    <input name="desa_swakarya" type="text" class="form-control" id="desa_swakarya"
                                        aria-describedby="" placeholder="Buah" value="{{$pemdesa->desa_swakarya}}">
                                    @if ($errors->has('desa_swakarya'))
                                    <span class="help-block">{{$errors->first('desa_swakarya')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('desa_swasembada') ? 'has-error' : ''}} ">
                                    <label for="desa_swasembada">
                                        <h5>c. Desa Swasembada (Buah)</h5>
                                    </label>
                                    <input name="desa_swasembada" type="text" class="form-control" id="desa_swasembada"
                                        aria-describedby="" placeholder="Buah" value="{{$pemdesa->desa_swasembada}}">
                                    @if ($errors->has('desa_swasembada'))
                                    <span class="help-block">{{$errors->first('desa_swasembada')}}</span>
                                    @endif
                                </div>

                                <label>3.7. Kejuaraan Lomba Desa yang pernah didapat :</label><br>
                                <label>a. Tingkat Kecamatan</label>
                                <div class="form-group {{$errors->has('juara_lomba_kec_1') ? 'has-error' : ''}} ">
                                    <label for="juara_lomba_kec_1">
                                        <h5>Juara 1</h5>
                                    </label>
                                    <input name="juara_lomba_kec_1" type="text" class="form-control"
                                        id="juara_lomba_kec_1" aria-describedby="" placeholder=""
                                        value="{{$pemdesa->juara_lomba_kec_1}}">
                                    @if ($errors->has('juara_lomba_kec_1'))
                                    <span class="help-block">{{$errors->first('juara_lomba_kec_1')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('juara_lomba_kec_2') ? 'has-error' : ''}} ">
                                    <label for="juara_lomba_kec_2">
                                        <h5>Juara 2</h5>
                                    </label>
                                    <input name="juara_lomba_kec_2" type="text" class="form-control"
                                        id="juara_lomba_kec_2" aria-describedby="" placeholder=""
                                        value="{{$pemdesa->juara_lomba_kec_2}}">
                                    @if ($errors->has('juara_lomba_kec_2'))
                                    <span class="help-block">{{$errors->first('juara_lomba_kec_2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('juara_lomba_kec_3') ? 'has-error' : ''}} ">
                                    <label for="juara_lomba_kec_3">
                                        <h5>Juara 3</h5>
                                    </label>
                                    <input name="juara_lomba_kec_3" type="text" class="form-control"
                                        id="juara_lomba_kec_3" aria-describedby="" placeholder=""
                                        value="{{$pemdesa->juara_lomba_kec_3}}">
                                    @if ($errors->has('juara_lomba_kec_3'))
                                    <span class="help-block">{{$errors->first('juara_lomba_kec_3')}}</span>
                                    @endif
                                </div>

                                <label>b. Tingkat Kabupaten</label>
                                <div class="form-group {{$errors->has('juara_lomba_kab_1') ? 'has-error' : ''}} ">
                                    <label for="juara_lomba_kab_1">
                                        <h5>Juara 1</h5>
                                    </label>
                                    <input name="juara_lomba_kab_1" type="text" class="form-control"
                                        id="juara_lomba_kab_1" aria-describedby="" placeholder=""
                                        value="{{$pemdesa->juara_lomba_kab_1}}">
                                    @if ($errors->has('juara_lomba_kab_1'))
                                    <span class="help-block">{{$errors->first('juara_lomba_kab_1')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('juara_lomba_kab_2') ? 'has-error' : ''}} ">
                                    <label for="juara_lomba_kab_2">
                                        <h5>Juara 2</h5>
                                    </label>
                                    <input name="juara_lomba_kab_2" type="text" class="form-control"
                                        id="juara_lomba_kab_2" aria-describedby="" placeholder=""
                                        value="{{$pemdesa->juara_lomba_kab_2}}">
                                    @if ($errors->has('juara_lomba_kab_2'))
                                    <span class="help-block">{{$errors->first('juara_lomba_kab_2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('juara_lomba_kab_3') ? 'has-error' : ''}} ">
                                    <label for="juara_lomba_kab_3">
                                        <h5>Juara 3</h5>
                                    </label>
                                    <input name="juara_lomba_kab_3" type="text" class="form-control"
                                        id="juara_lomba_kab_3" aria-describedby="" placeholder=""
                                        value="{{$pemdesa->juara_lomba_kab_3}}">
                                    @if ($errors->has('juara_lomba_kab_3'))
                                    <span class="help-block">{{$errors->first('juara_lomba_kab_3')}}</span>
                                    @endif
                                </div>

                                <label>3.8. Data Lembaga Ketahanan Masyarakat Desa (LKMD)</label>
                                <div class="form-group {{$errors->has('lkmd_1') ? 'has-error' : ''}} ">
                                    <label for="lkmd_1">
                                        <h5>a. LKMD Kategori I</h5>
                                    </label>
                                    <input name="lkmd_1" type="text" class="form-control" id="lkmd_1"
                                        aria-describedby="" placeholder="" value="{{$pemdesa->lkmd_1}}">
                                    @if ($errors->has('lkmd_1'))
                                    <span class="help-block">{{$errors->first('lkmd_1')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('lkmd_2') ? 'has-error' : ''}} ">
                                    <label for="lkmd_2">
                                        <h5>b. LKMD Kategori II</h5>
                                    </label>
                                    <input name="lkmd_2" type="text" class="form-control" id="lkmd_2"
                                        aria-describedby="" placeholder="" value="{{$pemdesa->lkmd_2}}">
                                    @if ($errors->has('lkmd_2'))
                                    <span class="help-block">{{$errors->first('lkmd_2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('lkmd_3') ? 'has-error' : ''}} ">
                                    <label for="lkmd_3">
                                        <h5>c. LKMD Kategori III</h5>
                                    </label>
                                    <input name="lkmd_3" type="text" class="form-control" id="lkmd_3"
                                        aria-describedby="" placeholder="" value="{{$pemdesa->lkmd_3}}">
                                    @if ($errors->has('lkmd_3'))
                                    <span class="help-block">{{$errors->first('lkmd_3')}}</span>
                                    @endif
                                </div>

                                <label>3.9. Data Jumlah Keder Pembangunan Desa (KPD)</label>
                                <div class="form-group {{$errors->has('jumlah_kpd') ? 'has-error' : ''}} ">
                                    <label for="jumlah_kpd">
                                        <h5>a. Jumlah KPD sekecamatan</h5>
                                    </label>
                                    <input name="jumlah_kpd" type="text" class="form-control" id="jumlah_kpd"
                                        aria-describedby="" placeholder="" value="{{$pemdesa->jumlah_kpd}}">
                                    @if ($errors->has('jumlah_kpd'))
                                    <span class="help-block">{{$errors->first('jumlah_kpd')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kpd_aktif') ? 'has-error' : ''}} ">
                                    <label for="kpd_aktif">
                                        <h5>b. KPD yang aktif</h5>
                                    </label>
                                    <input name="kpd_aktif" type="text" class="form-control" id="kpd_aktif"
                                        aria-describedby="" placeholder="" value="{{$pemdesa->kpd_aktif}}">
                                    @if ($errors->has('kpd_aktif'))
                                    <span class="help-block">{{$errors->first('kpd_aktif')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kpd_taktif') ? 'has-error' : ''}} ">
                                    <label for="kpd_taktif">
                                        <h5>c. KPD yang tidak aktif</h5>
                                    </label>
                                    <input name="kpd_taktif" type="text" class="form-control" id="kpd_taktif"
                                        aria-describedby="" placeholder="" value="{{$pemdesa->kpd_taktif}}">
                                    @if ($errors->has('kpd_taktif'))
                                    <span class="help-block">{{$errors->first('kpd_taktif')}}</span>
                                    @endif
                                </div>
                                <label>
                                    <h5>d. Pembina Teknis KPD tingkat Kecamatan</h5>
                                </label>
                                <div class="form-group {{$errors->has('pembina_kpd_kec') ? 'has-error' : ''}} ">
                                    <label for="pembina_kpd_kec">
                                        <h5>d.1. Berasal dari Kantor Kecamatan</h5>
                                    </label>
                                    <input name="pembina_kpd_kec" type="text" class="form-control" id="pembina_kpd_kec"
                                        aria-describedby="" placeholder="" value="{{$pemdesa->pembina_kpd_kec}}">
                                    @if ($errors->has('pembina_kpd_kec'))
                                    <span class="help-block">{{$errors->first('pembina_kpd_kec')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('pembina_kpd_otonom') ? 'has-error' : ''}} ">
                                    <label for="pembina_kpd_otonom">
                                        <h5>d.2. Berasal dari Instansi Otonom</h5>
                                    </label>
                                    <input name="pembina_kpd_otonom" type="text" class="form-control"
                                        id="pembina_kpd_otonom" aria-describedby="" placeholder=""
                                        value="{{$pemdesa->pembina_kpd_otonom}}">
                                    @if ($errors->has('pembina_kpd_otonom'))
                                    <span class="help-block">{{$errors->first('pembina_kpd_otonom')}}</span>
                                    @endif
                                    <div
                                        class="form-group {{$errors->has('pembina_kpd_vertikal') ? 'has-error' : ''}} ">
                                        <label for="pembina_kpd_vertikal">
                                            <h5>d.3. Berasal dari Instansi Vertikal</h5>
                                        </label>
                                        <input name="pembina_kpd_vertikal" type="text" class="form-control"
                                            id="pembina_kpd_vertikal" aria-describedby="" placeholder=""
                                            value="{{$pemdesa->pembina_kpd_vertikal}}">
                                        @if ($errors->has('pembina_kpd_vertikal'))
                                        <span class="help-block">{{$errors->first('pembina_kpd_vertikal')}}</span>
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