@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-bg-dark ">
                <div class="card-header">
                    <h2>{{ $categoria->nombre }}</h2>
                </div>

                <div class="card-body">
                    <p>{{ $categoria->descripcion }}</p>
                   <hr>
                   <a href="{{route('categorias.index')}}" class=" btn btn-outline-light">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
