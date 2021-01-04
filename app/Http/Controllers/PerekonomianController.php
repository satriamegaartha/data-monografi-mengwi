<?php

namespace App\Http\Controllers;

use App\Periode;
use App\Perekonomian;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class PerekonomianController extends Controller
{
    public function index()
    {
        // $perekonomian = Perekonomian::all()->sortByDesc('tanggal');
        $perekonomian = Perekonomian::orderBy('tanggal', 'desc')->paginate(10);
        return view('statis.perekonomian.index', compact('perekonomian'));
    }

    public function viewdata($id)
    {
        $perekonomian = Perekonomian::find($id);
        return view('statis.perekonomian.viewdata', compact('perekonomian'));
    }

    public function add()
    {
        return view('statis.perekonomian.add');
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
        $perekonomian = \App\Perekonomian::create($request->all());

        return redirect('/statis/perekonomian')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $perekonomian = Perekonomian::find($id);
        return view('statis.perekonomian.edit', compact('perekonomian'));
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

        $perekonomian = Perekonomian::find($id);
        $perekonomian->update($request->all());

        return redirect('/statis/perekonomian')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $perekonomian = Perekonomian::find($id);
        $perekonomian->delete();
        return redirect('/statis/perekonomian')->with('delete', 'Data berhasil dihapus');;
    }
}
