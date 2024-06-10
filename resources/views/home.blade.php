@extends('layouts.app')
@section('title', 'Home')
@vite(['resources/css/admin/style.css'])
@section('content')

    

    <h1> MINT WINES </h1>

    <img src="/img/mintwines.jpg" class="imgindex" alt="MINT WINES LOGO" width="400" height="400" style="margin-bottom:50px">


    <div class="row">
        <div class="col-md-12">
            <p class="p  fs-3 fw-semibold text-white lh-base"> Somos un equipo de expertos en bebidas dedicado a
                proveer la más amplia variedad de
                productos a clientes de todo el país. </br>
                Nos enfocamos en un servicio personalizado, facilidad de compra y entregas inmediatas.</p>

            <p class="p fs-3 fw-bolder text-white lh-base">¿Nuestro misión? <br>Contar con la más amplia variedad de
                bebidas y proveer a clientes de
                todo el país.</p>

            <p class="p fs-3 fw-bolder text-white lh-base"> ¿Nuestra visión?</p>

            <p class="p  fs-3 text-white lh-base">Ser los primeros en los que pienses cuando tengas que comprar
                bebidas, estés donde estés.
            </p>
        </div>
    </div>





@endsection
