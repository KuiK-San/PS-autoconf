<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;
use App\Models\Marca;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modelos', ['registros'=>Modelo::all(), 'marcas'=>Marca::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create.modelo', ['registros'=> Marca::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $modelo = new Modelo;

        $modelo->modelo = $request->modelo;
        $modelo->marca_id = $request->marca_id;

        $modelo->save();

        return redirect()->route('modelo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $modelo = Modelo::find($id);
        $modelo->modelo = $request->modelo;
        $modelo->marca_id = $request->marca_id;

        $modelo->save();

        return redirect()->route('modelo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd(Modelo::find($id));
    }
}
