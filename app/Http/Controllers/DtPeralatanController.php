<?php

namespace App\Http\Controllers;

use App\Models\dt_peralatan;
use App\Models\ruang_lab;
use App\Models\status_kondisi;
use App\Models\peralatan;
use Illuminate\Http\Request;

class DtPeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt_peralatan = dt_peralatan::all();
        return view('dtperalatan.index', compact('dt_peralatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peralatan = peralatan::all();
        $ruang_lab = ruang_lab::all();
        $status_kondisi = status_kondisi::all();
        return view('dtperalatan.create', compact('peralatan','ruang_lab','status_kondisi'));
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
            'qr_code' => 'required',
            'barcode' => 'required',
            'kode_ruang' => 'required',
            'kode_status_kondisi' => 'required',

        ]);

       $dt_peralatan = new    dt_peralatan();
       $dt_peralatan->qr_code = $request-> qr_code;
       $dt_peralatan->barcode = $request->barcode;
       $dt_peralatan->kode_ruang = $request->kode_ruang;
       $dt_peralatan->kode_status_kondisi = $request->kode_status_kondisi;

       $dt_peralatan->save();

    return redirect()->route('dt_peralatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dt_peralatan  $dt_peralatan
     * @return \Illuminate\Http\Response
     */
    public function show(dt_peralatan $dt_peralatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dt_peralatan  $dt_peralatan
     * @return \Illuminate\Http\Response
     */
    public function edit(dt_peralatan $dt_peralatan)
    {
        $dt_peralatan =     dt_peralatan::findOrFail($id);
        return view('dt_peralatan.edit', compact('dt_peralatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dt_peralatan  $dt_peralatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dt_peralatan $dt_peralatan)
    {
        $this->validate($request, [
            'qr_code' => 'required|integer',
            'barcode' => 'required',
            'kode_ruang' => 'required',
            'kode_status_kondisi' => 'required',



            ]);

            $dt_peralatan = dt_peralatan::findOrFail($id);
            $dt_peralatan = new    $dt_peralatan();
            $dt_peralatan->qr_code = $request-> qr_code;
            $dt_peralatan->barcode = $request->barcode;
            $dt_peralatan->kode_ruang = $request->kode_ruang;
            $dt_peralatan->kode_status_kondisi = $request->kode_status_kondisi;

            $dt_peralatan->save();
            return redirect()->route('dt_peralatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dt_peralatan  $dt_peralatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(dt_peralatan $dt_peralatan)
    {
        $dt_peralatan->delete();
        return redirect()->route('dt_peralatan.index');
    }
}
