<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kependudukan;
use App\Rules\CheckYear;

class KependudukanController extends Controller
{
    public function index()
    {
        // $kependudukan = Kependudukan::all()->sortByDesc('tanggal');
        $kependudukan = Kependudukan::orderBy('tanggal', 'desc')->paginate(2);
        return view('dinamis.kependudukan.index', compact('kependudukan'));
    }

    public function viewdata($id)
    {
        $kependudukan = Kependudukan::find($id);
        return view('dinamis.kependudukan.viewdata', compact('kependudukan'));
    }

    public function add()
    {
        return view('dinamis.kependudukan.add');
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
        $kependudukan = \App\Kependudukan::create($request->all());

        return redirect('/dinamis/kependudukan')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kependudukan = Kependudukan::find($id);
        return view('dinamis.kependudukan.edit', compact('kependudukan'));
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

        $kependudukan = Kependudukan::find($id);
        $kependudukan->update($request->all());

        return redirect('/dinamis/kependudukan')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $kependudukan = Kependudukan::find($id);
        $kependudukan->delete();
        return redirect('/dinamis/kependudukan')->with('delete', 'Data berhasil dihapus');;
    }
}
