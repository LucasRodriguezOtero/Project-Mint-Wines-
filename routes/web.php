<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoClienteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CarritoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

route::controller(CategoriaController::class)->group(function(){
    Route::get('categorias',  'index')->name('categorias.index');
    
    Route::get('categorias/{categoria}','show')->name('categorias.show');

});



Route::group(['middleware' => ['is_admin']], function () {
   
    Route::get('tabla_usuarios', [UserController::class, 'index'] )->name('users.index');
    Route::get('tabla_usuarios1', [UserController::class, 'update'] )->name('users.update');
    Route::resource('productos', ProductoController::class);
   
    Route::get('tabla_contactos',[ContactoController::class, 'index'])->name('contacto.index');
    
    
});

Route::group(['middleware' => ['is_manager']], function () {
    Route::resource('productos', ProductoController::class);
});
Route::get('contacto_create',[ContactoController::class, 'create'])->name('contacto.create');
Route::get('productos_galeria', [ProductoClienteController::class,'index'])->name('productos_usuario.index');;
Route::get('productos_show', [ProductoClienteController::class,'show'])->name('productos_usuario.show');;
Route::get('contacto_store', [ContactoController::class,'store'])->name('contacto.store');;
Route::post('show_producto', [ProductoClienteController::class,'show_producto'])->name('show_producto');;


Auth::routes();


Route::get('/pago', function () {
    return view('carrito/pago');
});

Route::get('/contacto', function () {
    return view('static_pages/contacto');
});

Route::get('/nosotros', function () {
    return view('static_pages/nosotros');
});

Route::get('/sucursales', function () {
    return view('static_pages/sucursales');
});

//carrito
Route::post('/agregaritem',[CarritoController::class, 'agregaritem'])->name('agregaritem');

Route::get('/carrito', [CarritoController::class,'vercarrito'])->name('vercarrito');;
Route::get('/incrementar/{id}', [CarritoController::class,'incrementarCantidad'])->name('incrementarcantidad');;
Route::get('/decrementar/{id}', [CarritoController::class,'decrementarCantidad'])->name('idecrementarcantidad');;
Route::get('/eliminaritem/{id}', [CarritoController::class,'eliminarItem'])->name('eliminarItem');;