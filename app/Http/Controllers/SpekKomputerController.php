<?php

namespace App\Http\Controllers;

use App\Models\spek_komputer;
use Illuminate\Http\Request;

class SpekKomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spek_komputer = spek_komputer::all();
        return view('spek_komputer.index', compact('spek_komputer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spekkomputer.create');
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
            'processor' => 'required',
            'ram' => 'required',
            'hardisk' => 'required',
            'vga' => 'required',
            'sound' => 'required',
            'network1' => 'required',
            'network2' => 'required',

        ]);

       $spek_komputer = new    spek_komputer();
       $spek_komputer->processor = $request-> processor;
       $spek_komputer->ram = $request->ram;
       $spek_komputer->hardisk = $request->hardisk;
       $spek_komputer->vga = $request->vga;
       $spek_komputer->sound = $request->sound;
       $spek_komputer->network1 = $request->network1;
       $spek_komputer->network2 = $request->network2;

       $spek_komputer->save();

    return redirect()->route('spek_komputer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spek_komputer  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function show(spek_komputer $spek_komputer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spek_komputer  $spek_komputer
     * @return \Illuminate\Http\Response
     */
    public function edit(spek_komputer $spek_komputer)
    {
        $spek_komputer =     spek_komputer::findOrFail($id);
        return view('spek_komputer.edit', compact('spek_komputer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spek_komputer  $spek_komputer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spek_komputer $spek_komputer)
    {
        $this->validate($request, [
            'processor' => 'required|integer',
            'ram' => 'required',
            'hardisk' => 'required',
            'vga' => 'required',
            'sound' => 'required',
            'network1' => 'required',
            'network2' => 'required',

            ]);

            $spek_komputer = spek_komputer::findOrFail($id);
            $spek_komputer = new    $spek_komputer();
            $spek_komputer->processor = $request-> processor;
            $spek_komputer->vga = $request->vga;
            $spek_komputer->sound = $request->sound;
            $spek_komputer->network1 = $request->network1;
            $spek_komputer->network2 = $request->network2;

            $spek_komputer->save();
            return redirect()->route('spek_komputer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spek_komputer  $spek_komputer
     * @return \Illuminate\Http\Response
     */
    public function destroy(spek_komputer $spek_komputer)
    {
        $spek_komputer->delete();
        return redirect()->route('spek_komputer.index');
    }
}
