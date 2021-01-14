<?php

namespace App\Http\Controllers;


use App\Periode;
use App\Transportasi;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class TransportasiController extends Controller
{
    public function index()
    {
        // $transportasi = transportasi::all()->sortByDesc('tanggal');
        $transportasi = transportasi::orderBy('tanggal', 'desc')->paginate(10);
        return view('dinamis.transportasi.index', compact('transportasi'));
    }

    public function viewdata($id)
    {
        $transportasi = transportasi::find($id);
        return view('dinamis.transportasi.viewdata', compact('transportasi'));
    }

    public function add()
    {
        return view('dinamis.transportasi.add');
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
        $transportasi = \App\transportasi::create($request->all());

        return redirect('/dinamis/transportasi')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $transportasi = transportasi::find($id);
        return view('dinamis.transportasi.edit', compact('transportasi'));
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

        $transportasi = transportasi::find($id);
        $transportasi->update($request->all());

        return redirect('/dinamis/transportasi')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $transportasi = transportasi::find($id);
        $transportasi->delete();
        return redirect('/dinamis/transportasi')->with('delete', 'Data berhasil dihapus');;
    }
}
