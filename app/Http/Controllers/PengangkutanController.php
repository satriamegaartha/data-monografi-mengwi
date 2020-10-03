<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengangkutan;
use App\Rules\CheckYear;

class PengangkutanController extends Controller
{
    public function index()
    {
        // $pengangkutan = Pengangkutan::all()->sortByDesc('tanggal');
        $pengangkutan = Pengangkutan::orderBy('tanggal', 'desc')->paginate(2);
        return view('statis.pengangkutan.index', compact('pengangkutan'));
    }

    public function viewdata($id)
    {
        $pengangkutan = Pengangkutan::find($id);
        return view('statis.pengangkutan.viewdata', compact('pengangkutan'));
    }

    public function add()
    {
        return view('statis.pengangkutan.add');
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
        $pengangkutan = \App\Pengangkutan::create($request->all());

        return redirect('/statis/pengangkutan')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengangkutan = Pengangkutan::find($id);
        return view('statis.pengangkutan.edit', compact('pengangkutan'));
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

        $pengangkutan = Pengangkutan::find($id);
        $pengangkutan->update($request->all());

        return redirect('/statis/pengangkutan')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $pengangkutan = Pengangkutan::find($id);
        $pengangkutan->delete();
        return redirect('/statis/pengangkutan')->with('delete', 'Data berhasil dihapus');;
    }
}
