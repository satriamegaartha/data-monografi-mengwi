<?php

namespace App\Http\Controllers;

use App\Pemkec;
use App\Periode;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class PemkecController extends Controller
{
    public function index()
    {
        // $pemkec = Pemkec::all()->sortByDesc('tanggal');
        $pemkec = Pemkec::orderBy('tanggal', 'desc')->paginate(10);
        return view('statis.pemkec.index', compact('pemkec'));
    }

    public function viewdata($id)
    {
        $pemkec = Pemkec::find($id);
        return view('statis.pemkec.viewdata', compact('pemkec'));
    }

    public function add()
    {
        return view('statis.pemkec.add');
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
        $pemkec = \App\Pemkec::create($request->all());

        return redirect('/statis/pemkec')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pemkec = Pemkec::find($id);
        return view('statis.pemkec.edit', compact('pemkec'));
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

        $pemkec = Pemkec::find($id);
        $pemkec->update($request->all());

        return redirect('/statis/pemkec')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $pemkec = Pemkec::find($id);
        $pemkec->delete();
        return redirect('/statis/pemkec')->with('delete', 'Data berhasil dihapus');;
    }
}
