@extends('layouts.app2')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesion</h2>
                                <p class="text-white-50 mb-5 fs-5 fw-semibold">Por favor ingrese su email y contraseña!
                                </p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <input id="email" type="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="form-label fs-4 fw-semibold text-white-50"
                                            for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input id="password" type="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="form-label fs-4 fw-semibold text-white-50"
                                            for="typePasswordX">Contraseña</label>
                                    </div>



                                    <button class="btn btn-outline-light btn-lg px-5"
                                        type="submit">{{ __('Login') }}</button>



                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i
                                                class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>
                                    <div>
                                        <p class="mb-0">No tiene un usuario? <a href="{{ route('register') }}"
                                                class="text-white-50 fw-bold">Registrarse</a>
                                        </p>
                                    </div>
                                </form>
                            </div>

                            <a href="{{ url('/') }}">
                                <input type="button" class="btn  me-2 text-white btn-secondary" value="Volver al Home">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
