<?php

namespace App\Http\Controllers;

use App\Periode;
use App\Kependudukan;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class KependudukanController extends Controller
{
    public function index()
    {
        // $kependudukan = Kependudukan::all()->sortByDesc('tanggal');
        $kependudukan = Kependudukan::orderBy('tanggal', 'desc')->paginate(10);
        return view('dinamis.kependudukan.index', compact('kependudukan'));
    }

    public function viewdata($id)
    {
        $kependudukan = Kependudukan::find($id);
        return view('dinamis.kependudukan.viewdata', compact('kependudukan'));
    }

    public function add()
    {
        return view('dinamis.kependudukan.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required|date',
            // 'tanggal' => new CheckYear,
        ]);
        $bulan = intval(date_format(date_create($request->tanggal), "m"));
        if ($bulan <= 6) {
            $semester = 1;
        } else {
            $semester = 2;
        }
        $user_id = auth()->user()->id;
        $matchThese = [
            ['tanggal_mulai', '<=', $request->tanggal],
            ['tanggal_selesai', '>=', $request->tanggal],
        ];
        $pindah_jml = $request->pindah_l + $request->pindah_p;
        $datang_jml = $request->datang_l + $request->datang_p;
        $lahir_jml = $request->lahir_l + $request->lahir_p;
        $mati_jml = $request->mati_l + $request->mati_p;
        $matikurang5_jml = $request->matikurang5_l + $request->matikurang5_p;
        $matilebih5_jml = $request->matilebih5_l + $request->matilebih5_p;

        $periode = Periode::where($matchThese)->first();
        $request->request->add([
            'semester' => $semester,
            'user_id' => $user_id,
            'periode_id' => $periode->id,
            'pindah_jml' => $pindah_jml,
            'datang_jml' => $datang_jml,
            'lahir_jml' => $lahir_jml,
            'mati_jml' => $mati_jml,
            'matikurang5_jml' => $matikurang5_jml,
            'matilebih5_jml' => $matilebih5_jml,
        ]);
        $kependudukan = \App\Kependudukan::create($request->all());

        return redirect('/dinamis/kependudukan')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kependudukan = Kependudukan::find($id);
        return view('dinamis.kependudukan.edit', compact('kependudukan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal' => 'required|date',
            // 'tanggal' => new CheckYear,
        ]);
        $bulan = intval(date_format(date_create($request->tanggal), "m"));
        if ($bulan <= 6) {
            $semester = 1;
        } else {
            $semester = 2;
        }
        $matchThese = [
            ['tanggal_mulai', '<=', $request->tanggal],
            ['tanggal_selesai', '>=', $request->tanggal],
        ];

        $pindah_jml = $request->pindah_l + $request->pindah_p;
        $datang_jml = $request->datang_l + $request->datang_p;
        $lahir_jml = $request->lahir_l + $request->lahir_p;
        $mati_jml = $request->mati_l + $request->mati_p;
        $matikurang5_jml = $request->matikurang5_l + $request->matikurang5_p;
        $matilebih5_jml = $request->matilebih5_l + $request->matilebih5_p;

        $periode = Periode::where($matchThese)->first();
        // $request->request->add(['semester' => $semester, 'periode_id' => $periode->id]);
        $request->request->add([
            'semester' => $semester,
            'periode_id' => $periode->id,
            'pindah_jml' => $pindah_jml,
            'datang_jml' => $datang_jml,
            'lahir_jml' => $lahir_jml,
            'mati_jml' => $mati_jml,
            'matikurang5_jml' => $matikurang5_jml,
            'matilebih5_jml' => $matilebih5_jml,
        ]);
        $kependudukan = Kependudukan::find($id);
        $kependudukan->update($request->all());

        return redirect('/dinamis/kependudukan')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $kependudukan = Kependudukan::find($id);
        $kependudukan->delete();
        return redirect('/dinamis/kependudukan')->with('delete', 'Data berhasil dihapus');;
    }
}
