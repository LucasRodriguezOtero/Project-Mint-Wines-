@extends('layouts.app')
@section('title', 'Menu de Administrador')

@section('content')


    
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Menu de Administrador</h2>
                                <div class="text-success">
                                    <hr class="border  border-1 opacity-10">
                                </div>
                                <Div class="container-fluid">
                                    <Div class="d-grid gap-2">
                                        
                                        <a class="btn btn-outline-light btn-lg px-10"
                                            href="{{ route('productos.index') }}">Gestionar Contenido</a>
                                        
                                    </Div>
                                </Div>

                            </div>

                            
                            <a class="btn btn-light btn-lg px-10" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

@endsection
