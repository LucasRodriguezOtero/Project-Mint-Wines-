@extends('layouts\app')
@section('title', 'Productos')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header ">
                    <h1 class="text-center">Galeria de Productos</h1>
                    <div class="card text-bg-dark panel-busqueda">
                        <div class="m-3">
                            <div class="d-m-flex justify-content-md-end">
                                <div class="">
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <form action="{{ route('productos_usuario.show') }}" method="GET">
                                                <select id="busqueda" name="busqueda" class="form-select"
                                                    aria-label="Default select example" onchange="this.form.submit()">
                                                    <option selected>Seleccione Categoria</option>

                                                    @foreach ($categorias as $cat)
                                                        <option onclick="submit" value="{{ $cat->nombre }}">
                                                            {{ $cat->nombre }}</option>
                                                    @endforeach

                                                </select>

                                            </form>
                                        </div>
                                        <div class="col-auto">
                                            <form action="{{ route('productos_usuario.show') }}" method="GET">
                                                <select id="busqueda" name="busqueda" class="form-select"
                                                    aria-label="Default select example" onchange="this.form.submit()">
                                                    <option selected>Seleccione Bodega</option>

                                                    @foreach ($bodegas as $bod)
                                                        <option value="{{ $bod->bodega_name }}"> {{ $bod->bodega_name }}
                                                        </option>
                                                    @endforeach

                                                </select>


                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            {{ $productos->links() }}


                        </div>
                    </div>
                </div>
                @if (Session('status'))
                    <div class="alert alert-success">
                        {{ Session('status') }}
                    </div>
                @endif
                <table>

                    <div class="container-fluid">
                        <div class="row row-cols-2 row-cols-md-3 g-4">

                            @if ($productos->count() > 0)
                                @foreach ($productos as $prod)
                                    <div class="card border-dark mb-2" style="max-width: 25rem; margin-left:10px; ">
                                        <div class="card-header ">
                                            <h6>{{ $prod->nombre }}</h6>
                                        </div>
                                        <div class="col-md-12">
                                            <img src="{{ asset('/storage/' . $prod->imagen) }}"
                                                class="imagen-fluid rounded mx-auto d-block"
                                                style="max-height: 300px; max-width: 300px; " alt="{{ $prod->nombre }}">
                                        </div>
                                        <div class="card-body text-dark">
                                            <h5 class="card-title">{{ $prod->precio_format() }}</h5>
                                            <p class="card-text"> Bodega: @foreach ($bodegas as $bod)
                                                    @if ($bod->id == $prod->bodega_id)
                                                        {{ $bod->bodega_name }}
                                                    @endif
                                                @endforeach
                                            </p>
                                            <div class="container overflow-hidden">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                    <div class="row ">
                                                        @csrf


                                                        <form action="{{route ('show_producto') }}" method="post">
                                                            @csrf


                                                            <input type="hidden" name="producto_id"
                                                                value="{{ $prod->id }}">
                                                            <input type="submit" value="Ver Producto"
                                                                class=" btn btn btn btn-light " style=" ">


                                                        </form>

                                                       
                                                        
                                                            

                                                      









                                                        


                                                        @if (Auth::user())
                                                            
                                                        
                                                        <form action="{{ route('agregaritem') }}" method="post">
                                                            @csrf


                                                            <input type="hidden" name="producto_id"
                                                                value="{{ $prod->id }}">
                                                            <input type="submit" value="Agregar"
                                                                class=" btn btn-secondary text text-white " style=" ">


                                                        </form>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="4">No existen productos cargados</td>
                                </tr>
                            @endif

                        </div>
                    </div>
                    <div class="card text-bg-dark panel-paginado">
                        <div class="m-3 ">
                            {{ $productos->links() }}
                        </div>
                    </div>
                </table>



            </div>
        </div>
    </div>

    
@endsection
