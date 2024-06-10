@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card text-bg-dark ">
                    <div class="card-header">
                        <h2 class="text-center">{{ __('Categorias') }}</h2>
                        @if (Session('status'))
                            <div class="alert alert-success">
                                {{ Session('status') }}
                            </div>
                        @endif

                        <div class="m-3">
                            <a href="{{ route('productos.index') }}" class=" btn btn-outline-light">Volver a
                                Productos</a>
                        </div>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Categorias</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($categorias->count() > 0)
                                    @foreach ($categorias as $cat)
                                        <tr>

                                            <td>{{ $cat->nombre }}</td>
                                            <td>
                                                <a href="{{ route('categorias.show', $cat) }}" class="btn btn-light">Descripcion</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="4">No existen Categorias cargadas</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        
                    </div>
                </div>




            </div>
        </div>
    </div>
@endsection
