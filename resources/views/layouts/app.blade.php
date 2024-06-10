<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mint Wines || @yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/css/admin/style.css', 'resources/js/app.js'])

</head>

<body class="imagen-fluid"style="background-image: url(/img/fondo.jpg);">
    <div id="app">
        <div style="
        background-image: url(/img/banner.jpg);" class=" masthead  hidden-xs">
            <div class="container h-100">

            </div>

        </div>
        <nav class="navbar navbar-expand-lg bg-secundary">

            <div class="container">

                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <div class="badge bg-secundary text-wrap btn btn-dark" style="width: 6rem;">
                                    <a class="nav-link active text-white fs-4" href="{{ url('/') }}">Home</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="badge bg-secundary text-wrap " style="width: 8rem;">
                                    <a class="nav-link active text-white fs-4"
                                        href="{{ route('productos_usuario.index') }}">Productos</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="badge bg-secundary text-wrap  " style="width: 8rem;">
                                    <a class="nav-link active text-white fs-4"
                                        href="{{ url('/nosotros') }}">Nosotros</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="badge bg-secundary text-wrap " style="width: 8rem;">
                                    <a class="nav-link active text-white fs-4"
                                        href="{{ url('/sucursales') }}">Sucursales</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="badge bg-secundary text-wrap " style="width: 8rem;">
                                    <a class="nav-link active text-white fs-4 "
                                        href="{{ route('contacto.create') }}">Contacto</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                    <div class="text-success">
                        <hr class="border  border-1 opacity-10">
                    </div>
                    <div class="container-fuid">
                        <ul class="navbar-nav  d-flex justify-content-center">

                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item ">
                                        <div class="badge bg-secundary text-wrap btn btn-dark position-relative top-40 start-50 translate-middle-x"
                                            style="width: 15rem;">
                                            <a class="nav-link active text-white fs-5" href="{{ route('login') }}">Iniciar
                                                Sesion</a>
                                        </div>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item ">
                                    <div class=" col nav-separacion">

                                        <h5 class="text-white">Bienvenido {{ Auth::user()->name }} <span
                                                class="text-green"></span></h5>
                                    </div>
                                </li>

                                <li class="nav-item ">
                                    <div class=" col nav-separacion">
                                        @if (Auth::user() and Auth::user()->rol_id == '1')
                                            <div class="dropdown">
                                                <button class="btn btn-dark dropdown-toggle  " type="button"
                                                    id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Menu administrador
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark"
                                                    aria-labelledby="dropdownMenuButton2">
                                                    <li><a class="dropdown-item " href="{{ route('users.index') }}">Registro
                                                            de
                                                            Usuarios</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('productos.index') }}">Gestionar
                                                            Contenido</a></li>
                                                    <li>
                                                    <li><a class="dropdown-item" href="{{ route('contacto.index') }}">Ver Consultas</a>
                                                    </li>
                                                    <hr class="dropdown-divider">

                                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar
                                                            Sesion</a></li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        @elseif (Auth::user() and Auth::user()->rol_id == '2')
                                            <div class="dropdown">
                                                <button class="btn btn-dark dropdown-toggle  " type="button"
                                                    id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Menu Content Manager
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark"
                                                    aria-labelledby="dropdownMenuButton2">

                                                    <li><a class="dropdown-item"
                                                            href="{{ route('productos.index') }}">Gestionar
                                                            Contenido</a></li>
                                                    <li>

                                                        <hr class="dropdown-divider">

                                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar
                                                            Sesion</a></li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        @else
                                            <div class="dropdown">
                                                <button class="btn btn-dark dropdown-toggle  " type="button"
                                                    id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Menu Usuario
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark"
                                                    aria-labelledby="dropdownMenuButton2">

                                                    <li><a  class="dropdown-item position-relative top-100 start-0 @if (Cart::content()->count()) bg-danger @endif " href="{{ route('vercarrito') }}" >
                                                        
                                                        Ver Carrito
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                          </svg>
                                                          @if (Cart::content()->count())
                                                          <span class=" bg-danger">
                                                              {{Cart::content()->count()}}
                                                              <span class="visually-hidden">Elementos en carrito</span>
                                                          @endif
        
                                                        
                                                      </a>
                                                    </li>
                                                    <hr class="dropdown-divider">

                                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar
                                                            Sesion</a></li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        @endif
                                </li>
                            @endguest


                        </ul>
                    </div>



                    </ul>
                </div>
            </div>

        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <footer style="background-color: #5c0a10;" class="text-center text-lg-start bg-secundary text-muted">

        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase text-white fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Mint Wines®
                        </h6>
                        <p>
                            Somos una empresa Argentina creada por sumillers, enologos y amantes del vino.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Links Utiles
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Cotizaciones</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Informes</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Ordenes</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Ayuda</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contacto
                        </h6>
                        <p><i class="fas fa-home me-3"></i>Buenos Aires, CABA, Av Libertador 1523.</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            contacto@mintwines.com.ar
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +54 4544-3232</p>
                        <p><i class="fas fa-print me-3"></i> +54 11-61975522</p>
                    </div>
                </div>
            </div>
        </section>

    </footer>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
