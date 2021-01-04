<?php

namespace App\Http\Controllers;

use App\Periode;

use App\Pjgjalan;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

class PjgjalanController extends Controller
{
    public function index()
    {
        // $pjgjalan = Pjgjalan::all()->sortByDesc('tanggal');
        $pjgjalan = Pjgjalan::orderBy('tanggal', 'desc')->paginate(10);
        return view('statis.pjgjalan.index', compact('pjgjalan'));
    }

    public function viewdata($id)
    {
        $pjgjalan = Pjgjalan::find($id);
        return view('statis.pjgjalan.viewdata', compact('pjgjalan'));
    }

    public function add()
    {
        return view('statis.pjgjalan.add');
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
        $pjgjalan = \App\Pjgjalan::create($request->all());

        return redirect('/statis/pjgjalan')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pjgjalan = Pjgjalan::find($id);
        return view('statis.pjgjalan.edit', compact('pjgjalan'));
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

        $pjgjalan = Pjgjalan::find($id);
        $pjgjalan->update($request->all());

        return redirect('/statis/pjgjalan')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $pjgjalan = Pjgjalan::find($id);
        $pjgjalan->delete();
        return redirect('/statis/pjgjalan')->with('delete', 'Data berhasil dihapus');;
    }
}
