@extends('layouts\app')
@section('title', 'Contacto')
@section('content')
    <div class="container">
        <div class="row justify-content-center separacion-tabla">
            <div class="col-md-12">
                <div class="card text-bg-dark ">
                    <div class="card-header">
                        <h2 class="text-center">Consultas de Clientes</h2>
                        @if (Session('status'))
                            <div class="alert alert-success">
                                {{ Session('status') }}
                            </div>
                        @endif


                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>

                                    <th scope="col">Consulta</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($contactos->count() > 0)
                                    @foreach ($contactos as $con)
                                        <tr>
                                            <td>{{ $con->id }}</td>
                                            @foreach ($users as $use)
                                                @if ($use->id == $con->user_id)
                                                  <td>  {{ $use->name }}</td>
                                                  <td>  {{ $use->apellido }}</td>
                                                  <td>  {{ $use->email }}</td>
                                                @endif
                                            @endforeach
                                            <td>{{ $con->update_at }}</td>
                                            <tr>
                                            <td>Consulta:</td>
                                            <td>{{$con->consulta}}</td>
                                             </tr>
                                            
                                        </tr>
                                        
                                    @endforeach
                                @else
                                <tr>
                                <td>No hay consultas para mostrar en este momento</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $contactos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    
     
@endsection
