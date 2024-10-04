<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index',[
        'categorias' => $categorias,
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.categoriasform');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required|max:25',
            'descripcion' => 'required|max:100'
        ]);

        categoria::create($validate);

        return to_route('categorias.create')->with('status','categoria guardada exitosamente');
        
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria $categoria)
    {
        return view('categorias.edit',[
            'categoria' => $categoria
          ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria $categoria)
    {
        $validate = $request->validate([
            'nombre' => 'required|max:25',
            'descripcion' => 'required|max:100'
        ]);

        $categoria ->nombre = $validate['nombre'];
        $categoria ->descripcion = $validate['descripcion'];
    
        $categoria->save();

        return to_route('categorias.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categoria)
    {
        $categoria->delete();
        return to_route('categorias.index');
    }
}
