<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ldaerah;
use App\Rules\CheckYear;

class LdaerahController extends Controller
{
    public function index()
    {
        // $ldaerah = Ldaerah::all()->sortByDesc('tanggal');
        $ldaerah = Ldaerah::orderBy('tanggal', 'desc')->paginate(2);
        return view('statis.ldaerah.index', compact('ldaerah'));
    }

    public function viewdata($id)
    {
        $ldaerah = Ldaerah::find($id);
        return view('statis.ldaerah.viewdata', compact('ldaerah'));
    }

    public function add()
    {
        return view('statis.ldaerah.add');
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
        $ldaerah = \App\Ldaerah::create($request->all());

        return redirect('/statis/ldaerah')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $ldaerah = Ldaerah::find($id);
        return view('statis.ldaerah.edit', compact('ldaerah'));
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

        $ldaerah = Ldaerah::find($id);
        $ldaerah->update($request->all());

        return redirect('/statis/ldaerah')->with('message', 'Data berhasil diupdate');;
    }


    public function delete($id)
    {
        $ldaerah = Ldaerah::find($id);
        $ldaerah->delete();
        return redirect('/statis/ldaerah')->with('delete', 'Data berhasil dihapus');;
    }
}
