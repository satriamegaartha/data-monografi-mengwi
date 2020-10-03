<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keagrariaan;
use App\Rules\CheckYear;

class KeagrariaanController extends Controller
{
    public function index()
    {
        // $keagrariaan = Keagrariaan::all()->sortByDesc('tanggal');
        $keagrariaan = Keagrariaan::orderBy('tanggal', 'desc')->paginate(2);
        return view('dinamis.keagrariaan.index', compact('keagrariaan'));
    }

    public function viewdata($id)
    {
        $keagrariaan = Keagrariaan::find($id);
        return view('dinamis.keagrariaan.viewdata', compact('keagrariaan'));
    }

    public function add()
    {
        return view('dinamis.keagrariaan.add');
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
        $keagrariaan = \App\Keagrariaan::create($request->all());

        return redirect('/dinamis/keagrariaan')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $keagrariaan = Keagrariaan::find($id);
        return view('dinamis.keagrariaan.edit', compact('keagrariaan'));
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

        $keagrariaan = Keagrariaan::find($id);
        $keagrariaan->update($request->all());

        return redirect('/dinamis/keagrariaan')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $keagrariaan = Keagrariaan::find($id);
        $keagrariaan->delete();
        return redirect('/dinamis/keagrariaan')->with('delete', 'Data berhasil dihapus');;
    }
}
