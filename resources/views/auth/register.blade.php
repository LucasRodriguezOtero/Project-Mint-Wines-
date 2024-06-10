@extends('layouts.app2')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Crear Cuenta</h2>
                                <p class="text-white-50 mb-5 fs-5 fw-semibold">Por favor complete sus datos!
                                </p>

                                <form action="{{ route('register') }}" method="post" class="signin-form">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name"
                                            autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="apellido" id="apellido"
                                            class="form-control @error('apellido') is-invalid @enderror" name="apellido"
                                            value="{{ old('apellido') }}" placeholder="Apellido" required autocomplete="apellido"
                                            autofocus>
                                        @error('apellido')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input id="password" id="pasword" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Contraseña" name="password" required autocomplete="new-password">
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Repetir Contraseña" name="password_confirmation" required autocomplete="new-password">
                                      
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="form-group">



                                        <button type="submit" value=""
                                            class="btn btn-outline-light btn-lg px-5">Crear
                                            Cuenta</button>
                                    </div>

                                </form>
                                
                            </div>
                            <a href="{{ url('../../home') }}">
                                <input type="button" class="btn  me-2 text-white btn-secondary"
                                    value="Volver atras">
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
    </section>
@endsection
