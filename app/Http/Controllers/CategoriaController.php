<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {   
        $categorias=Categoria::all();
        return view('categorias.index', [
            'categorias' => $categorias
        ]);
    }
    public function show(Categoria $categoria)
    {
        return view('categorias.show', [
            'categoria' => $categoria
        ]);
    }
}
