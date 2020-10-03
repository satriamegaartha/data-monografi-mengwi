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
                            <h3 class="panel-title">Tambah Data Pemerintah Kecamatan</h3>
                        </div>
                        <div class="panel-body">                                                        
                            <form method="POST" action="/statis/pemkec/create">
                                @csrf                                                        
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">                                   
                                                <label for="tanggal">Tanggal</label>
                                                <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="" placeholder="" value="{{old('tanggal')}}">
                                                @if ($errors->has('tanggal'))
                                                <span class="help-block">{{$errors->first('tanggal')}}</span>
                                                @endif                                    
                                        </div>
                                    </div>
                                </div>                        
                                                     
                                <label for="">5.1. Kantor Pemerintah Wilayah Kecamatan</label>
                                <div class="form-group {{$errors->has('kp_status') ? 'has-error' : ''}} ">
                                    <label for="kp_status"><h5>a. Status Pemilikan</h5></label>
                                    <input name="kp_status" type="text" class="form-control" id="kp_status" aria-describedby="" placeholder="" value="{{old('kp_status')}}">
                                    @if ($errors->has('kp_status'))
                                    <span class="help-block">{{$errors->first('kp_status')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_tanah') ? 'has-error' : ''}} ">
                                    <label for="kp_tanah"><h5>b. Luas Tanah</h5></label>
                                    <input name="kp_tanah" type="text" class="form-control" id="kp_tanah" aria-describedby="" placeholder="m2" value="{{old('kp_tanah')}}">
                                    @if ($errors->has('kp_tanah'))
                                    <span class="help-block">{{$errors->first('kp_tanah')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_bangunan') ? 'has-error' : ''}} ">
                                    <label for="kp_bangunan"><h5>c. Luas Bangunan</h5></label>
                                    <input name="kp_bangunan" type="text" class="form-control" id="kp_bangunan" aria-describedby="" placeholder="m" value="{{old('kp_bangunan')}}">
                                    @if ($errors->has('kp_bangunan'))
                                    <span class="help-block">{{$errors->first('kp_bangunan')}}</span>
                                    @endif
                                </div>
                                
                                <label for=""><h5>d. Apabila Milik Pemerintah :</h5></label>
                                <div class="form-group {{$errors->has('kp_tahun') ? 'has-error' : ''}} ">
                                    <label for="kp_tahun"><h5>- Dibangun tahun </h5></label>
                                    <input name="kp_tahun" type="text" class="form-control" id="kp_tahun" aria-describedby="" placeholder="" value="{{old('kp_tahun')}}">
                                    @if ($errors->has('kp_tahun'))
                                    <span class="help-block">{{$errors->first('kp_tahun')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_sdana') ? 'has-error' : ''}} ">
                                    <label for="kp_sdana"><h5>- Sumber dana </h5></label>
                                    <input name="kp_sdana" type="text" class="form-control" id="kp_sdana" aria-describedby="" placeholder="Rp" value="{{old('kp_sdana')}}">
                                    @if ($errors->has('kp_sdana'))
                                    <span class="help-block">{{$errors->first('kp_sdana')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_apbn') ? 'has-error' : ''}} ">
                                    <label for="kp_apbn"><h5>- APBN</h5></label>
                                    <input name="kp_apbn" type="text" class="form-control" id="kp_apbn" aria-describedby="" placeholder="Rp" value="{{old('kp_apbn')}}">
                                    @if ($errors->has('kp_apbn'))
                                    <span class="help-block">{{$errors->first('kp_apbn')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_inpres') ? 'has-error' : ''}} ">
                                    <label for="kp_inpres"><h5>- INPRES  </h5></label>
                                    <input name="kp_inpres" type="text" class="form-control" id="kp_inpres" aria-describedby="" placeholder="Rp" value="{{old('kp_inpres')}}">
                                    @if ($errors->has('kp_inpres'))
                                    <span class="help-block">{{$errors->first('kp_inpres')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_apbd1') ? 'has-error' : ''}} ">
                                    <label for="kp_apbd1"><h5>- APBD I</h5></label>
                                    <input name="kp_apbd1" type="text" class="form-control" id="kp_apbd1" aria-describedby="" placeholder="Rp" value="{{old('kp_apbd1')}}">
                                    @if ($errors->has('kp_apbd1'))
                                    <span class="help-block">{{$errors->first('kp_apbd1')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_apbd2') ? 'has-error' : ''}} ">
                                    <label for="kp_apbd2"><h5>- APBD II</h5></label>
                                    <input name="kp_apbd2" type="text" class="form-control" id="kp_apbd2" aria-describedby="" placeholder="Rp" value="{{old('kp_apbd2')}}">
                                    @if ($errors->has('kp_apbd2'))
                                    <span class="help-block">{{$errors->first('kp_apbd2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_lain') ? 'has-error' : ''}} ">
                                    <label for="kp_lain"><h5>- Lain-lain yang sah</h5></label>
                                    <input name="kp_lain" type="text" class="form-control" id="kp_lain" aria-describedby="" placeholder="Rp" value="{{old('kp_lain')}}">
                                    @if ($errors->has('kp_lain'))
                                    <span class="help-block">{{$errors->first('kp_lain')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_jumlah') ? 'has-error' : ''}} ">
                                    <label for="kp_jumlah"><h5>- Jumlah</h5></label>
                                    <input name="kp_jumlah" type="text" class="form-control" id="kp_jumlah" aria-describedby="" placeholder="Rp" value="{{old('kp_jumlah')}}">
                                    @if ($errors->has('kp_jumlah'))
                                    <span class="help-block">{{$errors->first('kp_jumlah')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kp_tingkat') ? 'has-error' : ''}} ">
                                    <label for="kp_tingkat"><h5>- Bangunan Bertingkat </h5></label>
                                    <input name="kp_tingkat" type="text" class="form-control" id="kp_tingkat" aria-describedby="" placeholder="Ya/Tidak" value="{{old('kp_tingkat')}}">
                                    @if ($errors->has('kp_tingkat'))
                                    <span class="help-block">{{$errors->first('kp_tingkat')}}</span>
                                    @endif
                                </div>
                                
                                <label for="">5.2. Rumah Jabatan Camat </label>
                                <div class="form-group {{$errors->has('rc_status') ? 'has-error' : ''}} ">
                                    <label for="rc_status"><h5>a. Status Rumah Jabatan Camat </h5></label>
                                    <input name="rc_status" type="text" class="form-control" id="rc_status" aria-describedby="" placeholder="" value="{{old('rc_status')}}">
                                    @if ($errors->has('rc_status'))
                                    <span class="help-block">{{$errors->first('rc_status')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rc_luas') ? 'has-error' : ''}} ">
                                    <label for="rc_luas"><h5>b. Luas Bangunan</h5></label>
                                    <input name="rc_luas" type="text" class="form-control" id="rc_luas" aria-describedby="" placeholder="m2" value="{{old('rc_luas')}}">
                                    @if ($errors->has('rc_luas'))
                                    <span class="help-block">{{$errors->first('rc_luas')}}</span>
                                    @endif
                                </div>
                                <label for=""><h5>c. Apabila Milik Pemerintah : </h5></label>
                                <div class="form-group {{$errors->has('rc_tahun') ? 'has-error' : ''}} ">
                                    <label for="rc_tahun"><h5>- Dibangun Tahun</h5></label>
                                    <input name="rc_tahun" type="text" class="form-control" id="rc_tahun" aria-describedby="" placeholder="" value="{{old('rc_tahun')}}">
                                    @if ($errors->has('rc_tahun'))
                                    <span class="help-block">{{$errors->first('rc_tahun')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rc_sdana') ? 'has-error' : ''}} ">
                                    <label for="rc_sdana"><h5>- Sumber dana  </h5></label>
                                    <input name="rc_sdana" type="text" class="form-control" id="rc_sdana" aria-describedby="" placeholder="Rp" value="{{old('rc_sdana')}}">
                                    @if ($errors->has('rc_sdana'))
                                    <span class="help-block">{{$errors->first('rc_sdana')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rc_apbn') ? 'has-error' : ''}} ">
                                    <label for="rc_apbn"><h5>- APBN</h5></label>
                                    <input name="rc_apbn" type="text" class="form-control" id="rc_apbn" aria-describedby="" placeholder="Rp" value="{{old('rc_apbn')}}">
                                    @if ($errors->has('rc_apbn'))
                                    <span class="help-block">{{$errors->first('rc_apbn')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rc_apbd1') ? 'has-error' : ''}} ">
                                    <label for="rc_apbd1"><h5>- APBD I</h5></label>
                                    <input name="rc_apbd1" type="text" class="form-control" id="rc_apbd1" aria-describedby="" placeholder="Rp" value="{{old('rc_apbd1')}}">
                                    @if ($errors->has('rc_apbd1'))
                                    <span class="help-block">{{$errors->first('rc_apbd1')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rc_apbd2') ? 'has-error' : ''}} ">
                                    <label for="rc_apbd2"><h5>- APBD II</h5></label>
                                    <input name="rc_apbd2" type="text" class="form-control" id="rc_apbd2" aria-describedby="" placeholder="Rp" value="{{old('rc_apbd2')}}">
                                    @if ($errors->has('rc_apbd2'))
                                    <span class="help-block">{{$errors->first('rc_apbd2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rc_swadaya') ? 'has-error' : ''}} ">
                                    <label for="rc_swadaya"><h5>- Swadaya</h5></label>
                                    <input name="rc_swadaya" type="text" class="form-control" id="rc_swadaya" aria-describedby="" placeholder="Rp" value="{{old('rc_swadaya')}}">
                                    @if ($errors->has('rc_swadaya'))
                                    <span class="help-block">{{$errors->first('rc_swadaya')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rc_jumlah') ? 'has-error' : ''}} ">
                                    <label for="rc_jumlah"><h5>- Jumlah  </h5></label>
                                    <input name="rc_jumlah" type="text" class="form-control" id="rc_jumlah" aria-describedby="" placeholder="Rp" value="{{old('rc_jumlah')}}">
                                    @if ($errors->has('rc_jumlah'))
                                    <span class="help-block">{{$errors->first('rc_jumlah')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('rc_kondisi') ? 'has-error' : ''}} ">
                                    <label for="rc_kondisi"><h5>d. Kondisi Bangunan </h5></label>
                                    <input name="rc_kondisi" type="text" class="form-control" id="rc_kondisi" aria-describedby="" placeholder="" value="{{old('rc_kondisi')}}">
                                    @if ($errors->has('rc_kondisi'))
                                    <span class="help-block">{{$errors->first('rc_kondisi')}}</span>
                                    @endif
                                </div>
                                <label for="">5.3. Jumlah Instansi Pemerintah yang ada Di Wilayah Kecamatan</label>
                                <div class="form-group {{$errors->has('ins_vertikal') ? 'has-error' : ''}} ">
                                    <label for="ins_vertikal"><h5>a. Instansi Vertikal</h5></label>
                                    <input name="ins_vertikal" type="text" class="form-control" id="ins_vertikal" aria-describedby="" placeholder="Unit" value="{{old('ins_vertikal')}}">
                                    @if ($errors->has('ins_vertikal'))
                                    <span class="help-block">{{$errors->first('ins_vertikal')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('ins_otonom') ? 'has-error' : ''}} ">
                                    <label for="ins_otonom"><h5>b. Instansi Otonom</h5></label>
                                    <input name="ins_otonom" type="text" class="form-control" id="ins_otonom" aria-describedby="" placeholder="Unit" value="{{old('ins_otonom')}}">
                                    @if ($errors->has('ins_otonom'))
                                    <span class="help-block">{{$errors->first('ins_otonom')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('ins_bumn') ? 'has-error' : ''}} ">
                                    <label for="ins_bumn"><h5>c. Instansi BUMN/BUMD</h5></label>
                                    <input name="ins_bumn" type="text" class="form-control" id="ins_bumn" aria-describedby="" placeholder="Unit" value="{{old('ins_bumn')}}">
                                    @if ($errors->has('ins_bumn'))
                                    <span class="help-block">{{$errors->first('ins_bumn')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('ins_jumlah') ? 'has-error' : ''}} ">
                                    <label for="ins_jumlah"><h5>d. Jumlah a+b+c</h5></label>
                                    <input name="ins_jumlah" type="text" class="form-control" id="ins_jumlah" aria-describedby="" placeholder="Unit" value="{{old('ins_jumlah')}}">
                                    @if ($errors->has('ins_jumlah'))
                                    <span class="help-block">{{$errors->first('ins_jumlah')}}</span>
                                    @endif
                                </div>
                                
                                <label for="">5.4. Jenis Pegawai Kantor Kecamatan :</label>
                                <div class="form-group {{$errors->has('pegawai_dpk1') ? 'has-error' : ''}} ">
                                    <label for="pegawai_dpk1"><h5>a. Pegawai Pusat Dpk</h5></label>
                                    <input name="pegawai_dpk1" type="text" class="form-control" id="pegawai_dpk1" aria-describedby="" placeholder="Orang" value="{{old('pegawai_dpk1')}}">
                                    @if ($errors->has('pegawai_dpk1'))
                                    <span class="help-block">{{$errors->first('pegawai_dpk1')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('pegawai_dpk2') ? 'has-error' : ''}} ">
                                    <label for="pegawai_dpk2"><h5>b. Pegawai Pusat Dpk</h5></label>
                                    <input name="pegawai_dpk2" type="text" class="form-control" id="pegawai_dpk2" aria-describedby="" placeholder="Orang" value="{{old('pegawai_dpk2')}}">
                                    @if ($errors->has('pegawai_dpk2'))
                                    <span class="help-block">{{$errors->first('pegawai_dpk2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('pegawai_daerah') ? 'has-error' : ''}} ">
                                    <label for="pegawai_daerah"><h5>c. Pegawai Daerah/Otonom</h5></label>
                                    <input name="pegawai_daerah" type="text" class="form-control" id="pegawai_daerah" aria-describedby="" placeholder="Orang" value="{{old('pegawai_daerah')}}">
                                    @if ($errors->has('pegawai_daerah'))
                                    <span class="help-block">{{$errors->first('pegawai_daerah')}}</span>
                                    @endif
                                </div>
                                
                                
                                <label for="">5.5. Eselonering Jabatan Perangkat Tingkat Kecamatan </label>
                                <div class="form-group {{$errors->has('eselon3a') ? 'has-error' : ''}} ">
                                    <label for="eselon3a"><h5>a. Eselon III a  </h5></label>
                                    <input name="eselon3a" type="text" class="form-control" id="eselon3a" aria-describedby="" placeholder="Pejabat" value="{{old('eselon3a')}}">
                                    @if ($errors->has('eselon3a'))
                                    <span class="help-block">{{$errors->first('eselon3a')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('eselon3b') ? 'has-error' : ''}} ">
                                    <label for="eselon3b"><h5>b. Eselon III b</h5></label>
                                    <input name="eselon3b" type="text" class="form-control" id="eselon3b" aria-describedby="" placeholder="Pejabat" value="{{old('eselon3b')}}">
                                    @if ($errors->has('eselon3b'))
                                    <span class="help-block">{{$errors->first('eselon3b')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('eselon4') ? 'has-error' : ''}} ">
                                    <label for="eselon4"><h5>c. Eselon IV</h5></label>
                                    <input name="eselon4" type="text" class="form-control" id="eselon4" aria-describedby="" placeholder="Pejabat" value="{{old('eselon4')}}">
                                    @if ($errors->has('eselon4'))
                                    <span class="help-block">{{$errors->first('eselon4')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('eselon5') ? 'has-error' : ''}} ">
                                    <label for="eselon5"><h5>d. Eselon V</h5></label>
                                    <input name="eselon5" type="text" class="form-control" id="eselon5" aria-describedby="" placeholder="Pejabat" value="{{old('eselon5')}}">
                                    @if ($errors->has('eselon5'))
                                    <span class="help-block">{{$errors->first('eselon5')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('tipe_kec') ? 'has-error' : ''}} ">
                                    <label for="tipe_kec">5.6. Tipe Kecamatan</label>
                                    <input name="tipe_kec" type="text" class="form-control" id="tipe_kec" aria-describedby="" placeholder="" value="{{old('tipe_kec')}}">
                                    @if ($errors->has('tipe_kec'))
                                    <span class="help-block">{{$errors->first('tipe_kec')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('lomba_kec') ? 'has-error' : ''}} ">
                                    <label for="lomba_kec">5.7. Lomba antar Kecamatan yang pernah Diadakan</label>
                                    <input name="lomba_kec" type="text" class="form-control" id="lomba_kec" aria-describedby="" placeholder="" value="{{old('lomba_kec')}}">
                                    @if ($errors->has('lomba_kec'))
                                    <span class="help-block">{{$errors->first('lomba_kec')}}</span>
                                    @endif
                                </div>
                                
                                
                                <label for="">5.8. Kejuaraan Lomba Antar Kecamatan Yang pernah diraih</label>
                                <div class="form-group {{$errors->has('lomba_kec_juara1') ? 'has-error' : ''}} ">
                                    <label for="lomba_kec_juara1"><h5>a. Juara I / TK Kota</h5></label>
                                    <input name="lomba_kec_juara1" type="text" class="form-control" id="lomba_kec_juara1" aria-describedby="" placeholder="Kali" value="{{old('lomba_kec_juara1')}}">
                                    @if ($errors->has('lomba_kec_juara1'))
                                    <span class="help-block">{{$errors->first('lomba_kec_juara1')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('lomba_kec_juara2') ? 'has-error' : ''}} ">
                                    <label for="lomba_kec_juara2"><h5> b. Juara II</h5></label>
                                    <input name="lomba_kec_juara2" type="text" class="form-control" id="lomba_kec_juara2" aria-describedby="" placeholder="Kali" value="{{old('lomba_kec_juara2')}}">
                                    @if ($errors->has('lomba_kec_juara2'))
                                    <span class="help-block">{{$errors->first('lomba_kec_juara2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('lomba_kec_juara3') ? 'has-error' : ''}} ">
                                    <label for="lomba_kec_juara3"><h5> c. Juara III / Propinsi  </h5></label>
                                    <input name="lomba_kec_juara3" type="text" class="form-control" id="lomba_kec_juara3" aria-describedby="" placeholder="Kali" value="{{old('lomba_kec_juara3')}}">
                                    @if ($errors->has('lomba_kec_juara3'))
                                    <span class="help-block">{{$errors->first('lomba_kec_juara3')}}</span>
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