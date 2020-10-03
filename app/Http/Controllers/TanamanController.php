<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanaman;
use App\Rules\CheckYear;

class TanamanController extends Controller
{
    public function index()
    {
        // $tanaman = Tanaman::all()->sortByDesc('tanggal');
        $tanaman = Tanaman::orderBy('tanggal', 'desc')->paginate(2);
        return view('dinamis.tanaman.index', compact('tanaman'));
    }

    public function viewdata($id)
    {
        $tanaman = Tanaman::find($id);
        return view('dinamis.tanaman.viewdata', compact('tanaman'));
    }

    public function add()
    {
        return view('dinamis.tanaman.add');
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
        $tanaman = \App\Tanaman::create($request->all());

        return redirect('/dinamis/tanaman')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $tanaman = Tanaman::find($id);
        return view('dinamis.tanaman.edit', compact('tanaman'));
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

        $tanaman = Tanaman::find($id);
        $tanaman->update($request->all());

        return redirect('/dinamis/tanaman')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $tanaman = Tanaman::find($id);
        $tanaman->delete();
        return redirect('/dinamis/tanaman')->with('delete', 'Data berhasil dihapus');;
    }
}
