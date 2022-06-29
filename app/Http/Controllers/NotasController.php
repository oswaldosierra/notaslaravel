<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Notas::where('user_id', auth()->id())->paginate(15);
        return view('notas.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new Notas();

        $nota->title = $request->title;
        $nota->content = $request->content;
        $nota->user_id = $request->user_id;

        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo')->store('public');
            $url = Storage::url($archivo);
            $nota->archivo = $url;
        }

        $nota->save();

        return redirect()->route('notas.show', $nota);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function show(Notas $nota)
    {
        return view('notas.show', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function edit(Notas $nota)
    {
        return view('notas.edit', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notas $nota)
    {
        $temp = $request->all();
        if ($request->hasFile('archivo')) {
            Storage::delete(str_replace('storage', 'public', $nota->archivo));
            $archivo = $request->file('archivo')->store('public');
            $url = Storage::url($archivo);
            $temp["archivo"] = $url;
        } else {
            unset($temp["archivo"]);
        }
        $nota->update($temp);
        return redirect()->route('notas.show', $nota);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notas $nota)
    {
        $nota->delete();
        return redirect()->route('notas.index');
    }
}
