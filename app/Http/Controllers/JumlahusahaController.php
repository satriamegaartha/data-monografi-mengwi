<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jumlahusaha;
use App\Rules\CheckYear;

class JumlahusahaController extends Controller
{
    public function index()
    {
        // $jumlahusaha = Jumlahusaha::all()->sortByDesc('tanggal');
        $jumlahusaha = Jumlahusaha::orderBy('tanggal', 'desc')->paginate(2);
        return view('statis.jumlahusaha.index', compact('jumlahusaha'));
    }

    public function viewdata($id)
    {
        $jumlahusaha = Jumlahusaha::find($id);
        return view('statis.jumlahusaha.viewdata', compact('jumlahusaha'));
    }

    public function add()
    {
        return view('statis.jumlahusaha.add');
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
        $request->request->add(['semester' => $semester, 'user_id' => $user_id]);
        $jumlahusaha = \App\Jumlahusaha::create($request->all());

        return redirect('/statis/jumlahusaha')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jumlahusaha = Jumlahusaha::find($id);
        return view('statis.jumlahusaha.edit', compact('jumlahusaha'));
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
        $request->request->add(['semester' => $semester]);

        $jumlahusaha = Jumlahusaha::find($id);
        $jumlahusaha->update($request->all());

        return redirect('/statis/jumlahusaha')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $jumlahusaha = Jumlahusaha::find($id);
        $jumlahusaha->delete();
        return redirect('/statis/jumlahusaha')->with('delete', 'Data berhasil dihapus');;
    }
}