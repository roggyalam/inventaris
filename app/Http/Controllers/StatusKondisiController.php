<?php

namespace App\Http\Controllers;

use App\Models\status_kondisi;
use Illuminate\Http\Request;

class StatusKondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_kondisi = status_kondisi::all();
        return view('statuskondisi.index', compact('status_kondisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statuskondisi.create');
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
            'kondisi' => 'required',

        ]);

       $status_kondisi = new    status_kondisi();
       $status_kondisi->kondisi = $request-> kondisi;
       $status_kondisi->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\status_kondisi  $status_kondisi
     * @return \Illuminate\Http\Response
     */
    public function show(status_kondisi $status_kondisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\status_kondisi  $status_kondisi
     * @return \Illuminate\Http\Response
     */
    public function edit(status_kondisi $status_kondisi)
    {
        $status_kondisi =     status_kondisi::findOrFail($id);
        return view('statuskondisi.edit', compact('status_kondisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\status_kondisi  $status_kondisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, status_kondisi $status_kondisi)
    {
        $this->validate($request, [
            'kondisi' => 'required|integer',
            ]);

            $status_kondisi = status_kondisi::findOrFail($id);
            $status_kondisi = new    $status_kondisi();
            $status_kondisi->kondisi = $request-> kondisi;
            $status_kondisi->save();
            return redirect()->route('status_kondisi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\status_kondisi  $status_kondisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(status_kondisi $status_kondisi)
    {
        $status_kondisi->delete();
        return redirect()->route('status_kondisi.index');
    }
}
