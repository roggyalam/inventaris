<?php

namespace App\Http\Controllers;

use App\Models\tusulan_plengadaan;
use Illuminate\Http\Request;

class TusulanPlengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tusulan_plengadaan = tusulan_plengadaan::all();
        return view('tusulan_plengadaan.index', compact('tusulan_plengadaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tusulan_plengadaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|integer',
            'kode_peralatan' => 'required',
            'qty' => 'required',
            'kode_spek' => 'required',

        ]);

        $tusulan_plengadaan = new    tusulan_plengadaan();
        $tusulan_plengadaan->tanggal = $request-> tanggal;
        $tusulan_plengadaan->kode_peralatan = $request->kode_peralatan;
        $tusulan_plengadaan->qty = $request->qty;
        $tusulan_plengadaan->kode_spek = $request->kode_spek;

       $tusulan_plengadaan->save();

    return redirect()->route('tusulan_plengadaan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tusulan_plengadaan  $tusulan_plengadaan
     * @return \Illuminate\Http\Response
     */
    public function show(tusulan_plengadaan $tusulan_plengadaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tusulan_plengadaan  $tusulan_plengadaan
     * @return \Illuminate\Http\Response
     */
    public function edit(tusulan_plengadaan $tusulan_plengadaan)
    {
        $tusulan_plengadaan =     tusulan_plengadaan::findOrFail($id);
        return view('tusulan_plengadaan.edit', compact('tusulan_plengadaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tusulan_plengadaan  $tusulan_plengadaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tusulan_plengadaan $tusulan_plengadaan)
    {
        $this->validate($request, [
            'tanggal' => 'required|integer',
            'kode_peralatan' => 'required',
            'qty' => 'required',
            'kode_spek' => 'required',

            ]);

            $tusulan_plengadaan = tusulan_plengadaan::findOrFail($id);
            $tusulan_plengadaan = new    $tusulan_plengadaan();
            $tusulan_plengadaan->tanggal = $request-> tanggal;
            $tusulan_plengadaan->kode_peralatan = $request->kode_peralatan;
            $tusulan_plengadaan->qty = $request->qty;
            $tusulan_plengadaan->kode_spek = $request->kode_spek;
            $tusulan_plengadaan->save();
            return redirect()->route('tusulan_plengadaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tusulan_plengadaan  $tusulan_plengadaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(tusulan_plengadaan $tusulan_plengadaan)
    {
        $tusulan_plengadaan->delete();
        return redirect()->route('tusulan_plengadaan.index');
    }
}
