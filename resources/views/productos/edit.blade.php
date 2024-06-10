@extends('layouts\app')
@section('title', 'Productos')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-bg-dark ">
                    <div class="card-header">{{$producto->nombre }}</div>
                        <form method="POST" class="m-3" action="{{route('productos.update', $producto)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}">
                            @error('nombre') <div class="alert alert-danger">{{ $message }}</div>@enderror
                          </div>
                          <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" id="precio" name="precio" value="{{$producto->precio}}">
                            @error('precio') <div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                          </div>
                          <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria</label>
                            <select class="form-control" name="categoria_id" id="categoria_id" >
                                <option value="">Seleccionar categoria</option>
                                @foreach ($categorias as $cat) 
                                <option @if($cat->id == $producto->categoria_id) selected @endif value="{{$cat->id}}">{{$cat->nombre}}</option>
                                @endforeach
                                @error('categoria_id') <div class="alert alert-danger">{{ $message }}</div>@enderror
                              </select>
                          </div>

                          <div class="mb-3">
                            <label for="bodega_id" class="form-label">Bodega</label>
                            <select class="form-control" name="bodega_id" id="bodega_id">
                                <option value="">Seleccionar Bodega</option>
                                @foreach ($bodegas as $bod)
                                    <option @if ($bod->id == $producto->bodega_id) selected @endif value="{{ $bod->id }}">
                                        {{ $bod->bodega_name }}</option>
                                @endforeach
                            </select>
                            @error('bodega_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                          <label for="nota_cata" class="form-label">Nota de Cata</label>
                          <textarea class="form-control" name="nota_cata" id="nota_cata" cols="30" rows="2" >{{$producto->nota_cata}}</textarea>
                        </div>
                        @error('nota_cata') <div class="alert alert-danger">{{ $message }}</div>@enderror

                        <div class="mb-3">
                          <label for="crianza_barricado" class="form-label">Crianza / Barricado</label>
                          <textarea class="form-control" name="crianza_barricado" id="crianza_barricado" cols="30" rows="2" >{{$producto->crianza_barricado}}</textarea>
                        </div>
                        @error('crianza_barricado') <div class="alert alert-danger">{{ $message }}</div>@enderror

                          <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" >{{$producto->descripcion}}</textarea>
                          </div>
                          @error('descripcion') <div class="alert alert-danger">{{ $message }}</div>@enderror
                          <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" >
                            @error('imagen') <div class="alert alert-danger">{{ $message }}</div>@enderror
                          </div>
                          <div class="mb-3">
                            <label for="is_visible" class="form-label">Stock</label>
                            <select class="form-select  " aria-label=".form-select-lg example" name="is_visible" id="is_visible">
                              <option  value="1" @if ($producto->is_visible) selected @endif> En Stock </option>
                              <option  value="0" @if ($producto->is_visible=='0') selected @endif > Sin Stock </option>
                              
                            </select>
                            
                            

                          </div>
                          <button type="submit" class="btn btn-primary">Modificar</button>
                          <a href="{{route('productos.index')}}" class="btn btn-danger">Cancelar</a>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection