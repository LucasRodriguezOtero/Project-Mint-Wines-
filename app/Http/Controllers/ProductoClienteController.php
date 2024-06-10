<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductoClienteController extends Controller
{
    public function index()
    {
        $bodegas = Bodega::all();
        $productos = Producto::where('is_visible', true)->orderBy('nombre')->paginate(20);
        $categorias = Categoria::all();
        return view('productos_cliente.index', [
            'productos' => $productos, 'bodegas' => $bodegas, 'categorias' => $categorias
        ]);
    }


    public function show(Request $request)
    {
        $busqueda = $request->busqueda;
        

        $productos = Producto::where('nombre', 'like', '%' . $busqueda . '%')->orWhere('descripcion', 'like',  'VARIEDAD: ' . $busqueda )->orWhere('descripcion', 'like',  'BODEGA: ' . $busqueda )->orderBy('nombre')->paginate(20);
        
        $productos1 = Producto::where('is_visible', 1)->orderBy('nombre')->paginate(20);
        $bodegas = Bodega::all();
        $categorias = Categoria::all();
        return view('productos_cliente.index', [
            'productos' => $productos, 'bodegas' => $bodegas, 'categorias' => $categorias, 'busqueda' => $busqueda
        ]);
    }

    public function show_producto(Request $request){

        $producto = Producto::find($request->producto_id);
        $bodegas = Bodega::all();
        $categorias = Categoria::all();
        
        return view('productos_cliente.show', [
           'producto'=>$producto, 'bodegas'=>$bodegas, 'categorias'=> $categorias
        ]);



    }
    

    
}
