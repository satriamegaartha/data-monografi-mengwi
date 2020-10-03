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
                            <h3 class="panel-title">Data Pemerintahan Kecamatan</h3>
                            <h4>{{date_format(date_create($pemkecamatan->tanggal),"d F Y")}}</h4>
                        </div>
                        <div class="panel-body">                                                        
                            <form method="POST" action="/dinamis/pemkecamatan/{{$pemkecamatan->id}}/update">
                                @csrf                                                        
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}} ">                                   
                                                <label for="tanggal">Tanggal</label>
                                                <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="" placeholder="" value="{{$pemkecamatan->tanggal}}">
                                                @if ($errors->has('tanggal'))
                                                <span class="help-block">{{$errors->first('tanggal')}}</span>
                                                @endif                                    
                                        </div>
                                    </div>
                                </div>            
                                <label for=""><h5><strong>A.  PEMERINTAHAN KECAMATAN </strong></h5></label>                                                                                                 
                                <div class="form-group {{$errors->has('jml_pegawai_ktr') ? 'has-error' : ''}} ">
                                    <label for="jml_pegawai_ktr"><h5><strong>1. Jumlah Pegawai Kantor Kecamatan</strong></h5></label>
                                    <input name="jml_pegawai_ktr" type="text" class="form-control" id="jml_pegawai_ktr" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_pegawai_ktr}}">
                                    @if ($errors->has('jml_pegawai_ktr'))
                                    <span class="help-block">{{$errors->first('jml_pegawai_ktr')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jml_pegawai_ktr_gol4') ? 'has-error' : ''}} ">
                                    <label for="jml_pegawai_ktr_gol4"><h5>a. Pegawai Golongan IV </h5></label>
                                    <input name="jml_pegawai_ktr_gol4" type="text" class="form-control" id="jml_pegawai_ktr_gol4" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_pegawai_ktr_gol4}}">
                                    @if ($errors->has('jml_pegawai_ktr_gol4'))
                                    <span class="help-block">{{$errors->first('jml_pegawai_ktr_gol4')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jml_pegawai_ktr_gol3') ? 'has-error' : ''}} ">
                                    <label for="jml_pegawai_ktr_gol3"><h5>b. Pegawai Golongan III </h5></label>
                                    <input name="jml_pegawai_ktr_gol3" type="text" class="form-control" id="jml_pegawai_ktr_gol3" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_pegawai_ktr_gol3}}">
                                    @if ($errors->has('jml_pegawai_ktr_gol3'))
                                    <span class="help-block">{{$errors->first('jml_pegawai_ktr_gol3')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jml_pegawai_ktr_gol2') ? 'has-error' : ''}} ">
                                    <label for="jml_pegawai_ktr_gol2"><h5>c. Pegawai Golongan II</h5></label>
                                    <input name="jml_pegawai_ktr_gol2" type="text" class="form-control" id="jml_pegawai_ktr_gol2" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_pegawai_ktr_gol2}}">
                                    @if ($errors->has('jml_pegawai_ktr_gol2'))
                                    <span class="help-block">{{$errors->first('jml_pegawai_ktr_gol2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jml_pegawai_ktr_gol1') ? 'has-error' : ''}} ">
                                    <label for="jml_pegawai_ktr_gol1"><h5>d. Pegawai Golongan I</h5></label>
                                    <input name="jml_pegawai_ktr_gol1" type="text" class="form-control" id="jml_pegawai_ktr_gol1" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_pegawai_ktr_gol1}}">
                                    @if ($errors->has('jml_pegawai_ktr_gol1'))
                                    <span class="help-block">{{$errors->first('jml_pegawai_ktr_gol1')}}</span>
                                    @endif
                                </div>
                                







                                
                                <div class="form-group {{$errors->has('jml_non_pegawai_ktr') ? 'has-error' : ''}} ">
                                    <label for="jml_non_pegawai_ktr"><h5><strong>2. Jumlah Pegawai Instansi Vertikal dan Otonom di Tingkat Kecamatan Non Pegawai Kecamatan :</strong></h5></label>
                                    <input name="jml_non_pegawai_ktr" type="text" class="form-control" id="jml_non_pegawai_ktr" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_non_pegawai_ktr}}">
                                    @if ($errors->has('jml_non_pegawai_ktr'))
                                    <span class="help-block">{{$errors->first('jml_non_pegawai_ktr')}}</span>
                                    @endif
                                </div>                  
                                <div class="form-group {{$errors->has('jml_non_pegawai_ktr_gol4') ? 'has-error' : ''}} ">
                                    <label for="jml_non_pegawai_ktr_gol4"><h5>a. Pegawai Golongan IV </h5></label>
                                    <input name="jml_non_pegawai_ktr_gol4" type="text" class="form-control" id="jml_non_pegawai_ktr_gol4" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_non_pegawai_ktr_gol4}}">
                                    @if ($errors->has('jml_non_pegawai_ktr_gol4'))
                                    <span class="help-block">{{$errors->first('jml_non_pegawai_ktr_gol4')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jml_non_pegawai_ktr_gol3') ? 'has-error' : ''}} ">
                                    <label for="jml_non_pegawai_ktr_gol3"><h5>b. Pegawai Golongan III </h5></label>
                                    <input name="jml_non_pegawai_ktr_gol3" type="text" class="form-control" id="jml_non_pegawai_ktr_gol3" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_non_pegawai_ktr_gol3}}">
                                    @if ($errors->has('jml_non_pegawai_ktr_gol3'))
                                    <span class="help-block">{{$errors->first('jml_non_pegawai_ktr_gol3')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jml_non_pegawai_ktr_gol2') ? 'has-error' : ''}} ">
                                    <label for="jml_non_pegawai_ktr_gol2"><h5>c. Pegawai Golongan II</h5></label>
                                    <input name="jml_non_pegawai_ktr_gol2" type="text" class="form-control" id="jml_non_pegawai_ktr_gol2" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_non_pegawai_ktr_gol2}}">
                                    @if ($errors->has('jml_non_pegawai_ktr_gol2'))
                                    <span class="help-block">{{$errors->first('jml_non_pegawai_ktr_gol2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('jml_non_pegawai_ktr_gol1') ? 'has-error' : ''}} ">
                                    <label for="jml_non_pegawai_ktr_gol1"><h5>d. Pegawai Golongan I</h5></label>
                                    <input name="jml_non_pegawai_ktr_gol1" type="text" class="form-control" id="jml_non_pegawai_ktr_gol1" aria-describedby="" placeholder="Pegawai" value="{{$pemkecamatan->jml_non_pegawai_ktr_gol1}}">
                                    @if ($errors->has('jml_non_pegawai_ktr_gol1'))
                                    <span class="help-block">{{$errors->first('jml_non_pegawai_ktr_gol1')}}</span>
                                    @endif
                                </div>
                                






                                <label for=""><h5><strong>3. Sarana kerja kantor Kecamatan : </strong></h5></label>

                                <div class="form-group {{$errors->has('telepon') ? 'has-error' : ''}} ">
                                    <label for="telepon"><h5>a. Telepon Otomat/Non otomat</h5></label>
                                    <input name="telepon" type="text" class="form-control" id="telepon" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->telepon}}">
                                    @if ($errors->has('telepon'))
                                    <span class="help-block">{{$errors->first('telepon')}}</span>
                                    @endif
                                </div>                  
                                <div class="form-group {{$errors->has('radio') ? 'has-error' : ''}} ">
                                    <label for="radio"><h5>b. Radio Telekomunikasi  </h5></label>
                                    <input name="radio" type="text" class="form-control" id="radio" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->radio}}">
                                    @if ($errors->has('radio'))
                                    <span class="help-block">{{$errors->first('radio')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('mesin_tik') ? 'has-error' : ''}} ">
                                    <label for="mesin_tik"><h5>c. Jumlah Mesin Tik</h5></label>
                                    <input name="mesin_tik" type="text" class="form-control" id="mesin_tik" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->mesin_tik}}">
                                    @if ($errors->has('mesin_tik'))
                                    <span class="help-block">{{$errors->first('mesin_tik')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('meja_kerja') ? 'has-error' : ''}} ">
                                    <label for="meja_kerja"><h5>d. Meja Kerja  </h5></label>
                                    <input name="meja_kerja" type="text" class="form-control" id="meja_kerja" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->meja_kerja}}">
                                    @if ($errors->has('meja_kerja'))
                                    <span class="help-block">{{$errors->first('meja_kerja')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kursi_kerja') ? 'has-error' : ''}} ">
                                    <label for="kursi_kerja"><h5>e. Kursi Kerja</h5></label>
                                    <input name="kursi_kerja" type="text" class="form-control" id="kursi_kerja" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->kursi_kerja}}">
                                    @if ($errors->has('kursi_kerja'))
                                    <span class="help-block">{{$errors->first('kursi_kerja')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('meja_kursi_tamu') ? 'has-error' : ''}} ">
                                    <label for="meja_kursi_tamu"><h5>f. Meja Kursi Tamu</h5></label>
                                    <input name="meja_kursi_tamu" type="text" class="form-control" id="meja_kursi_tamu" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->meja_kursi_tamu}}">
                                    @if ($errors->has('meja_kursi_tamu'))
                                    <span class="help-block">{{$errors->first('meja_kursi_tamu')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('lemari') ? 'has-error' : ''}} ">
                                    <label for="lemari"><h5>g. Lemari/Kardek</h5></label>
                                    <input name="lemari" type="text" class="form-control" id="lemari" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->lemari}}">
                                    @if ($errors->has('lemari'))
                                    <span class="help-block">{{$errors->first('lemari')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('r_rapat') ? 'has-error' : ''}} ">
                                    <label for="r_rapat"><h5>h. Ruang Rapat</h5></label>
                                    <input name="r_rapat" type="text" class="form-control" id="r_rapat" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->r_rapat}}">
                                    @if ($errors->has('r_rapat'))
                                    <span class="help-block">{{$errors->first('r_rapat')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('r_data') ? 'has-error' : ''}} ">
                                    <label for="r_data"><h5>i. Ruang Data/Operator Room </h5></label>
                                    <input name="r_data" type="text" class="form-control" id="r_data" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->r_data}}">
                                    @if ($errors->has('r_data'))
                                    <span class="help-block">{{$errors->first('r_data')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('serba_guna') ? 'has-error' : ''}} ">
                                    <label for="serba_guna"><h5>j. Gedung Serba Guna</h5></label>
                                    <input name="serba_guna" type="text" class="form-control" id="serba_guna" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->serba_guna}}">
                                    @if ($errors->has('serba_guna'))
                                    <span class="help-block">{{$errors->first('serba_guna')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('balai_pertemuan') ? 'has-error' : ''}} ">
                                    <label for="balai_pertemuan"><h5>k. Balai Pertemuan</h5></label>
                                    <input name="balai_pertemuan" type="text" class="form-control" id="balai_pertemuan" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->balai_pertemuan}}">
                                    @if ($errors->has('balai_pertemuan'))
                                    <span class="help-block">{{$errors->first('balai_pertemuan')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kendaraan_roda2') ? 'has-error' : ''}} ">
                                    <label for="kendaraan_roda2"><h5>l. Kendaraan Dinas Roda 2</h5></label>
                                    <input name="kendaraan_roda2" type="text" class="form-control" id="kendaraan_roda2" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->kendaraan_roda2}}">
                                    @if ($errors->has('kendaraan_roda2'))
                                    <span class="help-block">{{$errors->first('kendaraan_roda2')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('kendaraan_roda4') ? 'has-error' : ''}} ">
                                    <label for="kendaraan_roda4"><h5>m. Kendaraan Dinas Roda 4</h5></label>
                                    <input name="kendaraan_roda4" type="text" class="form-control" id="kendaraan_roda4" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->kendaraan_roda4}}">
                                    @if ($errors->has('kendaraan_roda4'))
                                    <span class="help-block">{{$errors->first('kendaraan_roda4')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('mesin_hitung') ? 'has-error' : ''}} ">
                                    <label for="mesin_hitung"><h5>n. Mesin Hitung</h5></label>
                                    <input name="mesin_hitung" type="text" class="form-control" id="mesin_hitung" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->mesin_hitung}}">
                                    @if ($errors->has('mesin_hitung'))
                                    <span class="help-block">{{$errors->first('mesin_hitung')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('lain') ? 'has-error' : ''}} ">
                                    <label for="lain"><h5>o. Lain-lain</h5></label>
                                    <input name="lain" type="text" class="form-control" id="lain" aria-describedby="" placeholder="Buah" value="{{$pemkecamatan->lain}}">
                                    @if ($errors->has('lain'))
                                    <span class="help-block">{{$errors->first('lain')}}</span>
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