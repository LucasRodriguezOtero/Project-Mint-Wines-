<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\Producto;
use Illuminate\Http\Request;





class CarritoController extends Controller
{
   public function agregaritem(Request $request){
    
    $producto = Producto::find($request->producto_id);
    
    Cart::add($producto->id,$producto->nombre,1,$producto->precio,500);
    
       
        return redirect()->route('productos_usuario.index')->with('status', 'El producto: '.$producto->nombre.' se agrego correctamente al carrito');
   }

   public function vercarrito(){
      return view('carrito.carrito');
   }

   public function incrementarCantidad(Request $request){
      $item= Cart::content()->where("rowId", $request->id)->first();
      $item= Cart::update($request->id,["qty"=>$item->qty+1]);
      return back();
   }

   public function decrementarCantidad(Request $request){
      $item= Cart::content()->where("rowId", $request->id)->first();
      $item= Cart::update($request->id,["qty"=>$item->qty-1]);
      return back();
   }

   public function eliminarItem(Request $request){
      Cart::remove($request->id);
      return back();
   }
}
