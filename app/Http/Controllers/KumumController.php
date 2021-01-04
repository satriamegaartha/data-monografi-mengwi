<?php

namespace App\Http\Controllers;

use App\Kumum;
use App\Periode;
use App\Rules\CheckYear;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class KumumController extends Controller
{
    public function index()
    {
        // $kumum = Kumum::all()->sortByDesc('tanggal');
        $kumum = Kumum::orderBy('tanggal', 'desc')->paginate(10);
        return view('statis.kumum.index', compact('kumum'));
    }

    public function viewdata($id)
    {
        $kumum = Kumum::find($id);
        return view('statis.kumum.viewdata', compact('kumum'));
    }

    public function add()
    {
        return view('statis.kumum.add');
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
        $kumum = \App\Kumum::create($request->all());

        return redirect('/statis/kumum')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kumum = Kumum::find($id);
        return view('statis.kumum.edit', compact('kumum'));
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
        // dd($periode->id);
        $request->request->add([
            'semester' => $semester,
            'periode_id' => $periode->id
        ]);

        $kumum = Kumum::find($id);
        $kumum->update($request->all());

        return redirect('/statis/kumum')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $kumum = Kumum::find($id);
        $kumum->delete();
        return redirect('/statis/kumum')->with('delete', 'Data berhasil dihapus');;
    }
}
