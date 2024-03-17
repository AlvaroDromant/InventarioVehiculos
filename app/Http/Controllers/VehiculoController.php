<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('vehiculos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated  = $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'categoria_id' => 'required',
        ]);

        $validated['user_id'] = auth()->id();

        Vehiculo::create($validated);

        return redirect()->route('vehiculos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculos.show', compact('vehiculo'));   
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $vehiculo= Vehiculo::findOrfail($id);

        $validated  = $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'categoria_id' => 'required',
        ]);

        $vehiculo->update($validated);

        return redirect()->route('vehiculos.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $vehiculo = Vehiculo::findOrfail($id);
        $vehiculo->delete();

        return redirect()->route('vehiculos.index');
    }

    public function misvehiculos()
    {
        $vehiculos = Vehiculo::where('user_id', auth()->id())->get();
        return view('vehiculos.misvehiculos', compact('vehiculos'));
    }
}

