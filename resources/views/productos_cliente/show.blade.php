@extends('layouts.app')
@section('title', 'Productos')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card text-bg-dark ">
                    <div class="card-header">{{ $producto->nombre }}</div>

                    <div class="card-body">
                        <img class="imagen-producto" src="{{ asset('/storage/' . $producto->imagen) }}" alt="">
                        <hr>
                        <h5>Precio:</h5>
                        {{ $producto->precio_format() }}
                        <hr>
                        <h5>Bodega:</h5>
                        @foreach ($bodegas as $bod)
                            @if ($bod->id == $producto->bodega_id)
                                {{ $bod->bodega_name }}
                            @endif
                        @endforeach
                        <hr>
                        <h5>Categoria:</h5>
                        @foreach ($categorias as $cat)
                            @if ($cat->id == $producto->categoria_id)
                                {{ $cat->nombre }}
                            @endif
                        @endforeach

                        <hr>
                        <h5>Nota de cata:</h5>
                        {{ $producto->nota_cata }}
                        <hr>
                        <h5>Crianza / Barricado:</h5>
                        {{ $producto->crianza_barricado }}

                        <hr>
                        <h5>Descripcion:</h5>
                        {{ $producto->descripcion }}

                        <hr>
                        
                            

                                @if (Auth::user())
                            <form action="{{ route('agregaritem') }}" method="post">
                                @csrf


                                <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                <input type="submit" value="Agregar a Carrito" class="btn btn-success "
                                    style=" ">


                            </form>
                            @endif
                            <a class="btn btn-secondary" 
                                href="{{ route('productos_usuario.index') }}" style="margin-top: 5px">Volver a Galeria</a>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
