<?php

namespace App\Http\Controllers;

use App\Periode;

use App\Pemkecamatan;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class PemkecamatanController extends Controller
{
    public function index()
    {
        // $pemkecamatan = Pemkecamatan::all()->sortByDesc('tanggal');
        $pemkecamatan = Pemkecamatan::orderBy('tanggal', 'desc')->paginate(10);
        return view('dinamis.pemkecamatan.index', compact('pemkecamatan'));
    }

    public function viewdata($id)
    {
        $pemkecamatan = Pemkecamatan::find($id);
        return view('dinamis.pemkecamatan.viewdata', compact('pemkecamatan'));
    }

    public function add()
    {
        return view('dinamis.pemkecamatan.add');
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
        $periode = Periode::where($matchThese)->first();
        $request->request->add(['semester' => $semester, 'user_id' => $user_id, 'periode_id' => $periode->id]);
        $pemkecamatan = \App\Pemkecamatan::create($request->all());

        return redirect('/dinamis/pemkecamatan')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pemkecamatan = Pemkecamatan::find($id);
        return view('dinamis.pemkecamatan.edit', compact('pemkecamatan'));
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
        $periode = Periode::where($matchThese)->first();
        $request->request->add(['semester' => $semester, 'periode_id' => $periode->id]);

        $pemkecamatan = Pemkecamatan::find($id);
        $pemkecamatan->update($request->all());

        return redirect('/dinamis/pemkecamatan')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $pemkecamatan = Pemkecamatan::find($id);
        $pemkecamatan->delete();
        return redirect('/dinamis/pemkecamatan')->with('delete', 'Data berhasil dihapus');;
    }
}
