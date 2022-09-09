@extends('layouts.app')

@section('content')
    <div>
    <div class="carousel carousel-slider center">
        <div class="carousel-item white-text" href="#one!" style="background-image: url(img/slider/cabecera-sp.jpg); background-size: cover; background-position: center;">
        </div>
    </div>
    </div>

    <div class="center" id="productos">
    <br>
    <span style="font-size: 200%; color: #53576b; font-weight: bold">PRODUCTOS Y SERVICIOS</span>
    <div>
        <div style="background-color: #53576b; height: 5px; width: 120px; margin-left: 45%"></div>
    </div>
    <br><br><br>
    </div>

    <div id="servicio" class="container">
        <!-- Page Content goes here -->
        <div class="col s12 m1 l3">
            <div class="class row">
                <span style="font-size: 220%; color: #53576b; font-weight: bold">En la estación de Servicio Renacimiento, recibirás un  servicio amable, cálido y respetuoso de nuestro personal, ademas tenemos como compromiso contribuir con el medio ambiente.</span>
                <br><br><br><br>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col s6" style="padding-bottom: 5%;">
                        <div class="col s4">
                            <img class="blockservicios" src="{{ $service->picture }}" style="width: 100%">
                        </div>
                        <div class="col s8">
                            <br>
                            <span style="color: #3BCE4C; font-weight: 900; font-size: 1.4em;">{{ $service->label }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <br><br><br>


    <div class="center" id="aditivos">
        <br>
        <span style="font-size: 200%; color: #53576b; font-weight: bold">ADITIVOS Y LUBRICANTES</span>
        <div>
            <div style="background-color: #53576b; height: 5px; width: 120px; margin-left: 45%"></div>
        </div>
        <br><br><br>
    </div>

    <div id="productos" class="container">
        <!-- Page Content goes here -->
        <div class="col s12 m1 l3">
            <div class="row">
                @foreach($products as $product)
                <div class="col s6 center" style="padding-bottom: 5%;">
                    <a class="modal-trigger" href="#modal{{ $product->name }}"><img class="blockservicios" src="{{ $product->picture }}" style="width: 60%"></a>
                    <!-- Modal Structure -->
                    <div id="modal{{ $product->name }}" class="modal modal-fixed-footer">
                      <div class="modal-content">
                        <img class="blockservicios" src="{{ $product->picture }}" style="width: 40%">
                        <h6>{{ $product->name }}</h6>
                        <p>{{ $product->description }}</p>
                      </div>
                      <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                      </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- <div id="somos" >
        <br>
        <div style="margin-left: 10%;">

            <div class="container">
            <!-- Page Content goes here -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="mvv-servicio">
                        <img src="img/ico-mision.png"><br>
                        <p style="font-size: 48px; ine-height: 58px; color: #53576B; font-weight: 700; margin: 20px;">MISIÓN</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <span style="font-size: 30px;">
                        {{ $information->mission }}
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="mvv-servicio">
                        <img src="img/ico-vision.png"><br>
                        <p style="font-size: 48px; ine-height: 58px; color: #53576B; font-weight: 700; margin: 20px;">VISIÓN</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <span style="font-size: 30px;">
                        {{ $information->vision }}
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="mvv-servicio">
                        <img src="img/ico-valores.png"><br>
                        <p style="font-size: 48px; ine-height: 58px; color: #53576B; font-weight: 700; margin: 20px;">VALORES</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <span style="font-size: 30px;">
                        {{ $information->values }}
                    </span>
                </div>
            </div>
            <br><br>
            </div>
        </div>
    </div> --}}



    <div class="form-servicio">
@stop
