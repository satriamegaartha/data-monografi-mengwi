<?php

namespace App\Http\Controllers;

use App\Periode;
use App\Perikanan;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class PerikananController extends Controller
{
    public function index()
    {
        // $perikanan = perikanan::all()->sortByDesc('tanggal');
        $perikanan = perikanan::orderBy('tanggal', 'desc')->paginate(10);
        return view('dinamis.perikanan.index', compact('perikanan'));
    }

    public function viewdata($id)
    {
        $perikanan = perikanan::find($id);
        return view('dinamis.perikanan.viewdata', compact('perikanan'));
    }

    public function add()
    {
        return view('dinamis.perikanan.add');
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
        $perikanan = \App\perikanan::create($request->all());

        return redirect('/dinamis/perikanan')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $perikanan = perikanan::find($id);
        return view('dinamis.perikanan.edit', compact('perikanan'));
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

        $perikanan = perikanan::find($id);
        $perikanan->update($request->all());

        return redirect('/dinamis/perikanan')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $perikanan = perikanan::find($id);
        $perikanan->delete();
        return redirect('/dinamis/perikanan')->with('delete', 'Data berhasil dihapus');;
    }
}
