<?php

namespace App\Http\Controllers;

use App\Periode;
use App\Pangan;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class PanganController extends Controller
{
    public function index()
    {
        // $pangan = pangan::all()->sortByDesc('tanggal');
        $pangan = pangan::orderBy('tanggal', 'desc')->paginate(10);
        return view('dinamis.pangan.index', compact('pangan'));
    }

    public function viewdata($id)
    {
        $pangan = pangan::find($id);
        return view('dinamis.pangan.viewdata', compact('pangan'));
    }

    public function add()
    {
        return view('dinamis.pangan.add');
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
        $pangan = \App\pangan::create($request->all());

        return redirect('/dinamis/pangan')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pangan = pangan::find($id);
        return view('dinamis.pangan.edit', compact('pangan'));
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

        $pangan = pangan::find($id);
        $pangan->update($request->all());

        return redirect('/dinamis/pangan')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $pangan = pangan::find($id);
        $pangan->delete();
        return redirect('/dinamis/pangan')->with('delete', 'Data berhasil dihapus');;
    }
}
