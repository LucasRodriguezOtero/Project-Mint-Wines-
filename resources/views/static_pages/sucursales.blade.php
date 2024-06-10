@extends('layouts.app')
@section('title', 'Sucursales')

@section('content')

  <div class=" container d-flex justify-content-center align-items-center">
    <h1>Nuestras Sucursales</h1>
   </div>
    <div class="container">

        <!-- idiomas -->
        <div class="row">
            <div class=" d-flex justify-content-center col-lg-6 col-sm-12 text-center mb-4">

                <div class="  card card text-bg-dark mb-3" style="width: 30rem;">
                    <img src="../img/banderaARG.jpg" class="img-fluid d-block mx-auto" alt="bandera Argentina"
                        style="border-radius:50%; margin-top:30px" width="200" height="200">
                    <div class="card-body">
                        <p class="card-text">
                        <h2>Buenos Aires, Argentina</h2>Av Libertador 1523<br>LUNES A SABADOS de 9 hs a 19 hs</p>
                    </div>
                </div>

            </div>
            <div class=" d-flex justify-content-center col-lg-6 col-sm-12 text-center mb-4">

                <div class="card card text-bg-dark mb-3" style="width: 30rem;">
                    <img src="../img/franceflag%20200x200.jpg" class="img-fluid d-block mx-auto" alt="bandera Argentina"
                        style="border-radius:50%; margin-top:30px" width="200" height="200">
                    <div class="card-body">
                        <p class="card-text">
                        <h2>Marseille, France</h2>Rue des Phoceens<br>LUNES A SABADOS de 9 hs a 19 hs</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
