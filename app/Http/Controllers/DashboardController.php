<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Kumum;
use App\Ldaerah;
use App\Pemdesa;
use App\Prasarana;
use App\Pemkec;
use App\Pengangkutan;
use App\Pjgjalan;
use App\Perekonomian;
use App\Jumlahusaha;
use App\Saranasosbud;
use App\Pemkecamatan;
use App\Kependudukan;
use App\Keagrariaan;
use App\Tanaman;
use PDF;

class DashboardController extends Controller
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
        // $categories_pekerjaan = [
        //     'Petani pemilik tanah',
        //     'Petani Penggarap tanah',
        //     'Petani penggarap/penyekap',
        //     'Buruh tani',
        //     'Nelayan',
        //     'Pengusaha sedang/besar',
        //     'Pengrajin/industri kecil',
        //     'Buruh Industri',
        //     'Buruh Bangunan',
        //     'Buruh Pertambangan',
        //     'Buruh perkebunan (besar+kecil)',
        //     'Pedagang',
        //     'Pengangkutan',
        //     'Pegawai Negeri Sipil',
        //     'ABRI',
        //     'Pensiun (PEGNEG/pensiun)',
        //     'Peternak Sapi Perah',
        //     'Peternak Sapi Biasa',
        //     'Peternak Kerbau',
        //     'Peternak Kambing',
        //     'Peternak Domba',
        //     'Peternak Kuda',
        //     'Lain-lain',
        // ];
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
        return view('dashboard.index', compact('categories_usia', 'data_usia', 'categories_pekerjaan', 'data_pekerjaan', 'sem'));
    }

    public function chart(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required|date',
        ]);
        $bulan = intval(date_format(date_create($request->tanggal), "m"));
        if ($bulan <= 6) {
            $semester = 1;
        } else {
            $semester = 2;
        }

        $year = date_format(date_create($request->tanggal), "Y");
        $begin_date = $year . "-01-01";
        $end_date = $year . "-12-31";

        $matchThese = [
            ['tanggal', '>=', $begin_date],
            ['tanggal', '<=', $end_date],
            ['semester', '=', $semester],
        ];
        $data_chart = Kependudukan::where($matchThese)->first();
        if ($data_chart) {
        } else {
            $data_chart = Kependudukan::get()->first();
        }
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
        return view('dashboard.index', compact('categories_usia', 'data_usia', 'categories_pekerjaan', 'data_pekerjaan', 'sem'));
    }


    public function exportpdf(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required|date',
        ]);
        $bulan = intval(date_format(date_create($request->tanggal), "m"));
        if ($bulan <= 6) {
            $semester = 1;
        } else {
            $semester = 2;
        }

        $year = date_format(date_create($request->tanggal), "Y");
        $begin_date = $year . "-01-01";
        $end_date = $year . "-12-31";

        $matchThese = [
            ['tanggal', '>=', $begin_date],
            ['tanggal', '<=', $end_date],
            ['semester', '=', $semester],
        ];
        $kumum = Kumum::where($matchThese)->first();
        $ldaerah = Ldaerah::where($matchThese)->first();
        $pemdesa = Pemdesa::where($matchThese)->first();
        $prasarana = Prasarana::where($matchThese)->first();
        $pemkec = Pemkec::where($matchThese)->first();
        $pengangkutan = Pengangkutan::where($matchThese)->first();
        $pjgjalan = Pjgjalan::where($matchThese)->first();
        $perekonomian = Perekonomian::where($matchThese)->first();
        $jumlahusaha = Jumlahusaha::where($matchThese)->first();
        $saranasosbud = Saranasosbud::where($matchThese)->first();
        $pemkecamatan = Pemkecamatan::where($matchThese)->first();
        $kependudukan = Kependudukan::where($matchThese)->first();
        $keagrariaan = Keagrariaan::where($matchThese)->first();
        $tanaman = Tanaman::where($matchThese)->first();

        // dd($pemdesa);


        if ($kumum) {
            if ($kumum->semester == 1) {
                $sem = "Januari - Juni " . date_format(date_create($kumum->tanggal), "Y");
            } else {
                $sem = "Juli - Desember " . date_format(date_create($kumum->tanggal), "Y");
            }
        } else {
            if ($semester == 1) {
                $semx = "Januari - Juni " . date_format(date_create($request->tanggal), "Y");
            } else {
                $semx = "Juli - Desember " . date_format(date_create($request->tanggal), "Y");
            }
            return redirect('/dashboard')->with('error', 'Data ' . $semx . ' belum lengkap');;
        }

        if ($kumum) {
            if ($ldaerah) {
                if ($pemdesa) {
                    if ($prasarana) {
                        if ($pemkec) {
                            if ($pengangkutan) {
                                if ($pjgjalan) {
                                    if ($perekonomian) {
                                        if ($jumlahusaha) {
                                            if ($saranasosbud) {
                                                if ($pemkecamatan) {
                                                    if ($kependudukan) {
                                                        if ($keagrariaan) {
                                                            if ($tanaman) {
                                                                $pdf = PDF::loadVIEW('dashboard.export.exportpdf', [
                                                                    'kumum' => $kumum,
                                                                    'ldaerah' => $ldaerah,
                                                                    'pemdesa' => $pemdesa,
                                                                    'prasarana' => $prasarana,
                                                                    'pemkec' => $pemkec,
                                                                    'pengangkutan' => $pengangkutan,
                                                                    'pjgjalan' => $pjgjalan,
                                                                    'perekonomian' => $perekonomian,
                                                                    'jumlahusaha' => $jumlahusaha,
                                                                    'saranasosbud' => $saranasosbud,
                                                                    'pemkecamatan' => $pemkecamatan,
                                                                    'kependudukan' => $kependudukan,
                                                                    'keagrariaan' => $keagrariaan,
                                                                    'tanaman' => $tanaman,
                                                                    'sem' => $sem,
                                                                ]);
                                                                return $pdf->download('Data Monografi.pdf');
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return redirect('/dashboard')->with('error', 'Data ' . $sem . ' belum lengkap');;
    }
}
