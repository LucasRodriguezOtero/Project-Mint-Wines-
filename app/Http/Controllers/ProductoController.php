<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $bodegas = Bodega::all();
        $productos = Producto::paginate(10);
        return view('productos.index', [
            'productos' => $productos, 'bodegas' => $bodegas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $bodegas = Bodega::all();
        return view('productos.create', [
            'categorias' => $categorias, 'bodegas' => $bodegas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'precio' => 'numeric|max:999999',
            'nota_cata' => 'required',
            'crianza_barricado' => 'required',
            'bodega_id' => 'required',
            'categoria_id' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|mimes:jpg,bmp,png',
        ]);
        if ($validator->fails()) {
            return redirect()->route('productos.create')->withErrors($validator)->withInput();
        }

        $imagen_nombre = time() . $request->file('imagen')->getClientOriginalName();
        $imagen = $request->file('imagen')->storeAs('productos', $imagen_nombre, 'public');

        Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'nota_cata' => $request->nota_cata,
            'crianza_barricado' => $request->crianza_barricado,
            'bodega_id' => $request->bodega_id,
            'categoria_id' => $request->categoria_id,
            'descripcion' => $request->descripcion,
            'imagen' => $imagen,
        ]);
        return redirect()->route('productos.index')->with('status', 'El producto se agrego correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {    
       $bodegas = Bodega::all();
        $categorias = Categoria::all();
        return view('productos.show', [
            'categorias' => $categorias, 
            'producto' => $producto,
            'bodegas' => $bodegas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $bodegas = Bodega::all();
        $categorias = Categoria::all();
        return view('productos.edit', [
            'categorias' => $categorias,
            'producto' => $producto,
            'bodegas' => $bodegas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $rules = [
            'nombre' => 'required|max:255',
            'precio' => 'numeric|max:999999',
            'nota_cata' => 'required',
            'crianza_barricado' => 'required',
            'bodega_id' => 'required',
            'categoria_id' => 'required',
            'descripcion' => 'required',
            'is_visible' => 'required',
            //'imagen' => 'required|mimes:jpg,bmp,png'
        ];
        if ($request->file('imagen')) {
            $rules['imagen'] = 'required|mimes:jpg,bmp,png';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('productos.edit', $producto)->withErrors($validator)->withInput();
        }

        $data = [
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'nota_cata' => $request->nota_cata,
            'crianza_barricado' => $request->crianza_barricado,
            'bodega_id' => $request->bodega_id,
            'categoria_id' => $request->categoria_id,
            'descripcion' => $request->descripcion,
            'is_visible' => $request->is_visible,
        ];

        if ($request->file('imagen')) {
            $imagen_nombre = time() . $request->file('imagen')->getClientOriginalName();
            $imagen = $request->file('imagen')->storeAs('productos', $imagen_nombre, 'public');
            Storage::delete('public/' . $producto->imagen);
            $data['imagen'] = $imagen;
        }

        $producto->update($data);

        return redirect()->route('productos.index')->with('status', 'El producto se modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->update([
            'is_visible' => false
        ]);
        return redirect()->route('productos.index')->with('status', 'El producto se elimino correctamente');
    }
}
