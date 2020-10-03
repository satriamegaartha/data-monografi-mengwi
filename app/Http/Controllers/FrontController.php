<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kependudukan;

class FrontController extends Controller
{
    public function index()
    {
        $data_chart = Kependudukan::get()->first();
        $bulan = intval(date_format(date_create($data_chart->tanggal), "m"));
        if ($bulan <= 6) {
            $semester = 1;
        } else {
            $semester = 2;
        }
        if ($semester == 1) {
            $sem = "Januari - Juni " . date_format(date_create($data_chart->tanggal), "Y");
        } else {
            $sem = "Juli - Desember " . date_format(date_create($data_chart->tanggal), "Y");
        }
        $categories_usia = [
            '0 - 4 tahun',
            '5 - 9 tahun',
            '10 - 14 tahun',
            '15 - 19 tahun',
            '20 - 24 tahun',
            '25 - 29 tahun',
            '30 - 34 tahun',
            '35 - 39 tahun',
            '40 tahun keatas'
        ];
        $data_usia = [
            $data_chart->jml_b_0_4,
            $data_chart->jml_b_5_9,
            $data_chart->jml_b_10_14,
            $data_chart->jml_b_15_19,
            $data_chart->jml_b_20_24,
            $data_chart->jml_b_25_29,
            $data_chart->jml_b_30_34,
            $data_chart->jml_b_35_39,
            $data_chart->jml_b_40_up,
        ];
        $categories_pekerjaan = [
            'Petani pemilik tanah',
            'Petani Penggarap tanah',
            'Petani penggarap/penyekap',
            'Buruh tani',
            'Nelayan',
            'Pengusaha sedang/besar',
            'Pengrajin/industri kecil',
            'Buruh Industri',
            'Buruh Bangunan',
            'Buruh Pertambangan',
            'Buruh perkebunan (besar+kecil)',
            'Pedagang',
            'Pengangkutan',
            'Pegawai Negeri Sipil',
            'ABRI',
            'Pensiun (PEGNEG/pensiun)',
            'Lain-lain',

        ];
        $data_pekerjaan = [
            $data_chart->petani_pemilik,
            $data_chart->petani_penggarap,
            $data_chart->petani_penyekap,
            $data_chart->petani_buruh,
            $data_chart->nelayan,
            $data_chart->pengusaha_sedang,
            $data_chart->pengrajin,
            $data_chart->buruh_industri,
            $data_chart->buruh_bangunan,
            $data_chart->buruh_pertambangan,
            $data_chart->buruh_perkebunan,
            $data_chart->pedagang,
            $data_chart->pengangkutan,
            $data_chart->pns,
            $data_chart->abri,
            $data_chart->pensiun,
            $data_chart->lain,
        ];
        return view('front.index', compact('categories_usia', 'data_usia', 'categories_pekerjaan', 'data_pekerjaan', 'sem'));
        // return view('front.index');
    }
}
