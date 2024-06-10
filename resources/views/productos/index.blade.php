@extends('layouts\app')
@section('title', 'Productos')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-bg-dark ">
                    <div class="card-header">
                        <h2 class="text-center">Gestor de Productos</h2>
                        @if (Session('status'))
                            <div class="alert alert-success">
                                {{ Session('status') }}
                            </div>
                        @endif

                        <div class="m-3">
                            <a href="{{ route('productos.create') }}" class="btn btn-light">Agregar
                                Producto</a>

                            <a href="{{ route('categorias.index') }}" class=" btn btn-secondary text text-white ">Ver
                                Categorias</a>
                        </div>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Bodega</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Disponibilidad</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($productos->count() > 0)
                                    @foreach ($productos as $prod)
                                        <tr>
                                            <td><img class="imagen-index" src="{{ asset('/storage/' . $prod->imagen) }}"
                                                    alt=""></td>
                                            <td>{{ $prod->nombre }}</td>
                                            <td>{{ $prod->precio_format() }}</td>
                                            <td>@foreach ($bodegas as $bod)
                                                @if ($bod->id == $prod->bodega_id)
                                                    {{ $bod->bodega_name }}
                                                @endif
                                            @endforeach</td>
                                            <td>{{ $prod->categoria->nombre }}</td>
                                            <td class="@if($prod->is_visible)text-success">En Stock @else text-danger">Sin Stock @endif</td>
                                            <td>
                                                <a href="{{ route('productos.show', $prod) }}" class="btn btn-light">Ver
                                                    Producto</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="6">No existen productos cargados</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $productos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
