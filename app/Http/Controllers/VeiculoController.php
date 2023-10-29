<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\Models\Modelo;


class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('veiculos', ['veiculos'=>Veiculo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create.veiculo', ['modelos'=>Modelo::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'imagem' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->imagem->extension();

        $request->imagem->move(public_path('images'), $imageName);

        $veiculo = new Veiculo;

        $veiculo->veiculo = $request->veiculo;
        $veiculo->preco = $request->preco;
        $veiculo->path = $imageName;
        $veiculo->modelo_id = $request->modelo_id;

        $modelo = Modelo::find($request->modelo_id);
        $veiculo->marca_id = $modelo->marca_id;
        $veiculo->save();

        return redirect()->route('veiculo.index');
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Veiculo::where('id', $id)->delete();
        
        return redirect()->route('veiculo.index');
    }
}
