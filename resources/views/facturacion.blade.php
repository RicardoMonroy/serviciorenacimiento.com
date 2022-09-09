@extends('layouts.app')

@section('content')
    <div >
    <div class="carousel carousel-slider center" style="margin-top: 40px;">
        <div class="carousel-item white-text" href="#one!" style="background-image: url(img/slider/slide1a.jpg); background-size: cover; background-position: center;">
        </div>
    </div>
    </div>



    <div class="form-servicio">
    <div class="container">
    <!-- Page Content goes here -->
    <form action="{{ route('invoice') }}" method="POST">
        @csrf
        <div id="contacto" class="row">
            <div class="col s12 ">
                <p style="color: #1EC7C1; font-size: 70px; font-family: 'Righteous', cursive;">FACTURACIÓN</p>
                <br>
                <span>Por favor, llena los datos que se piden a continuación:</span>
                <br>
                <div class="input-field col s12 m6">
                    <input placeholder="Nombre Fiscal" name="name" id="name" type="text" class="validate" required style="background-color: white">
                </div>

                <div class="input-field col s12 m6">
                    <input placeholder="RFC" name="rfc" id="rfc" type="text" class="validate" required style="background-color: white">
                </div>

                <div class="input-field col s12 m6">
                    <input placeholder="Teléfono" name="phone" id="phone" type="text" class="validate" required style="background-color: white">
                </div>

                <div class="input-field col s12 m6">
                    <input placeholder="Monto" name="mount" id="mount" type="number" class="validate" required style="background-color: white">
                </div>

                <div class="input-field col s12">
                    <input placeholder="Domicilio fiscal" name="address" id="address" type="text" class="validate" required style="background-color: white">
                </div>

                <div class="input-field col s12">
                    <input placeholder="Correo electrónico" name="email" id="ticket" type="email" class="validate" required style="background-color: white">
                </div>

                <div class="input-field col s12 m6">
                    {{-- <label for="ticket" style="color: #000000; padding-top: 10px;">Selecciona la foto del comprobante o ticket de compra</label> --}}
                    {{-- <input placeholder="comprobante" name="ticket" id="ticket" type="file" class="validate" required style="background-color: white"> --}}
                    <input placeholder="Número de Folio" name="ticket" id="ticket" type="text" class="validate" required style="background-color: white">
                </div>

                <div class="input-field col s12 m6">
                    <input placeholder="Fecha de emisión" name="date" id="date" type="date" class="validate" required style="background-color: white">
                </div>

            </div>
            <div class="col s12" style="margin-top: 20px;">
                <button class="btn waves-effect waves-light col s12 m6" type="submit">Enviar</button>
            </div>
            <br><br><br><br><br>


        </div>
    </form>
    </div>
@stop
