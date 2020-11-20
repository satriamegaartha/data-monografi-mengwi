<?php

namespace App\Http\Controllers;

use App\Pemdesa;
use App\Periode;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class PemdesaController extends Controller
{
    public function index()
    {
        // $pemdesa = Pemdesa::all()->sortByDesc('tanggal');
        $pemdesa = Pemdesa::orderBy('tanggal', 'desc')->paginate(2);
        return view('statis.pemdesa.index', compact('pemdesa'));
    }

    public function viewdata($id)
    {
        $pemdesa = Pemdesa::find($id);
        return view('statis.pemdesa.viewdata', compact('pemdesa'));
    }

    public function add()
    {
        return view('statis.pemdesa.add');
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
        $pemdesa = \App\Pemdesa::create($request->all());

        return redirect('/statis/pemdesa')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pemdesa = Pemdesa::find($id);
        return view('statis.pemdesa.edit', compact('pemdesa'));
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

        $pemdesa = Pemdesa::find($id);
        $pemdesa->update($request->all());

        return redirect('/statis/pemdesa')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $pemdesa = Pemdesa::find($id);
        $pemdesa->delete();
        return redirect('/statis/pemdesa')->with('delete', 'Data berhasil dihapus');;
    }
}
