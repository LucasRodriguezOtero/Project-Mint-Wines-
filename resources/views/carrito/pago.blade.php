@extends('layouts\app')
@section('title', 'Pago')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
                    <section style="">
                        <div class="row">
                            <div class="">
                                <div class="card mb-4">
                                    <div class="card-header py-3">
                                        <h5 class="mb-0">Pago con tarjeta </h5>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="text" id="form6Example1" class="form-control" />
                                                        <label class="form-label" for="form6Example1">Nombres</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="text" id="form6Example2" class="form-control" />
                                                        <label class="form-label" for="form6Example2">Apellidos</label>
                                                    </div>
                                                </div>
                                            </div>

                                          
                                            <!-- Text input -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="form6Example4" class="form-control" />
                                                <label class="form-label" for="form6Example4">Direccion</label>
                                            </div>

                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <input type="email" id="form6Example5" class="form-control" />
                                                <label class="form-label" for="form6Example5">Email</label>
                                            </div>

                                            <!-- Number input -->
                                            <div class="form-outline mb-4">
                                                <input type="number" id="form6Example6" class="form-control" />
                                                <label class="form-label" for="form6Example6">Numero de telefono</label>
                                            </div>

                                            <hr class="my-4" />

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="checkoutForm1" />
                                                <label class="form-check-label" for="checkoutForm1">
                                                    Envio a domicilio
                                                </label>
                                            </div>

                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="checkoutForm2" checked />
                                                <label class="form-check-label" for="checkoutForm2">
                                                    Recoger en tienda
                                                </label>
                                            </div>

                                            <hr class="my-4" />

                                            <h5 class="mb-4">Pago</h5>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="checkoutForm3" checked />
                                                <label class="form-check-label" for="checkoutForm3">
                                                    Tarjeta de Credito
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="checkoutForm4" />
                                                <label class="form-check-label" for="checkoutForm4">
                                                    Tarjeta de Devito
                                                </label>
                                            </div>

                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="checkoutForm5" />
                                                <label class="form-check-label" for="checkoutForm5">
                                                    Paypal
                                                </label>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="text" id="formNameOnCard" class="form-control" />
                                                        <label class="form-label" for="formNameOnCard">Nombre en la tarjeta</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="text" id="formCardNumber" class="form-control" />
                                                        <label class="form-label" for="formCardNumber">Numero de tarjeta
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <div class="form-outline">
                                                        <input type="text" id="formExpiration" class="form-control" />
                                                        <label class="form-label" for="formExpiration">Vencimiento</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-outline">
                                                        <input type="text" id="formCVV" class="form-control" />
                                                        <label class="form-label" for="formCVV">CVV</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-success btn-lg btn-block" href="{{route('home')}}" type="submit">
                                                Enviar Pago
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            
                            </div>
                        </div>
                    </section>
                </div>
        
    </div>
@endsection
