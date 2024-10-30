<?php

namespace App\Http\Controllers;

use App\Models\tusulan_perbaikan;
use Illuminate\Http\Request;

class TusulanPerbaikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tusulan_perbaikan = tusulan_perbaikan::all();
        return view('tusulan_perbaikan.index', compact('tusulan_perbaikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tusulan_perbaikan.create');
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
        'kode_tindakan' => 'required',
        'kode_aset' => 'required',


    ]);

    $tusulan_perbaikan = new    tusulan_perbaikan();
    $tusulan_perbaikan->tanggal = $request-> tanggal;
    $tusulan_perbaikan->kode_tindakan = $request->kode_tindakan;
    $tusulan_perbaikan->kode_aset = $request->kode_aset;

   $tusulan_perbaikan->save();

return redirect()->route('tusulan_perbaikan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tusulan_perbaikan  $tusulan_perbaikan
     * @return \Illuminate\Http\Response
     */
    public function show(tusulan_perbaikan $tusulan_perbaikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tusulan_perbaikan  $tusulan_perbaikan
     * @return \Illuminate\Http\Response
     */
    public function edit(tusulan_perbaikan $tusulan_perbaikan)
    {
        $tusulan_perbaikan =     $tusulan_perbaikan::findOrFail($id);
        return view('tusulan_perbaikan.edit', compact('tusulan_perbaikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tusulan_perbaikan  $tusulan_perbaikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tusulan_perbaikan $tusulan_perbaikan)
    {
        $this->validate($request, [
            'tanggal' => 'required|integer',
            'kode_tindakan' => 'required',
            'kode_aset' => 'required',

            ]);

            $tusulan_perbaikan = tusulan_perbaikan::findOrFail($id);
            $tusulan_perbaikan = new    $tusulan_perbaikan();
            $tusulan_perbaikan->tanggal = $request-> tanggal;
            $tusulan_perbaikan->kode_tindakan = $request->kode_tindakan;
            $tusulan_perbaikan->kode_aset = $request->kode_aset;
            $tusulan_perbaikan->save();
            return redirect()->route('tusulan_perbaikan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tusulan_perbaikan  $tusulan_perbaikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(tusulan_perbaikan $tusulan_perbaikan)
    {
        $tusulan_perbaikan->delete();
        return redirect()->route('tusulan_perbaikan.index');
    }
}
