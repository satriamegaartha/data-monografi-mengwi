<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Monografi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family:Arial, Helvetica, sans-serif;
        }
        body{
            padding-top:50px;            
            padding-bottom:50px;            
            padding-left: 250px;
            padding-right: 250px;
        }
        .center{
            text-align: center;        
            line-height: 60%;
            margin: 15px;
        }
        hr{
            margin:0;
        }
        .content{
            font-size: 14px;
            margin:5px        
        }
        td{
            font-size: 12px;
        }
        .left{
            text-align: left;
        }
        .table-add tr{
            border: 1px solid black;
        }
        .table-add td{
            border: 1px solid black;
        }
        .white{
            color: white;
        }
        .table-add{ 
            margin-left: 45px;           
            border: 1px solid black;
            border-collapse:collapse;
        }
        .table-add tr,.table-add td{
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 2px;
            padding-bottom: 2px;
        }
    </style>
</head>
<body>
    
    <h2 class="center">DATA MONOGRAFI KECAMATAN</h1>
    <p class="center">KECAMATAN : MENGWI</p>
    <p class="center">KABUPATEN : BADUNG</p>
    <p class="center">PROPINSI : BALI</p>
    <p class="center">TAHUN : {{date_format(date_create($kumum->tanggal), "Y")}}</p>
    <p class="center">BULAN  : {{$sem}}</p>

    <hr><hr><br>


    <table class="table">        
        <tr>
            <td colspan="6"><strong>I. DATA STATIS</strong></td>                     
        </tr>
        <tr>
            <td></td>
            <td colspan="5">1.  KETERANGAN UMUM</td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>1.1.</td> 
            <td >Tinggi Pusat Pemerintahan Wilayah</td>            
            <td> : </td>            
            <td>{{$kumum->tinggi_pusat}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Kecamatan dari permukaan laut</td>            
            <td> : </td>
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>1.2.</td> 
            <td >Suhu maximum/minimum</td>            
            <td> : </td>            
            <td>{{$kumum->suhu_max_min}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>1.3.</td> 
            <td>Jarak Pusat Pemerintahan Wilayah Kecamatan dengan</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Desa/Kelurahan yang terjauh</td>            
            <td> : </td>
            <td>{{$kumum->jpp_desa}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b.  Ibukota Kabupaten/Kota</td>            
            <td> : </td>
            <td>{{$kumum->jpp_kabupaten}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c.  Ibukota Propinsi</td>            
            <td> : </td>
            <td>{{$kumum->jpp_propinsi}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>1.4.</td> 
            <td>Curah hujan</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Jumlah hari dengan curah hujan yang terbanyak</td>            
            <td> : </td>
            <td>{{$kumum->ch_jumlah_hari}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b.  Banyaknya curah</td>            
            <td> : </td>
            <td>{{$kumum->ch_banyaknya}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>1.5.</td> 
            <td>Bentuk Wilayah</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Datar sampai berombak </td>            
            <td> : </td>
            <td>{{$kumum->bw_datar_berombak}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b.  Berombak sampai berbukit</td>            
            <td> : </td>
            <td>{{$kumum->bw_berombak_berbukit}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c.  Berbukit sampai bergunung</td>            
            <td> : </td>
            <td>{{$kumum->bw_berbukit_bergunung}}</td>            
        </tr>

        <tr>
            <td></td>
            <td colspan="5">2.  LUAS DAERAH/WILAYAH </td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>2.1.</td> 
            <td>Tanah Sawah</td>            
            <td> : </td>            
            <td>{{$ldaerah->tanah_sawah}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Irigasi Teknis</td>            
            <td> : </td>
            <td>{{$ldaerah->ts_iteknis}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b.  Irigasi setengah Teknis</td>            
            <td> : </td>
            <td>{{$ldaerah->ts_isteknis}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c.  Irigasi sederhana</td>            
            <td> : </td>
            <td>{{$ldaerah->ts_isederhana}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d.  Tadah hujan/sawah rendengan</td>            
            <td> : </td>
            <td>{{$ldaerah->ts_tadah_hujan}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>e.  Sawah Padang Surut</td>            
            <td> : </td>
            <td>{{$ldaerah->ts_sawah}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>2.2.</td> 
            <td>Tanah Kering</td>            
            <td> : </td>            
            <td>{{$ldaerah->tanah_kering}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Pekarangan/bangunan/emplasemen</td>            
            <td> : </td>
            <td>{{$ldaerah->tk_pekarangan}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b.  Tegal/kebun</td>            
            <td> : </td>
            <td>{{$ldaerah->tk_tegal}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c.  Ladang / tanah huma</td>            
            <td> : </td>
            <td>{{$ldaerah->tk_ladang}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d.  Ladang penggembalaan/pangonan</td>            
            <td> : </td>
            <td>{{$ldaerah->tk_penggembalaan}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>2.3.</td> 
            <td>Tanah Basah</td>            
            <td> : </td>            
            <td>{{$ldaerah->tanah_basah}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Tambak</td>            
            <td> : </td>
            <td>{{$ldaerah->tb_tambak}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Rawa/Pasang Surut</td>            
            <td> : </td>
            <td>{{$ldaerah->tb_rawa}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c.  Balong/Empang/Kolam</td>            
            <td> : </td>
            <td>{{$ldaerah->tb_balong}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d.  Tanah Gambut</td>            
            <td> : </td>
            <td>{{$ldaerah->tb_gambut}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>2.4.</td> 
            <td>Tanah Hutan</td>            
            <td> : </td>            
            <td>{{$ldaerah->tanah_hutan}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Hutan Lebat</td>            
            <td> : </td>
            <td>{{$ldaerah->th_lebat}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b.  Hutan Belukar</td>            
            <td> : </td>
            <td>{{$ldaerah->th_belukar}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Hutan Sejenis</td>            
            <td> : </td>
            <td>{{$ldaerah->th_sejenis1}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d.  Hutan Sejenis</td>            
            <td> : </td>
            <td>{{$ldaerah->th_sejenis2}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>e. Hutan Rawa </td>            
            <td> : </td>
            <td>{{$ldaerah->th_rawa}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>2.5.</td> 
            <td>Tanah Perkebunan</td>            
            <td> : </td>            
            <td>{{$ldaerah->tanah_perkebunan}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Perkebunan Negara</td>            
            <td> : </td>
            <td>{{$ldaerah->tp_negara}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Perkebunan Swasta</td>            
            <td> : </td>
            <td>{{$ldaerah->tp_swasta}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>2.6.</td> 
            <td>Tanah Keperluan Fasilitas Umum</td>            
            <td> : </td>            
            <td>{{$ldaerah->tanah_umum}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a.  Lapangan Olah Raga</td>            
            <td> : </td>
            <td>{{$ldaerah->tu_lapangan}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b.  Taman Rekreasi</td>            
            <td> : </td>
            <td>{{$ldaerah->tu_rekreasi}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c.  Jalur Hijau</td>            
            <td> : </td>
            <td>{{$ldaerah->tu_jalur_hijau}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d.  Kuburan</td>            
            <td> : </td>
            <td>{{$ldaerah->tu_kuburan}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>2.7.</td> 
            <td>Lain-lain (tanah tandus, tanah pasir)</td>            
            <td> : </td>            
            <td>{{$ldaerah->tanah_lain_lain}} </td>            
        </tr>       
        <tr>
            <td></td>
            <td colspan="5">3.  PEMERINTAHAN DESA /KELURAHAN</td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>3.1.</td> 
            <td>Desa</td>            
            <td> : </td>            
            <td>{{$pemdesa->desa}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>3.2.</td> 
            <td>Kelurahan</td>            
            <td> : </td>            
            <td>{{$pemdesa->kelurahan}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>3.3.</td> 
            <td>Lingkungan / Dusun</td>            
            <td> : </td>            
            <td>{{$pemdesa->dusun}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>3.4</td> 
            <td>Rukun Warga (RW)</td>            
            <td> : </td>            
            <td>{{$pemdesa->rw}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>3.5.</td> 
            <td>Rukun Tetangga</td>            
            <td> : </td>            
            <td>{{$pemdesa->rt}} </td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>3.6.</td> 
            <td>Desa / Kelurahan</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Desa Swadaya</td>            
            <td> : </td>
            <td>{{$pemdesa->desa_swadaya}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Desa Swakarya</td>            
            <td> : </td>
            <td>{{$pemdesa->desa_swakarya}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Desa Swasembada</td>            
            <td> : </td>
            <td>{{$pemdesa->desa_swasembada}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>3.7.</td> 
            <td>Kejuaraan Lomba Desa yang pernah didapat</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Tingkat Kecamatan</td>            
            <td> : </td>
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aa</span>Juara I</td>            
            <td> : </td>
            <td>{{$pemdesa->juara_lomba_kec_1}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aa</span>Juara II</td>            
            <td> : </td>
            <td>{{$pemdesa->juara_lomba_kec_2}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aa</span>Juara III</td>            
            <td> : </td>
            <td>{{$pemdesa->juara_lomba_kec_3}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Tingkat Kabupaten</td>            
            <td> : </td>
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aa</span>Juara I</td>            
            <td> : </td>
            <td>{{$pemdesa->juara_lomba_kab_1}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aa</span>Juara II</td>            
            <td> : </td>
            <td>{{$pemdesa->juara_lomba_kab_2}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aa</span>Juara III</td>            
            <td> : </td>
            <td>{{$pemdesa->juara_lomba_kab_3}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>3.8.</td> 
            <td>Data Lembaga Ketahanan Masyarakat Desa (LKMD)</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. LKMD Kategori I</td>            
            <td> : </td>
            <td>{{$pemdesa->lkmd_1}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. LKMD Kategori II</td>            
            <td> : </td>
            <td>{{$pemdesa->lkmd_2}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. LKMD Kategori III</td>            
            <td> : </td>
            <td>{{$pemdesa->lkmd_3}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>3.9.</td> 
            <td>Data Jumlah Keder Pembangunan Desa (KPD)</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Jumlah KPD sekecamatan</td>            
            <td> : </td>
            <td>{{$pemdesa->jumlah_kpd}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. KPD yang aktif</td>            
            <td> : </td>
            <td>{{$pemdesa->kpd_aktif}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. KPD yang tidak aktif</td>            
            <td> : </td>
            <td>{{$pemdesa->kpd_taktif}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Pembina Teknis KPD tingkat Kecamatan</td>            
            <td> : </td>
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaa</span> d.1. Berasal dari Kantor Kecamatan</td>            
            <td> : </td>
            <td>{{$pemdesa->pembina_kpd_kec}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaa</span> d.2. Berasal dari Instansi Otonom</td>            
            <td> : </td>
            <td>{{$pemdesa->pembina_kpd_otonom}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">a.aa</span>d.3. Berasal dari Instansi Vertikal</td>            
            <td> : </td>
            <td>{{$pemdesa->pembina_kpd_vertikal}}</td>            
        </tr>
        <tr>
            <td></td>
            <td colspan="5">4. PRASARANA PEMERINTAH DESA/KELURAHAN SEKECAMATAN  </td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>4.1.</td> 
            <td>Balai Desa/Kelurahan</td>            
            <td> : </td>            
            <td>{{$prasarana->balai_desa}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>4.2.</td> 
            <td>Kantor Desa/Kelurahan</td>            
            <td> : </td>            
            <td>{{$prasarana->kantor_desa}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>4.3.</td> 
            <td>Banyaknya Bengkok Perangkat Desa</td>            
            <td> : </td>            
            <td></td>            
        </tr>        
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Tanah Sawah</td>            
            <td> : </td>
            <td>{{$prasarana->bengkok_sawah}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Tanah Kering</td>            
            <td> : </td>
            <td>{{$prasarana->bengkok_kering}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Tambak/Kolam</td>            
            <td> : </td>
            <td>{{$prasarana->bengkok_tambak}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Lain-lain</td>            
            <td> : </td>
            <td>{{$prasarana->bengkok_lain}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>4.4.</td> 
            <td>Tanah Kas Desa/Areal Lainnya untuk Kepentingan Desa/Kelurahan </td>            
            <td> : </td>            
            <td></td>            
        </tr>        
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Tanah Sawah</td>            
            <td> : </td>
            <td>{{$prasarana->kas_sawah}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Tanah Kering</td>            
            <td> : </td>
            <td>{{$prasarana->kas_kering}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Tambak/Kolam</td>            
            <td> : </td>
            <td>{{$prasarana->kas_tambak}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Rawa-rawa</td>            
            <td> : </td>
            <td>{{$prasarana->kas_rawa}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>e. Lain-lain</td>            
            <td> : </td>
            <td>{{$prasarana->kas_lain}}</td>            
        </tr>

        <tr>
            <td></td>
            <td colspan="5">5.  PEMERINTAH KECAMATAN</td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>5.1.</td> 
            <td>Kantor Pemerintah Wilayah Kecamatan </td>            
            <td></td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>5.1.</td> 
            <td>Kantor Pemerintah Wilayah Kecamatan </td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Status Pemilikan </td>            
            <td> : </td>
            <td>{{$pemkec->kp_status}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Luas Tanah</td>
            <td> : </td>
            <td>{{$pemkec->kp_tanah}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Luas Bangunan</td>
            <td> : </td>
            <td>{{$pemkec->kp_bangunan}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Apabila Milik Pemerintah</td>
            <td> : </td>
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaa</span>- Dibangun tahun</td>            
            <td> : </td>
            <td>{{$pemkec->kp_tahun}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaa</span>- Sumber dana  </td>            
            <td> : </td>
            <td>{{$pemkec->kp_sdana}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- APBN  </td>            
            <td> : </td>
            <td>{{$pemkec->kp_apbn}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- INPRES    </td>            
            <td> : </td>
            <td>{{$pemkec->kp_inpres}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- APBD I</td>            
            <td> : </td>
            <td>{{$pemkec->kp_apbd1}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- APBD II</td>            
            <td> : </td>
            <td>{{$pemkec->kp_apbd2}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- Lain-lain yang sah </td>            
            <td> : </td>
            <td>{{$pemkec->kp_lain}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- Jumlah </td>            
            <td> : </td>
            <td>{{$pemkec->kp_jumlah}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaa</span>- Bangunan Bertingkat  </td>            
            <td> : </td>
            <td>{{$pemkec->kp_tingkat}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>5.2. </td> 
            <td>Rumah Jabatan Camat </td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Status Rumah Jabatan Camat</td>            
            <td> : </td>
            <td>{{$pemkec->rc_status}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Luas Bangunan  </td>            
            <td> : </td>
            <td>{{$pemkec->rc_luas}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Apabila Milik Pemerintah : </td>            
            <td> : </td>
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaa</span>- Dibangun Tahun</td>            
            <td> : </td>
            <td>{{$pemkec->rc_tahun}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaa</span>- Sumber dana</td>            
            <td> : </td>
            <td>{{$pemkec->rc_sdana}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- APBN</td>            
            <td> : </td>
            <td>{{$pemkec->rc_apbn}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- APBD I</td>            
            <td> : </td>
            <td>{{$pemkec->rc_apbd1}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- APBD II</td>            
            <td> : </td>
            <td>{{$pemkec->rc_apbd2}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- Swadaya</td>            
            <td> : </td>
            <td>{{$pemkec->rc_swadaya}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aaaaaa</span>- Jumlah</td>            
            <td> : </td>
            <td>{{$pemkec->rc_jumlah}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Kondisi Bangunan</td>            
            <td> : </td>
            <td>{{$pemkec->rc_kondisi}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>5.3.</td> 
            <td> Jumlah Instansi Pemerintah yang ada Di Wilayah Kecamatan</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Instansi Vertikal</td>            
            <td> : </td>
            <td>{{$pemkec->ins_vertikal}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Instansi Otonom  </td>            
            <td> : </td>
            <td>{{$pemkec->ins_otonom}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Instansi BUMN/BUMD</td>            
            <td> : </td>
            <td>{{$pemkec->ins_bumn}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Jumlah a+b+c</td>            
            <td> : </td>
            <td>{{$pemkec->ins_jumlah}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td> 5.4. </td> 
            <td>Jenis Pegawai Kantor Kecamatan</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Pegawai Pusat Dpk  </td>            
            <td> : </td>
            <td>{{$pemkec->pegawai_dpk1}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Pegawai Pusat Dpk  </td>            
            <td> : </td>
            <td>{{$pemkec->pegawai_dpk2}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Pegawai Daerah/Otonom</td>            
            <td> : </td>
            <td>{{$pemkec->pegawai_daerah}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>5.5. </td> 
            <td>Eselonering Jabatan Perangkat Tingkat Kecamatan </td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Eselon III a</td>            
            <td> : </td>
            <td>{{$pemkec->eselon3a}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Eselon III b</td>            
            <td> : </td>
            <td>{{$pemkec->eselon3b}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Eselon IV</td>            
            <td> : </td>
            <td>{{$pemkec->eselon4}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Eselon V</td>            
            <td> : </td>
            <td>{{$pemkec->eselon5}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td>5.6.</td>       
            <td>Tipe Kecamatan</td>            
            <td> : </td>
            <td>{{$pemkec->tipe_kec}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td>5.7.</td>       
            <td>Lomba antar Kecamatan yang pernah Diadakan</td>            
            <td> : </td>
            <td>{{$pemkec->lomba_kec}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td>5.8.</td>       
            <td>Kejuaraan Lomba Antar Kecamatan Yang pernah diraih  </td>            
            <td> : </td>
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Juara I / TK Kota </td>            
            <td> : </td>
            <td>{{$pemkec->lomba_kec_juara1}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Juara II </td>            
            <td> : </td>
            <td>{{$pemkec->lomba_kec_juara2}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Juara III / Propinsi </td>            
            <td> : </td>
            <td>{{$pemkec->lomba_kec_juara3}}</td>            
        </tr>
        <tr>
            <td></td>
            <td colspan="5">6.  PRASARANA PENGAIRAN</td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td> 6.1.</td> 
            <td> Waduk dengan kondisi </td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Baik  	</td>            
            <td> : </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Rusak dapat dipakai</td>            
            <td>: </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Rusak sama sekali</td>            
            <td>: </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>           
            <td>6.2.</td> 
            <td>DAM</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>6.3.</td> 
            <td>Kincir Air</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>6.4.</td> 
            <td>Pompa Air</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>6.5.</td> 
            <td>Air terjun dengan minimal lebar 2M dan Tinggi 10 M</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>6.6.</td> 
            <td>Sungai</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td colspan="5">7.  SARANA KAPAL/PERAHU </td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>7.1.</td> 
            <td>Kapal </td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>7.2.</td> 
            <td>Perahu Motor Tempel</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>7.3.</td> 
            <td>Perahu</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td colspan="5">8.  PRASARANA/SARANA PENGANGKUTAN DAN KOMUNIKASI</td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>8.1.</td> 
            <td>- Lalu Lintas melalui darat di Kecamatan  </td>            
            <td> : </td>            
            <td>{{$pengangkutan->darat}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td></td> 
            <td>- Lalu Lintas melalui Air/Sungai/Laut</td>            
            <td> : </td>            
            <td>{{$pengangkutan->air}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>8.2.</td> 
            <td>Apabila melalui Air/Laut/Sungai, Jumlah Dermaga</td>            
            <td> : </td>            
            <td>{{$pengangkutan->dermaga}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>8.3.</td> 
            <td>Lalu Lintas darat Melalui</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>- Jalan Aspal  </td>            
            <td> : </td>
            <td>{{$pengangkutan->aspal}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>- Jalan Diperkeras  </td>            
            <td> : </td>
            <td>{{$pengangkutan->diperkeras}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>- Jalan Tanah</td>            
            <td> : </td>
            <td>{{$pengangkutan->tanah}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>           
            <td>8.4.</td> 
            <td>Sarana Umum yang dapat digunakan oleh Penduduk Kecamatan : </td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>- Motor Air </td>            
            <td> : </td>
            <td>{{$pengangkutan->motor_air}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>- Sepeda/Ojek  </td>            
            <td> : </td>
            <td>{{$pengangkutan->sepeda}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>- Delman   </td>            
            <td> : </td>
            <td>{{$pengangkutan->delman}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>- Dan Lain-lain / Becak   </td>            
            <td> : </td>
            <td>{{$pengangkutan->lain_becak}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>- Jumlah   </td>            
            <td> : </td>
            <td>{{$pengangkutan->jumlah}}</td>            
        </tr> 


        <tr>
            <td></td>
            <td colspan="5">9.  PANJANG JALAN DAN JEMBATAN</td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>9.1.</td> 
            <td>Jenis Jalan</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Jalan Negara</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_negara}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Jalan Propinsi</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_propinsi}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Jalan Kota  </td>            
            <td> : </td>
            <td>{{$pjgjalan->j_kota}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Jalan Kelurahan/Desa  </td>            
            <td> : </td>
            <td>{{$pjgjalan->j_desa}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Jumlah</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_jumlah}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>           
            <td>9.2.</td> 
            <td>Kelas Jalan</td>            
            <td> : </td>            
            <td></td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Jalan Kelas I</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_kls1}}</td>            
            <td>Rusak :</td>
            <td>{{$pjgjalan->j_kls1_r}}</td>
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Jalan Kelas II</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_kls2}}</td>            
            <td>Rusak :</td>
            <td>{{$pjgjalan->j_kls2_r}}</td>
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Jalan Kelas III</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_kls3}}</td>            
            <td>Rusak :</td>
            <td>{{$pjgjalan->j_kls3_r}}</td>
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Jalan Kelas IIIa</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_kls3a}}</td>            
            <td>Rusak :</td>
            <td>{{$pjgjalan->j_kls3a_r}}</td>
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>e. Jalan Kelas IV</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_kls4}}</td>            
            <td>Rusak :</td>
            <td>{{$pjgjalan->j_kls4_r}}</td>
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>f. Jalan Kelas Desa</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_klsdesa}}</td>            
            <td>Rusak :</td>
            <td>{{$pjgjalan->j_klsdesa_r}}</td>
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Jumlah</td>            
            <td> : </td>
            <td>{{$pjgjalan->j_kls_jumlah}}</td>            
        </tr> 

        <tr>
            <td></td>
            <td></td>           
            <td>9.3.</td> 
            <td>Jembatan</td>            
            <td> : </td>            
            <td>{{$pjgjalan->jembatan}}</td>            
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Jembatan Beton/Batu/bata </td>            
            <td> : </td>
            <td>{{$pjgjalan->jem_beton}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Jembatan Besi </td>            
            <td> : </td>
            <td>{{$pjgjalan->jem_besi}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Jembatan Kayu/Bambu</td>            
            <td> : </td>
            <td>{{$pjgjalan->jem_kayu}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. Jembatan Lain-lain  </td>            
            <td> : </td>
            <td>{{$pjgjalan->jem_lain}}</td>            
        </tr> 

        <tr>
            <td></td>
            <td colspan="5">10. SARANA PEREKONOMIAN  </td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>10.1.</td> 
            <td>Koperasi</td>            
            <td> : </td>            
            <td></td>            
        </tr>        
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Koperasi Simpan Pinjam</td>            
            <td> : </td>
            <td>{{$perekonomian->ksp}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Koperasi Unit Desa/KUD</td>            
            <td> : </td>
            <td>{{$perekonomian->kud}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. BKK</td>            
            <td> : </td>
            <td>{{$perekonomian->bkk}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>d. BPKD</td>            
            <td> : </td>
            <td>{{$perekonomian->bpkd}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>e. Badan-Badan Kredit</td>            
            <td> : </td>
            <td>{{$perekonomian->badan_kredit}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>f. Koperasi Produksi  </td>            
            <td> : </td>
            <td>{{$perekonomian->kop_produksi}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>g. Koperasi Konsumsi </td>            
            <td> : </td>
            <td>{{$perekonomian->kop_konsumsi}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>h. Koperasi Lainnya</td>            
            <td> : </td>
            <td>{{$perekonomian->kop_lain}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>           
            <td>10.2.</td> 
            <td>Jumlah Pasar Selapan/Umum</td>            
            <td> : </td>            
            <td></td>            
        </tr>        
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Umum</td>            
            <td> : </td>
            <td>{{$perekonomian->pasar_umum}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Ikan</td>            
            <td> : </td>
            <td>{{$perekonomian->pasar_ikan}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Hewan</td>            
            <td> : </td>
            <td>{{$perekonomian->pasar_hewan}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>           
            <td>10.3.</td> 
            <td>Pasar Bangunan Permanen/Semi Permanen</td>            
            <td> : </td>            
            <td>{{$perekonomian->pasar_bangunan_permanen}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.4.</td> 
            <td>Pasar tanpa bangunan semi permanen</td>            
            <td> : </td>            
            <td>{{$perekonomian->pasar_tanpa_bangunan_permanen}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.5.</td> 
            <td>Jumlah toko/kios/warung</td>            
            <td> : </td>            
            <td>{{$perekonomian->jumlah_toko}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.6.</td> 
            <td>Bank</td>            
            <td> : </td>            
            <td>{{$perekonomian->bank}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.7.</td> 
            <td>Jumlah Lumbung Desa</td>            
            <td> : </td>            
            <td>{{$perekonomian->jumlah_lumbung_desa}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.8.</td> 
            <td>Stasiun Kapal Udara</td>            
            <td> : </td>            
            <td>{{$perekonomian->stasiun_udara}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.9.</td> 
            <td>Stasiun Kapal Laut</td>            
            <td> : </td>            
            <td>{{$perekonomian->stasiun_laut}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.10.</td> 
            <td>Stasiun Kereta Api</td>            
            <td> : </td>            
            <td>{{$perekonomian->stasiun_kereta}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.11.</td> 
            <td>Stasiun Bis</td>            
            <td> : </td>            
            <td>{{$perekonomian->stasiun_bis}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.12.</td> 
            <td>Stasiun Oplet/Bemo/Taksi</td>            
            <td> : </td>            
            <td>{{$perekonomian->stasiun_oplet}}</td>            
        </tr>    
        <tr>
            <td></td>
            <td></td>           
            <td>10.13.</td> 
            <td>Jumlah Telepon Umum</td>            
            <td> : </td>            
            <td>{{$perekonomian->jumlah_telp_umum}}</td>            
        </tr>    


        <tr>
            <td></td>
            <td colspan="5">11. JUMLAH PERUSAHAAN/USAHA</td>                    
        </tr>

        <tr>
            <td></td>
            <td></td>           
            <td>11.1 </td> 
            <td>Industri </td>            
            <td> : </td>            
            <td></td>            
        </tr>        
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>a. Besar dan Sedang</td>            
            <td> : </td>
            <td>{{$jumlahusaha->industri_besar}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aa</span>Tenaga Kerja</td>            
            <td> : </td>
            <td>{{$jumlahusaha->industri_besar_tk}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>b. Kecil</td>            
            <td> : </td>
            <td>{{$jumlahusaha->industri_kecil}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aa</span>Tenaga Kerja</td>            
            <td> : </td>
            <td>{{$jumlahusaha->industri_kecil_tk}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>c. Rumah Tangga</td>            
            <td> : </td>
            <td>{{$jumlahusaha->industri_rtangga}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td><span class="white">aa</span>Tenaga Kerja</td>            
            <td> : </td>
            <td>{{$jumlahusaha->industri_rtangga_tk}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td>11.2. </td>       
            <td>Perhotelan/Losmen/Penginapan</td>            
            <td> : </td>
            <td>{{$jumlahusaha->hotel}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Tenaga Kerja</td>            
            <td> : </td>
            <td>{{$jumlahusaha->hotel_tk}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td>11.3. </td>       
            <td>Rumah Makan/Warung Makan</td>            
            <td> : </td>
            <td>{{$jumlahusaha->rm_makan}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Tenaga Kerja</td>            
            <td> : </td>
            <td>{{$jumlahusaha->rm_makan_tk}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td>11.4. </td>       
            <td>Perdagangan </td>            
            <td> : </td>
            <td>{{$jumlahusaha->perdagangan}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Tenaga Kerja</td>            
            <td> : </td>
            <td>{{$jumlahusaha->perdagangan_tk}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td>11.5.</td>       
            <td>Angkutan</td>            
            <td> : </td>
            <td>{{$jumlahusaha->angkutan}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Tenaga Kerja</td>            
            <td> : </td>
            <td>{{$jumlahusaha->angkutan_tk}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td>11.6.</td>       
            <td>Lain-lain</td>            
            <td> : </td>
            <td>{{$jumlahusaha->lain}}</td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Tenaga Kerja</td>            
            <td> : </td>
            <td>{{$jumlahusaha->lain_tk}}</td>            
        </tr> 


        <tr>
            <td></td>
            <td colspan="5">12. FASILITAS PERKREDITAN  </td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>     
            <td>12.1. </td>       
            <td>Bimas/Inmas/Insus</td>            
            <td> : </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Jumlah yang menerima </td>            
            <td> : </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td>12.2. </td>       
            <td>Kredit Investasi Kecil (KIK)  </td>            
            <td> : </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Jumlah yang menerima </td>            
            <td> : </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td>12.3. </td>       
            <td> Kredit Modal Kerja Permanen(KMKP)</td>            
            <td> : </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Jumlah yang menerima </td>            
            <td> : </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td>12.4.</td>       
            <td>Kredit Candak Kulak</td>            
            <td> : </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td></td>       
            <td>Jumlah yang menerima </td>            
            <td> : </td>
            <td></td>            
        </tr> 
        <tr>
            <td></td>
            <td></td>     
            <td>12.5.</td>       
            <td>Simpan Pinjam JPS/PDMKE</td>            
            <td> : </td>
            <td></td>            
        </tr> 













        <tr>
            <td></td>
            <td colspan="5">13. SARANA SOSIAL/BUDAYA</td>                    
        </tr>
        <tr>
            <td></td>
            <td></td>           
            <td>13.1.</td> 
            <td>Pendidikan</td>            
            <td></td>            
            <td></td>            
        </tr>
        
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.1.1. TK </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>{{$saranasosbud->tk_sekolah}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>{{$saranasosbud->tk_murid}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>{{$saranasosbud->tk_guru}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>{{$saranasosbud->tk_prasarana}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>{{$saranasosbud->tk_perpustakaan}}</td>            
            </tr> 
        
          
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.1.2. Sekolah Dasar</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>a. Sekolah Dasar Negeri : </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>{{$saranasosbud->sdn_sekolah}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>{{$saranasosbud->sdn_murid}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>{{$saranasosbud->sdn_guru}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>{{$saranasosbud->sdn_prasarana}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>{{$saranasosbud->sdn_perpustakaan}}</td>            
            </tr> 
        
        






            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>b. SD Inpres</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 




            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>c. Madrasah/Ibtidaiyah Negeri</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>d. SD Swasta Umum</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>e. SD Swasta Islam</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>f. SD Swasta Protestan </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>g. SD Swasta Katholik </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>h. SD Swasta HIndu</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>i. SD Swasta Budha </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span> j. SLB ( Sekolah Luar Biasa) </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 






            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.1.3. Sekolah Lanjutan Pertama (SLTP)  </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>a. SMTP Negeri </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpn_sekolah}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpn_murid}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpn_guru}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpn_prasarana}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpn_perpustakaan}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span> b. Madrasah/Tsanawiah Negeri </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 


            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>c. SMTP Swasta Umum </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpsusekolah}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpsumurid}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpsuguru}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpsuprasarana}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtpsuperpustakaan}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span> d. SMTP Swasta Islam</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>e. SMTP Swasta Protestan</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span> f. SMTP Swasta Katolik</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span> g. SMTP Swasta Hindu</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>h. SMTP Swasta Budha </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>i. SMTP Kejuruan Negeri</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>j. SMTP Kejuruan Swasta </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>0 Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>0 Lokal</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>0 Buah</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.1.4. Sekolah Menengah Tingkat Atas</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>a. SMTA Negeri </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtan_sekolah}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtan_murid}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtan_guru}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtan_prasarana}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtan_lab}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtan_perpustakaan}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span> b. Madrasah/Aliyah Negeri </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>c. SMTA Swasta Umum</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtasu_sekolah}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtasu_murid}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtasu_guru}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td>{{$saranasosbud->smtasu_prasarana}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtasu_lab}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td>{{$saranasosbud->smtasu_perpustakaan}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span> d. SMTA Swasta Islam</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span> e. SMTA Swasta Protestan</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>f. SMTA Swasta Katholik </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>g. SMTA Swasta Hindu </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>h. SMTA Kejuruan Negeri  </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>i. SMTA Kejuruan Swasta-</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Sekolah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Murid  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Guru/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.1.5. Perguruan Tinggi/Akademi :</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>a. Akademi Negeri </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Mahasiswa  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Dosen/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>b. Akademi Swasta</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Mahasiswa  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Dosen/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>c. Perguruan Tinggi Negeri </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Mahasiswa  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Dosen/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>d. Perguruan Tinggi Swasta </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Mahasiswa  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Dosen/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>e. Kursus-kursus Keterampilan</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah</td>            
                <td>:</td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Mahasiswa  </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Jumlah Dosen/Pengajar    </td>            
                <td>:</td>
                <td></td>                 
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Prasarana fisik  </td>            
                <td>:</td>
                <td></td>                  
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Fasilitas Laboratorium</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaaaa</span>- Perpustakaan</td>            
                <td>:</td>
                <td></td>                       
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td>13.2. </td>       
                <td>Jumlah tempat ibadah</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Masjid</td>            
                <td> : </td>
                <td>{{$saranasosbud->masjid}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Surau/Musholla</td>            
                <td> : </td>
                <td>{{$saranasosbud->surau}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Gereja   </td>            
                <td> : </td>
                <td>{{$saranasosbud->gereja}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Kuil/Pura</td>            
                <td> : </td>
                <td>{{$saranasosbud->kuil}}</td>            
            </tr> 
        
            <tr>
                <td></td>
                <td></td>     
                <td>13.3. </td>       
                <td>Banyaknya Rumah Penduduk  </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Rumah menurut sifatnya dan badannya</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>a.1. Dinding terbuat dari batu/ gedung permanen</td>            
                <td> : </td>
                <td> - Buah </td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>a.2. Dinding terbuat dari sebagian Batu/Gedung</td>            
                <td> : </td>
                <td> - Buah </td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>a.3. Dinding terbuat dari kayu/papan </td>            
                <td> : </td>
                <td> - Buah </td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>a.4. Dinding terbuat dari bambu/lainnya </td>            
                <td> : </td>
                <td> - Buah </td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>a.5. Rumah Panggung  </td>            
                <td> : </td>
                <td> - Buah </td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>a.6. Rumah di atas air (mengapung)</td>            
                <td> : </td>
                <td> - Buah </td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Rumah menurut Tipenya </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>b.1. Tipe A </td>            
                <td> : </td>
                <td> - Buah </td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>b.2. Tipe B  </td>            
                <td> : </td>
                <td> - Buah </td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>b.3. Tipe C</td>            
                <td> : </td>
                <td> - Buah </td>            
            </tr> 

            <tr>
                <td></td>
                <td></td>     
                <td> 13.4. </td>       
                <td>Pariwisata  </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Tempat Rekreasi</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Taman  </td>            
                <td> : </td>
                <td>{{$saranasosbud->taman}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Pantai    </td>            
                <td> : </td>
                <td>{{$saranasosbud->pantai  }}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Permandian      </td>            
                <td> : </td>
                <td>{{$saranasosbud->permandian    }}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Hutan Lindung        </td>            
                <td> : </td>
                <td>{{$saranasosbud->hutan_lindung    }}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Tempat tradisional (wayang/ketoprak, dll) </td>            
                <td> : </td>
                <td>{{$saranasosbud->tradisional}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Tempat Rekreasi lain (alam, Sejarah)</td>            
                <td> : </td>
                <td>{{$saranasosbud->rekreasi_lain}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Toko Cinderamata/Souvenir </td>            
                <td> : </td>
                <td>{{$saranasosbud->cinderamata}}</td>            
            </tr> 

            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Kebudayaan/Kesenian</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Jumlah Perkumpulan Kebudayaan/Sanggar Kesenian</td>            
                <td> : </td>
                <td>{{$saranasosbud->jml_sanggar}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Jumlah Anggota Budayawan</td>            
                <td> : </td>
                <td>{{$saranasosbud->jml_budayawan}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Jumlah Anggota Seniman </td>            
                <td> : </td>
                <td>{{$saranasosbud->jml_seniman}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Bioskop</td>            
                <td> : </td>
                <td>{{$saranasosbud->bioskop}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Penginapan  </td>            
                <td> : </td>
                <td>{{$saranasosbud->penginapan  }}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Restoran    </td>            
                <td> : </td>
                <td>{{$saranasosbud->restoran}}</td>            
            </tr> 



            <tr>
                <td></td>
                <td></td>     
                <td> 13.5. </td>       
                <td>Kesehatan    </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Rumah Sakit Umum</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- RSU Pemerintah </td>            
                <td> : </td>
                <td>{{$saranasosbud->rsu_pem}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Pengunjung yang sakit  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Januari s/d Juni</td>            
                <td> : </td>
                <td>{{$saranasosbud->rsu_pem_pengunjung1}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Juli s/d Desember  </td>            
                <td> : </td>
                <td>{{$saranasosbud->rsu_pem_pengunjung2}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span> - RSU Swasta</td>            
                <td> : </td>
                <td>{{$saranasosbud->rsu_sw}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Pengunjung yang sakit  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Januari s/d Juni</td>            
                <td> : </td>
                <td>{{$saranasosbud->rsu_sw_pengunjung1}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Juli s/d Desember  </td>            
                <td> : </td>
                <td>{{$saranasosbud->rsu_sw_pengunjung2}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Rumah Sakit Khusus Pemerintah</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- RSU Pemerintah </td>            
                <td> : </td>
                <td>{{$saranasosbud->rskp_pem}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Pengunjung yang sakit  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Januari s/d Juni</td>            
                <td> : </td>
                <td>{{$saranasosbud->rskp_pem_pengunjung1}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Juli s/d Desember  </td>            
                <td> : </td>
                <td>{{$saranasosbud->rskp_pem_pengunjung2}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Rumah Sakit Khusus Swasta</td>            
                <td> : </td>
                <td>{{$saranasosbud->rskp_sw}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Pengunjung yang sakit  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Januari s/d Juni</td>            
                <td> : </td>
                <td>{{$saranasosbud->rskp_sw_pengunjung1}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Juli s/d Desember  </td>            
                <td> : </td>
                <td>{{$saranasosbud->rskp_sw_pengunjung2}}</td>            
            </tr>  






            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Rumah Bersalin/BKIA</td>            
                <td> : </td>
                <td>{{$saranasosbud->bersalin}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- RSU Pemerintah </td>            
                <td> : </td>
                <td>{{$saranasosbud->bersalin_pem}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Pengunjung yang sakit  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Januari s/d Juni</td>            
                <td> : </td>
                <td>{{$saranasosbud->bersalin_pem_pengunjung1}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Juli s/d Desember  </td>            
                <td> : </td>
                <td>{{$saranasosbud->bersalin_pem_pengunjung2}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span> - Poliklinik/Balai Pengobatan  </td>            
                <td> : </td>
                <td>{{$saranasosbud->bersalin_poli}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Pengunjung yang sakit  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Januari s/d Juni</td>            
                <td> : </td>
                <td>{{$saranasosbud->bersalin_poli_pengunjung1}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Juli s/d Desember  </td>            
                <td> : </td>
                <td>{{$saranasosbud->bersalin_poli_pengunjung2}}</td>            
            </tr>  





            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Puskesmas</td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Pengunjung yang sakit </td>            
                <td> : </td>
                <td></td>            
            </tr>             
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Januari s/d Juni</td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas_pengunjung1}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Juli s/d Desember  </td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas_pengunjung2}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Dokter</td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas_pengunjung_dokter}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Perawat</td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas_pengunjung_perawat}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Bidan</td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas_pengunjung_bidan}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Puskesmas Pembantu </td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas_pembantu}}</td>            
            </tr>             
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Dokter     </td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas_pembantu_dokter}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Perawat     </td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas_pembantu_perawat}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>- Bidan     </td>            
                <td> : </td>
                <td>{{$saranasosbud->puskesmas_pembantu_bidan}}</td>            
            </tr>  

            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Praktek Dokter    :  </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Dokter Umum    </td>            
                <td> : </td>
                <td>{{$saranasosbud->dokter_umum}}</td>            
            </tr>     
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Dokter Anak     </td>            
                <td> : </td>
                <td>{{$saranasosbud->dokter_anak}}</td>            
            </tr>     
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Dokter kebidanan/kandungan </td>            
                <td> : </td>
                <td>{{$saranasosbud->dokter_kandungan}}</td>            
            </tr>     
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Dokter Kulit/Kelamin</td>            
                <td> : </td>
                <td>{{$saranasosbud->dokter_kulit}}</td>            
            </tr>     
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Dokter ahli lainnya   </td>            
                <td> : </td>
                <td>{{$saranasosbud->dokter_lain}}</td>            
            </tr>     

            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>f. Dukun khitan/sunat </td>            
                <td> : </td>
                <td>{{$saranasosbud->dukun_khitan}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>g.Dukun Bayi    </td>            
                <td> : </td>
                <td>{{$saranasosbud->dukun_bayi}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>h. Sanatorium       </td>            
                <td> : </td>
                <td>{{$saranasosbud->sanatorium}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>i. Apotik/ Depot obat </td>            
                <td> : </td>
                <td>{{$saranasosbud->apotik}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>j.  Panji Pijat    </td>            
                <td> : </td>
                <td>{{$saranasosbud->panti_pijat}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>13.6. </td> 
                <td>Keluarga Berencana (KB) </td>            
                <td></td>            
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Jumlah Pos/Klinik KB</td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_pos_kb}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Jumlah PUS(Pasangan Usia Subur) </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_pus}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Jumlah PUS masuk KB  </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_pus_kb}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Jumlah Posyandu   </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_posyandu}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Jumlah Akseptor KB s/d Tahun 2015  </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_akseptor}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Pil  </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_akseptor_pil}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- IUD    </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_akseptor_iud}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Kondom   </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_akseptor_kondom}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Suntik     </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_akseptor_suntik}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- MOP</td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_akseptor_mop}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- MOW      </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_akseptor_mow}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- KB Mandiri      </td>            
                <td> : </td>
                <td>{{$saranasosbud->jumlah_akseptor_kbmandiri}}</td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>           
                <td>13.7. </td> 
                <td>Penderita Cacat  </td>            
                <td></td>            
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>- Cacat Fisik/fatal </td>            
                <td> : </td>
                <td>{{$saranasosbud->cacat_fisik}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>- Cacat Mental      </td>            
                <td> : </td>
                <td>{{$saranasosbud->cacat_mental}}</td>            
            </tr> 

            <tr>
                <td></td>
                <td colspan="5">14. PEMBANGUNAN </td>                    
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>14.1.</td> 
                <td>Jumlah proyek fisik yang dibangun Di kecamatan dalam tahun 2015</td>            
                <td> : </td>            
                <td></td>            
            </tr>                        
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Sektor Pertanian dan Pengairan</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Sektor Industri</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Sektor Pertambangan dan Energi</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Sektor Perhubungan dan Pariwisata</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Sektor Perdagangan dan Koperasi  </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>f. Sektor Tenaga Kerja dan Transmigrasi  </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>g. Sektor Pembangunan Daerah Desa dan Kota  </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>h. Sektor Agama</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>i. Sektor Pendidikan, Generasi Muda, Kebudayaan</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span> Nasional dan Kepercayaan Terhadap</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>Tuhan Yang Maha Esa </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>j. Sektor Kesehatan, Kesejahteraan Sosial,</td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>Peranan Wanita, Kependudukan </td>            
                <td></td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>dan Keluarga Berencana</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>k. Sektor Perumahan Rakyat dan Pemukiman</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>l. Sektor Hukum</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>m. Sektor Pertahanan dan Keamanan Nasional</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>n. Sektor Penerangan, Pers dan Komunikasi Sosial  </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>o. Sektor Ilmu Pengetahuan, Teknologi dan Penelitian</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>p. Sektor Aparatur Pemerintah  </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>q. Sektor Pengembangan Dunia Usaha  </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>r. Sektor Sumber Alam dan Lingkungan Hidup </td>            
                <td> : </td>
                <td>...Buah</td>            
            </tr> 

            <tr>
                <td></td>
                <td></td>           
                <td>14.2.</td> 
                <td>Pembiayaan Pembangunan Proyek di Kecamatan dalam tahun 2015 (dalam Jutaan Rupiah)</td>            
                <td> : </td>            
                <td></td>            
            </tr>                        
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Biaya dari Pusat</td>            
                <td> : </td>
                <td>Rp.-</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Biaya dari Propinsi</td>            
                <td> : </td>
                <td>Rp.-</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Biaya dari Kota</td>            
                <td> : </td>
                <td>Rp.-</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Swadaya penduduk yg berbentuk</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>barang & tenaga (dinilai dg uang)</td>            
                <td> : </td>
                <td> Rp.-</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Biaya dari Bantuan luar negeri  </td>            
                <td> : </td>
                <td>Rp.-</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td> f.  Biaya lain-lain </td>            
                <td> : </td>
                <td>Rp.-</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>Jumlah</td>            
                <td> : </td>
                <td>Rp.-</td>            
            </tr>

            <tr>
                <td></td>
                <td></td>           
                <td>14.3. </td> 
                <td>Pajak Bumi dan Bangunan (PBB)  (Dalam Ribuan Rupiah) </td>            
                <td> : </td>            
                <td></td>            
            </tr>                        
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Jumlah Wajib PBB</td>            
                <td> : </td>
                <td>Orang</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Target PBB (Pedesaan/Perkotaan)</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Jumlah Pokok Ketetapan PBB tahun  yang bersangkutan</td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Tunggakan PBB tahun yang lewat </td>            
                <td> : </td>
                <td>Rp.-</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Realisasi PBB tahun yang bersangkutan</td>            
                <td> : </td>
                <td>Rp.-</td>            
            </tr> 

            <tr>
                <td></td>
                <td></td>           
                <td>14.4. </td> 
                <td>Inventarisasi bidang Teknologi tepat guna yang telah dimanfaatkan</td>            
                <td> : </td>            
                <td></td>            
            </tr>                        
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Bidang Energi  </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Bidang Pangan  </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Bidang Pertanian 	 </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Bidang Konstruksi </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Bidang Material </td>            
                <td> : </td>
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>f. Bidang Kerajinan/Industri </td>            
                <td> : </td>
                <td></td>            
            </tr> 































            
            <tr>
                <td colspan="6"><strong>II. DATA DINAMIS</strong></td>                     
            </tr>
            <tr>
                <td></td>
                <td colspan="5">A.  PEMERINTAHAN KECAMATAN</td>                    
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>1.</td> 
                <td>Jumlah Pegawai Kantor Kecamatan</td>            
                <td> : </td>            
                <td>{{$pemkecamatan->jml_pegawai_ktr}}</td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Pegawai Golongan IV </td>            
                <td> : </td>
                <td>{{$pemkecamatan->jml_pegawai_ktr_gol4}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Pegawai Golongan III  </td>            
                <td> : </td>
                <td>{{$pemkecamatan->jml_pegawai_ktr_gol3}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Pegawai Golongan II</td>            
                <td> : </td>
                <td>{{$pemkecamatan->jml_pegawai_ktr_gol2}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Pegawai Golongan I</td>            
                <td> : </td>
                <td>{{$pemkecamatan->jml_pegawai_ktr_gol1}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>2.</td> 
                <td>Jumlah Pegawai Instansi Vertikal dan Otonom di Tingkat Kecamatan Non Pegawai Kecamatan</td>            
                <td> : </td>            
                <td>{{$pemkecamatan->jml_non_pegawai_ktr}}</td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Pegawai Golongan IV </td>            
                <td> : </td>
                <td>{{$pemkecamatan->jml_non_pegawai_ktr_gol4}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Pegawai Golongan III  </td>            
                <td> : </td>
                <td>{{$pemkecamatan->jml_non_pegawai_ktr_gol3}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Pegawai Golongan II</td>            
                <td> : </td>
                <td>{{$pemkecamatan->jml_non_pegawai_ktr_gol2}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Pegawai Golongan I</td>            
                <td> : </td>
                <td>{{$pemkecamatan->jml_non_pegawai_ktr_gol1}}</td>            
            </tr> 

            <tr>
                <td></td>
                <td></td>           
                <td>3.</td> 
                <td>Sarana kerja kantor Kecamatan</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Telepon Otomat/Non otomat </td>            
                <td> : </td>
                <td>{{$pemkecamatan->telepon}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Radio Telekomunikasi </td>            
                <td> : </td>
                <td>{{$pemkecamatan->radio}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Jumlah Mesin Tik</td>            
                <td> : </td>
                <td>{{$pemkecamatan->mesin_tik}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Meja Kerja</td>            
                <td> : </td>
                <td>{{$pemkecamatan->meja_kerja}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Kursi Kerja</td>            
                <td> : </td>
                <td>{{$pemkecamatan->kursi_kerja}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td> f. Meja Kursi Tamu </td>            
                <td> : </td>
                <td>{{$pemkecamatan->meja_kursi_tamu}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>g. Lemari/Kardek</td>            
                <td> : </td>
                <td>{{$pemkecamatan->lemari}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>h. Ruang Rapat</td>            
                <td> : </td>
                <td>{{$pemkecamatan->r_rapat}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>i. Ruang Data/Operator Room</td>            
                <td> : </td>
                <td>{{$pemkecamatan->r_data}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>j. Gedung Serba Guna</td>            
                <td> : </td>
                <td>{{$pemkecamatan->serba_guna}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>k. Balai Pertemuan </td>            
                <td> : </td>
                <td>{{$pemkecamatan->balai_pertemuan}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>l. Kendaraan Dinas Roda 2</td>            
                <td> : </td>
                <td>{{$pemkecamatan->kendaraan_roda2}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>m. Kendaraan Dinas Roda 4</td>            
                <td> : </td>
                <td>{{$pemkecamatan->kendaraan_roda4}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>n. Mesin Hitung</td>            
                <td> : </td>
                <td>{{$pemkecamatan->mesin_hitung}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>o. Lain-lain</td>            
                <td> : </td>
                <td>{{$pemkecamatan->lain}}</td>            
            </tr> 

            <tr>
                <td></td>
                <td colspan="5">B. KEPENDUDUKAN</td>                    
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>1.</td> 
                <td>Jumlah Kepala Keluarga  </td>            
                <td> : </td>            
                <td>{{ number_format($kependudukan->jml_kepala_keluarga, 0, '.', '.')}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>2.</td> 
                <td>Penduduk menurut jenis kelamin</td>            
                <td> : </td>            
                <td></td>            
            </tr> 

            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>2.1. Jumlah Laki-laki</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_laki, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>2.2. Jumlah Perempuan  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_perempuan, 0, '.', '.')}}</td>            
            </tr>

            <tr>
                <td></td>
                <td></td>           
                <td>3. </td> 
                <td>Penduduk menurut kewarganegaraan</td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>3.1. WNI Laki-laki</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_wni_laki, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>Perempuan</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_wni_perempuan, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>3.2. WNA Laki-laki</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_wna_laki, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaa</span>Perempuan</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_wna_perempuan, 0, '.', '.')}}</td>            
            </tr>


            <tr>
                <td></td>
                <td></td>           
                <td>4. </td> 
                <td>Penduduk menurut agama</td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>4.1. Islam</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_islam, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>4.2. Katholik</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_katholik, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>4.3. Protestan/Kristen</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_protestan, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>4.4. Hindu</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_hindu, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>4.5. Budha  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_budha, 0, '.', '.')}}</td>            
            </tr>

            <tr>
                <td></td>
                <td></td>           
                <td> 5.</td> 
                <td>Penganut Aliran Kepercayaan kepada Tuhan Yang Maha Esa   </td>            
                <td> : </td>            
                <td>{{ number_format($kependudukan->jml_penganut_aliran, 0, '.', '.')}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>6. </td> 
                <td>Penduduk menurut usia</td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. 0 - 6 tahun</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>7 - 12 tahun  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>13 - 18 tahun  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>19 - 24 tahun</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>25 - 55 tahun</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>56 - 79 tahun </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>80 tahun ke atas </td>            
                <td> : </td>
                <td></td>            
            </tr>

            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b.  0 - 4 tahun </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_b_0_4, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>5 - 9 tahun</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_b_5_9, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>10 - 14 tahun  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_b_10_14, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>15 - 19 tahun  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_b_15_19, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>20 - 24 tahun</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_b_20_24, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>25 - 29 tahun  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_b_25_29, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>30 - 34 tahun</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_b_30_34, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>35 - 39 tahun</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_b_35_39, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>40 tahun ke atas </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->jml_b_40_up, 0, '.', '.')}}</td>            
            </tr>

            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c.  0 - 5 tahun</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>6 - 16 tahun</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>17 - 25 tahun </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>26 - 55 tahun  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>56 tahun ke atas</td>            
                <td> : </td>
                <td></td>            
            </tr>

            <tr>
                <td></td>
                <td></td>           
                <td>7. </td> 
                <td>Mutasi Penduduk</td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>
                <td colspan="4">
                    <table class="table-add" >        
                        <tr>
                            <td>No.</td>
                            <td>Jenis Mutasi</td>
                            <td>Laki-Laki</td>
                            <td>Perempuan</td>
                            <td>Jumlah</td>
                        </tr>        
                        <tr>
                            <td>7.1</td>
                            <td>Pindah Antar Kecamatan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7.2</td>
                            <td>Datang</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7.3</td>
                            <td>Lahir</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7.4</td>
                            <td>Mati</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7.5</td>
                            <td>Mati < 5 Th</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7.6</td>
                            <td>Mati > 5 Th</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>    
                </td>           
                       
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>8. </td> 
                <td>Penduduk WNA </td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>
                <td colspan="4">
                    <table class="table-add" >        
                        <tr>
                            <td rowspan="2">No.</td>
                            <td rowspan="2">Asal kewarganegaraan</td>
                            <td colspan="2">Dewasa 17 th ke atas</td>
                            <td colspan="2">Anak- anak 0 – 17 th</td>
                            <td rowspan="2">Jumlah</td>
                        </tr>        
                        <tr>            
                            <td style="text-align: center">L</td>
                            <td style="text-align: center">P</td>
                            <td style="text-align: center">L</td>
                            <td style="text-align: center">P</td>            
                        </tr>        
                        <tr>
                            <td>1.</td>
                            <td>Cina RRC</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Cina Taiwan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cina Stateles</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Arab</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>India</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Pakistan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Belanda</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Jepang</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Lain-Lain</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table> 
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>9. </td> 
                <td>Penduduk WNI Keturunan Asing </td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>
                <td colspan="4">                      
                    <table class="table-add" >        
                        <tr>
                            <td rowspan="2">No.</td>
                            <td rowspan="2">Asal kewarganegaraan</td>
                            <td colspan="2">Dewasa 17 th ke atas</td>
                            <td colspan="2">Anak- anak 0 – 17 th</td>
                            <td rowspan="2">Jumlah</td>
                        </tr>        
                        <tr>            
                            <td style="text-align: center">L</td>
                            <td style="text-align: center">P</td>
                            <td style="text-align: center">L</td>
                            <td style="text-align: center">P</td>            
                        </tr>        
                        <tr>
                            <td>1.</td>
                            <td>Cina RRC</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Cina Taiwan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cina Stateles</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Arab</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>India</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Pakistan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Belanda</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Jepang</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Lain-Lain</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>  
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>10. </td> 
                <td>Kepadatan Penduduk  </td>            
                <td> : </td>            
                <td>{{$kependudukan->kepadatan}}</td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>11.</td> 
                <td> Penyebaran Penduduk</td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>12.</td> 
                <td>Angka NTCR  : </td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Nikah   </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Talak     </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Cerai       </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aa</span>- Rujuk         </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>13.</td> 
                <td>Penduduk menurut Mata Pencaharian  </td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.1. Petani</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Petani pemilik tanah</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->petani_pemilik, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Petani Penggarap tanah  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->petani_penggarap, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Petani penggarap/penyekap    </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->petani_penyekap, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>- Buruh tani  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->petani_buruh, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.2. Nelayan </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->nelayan, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.3. Pengusaha sedang/besar</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->pengusaha_sedang, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.4. Pengrajin/industri kecil  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->pengrajin, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.5. Buruh Industri</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->buruh_industri, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.6. Buruh Bangunan</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->buruh_bangunan, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.7. Buruh Pertambangan</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->buruh_pertambangan, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.8. Buruh perkebunan (besar+kecil)</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->buruh_perkebunan, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.9. Pedagang  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->pedagang, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.10 Pengangkutan</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->pengangkutan, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.11. Pegawai Negeri Sipil  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->pns, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.12. ABRI  	</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->abri, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.13. Pensiun (PEGNEG/ABRI) </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->pensiun, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.14. Peternak :  </td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>a. Peternak Sapi Perah  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->peternak_sapi_perah, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>b. Peternak Sapi Biasa   </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->peternak_sapi_biasa, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>c. Peternak Kerbau  </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->peternak_kerbau, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>d. Peternak Kambing </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->peternak_kambing, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>e. Peternak Domba </td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->peternak_domba, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td><span class="white">aaaa</span>f. Peternak Kuda</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->peternak_kuda, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>13.15. Lain-lain</td>            
                <td> : </td>
                <td>{{ number_format($kependudukan->lain, 0, '.', '.')}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>14.</td> 
                <td>Rata-rata luas tanah pertanian yang diusahakan oleh penduduk : </td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>15.</td> 
                <td>Transmigrasi pada tahun: </td>            
                <td> : </td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Lokasi transmigrasi</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Jumlah Kepala keluarga</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Jumlah jiwa transmigrasi</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Jumlah rumah tinggal transmigrasi</td>            
                <td> : </td>
                <td></td>            
            </tr>
            <tr>
                <td></td>
                <td colspan="5">C. KEAGRARIAAN</td>                    
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>1.</td> 
                <td>Status tanah </td>            
                <td> : </td>            
                <td></td>            
            </tr>       
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Tanah Milik Bersertifikat  </td>            
                <td> : </td>
                <td>{{$keagrariaan->tm_sertifikat}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Tanah Milik Belum Bersertifikat </td>            
                <td> : </td>
                <td>{{$keagrariaan->tm_blm_sertifikat}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Tanah Hak Pengelolaan </td>            
                <td> : </td>
                <td>{{$keagrariaan->tanah_hak_pengelolaan}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Tanah Negara</td>            
                <td> : </td>
                <td>{{$keagrariaan->tanah_negara}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Tanah Bebas </td>            
                <td> : </td>
                <td>{{$keagrariaan->tanah_bebas}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>f. Tanah Hak Pakai</td>            
                <td> : </td>
                <td>{{$keagrariaan->tanah_hak_pakai}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>g. Tanah Hak guna bangunan</td>            
                <td> : </td>
                <td>{{$keagrariaan->tanah_hak_guna_bangunan}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>h. Tanah Hak guna usaha</td>            
                <td> : </td>
                <td>{{$keagrariaan->tanah_hak_guna_usaha}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>i. Tanah Adat  </td>            
                <td> : </td>
                <td>{{$keagrariaan->tanah_adat}}</td>            
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>2.</td> 
                <td>Luas tanah yang belum bersertifikat sampai dengan tahun........-.......</td>            
                <td> : </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td>3.</td> 
                <td>Jumlah tanah yang sudah bersertifikat sampai dengan tahun .... -...........  </td>            
                <td> : </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Tanah Sawah </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Tanah Kering</td>            
                <td> : </td>
                <td></td>          
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>4.</td> 
                <td>Jumlah Sertifikat tanah yang diperoleh</td>            
                <td> : </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Tanah Sawah </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Tanah Kering</td>            
                <td> : </td>
                <td></td>          
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>5. </td> 
                <td>Jumlah sertifikat tanah yang diperoleh melalui biasa/non prona sampai dengan tahun........... </td>            
                <td> : </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Tanah Sawah </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Tanah Kering</td>            
                <td> : </td>
                <td></td>          
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>6. </td> 
                <td>Perubahan penggunaan tanah   </td>            
                <td> : </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>a. Sawah berubah menjadi </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perumahan  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Industri  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Jasa  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perusahaan dan lain-lain</td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>b. Tegalan  berubah menjadi </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perumahan  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Industri  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Jasa  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perusahaan dan lain-lain</td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>c. Perkebunan berubah menjadi </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perumahan  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Industri  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Jasa  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perusahaan dan lain-lain</td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>d. Hutan berubah menjadi </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perumahan  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Industri  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Jasa  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perusahaan dan lain-lain</td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>       
                <td>e. Tambak berubah menjadi </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perumahan  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Industri  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Jasa  </td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td></td>     
                <td></td>                       
                <td><span class="white">aa</span>- Perusahaan dan lain-lain</td>            
                <td> : </td>
                <td></td>           
            </tr>
            <tr>
                <td></td>
                <td colspan="5">D. TANAM-TANAMAN</td>                    
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>Luas dan Produksi Tanaman Utama dan Perdagangan</td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>           
                <td>1.</td> 
                <td>Luas dan Produksi Tanaman Utama</td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>
                <td colspan="5">
                    <table class="table-add" >        
                        <tr>
                            <td>No.</td>
                            <td>Jenisnya</td>
                            <td>Luas Tanaman /Ha</td>
                            <td>Luas yang Dipanen /Ha</td>
                            <td>Rata-Rata Produksi /Ton</td>
                            <td>Jumlah</td>
                        </tr>        
                        <tr>
                            <td>1</td>
                            <td>Padi</td>
                            <td>{{$tanaman->padi_luas_tanaman}}</td>
                            <td>{{$tanaman->padi_luas_panen}}</td>
                            <td>{{$tanaman->padi_rata2_produksi}}</td>
                            <td>{{$tanaman->padi_jumlah}}</td>                           
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jagung</td>
                            <td>{{$tanaman->jagung_luas_tanaman}}</td>
                            <td>{{$tanaman->jagung_luas_panen}}</td>
                            <td>{{$tanaman->jagung_rata2_produksi}}</td>
                            <td>{{$tanaman->jagung_jumlah}}</td>                           
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ketela Pohon</td>
                            <td>{{$tanaman->ketelah_pohon_luas_tanaman}}</td>
                            <td>{{$tanaman->ketelah_pohon_luas_panen}}</td>
                            <td>{{$tanaman->ketelah_pohon_rata2_produksi}}</td>
                            <td>{{$tanaman->ketelah_pohon_jumlah}}</td>                           
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ketela Rambat</td>
                            <td>{{$tanaman->ketelah_rambat_luas_tanaman}}</td>
                            <td>{{$tanaman->ketelah_rambat_luas_panen}}</td>
                            <td>{{$tanaman->ketelah_rambat_rata2_produksi}}</td>
                            <td>{{$tanaman->ketelah_rambat_jumlah}}</td>                           
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Kacang Tanah</td>
                            <td>{{$tanaman->kacang_tanah_luas_tanaman}}</td>
                            <td>{{$tanaman->kacang_tanah_luas_panen}}</td>
                            <td>{{$tanaman->kacang_tanah_rata2_produksi}}</td>
                            <td>{{$tanaman->kacang_tanah_jumlah}}</td>                           
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Kedelai</td>
                            <td>{{$tanaman->kedelai_luas_tanaman}}</td>
                            <td>{{$tanaman->kedelai_luas_panen}}</td>
                            <td>{{$tanaman->kedelai_rata2_produksi}}</td>
                            <td>{{$tanaman->kedelai_jumlah}}</td>                           
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Sayur-Sayuran</td>
                            <td>{{$tanaman->sayur_luas_tanaman}}</td>
                            <td>{{$tanaman->sayur_luas_panen}}</td>
                            <td>{{$tanaman->sayur_rata2_produksi}}</td>
                            <td>{{$tanaman->sayur_jumlah}}</td>                           
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Buah-Buahan</td>
                            <td>{{$tanaman->buah_luas_tanaman}}</td>
                            <td>{{$tanaman->buah_luas_panen}}</td>
                            <td>{{$tanaman->buah_rata2_produksi}}</td>
                            <td>{{$tanaman->buah_jumlah}}</td>                           
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Dan Lain-Lain</td>
                            <td>{{$tanaman->lain_luas_tanaman}}</td>
                            <td>{{$tanaman->lain_luas_panen}}</td>
                            <td>{{$tanaman->lain_rata2_produksi}}</td>
                            <td>{{$tanaman->lain_jumlah}}</td>                           
                        </tr>
                        
                    </table>    
                </td>           
                       
            </tr> 


            <tr>
                <td></td>
                <td></td>           
                <td>2.</td> 
                <td>Tanaman Perdagangan</td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>
                <td colspan="5">
                    <table class="table-add" >        
                        <tr>
                            <td rowspan="2">No.</td>
                            <td rowspan="2">Jenisnya</td>
                            <td colspan="3" style="text-align: center">Banyaknya pohon/batang</td>                            
                            <td rowspan="2">Jumlah Produksi</td>
                        </tr>        
                        <tr>                                                    
                            <td>Belum Produksi/muda</td>
                            <td>Berproduksi</td>
                            <td>Tak Berproduksi</td>                                                       
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cengkeh</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pala</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tembakau</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Kelapa</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Kelapa Sawit</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Kopi</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Coklat</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Panili</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Lain-Lain</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6">E. DATA PANGAN</td>                     
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>1.</td> 
                <td>Luas Tambah Tanam Bimas Padi Insus</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>2.</td> 
                <td>Luas Tambah Tanam Binas Padi Inmum</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>3.</td> 
                <td>Luas Tambah Tanam Inmas Padi Insus</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>4.</td> 
                <td>Luas Tambah Tanam Inmas Padi Inmum</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>5.</td> 
                <td>Luas Tambah Panen Areal Padi Intensifikasi</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>6.</td> 
                <td>Luas Serangan Hama Wereng</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>7.</td> 
                <td>Luas Serangan Hama Tikus</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>8.</td> 
                <td>Luas Serangan Hama/Penyakit Lainnya</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>9.</td> 
                <td>Luas Tambah Areal Puso karena wereng</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>10.</td> 
                <td>Luas Tambah Areal Puso Karena Tikus</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>11.</td> 
                <td>Luas Tambah Areal Puso Karena Banjir</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>12.</td> 
                <td>Luas Tambah Areal Puso Karena Kekeringan</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>13.</td> 
                <td>Penyalur Urea Lini IV dalam Minggu Pelaporan</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>14.</td> 
                <td>Penyalur TPS Lini IV Dalam Minggu Pelaporan</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>15.</td> 
                <td>Penyalur Insektisida Lini IV Dalam Minggu Pelaporan</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td></td>
                <td></td>           
                <td>16.</td> 
                <td>Penyalur Rodentisida Lini IV Dalam Minggu Pelaporan</td>            
                <td> : </td>            
                <td></td>            
            </tr>            
            <tr>
                <td colspan="6">F. PERTAMBANGAN</td>                     
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>1.</td> 
                <td>Pertambangan Golongan A</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white"></span>Jenis Bahan Tambang</td>            
                <td> : </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td>2.</td> 
                <td>Pertambangan Golongan B</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white"></span>Jenis Bahan Tambang</td>            
                <td> : </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td>3.</td> 
                <td>Pertambangan Golongan C</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white"></span>Jenis Bahan Tambang</td>            
                <td> : </td>            
                <td></td>            
            </tr>   
            <tr>
                <td colspan="6">G. PERIKANAN</td>                     
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td colspan="4">
                    <table class="table-add" >        
                        <tr>
                            <td>No.</td>
                            <td>Jenis</td>
                            <td>Luas</td>
                            <td>Hasil/Tahun</td>                            
                        </tr>        
                        <tr>
                            <td style="text-align: center">1</td>
                            <td style="text-align: center">2</td>
                            <td style="text-align: center">3</td>
                            <td style="text-align: center">4</td>                            
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Bandeng</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>                            
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Udang</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>                            
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Buaya</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>                            
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Kura-Kura</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>                            
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Lain-Lain</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>
                            <td class="white">aaaaaaaaaaaaaaaa</td>                            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6">H. TRANSPORTASI</td>                     
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>1.</td> 
                <td>Jenis Alat Angkutan Lokal Yang Digunakan Di Kecamatan </td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.1. Sepeda</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.2. Dokar/Delman</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.3. Gerobak/Cikar</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.4. Becak</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.5. Kendaran Bermotor Roda 3</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.6. Sepeda Motor</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.7. Oplet/Mikrolet</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.8. Taksi</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.9. Mobil Dinas</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.10. Mobil Pribadi</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.11. Truck</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.12. Bus Umum</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.13. Bus Kota</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.14. Perahu Dayung/Sampan</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.15. Perahu Motor</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.16. Perahu Layar</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.17. Lain-Lain</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td>2.</td> 
                <td>Komunikasi</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.1. TV Umum</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.2. Telepon Umum</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.3. Kantor Pos/Kantor Pos Pembantu	</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.4. ORARI/KRAP	</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.5. Pemancar Radio</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.6. Penduduk kecamatan yang menggunakan</td>            
                <td>  </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaaa</span>Fasilitas Listrik</td>            
                <td>  </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaaa</span>- Listrik PLN</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaaa</span>- Listrik Non PLN</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.7. Penduduk Kecamatan yang memakai</td>            
                <td>  </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaaa</span>Air minum</td>            
                <td>  </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaaa</span>- PDM</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaaa</span>- Badan Pengelola Air</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaaa</span>- Pompa Jet/Pompa Tangan</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaaa</span>- Sumur</td>            
                <td> : </td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td colspan="5">I. BIDANG POLKAM</td>                    
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>1.</td> 
                <td>Kejadian Kriminal</td>            
                <td>  </td>            
                <td></td>            
            </tr>     
            <tr>
                <td></td>
                <td></td>
                <td colspan="4">
                    <table class="table-add" >        
                        <tr>
                            <td>No.</td>
                            <td>Jenis Kejadian</td>
                            <td>Banyak Kejadian</td>
                            <td>Kerugian <span class="white">aaaaaaa</span></td>
                        </tr>        
                        <tr>
                            <td style="text-align: center">1</td>
                            <td style="text-align: center">2</td>
                            <td style="text-align: center">3</td>
                            <td style="text-align: center">4</td>                        
                        </tr>
                        <tr>
                            <td>1.1.</td>
                            <td>Pencurian</td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>1.2.</td>
                            <td>Perampokan</td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>1.3.</td>
                            <td>Pembunuhan</td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>1.4.</td>
                            <td>Pemerkosaan</td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>1.5.</td>
                            <td>Pelanggaran Narkotika</td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td class="white">1.5.</td>
                            <td>Obat Terlarang</td>
                            <td></td>
                            <td></td>                            
                        </tr>
                        <tr>
                            <td>1.6.</td>
                            <td>Lain-lain</td>
                            <td></td>
                            <td></td>                            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>2.</td> 
                <td>Pembinaan Ketentraman dan Pertahan Sipil</td>            
                <td>  </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.1. Jumlah Anggota Hansip se Kecamatan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.2. Jumlah Anggota Menwa se Kecamatan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.3. Jumlah Anggota Kemra se Kecmatan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.4. Jumlah Pos Kambling/Pos Ronda</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td>3.</td> 
                <td>Pembinaan Kesatuan Bangsa</td>            
                <td>  </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>3.1	Jumlah Penduduk WNI</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">3.1a</span>- Yang Sudah Ditatar P4</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">3.1a</span>- Yang Belum Ditatar P4</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>3.2	Jumlah Pegawai Negeri Sipil</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">3.1a</span>- Yang Sudah Ditatar P4</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">3.1a</span>- Yang Belum Ditatar P4</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>3.3	Jumlah Pegawai Daerah</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">3.1a</span>- Yang Sudah Ditatar P4</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">3.1a</span>- Yang Belum Ditatar P4</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td>4.</td> 
                <td>Pembinaan Masyarakat</td>            
                <td>  </td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>4.1 Komisaris Organisasi Kekuatan Sosial Politik</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>a.	Partai Persatuan Pembangunan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>a.1.	Komisaris PPP Kecamatan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>a.2.	Komisaris PPP Desa</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>a.3.	Komisaris PPP Kelurahan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>b.	Golongan Karya ( Golkar )</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>b.1.	Komisaris Golkar Kecamatan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>b.2.	Komisaris Golkar Desa</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>b.3.	Komisaris Golkar Kelurahan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>c.  Partai Demokrasi Indonesia</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>c.1.	Komisaris PDI Kecamatan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>c.2.	Komisaris PDI Desa</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>c.3.	Komisaris PDI Kelurahan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>4.2. Organisasi Kemasyarakatan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>a.	Kesamaan Kegiatan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>b.	Kesamaan Profesi</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>c.	Kesamaan Fungsi</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>d.	Kesamaan Agama</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>d.1.	Islam</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>d.2.	Kristen Protestan</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>d.3.	Kristen Katolik</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>d.4.	Hindu</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aaa</span>	d.5.	Budha</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>e.	Kesamaan Kepercayaan Terhadap Tuhan Yang Maha Esa</td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>4.2. Media Massa Koran Masuk Desa ( KMD )</td>            
                <td></td>            
                <td></td>            
            </tr>   
            <tr>
                <td></td>
                <td></td>           
                <td>5.</td> 
                <td>Pengalaman Politik</td>            
                <td></td>            
                <td></td>            
            </tr>         
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>Jumlah Bekas Tahanan Dan Bekas</td>            
                <td></td>            
                <td></td>            
            </tr>         
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>Narapidana G.30S/KPI</td>            
                <td></td>            
                <td></td>            
            </tr>    
            <tr>
                <td></td>
                <td></td>           
                <td>6.</td> 
                <td>Pelintas Batas antara Negara RI</td>            
                <td></td>            
                <td></td>            
            </tr>         
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>Dengan Negara Tetangga</td>            
                <td></td>            
                <td></td>            
            </tr>      
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>a. Penduduk WNRI yang Menjadi</td>            
                <td></td>            
                <td></td>            
            </tr>       
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aa</span>Pelintas Batas ke Negara Tetangga</td>            
                <td></td>            
                <td></td>            
            </tr>       
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>b. Penduduk WNA yang menjadi</td>            
                <td></td>            
                <td></td>            
            </tr>       
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aa</span>Pelintas Batas ke Wilayah RI</td>            
                <td></td>            
                <td></td>            
            </tr>       
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>c. Beberapa Desa/Kelurahan yang</td>            
                <td></td>            
                <td></td>            
            </tr>       
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aa</span>Berbatasan langsung dengan</td>            
                <td></td>            
                <td></td>            
            </tr>       
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td><span class="white">aa</span>Negara Tetangga</td>            
                <td></td>            
                <td></td>            
            </tr>      
            <tr>
                <td></td>
                <td colspan="5">J. PEMILU</td>                    
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td >1.</td> 
                <td>Jumlah Pemilih Yang Terdaftar pada Pemilu</td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.1. Pemilih Pemula</td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>1.2. Pemilih Non Pemula</td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>           
                <td>2.</td> 
                <td>Jumlah Penduduk yang menggunakan Hak Pilihnya</td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.1. Pemilih Pemula yang menggunakan Hak Pilihnya </td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>           
                <td></td> 
                <td>2.2	Pemilih Non Pemula yang Menggunakan Hak Pilihnya</td>            
                <td></td>            
                <td></td>            
            </tr>  
            <tr>
                <td></td>
                <td></td>           
                <td>3.</td> 
                <td>Hasil Pemilu, menurut OPP dan prosentasenya untuk Pemilu</td>            
                <td></td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>4.</td> 
                <td>Jumlah OT dan OT1 untuk</td>            
                <td></td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <table class="">
                        <tr>
                            <td>Pemilu</td>
                            <td>OT</td>
                            <td>:</td>
                        </tr>
                        <tr>          
                            <td></td>                 
                            <td>OT.1</td>
                            <td>:</td>
                        </tr>                        
                        <tr>
                            <td>Pemilu</td>
                            <td>OT</td>
                            <td>:</td>
                        </tr>
                        <tr>          
                            <td></td>                 
                            <td>OT.1</td>
                            <td>:</td>
                        </tr>                        
                        <tr>
                            <td>Pemilu</td>
                            <td>OT</td>
                            <td>:</td>
                        </tr>
                        <tr>          
                            <td></td>                 
                            <td>OT.1</td>
                            <td>:</td>
                        </tr>                        
                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>           
                <td>5.	</td> 
                <td>Jumlah Pemilih yang menggunakan Formulir Model AB</td>            
                <td></td>            
                <td></td>            
            </tr> 
            <tr>
                <td></td>
                <td></td>           
                <td>K. Lain-lain</td>                 
                <td></td>            
                <td></td>            
                <td></td>            
            </tr> 
    </table>

    <pre class="white">
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        {{-- a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a --}}
    </pre>
    <h1 class="center">DATA MONOGRAFI</h1>
    <h1 class="center">KEC. MENGWI</h1>
    <h1 class="center">{{date_format(date_create($kumum->tanggal), "Y")}}</h1>
        


</body>
</html>
