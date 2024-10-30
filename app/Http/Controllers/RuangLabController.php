<?php

namespace App\Http\Controllers;

use App\Models\ruang_lab;
use Illuminate\Http\Request;

class RuangLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruang_lab = Ruang_lab::all();
        return view('ruanglab.index', compact('ruang_lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruanglab.create');
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
            'nama' => 'required',
            'lokasi' => 'required',

        ]);

       $ruang_lab = new    ruang_lab();
       $ruang_lab->nama = $request-> nama;
       $ruang_lab->lokasi = $request->lokasi;

       $ruang_lab->save();

    return redirect()->route('ruanglab.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruang_lab  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function show(ruang_lab $ruang_lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruang_lab  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function edit(ruang_lab $ruang_lab)
    {
        $ruang_lab =     $ruang_lab::findOrFail($id);
        return view('ruanglab.edit', compact('ruang_lab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ruang_lab  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ruang_lab $ruang_lab)
    {
        $this->validate($request, [
            'nama' => 'required|integer',
            'lokasi' => 'required',
            ]);

            $ruang_lab = $ruang_lab::findOrFail($id);
            $ruang_lab = new    $ruang_lab();
            $ruang_lab->nama = $request-> nama;
            $ruang_lab->lokasi = $request->lokasi;

            $ruang_lab->save();
            return redirect()->route('ruanglab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruang_lab  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function destroy(ruang_lab $ruang_lab)
    {
        $ruang_lab->delete();
        return redirect()->route('ruanglab.index');
    }
}
