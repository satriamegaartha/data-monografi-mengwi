<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Saranasosbud;
use App\Rules\CheckYear;

class SaranasosbudController extends Controller
{
    public function index()
    {
        // $saranasosbud = Saranasosbud::all()->sortByDesc('tanggal');
        $saranasosbud = Saranasosbud::orderBy('tanggal', 'desc')->paginate(2);
        return view('statis.saranasosbud.index', compact('saranasosbud'));
    }

    public function viewdata($id)
    {
        $saranasosbud = Saranasosbud::find($id);
        return view('statis.saranasosbud.viewdata', compact('saranasosbud'));
    }

    public function add()
    {
        return view('statis.saranasosbud.add');
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
        $saranasosbud = \App\Saranasosbud::create($request->all());

        return redirect('/statis/saranasosbud')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $saranasosbud = Saranasosbud::find($id);
        return view('statis.saranasosbud.edit', compact('saranasosbud'));
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

        $saranasosbud = Saranasosbud::find($id);
        $saranasosbud->update($request->all());

        return redirect('/statis/saranasosbud')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $saranasosbud = Saranasosbud::find($id);
        $saranasosbud->delete();
        return redirect('/statis/saranasosbud')->with('delete', 'Data berhasil dihapus');;
    }
}
