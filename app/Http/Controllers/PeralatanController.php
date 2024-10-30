<?php

namespace App\Http\Controllers;

use App\Models\spek_komputer;
use App\Models\peralatan;
use Illuminate\Http\Request;

class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peralatan = Peralatan::all();
        return view('peralatan.index', compact('peralatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spek_komputer = Spek_komputer::all();
        return view('peralatan.create', compact('spek_komputer'));
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
            'jenis_peralatan' => 'required|integer',
            'nama_peralatan' => 'required',
            'kategori' => 'required',
            'spek' => 'required',
            'kode_spek' => 'required',

        ]);

        $peralatan = new    peralatan();
        $peralatan->jenis_peralatan = $request-> jenis_peralatan;
        $peralatan->nama_peralatan = $request->nama_peralatan;
        $peralatan->kategori = $request->kategori;
        $peralatan->spek = $request->spek;
        $peralatan->kode_spek = $request->kode_spek;

       $peralatan->save();

    return redirect()->route('peralatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function show(peralatan $peralatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function edit(peralatan $peralatan)
    {
        $peralatan =     $peralatan::findOrFail($id);
        return view('peralatan.edit', compact('peralatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peralatan $peralatan)
    {
        $this->validate($request, [
            'jenis_peralatan' => 'required|integer',
            'nama_peralatan' => 'required',
            'kategori' => 'required',
            'spek' => 'required',
            'kode_spek' => 'required',

            ]);

            $peralatan = new    $peralatan();
        $peralatan->jenis_peralatan = $request-> jenis_peralatan;
        $peralatan->nama_peralatan = $request->nama_peralatan;
        $peralatan->kategori = $request->kategori;
        $peralatan->spek = $request->spek;
        $peralatan->kode_spek = $request->kode_spek;
        $peralatan->save();

            return redirect()->route('peralatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(peralatan $peralatan)
    {
        $peralatan->delete();
        return redirect()->route('peralatan.index');
    }
}
