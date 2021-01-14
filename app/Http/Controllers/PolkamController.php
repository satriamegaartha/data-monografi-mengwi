<?php

namespace App\Http\Controllers;


use App\Periode;
use App\Polkam;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class PolkamController extends Controller
{
    public function index()
    {
        // $polkam = polkam::all()->sortByDesc('tanggal');
        $polkam = polkam::orderBy('tanggal', 'desc')->paginate(10);
        return view('dinamis.polkam.index', compact('polkam'));
    }

    public function viewdata($id)
    {
        $polkam = polkam::find($id);
        return view('dinamis.polkam.viewdata', compact('polkam'));
    }

    public function add()
    {
        return view('dinamis.polkam.add');
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
        $polkam = \App\polkam::create($request->all());

        return redirect('/dinamis/polkam')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $polkam = polkam::find($id);
        return view('dinamis.polkam.edit', compact('polkam'));
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

        $polkam = polkam::find($id);
        $polkam->update($request->all());

        return redirect('/dinamis/polkam')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $polkam = polkam::find($id);
        $polkam->delete();
        return redirect('/dinamis/polkam')->with('delete', 'Data berhasil dihapus');;
    }
}
