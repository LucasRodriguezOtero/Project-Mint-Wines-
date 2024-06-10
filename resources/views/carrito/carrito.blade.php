@extends('layouts\app')
@section('title', 'Carrito')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            @if (Auth::user())
            <h1>Carrito de compras</h1>
            @if (Cart::content()->count())
            <div class="col-sm-8 bg-ligth">
                    
                <table class="table table-dark table-hover">
                    <thead>
                        <th>Producto</th>
                        <th>Precio </th>
                        <th>Cantidad</th>
                        <th>Importe</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $item)
                            <tr>
                                
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Small buttom group">
                                        <a href="/decrementar/{{$item->rowId}}" class="btn btn-success">-</a>
                                        <button type="button" class="btn text-white">{{ $item->qty }}</button>
                                        <a href="/incrementar/{{$item->rowId}}" class="btn btn-success">+</a>
                                    </div>
                                </td>
                                <td>{{ number_format($item->qty * $item->price, 2) }}</td>
                                <td><a href="/eliminaritem/{{$item->rowId}}" class="btn btn-sm text-danger text-decoration-none">x</a></td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="6">
                                <p class="text-end m-0 p-0">Subtotal: $ {{ Cart::subtotal() }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <p class="text-end m-0 p-0">IVA: $ {{ Cart::tax() }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <p class="text-end m-0 p-0">Total: $ {{ Cart::total() }}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row justify-content-center mt-5 mb-5 text-center">
                    <div class="col-sm-4">
                        <a href="" class="btn btn-danger">Eliminar Carrito</a>
                    </div>
                    <div class="col-sm-4">
                        @auth
                            <a href="{{ url('/pago') }}" class="btn btn-success">Realizar Pago</a>
                        @else
                       
                        @endauth
                    </div>
                </div>
            </div>
            @else
            <p class="text-center card text-bg-dark panel-busqueda" style="width: 400px">No hay productos cargados en el carrito</p>
            @endif
            @else
            <p class="text-center card text-bg-dark panel-busqueda" style="width: 400px">Es necesario loguearse para acceder al carrito</p>
            <a href="{{ route('login') }}" class="btn btn-dark">Loguin</a>
            @endif
        </div>
    </div>

@endsection
