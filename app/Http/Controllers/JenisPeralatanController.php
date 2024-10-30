<?php

namespace App\Http\Controllers;

use App\Models\Jenis_peralatan;
use Illuminate\Http\Request;

class JenisPeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_peralatan = Jenis_peralatan::all();
        return view('jenisperalatan.index', compact('jenis_peralatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenisperalatan.create');
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
            'nama_costumer' => 'required',
        ]);

       $jenis_peralatan = new   jenis_peralatan();
       $jenis_peralatan->nama_costumer = $request-> nama_costumer;
       $jenis_peralatan->save();

    return redirect()->route('jenisperalatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenis_peralatan  $jenis_peralatan
     * @return \Illuminate\Http\Response
     */
    public function show(jenis_peralatan $jenis_peralatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenis_peralatan  $jenis_peralatan
     * @return \Illuminate\Http\Response
     */
    public function edit(jenis_peralatan $jenis_peralatan)
    {
        $jenis_peralatan =     jenis_peralatan::findOrFail($id);
        return view('jenisperalatan.edit', compact('jenis_peralatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jenis_peralatan  $jenis_peralatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenis_peralatan $jenis_peralatan)
    {
        $this->validate($request, [
            'nama_costumer' => 'required',
            ]);

            $jenis_peralatan = jenis_peralatan::findOrFail($id);
            $jenis_peralatan = new    $jenis_peralatan();
            $jenis_peralatan->nama_costumer = $request-> nama_costumer;
            $jenis_peralatan->save();
            return redirect()->route('jenisperalatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenis_peralatan  $jenis_peralatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenis_peralatan $jenis_peralatan)
    {
        $jenis_peralatan->delete();
        return redirect()->route('jenisperalatan.index');
    }
}
