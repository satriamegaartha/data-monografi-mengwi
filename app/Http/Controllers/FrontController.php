<?php

namespace App\Http\Controllers;

use PDF;
// use App\Kependudukan;


use App\Kumum;
use App\Pemkec;
use App\Ldaerah;
use App\Pemdesa;
use App\Periode;
use App\Tanaman;
use App\Pjgjalan;
use App\Prasarana;
use App\Jumlahusaha;
use App\Keagrariaan;
use App\Kependudukan;
use App\Pemkecamatan;
use App\Pengangkutan;
use App\Perekonomian;
use App\Saranasosbud;
use App\Pangan;
use App\Perikanan;
use App\Transportasi;
use App\Polkam;
use Illuminate\Http\Request;


class FrontController extends Controller
{
    public function index()
    {
        // $tanggal = Kumum::get('tanggal');
        // $tanggal = Kumum::orderBy('tanggal', 'asc')->get('tanggal');
        // $periode = [];
        // foreach ($tanggal as $t) {
        //     $temp = [];
        //     $bulan = intval(date_format(date_create($t->tanggal), "m"));
        //     if ($bulan <= 6) {
        //         $semester = 1;
        //     } else {
        //         $semester = 2;
        //     }
        //     if ($semester == 1) {
        //         $sem = "Januari - Juni " . date_format(date_create($t->tanggal), "Y");
        //     } else {
        //         $sem = "Juli - Desember " . date_format(date_create($t->tanggal), "Y");
        //     }

        //     array_push($temp, $t->tanggal);
        //     array_push($temp, $sem);
        //     array_push($periode, $temp);
        // }




        // $data_chart = Kependudukan::get()->first();
        // $bulan = intval(date_format(date_create($data_chart->tanggal), "m"));
        // if ($bulan <= 6) {
        //     $semester = 1;
        // } else {
        //     $semester = 2;
        // }
        // if ($semester == 1) {
        //     $sem = "Januari - Juni " . date_format(date_create($data_chart->tanggal), "Y");
        // } else {
        //     $sem = "Juli - Desember " . date_format(date_create($data_chart->tanggal), "Y");
        // }

        $periode = Periode::orderBy('tanggal_mulai', 'asc')->get();
        $data_chart = Kependudukan::get()->first();
        $periode_id = $data_chart['periode_id'];
        $sem = Periode::find($periode_id)->periode;

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
        $categories_mutasi = [
            'Pindah',
            'Datang',
            'Lahir',
            'Mati',
            'Mati < 5 Th',
            'Mati > 5 Th ',
        ];
        $data_mutasi_l = [
            $data_chart->pindah_l,
            $data_chart->datang_l,
            $data_chart->lahir_l,
            $data_chart->mati_l,
            $data_chart->matikurang5_l,
            $data_chart->matilebih5_l,
        ];
        $data_mutasi_p = [
            $data_chart->pindah_p,
            $data_chart->datang_p,
            $data_chart->lahir_p,
            $data_chart->mati_p,
            $data_chart->matikurang5_p,
            $data_chart->matilebih5_p,
        ];
        $data_mutasi_jml = [
            $data_chart->pindah_jml,
            $data_chart->datang_jml,
            $data_chart->lahir_jml,
            $data_chart->mati_jml,
            $data_chart->matikurang5_jml,
            $data_chart->matilebih5_jml,
        ];


        return view('front.index', compact('categories_usia', 'data_usia', 'categories_pekerjaan', 'data_pekerjaan', 'categories_mutasi', 'data_mutasi_l', 'data_mutasi_p', 'data_mutasi_jml', 'sem', 'periode'));
        // return view('front.index');
    }

    public function chart(Request $request)
    {
        // $tanggal = Kumum::get('tanggal');
        // $tanggal = Kumum::orderBy('tanggal', 'asc')->get('tanggal');
        // $periode = [];
        // foreach ($tanggal as $t) {
        //     $temp = [];
        //     $bulan = intval(date_format(date_create($t->tanggal), "m"));
        //     if ($bulan <= 6) {
        //         $semester = 1;
        //     } else {
        //         $semester = 2;
        //     }
        //     if ($semester == 1) {
        //         $sem = "Januari - Juni " . date_format(date_create($t->tanggal), "Y");
        //     } else {
        //         $sem = "Juli - Desember " . date_format(date_create($t->tanggal), "Y");
        //     }

        //     array_push($temp, $t->tanggal);
        //     array_push($temp, $sem);
        //     array_push($periode, $temp);
        // }

        $periode = Periode::orderBy('tanggal_mulai', 'asc')->get();


        $this->validate($request, [
            'tanggal' => 'required',
        ]);
        $tanggal = Periode::find($request->tanggal);
        $begin_date = $tanggal->tanggal_mulai;
        $end_date = $tanggal->tanggal_selesai;

        $matchThese = [
            ['tanggal', '>=', $begin_date],
            ['tanggal', '<=', $end_date],
        ];
        $data_chart = Kependudukan::where($matchThese)->first();
        if ($data_chart) {
        } else {
            // $data_chart = Kependudukan::get()->first();
            return redirect('/')->with('delete', 'Data chart belum lengkap');;
        }
        $sem = $tanggal->periode;
        // $bulan = intval(date_format(date_create($data_chart->tanggal), "m"));
        // if ($bulan <= 6) {
        //     $semester = 1;
        // } else {
        //     $semester = 2;
        // }
        // if ($semester == 1) {
        //     $sem = "Januari - Juni " . date_format(date_create($data_chart->tanggal), "Y");
        // } else {
        //     $sem = "Juli - Desember " . date_format(date_create($data_chart->tanggal), "Y");
        // }
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
        $categories_mutasi = [
            'Pindah',
            'Datang',
            'Lahir',
            'Mati',
            'Mati < 5 Th',
            'Mati > 5 Th ',
        ];
        $data_mutasi_l = [
            $data_chart->pindah_l,
            $data_chart->datang_l,
            $data_chart->lahir_l,
            $data_chart->mati_l,
            $data_chart->matikurang5_l,
            $data_chart->matilebih5_l,
        ];
        $data_mutasi_p = [
            $data_chart->pindah_p,
            $data_chart->datang_p,
            $data_chart->lahir_p,
            $data_chart->mati_p,
            $data_chart->matikurang5_p,
            $data_chart->matilebih5_p,
        ];
        $data_mutasi_jml = [
            $data_chart->pindah_jml,
            $data_chart->datang_jml,
            $data_chart->lahir_jml,
            $data_chart->mati_jml,
            $data_chart->matikurang5_jml,
            $data_chart->matilebih5_jml,
        ];


        return view('front.index', compact('categories_usia', 'data_usia', 'categories_pekerjaan', 'data_pekerjaan', 'categories_mutasi', 'data_mutasi_l', 'data_mutasi_p', 'data_mutasi_jml',  'sem', 'periode'));
    }

    public function exportpdf(Request $request)
    {
        $periode = Periode::orderBy('tanggal_mulai', 'asc')->get();
        $this->validate($request, [
            'tanggal' => 'required',
        ]);
        // $bulan = intval(date_format(date_create($request->tanggal), "m"));
        // if ($bulan <= 6) {
        //     $semester = 1;
        // } else {
        //     $semester = 2;
        // }

        // $year = date_format(date_create($request->tanggal), "Y");
        // $begin_date = $year . "-01-01";
        // $end_date = $year . "-12-31";

        // $matchThese = [
        //     ['tanggal', '>=', $begin_date],
        //     ['tanggal', '<=', $end_date],
        //     ['semester', '=', $semester],
        // ];
        $tanggal = Periode::find($request->tanggal);
        $begin_date = $tanggal->tanggal_mulai;
        $end_date = $tanggal->tanggal_selesai;

        $matchThese = [
            ['tanggal', '>=', $begin_date],
            ['tanggal', '<=', $end_date],
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
        $pangan = Pangan::where($matchThese)->first();
        $perikanan = Perikanan::where($matchThese)->first();
        $transportasi = Transportasi::where($matchThese)->first();
        $polkam = Polkam::where($matchThese)->first();

        // dd($pemdesa);


        if ($kumum) {
            // if ($kumum->semester == 1) {
            //     $sem = "Januari - Juni " . date_format(date_create($kumum->tanggal), "Y");
            // } else {
            //     $sem = "Juli - Desember " . date_format(date_create($kumum->tanggal), "Y");
            // }
            $sem = $tanggal->periode;
        } else {
            // if ($semester == 1) {
            //     $semx = "Januari - Juni " . date_format(date_create($request->tanggal), "Y");
            // } else {
            //     $semx = "Juli - Desember " . date_format(date_create($request->tanggal), "Y");
            // }
            $semx = $tanggal->periode;
            return redirect('/')->with('error', 'Data ' . $semx . ' belum lengkap');;
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
                                                                if ($pangan) {
                                                                    if ($perikanan) {
                                                                        if ($transportasi) {
                                                                            if ($polkam) {

                                                                                // $pdf = PDF::loadVIEW('dashboard.export.exportpdf', [
                                                                                //     'kumum' => $kumum,
                                                                                //     'ldaerah' => $ldaerah,
                                                                                //     'pemdesa' => $pemdesa,
                                                                                //     'prasarana' => $prasarana,
                                                                                //     'pemkec' => $pemkec,
                                                                                //     'pengangkutan' => $pengangkutan,
                                                                                //     'pjgjalan' => $pjgjalan,
                                                                                //     'perekonomian' => $perekonomian,
                                                                                //     'jumlahusaha' => $jumlahusaha,
                                                                                //     'saranasosbud' => $saranasosbud,
                                                                                //     'pemkecamatan' => $pemkecamatan,
                                                                                //     'kependudukan' => $kependudukan,
                                                                                //     'keagrariaan' => $keagrariaan,
                                                                                //     'tanaman' => $tanaman,
                                                                                //     'sem' => $sem,
                                                                                // ]);
                                                                                // return $pdf->download('Data Monografi.pdf');

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
                                                                                    'perikanan' => $perikanan,
                                                                                    'pangan' => $pangan,
                                                                                    'transportasi' => $transportasi,
                                                                                    'polkam' => $polkam,
                                                                                    'sem' => $sem,
                                                                                ]);
                                                                                return view('front.monografi', compact('kumum', 'ldaerah', 'pemdesa', 'prasarana', 'pemkec', 'pengangkutan', 'pjgjalan', 'perekonomian', 'jumlahusaha', 'saranasosbud', 'pemkecamatan', 'kependudukan', 'keagrariaan', 'tanaman', 'pangan', 'transportasi', 'polkam', 'perikanan', 'sem'));
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
                    }
                }
            }
        }
        return redirect('/')->with('error', 'Data ' . $sem . ' belum lengkap');;
    }
}
