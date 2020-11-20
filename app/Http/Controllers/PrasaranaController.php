<?php

namespace App\Http\Controllers;

use App\Periode;

use App\Prasarana;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class PrasaranaController extends Controller
{
    public function index()
    {
        // $prasarana = Prasarana::all()->sortByDesc('tanggal');
        $prasarana = Prasarana::orderBy('tanggal', 'desc')->paginate(2);
        return view('statis.prasarana.index', compact('prasarana'));
    }

    public function viewdata($id)
    {
        $prasarana = Prasarana::find($id);
        return view('statis.prasarana.viewdata', compact('prasarana'));
    }

    public function add()
    {
        return view('statis.prasarana.add');
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
        $matchThese = [
            ['tanggal_mulai', '<=', $request->tanggal],
            ['tanggal_selesai', '>=', $request->tanggal],
        ];
        $periode = Periode::where($matchThese)->first();
        $user_id = auth()->user()->id;
        $request->request->add(['semester' => $semester, 'user_id' => $user_id]);
        $prasarana = \App\Prasarana::create($request->all());

        return redirect('/statis/prasarana')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $prasarana = Prasarana::find($id);
        return view('statis.prasarana.edit', compact('prasarana'));
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

        $prasarana = Prasarana::find($id);
        $prasarana->update($request->all());

        return redirect('/statis/prasarana')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $prasarana = Prasarana::find($id);
        $prasarana->delete();
        return redirect('/statis/prasarana')->with('delete', 'Data berhasil dihapus');;
    }
}
