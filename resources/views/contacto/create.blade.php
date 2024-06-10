@extends('layouts.app')
@section('title', 'Contacto')

@section('content')

    <h1>Contacto Mayoristas</h1>
    <!--Formulario de contacto-->

    <div class="contenedorform row">



        <div class="col-sm-4 col-lg-4 col-md-4">

        </div>
        @if (Auth::user())
        <div class="formulario  card bg-dark text-white">
            <h2>Por favor, dejanos tu consulta y nos comunicaremos a la brevedad.</h2>
            @if (Session('status'))
                            <div class="alert alert-success">
                                {{ Session('status') }}
                            </div>
                        @endif
                <input type="text" name="" required class="form-control"  value="{{Auth::user()->name}}" disabled>
                <br>
                <input type="tel" name="" required class="form-control" value="{{Auth::user()->apellido}}" disabled>
                <br>
                <input type="email" name="" required class="form-control" value="{{Auth::user()->email}}" disabled>
                <br>
                <form  method="GET" action="{{route ('contacto.store')}}" enctype="multipart/form-data">
                    @csrf
                <input name="user_id" id="user_id" type="hidden" value="{{Auth::user()->id}}">
                <textarea name="consulta" id="consulta" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                @error('consulta')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                <br>
                <input type="submit" name="enviar datos" class="btn btn-light">

                 </form>
            

        </div>          
        @else
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center h-100" style="position:relative; left: 17% ">
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Es necesario loguearse para contactar con un asesor</h2>
                                
                                

                            </div>

                            
                           
                        </div>
                    </div>
                </div>
        @endif
        <div class="col-sm-4 col-lg-4 col-md-4">

        </div>
    </div>



@endsection
