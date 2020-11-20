<?php

namespace App\Http\Controllers;

use App\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode = periode::orderBy('tanggal_mulai', 'desc')->paginate(10);
        return view('periode.index', compact('periode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);
        $bulan = intval(date_format(date_create($request->tanggal_mulai), "m"));
        if ($bulan <= 6) {
            $semester = 1;
        } else {
            $semester = 2;
        }
        $periode = date_format(date_create($request->tanggal_mulai), "F Y") . ' - ' . date_format(date_create($request->tanggal_selesai), "F Y");
        $user_id = auth()->user()->id;
        $request->request->add([
            'semester' => $semester,
            'user_id' => $user_id,
            'periode' => $periode
        ]);
        $periode = Periode::create($request->all());

        return redirect('/periode')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(Periode $periode)
    {
        // dd($periode);
        return view('periode.show', compact('periode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function edit(Periode $periode)
    {
        // dd($periode);
        return view('periode.edit', compact('periode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periode $periode)
    {
        $this->validate($request, [
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);
        $bulan = intval(date_format(date_create($request->tanggal_mulai), "m"));
        if ($bulan <= 6) {
            $semester = 1;
        } else {
            $semester = 2;
        }
        $periodetemp = date_format(date_create($request->tanggal_mulai), "F Y") . ' - ' . date_format(date_create($request->tanggal_selesai), "F Y");
        $user_id = auth()->user()->id;
        $request->request->add([
            'semester' => $semester,
            'user_id' => $user_id,
            'periode' => $periodetemp
        ]);
        $periode->update($request->all());

        return redirect('/periode')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periode $periode)
    {
        $periode->delete();
        return redirect('/periode')->with('delete', 'Data berhasil dihapus');;
    }
}
