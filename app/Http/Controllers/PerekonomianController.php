<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perekonomian;
use App\Rules\CheckYear;

class PerekonomianController extends Controller
{
    public function index()
    {
        // $perekonomian = Perekonomian::all()->sortByDesc('tanggal');
        $perekonomian = Perekonomian::orderBy('tanggal', 'desc')->paginate(2);
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
        $request->request->add(['semester' => $semester, 'user_id' => $user_id]);
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
        $request->request->add(['semester' => $semester]);

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
