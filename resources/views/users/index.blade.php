@extends('layouts\app')
@section('title', 'Tabla de Usuarios')
@section('content')
    <div class="container">
        <div class="row justify-content-center separacion-tabla">
            <div class="col-md-12">
                <div class="card text-bg-dark ">
                    <div class="card-header">
                        <h2 class="text-center">Staff</h2>
                        @if (Session('status'))
                            <div class="alert alert-success">
                                {{ Session('status') }}
                            </div>
                        @endif


                        <table class="table table-dark table-hover ">
                            <thead>
                                <tr>

                                    <th scope="col">APELLIDO</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($staff->count() > 0)
                                    @foreach ($staff as $staff)
                                        <tr>
                                            <td>{{ $staff->apellido }}</td>
                                            <td>{{ $staff->name }}</td>
                                            <td>{{ $staff->email }}</td>
                                            <td>
                                                @foreach ($rol as $r)
                                                    @if ($r->id == $staff->rol_id)
                                                        {{ $r->rol_name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                @else
                                    
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-bg-dark ">
                    <div class="card-header">
                        <h2 class="text-center">Clientes</h2>

                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>

                                    <th scope="col-3">Apellido</th>
                                    <th scope="col-3">Nombre</th>
                                    <th scope="col-3">email</th>
                                    <th scope="col-3"></th>

                                </tr>
                            </thead>
                            <tbody>

                                @if ($cliente->count() > 0)
                                    @foreach ($cliente as $cli)
                                        <tr>
                                            <td>{{ $cli->apellido }}</td>
                                            <td>{{ $cli->name }}</td>
                                            <td>{{ $cli->email }}</td>
            
                        

                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="4">No existen Clientes</td>
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
