<?php

namespace App\Http\Controllers;

use App\Models\tindakan;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tindakan = tindakan::all();
        return view('tindakan.index', compact('tindakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tindakan.create');
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
            'deskripsi' => 'required',

        ]);

       $tindakan = new    tindakan();
       $tindakan->deskripsi = $request-> deskripsi;
       $tindakan->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function show(tindakan $tindakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function edit(tindakan $tindakan)
    {
        $tindakan =     tindakan::findOrFail($id);
        return view('tidakan.edit', compact('tidakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tindakan $tindakan)
    {
        $this->validate($request, [
            'deskripsi' => 'required|integer',
            ]);

            $tindakan = tindakan::findOrFail($id);
            $tindakan = new    $tindakan();
            $tindakan->deskripsi = $request-> deskripsi;
            $tindakan->save();
            return redirect()->route('tindakan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(tindakan $tindakan)
    {
        $tindakan->delete();
        return redirect()->route('tindakan.index');
    }
}
