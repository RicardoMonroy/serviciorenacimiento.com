@extends('layouts.app')

@section('content')
    <div >
    <div class="carousel carousel-slider center" style="margin-top: 33px;">
        <div class="carousel-item white-text" href="#one!" style="background-image: url(img/slider/slide1a.jpg); background-size: cover; background-position: center;">
        <br><span id="marca" >{{ $information->bannername }}</span><br>
        <p id="slogan" class="litros-servicio">{{ $information->slogan }}</p>
        </div>
    </div>
    </div>

    <div class="eco-servicio center">
        <br><br>
        <span style="font-size: 200%; color: #53576b; font-weight: bold">Precio del combustible</span><br>
        <span style="font-size: 200%; color: #53576b; font-weight: bold">Magna: $</span>
        <span style="font-size: 250%; color: #9ec66f; font-weight: 1000">{{ isset($fuel->magna) ? $fuel->magna : '' }}</span>
        <br>
        <span style="font-size: 200%; color: #53576b; font-weight: bold">Premium: $</span>
        <span style="font-size: 250%; color: #9ec66f; font-weight: 1000">{{ isset($fuel->premium) ? $fuel->premium : '' }}</span>
        <br><br><br>
    </div>

    <div class="center">
    <br>
    <span style="font-size: 200%; color: #53576b; font-weight: bold">SERVICIOS Y PRODUCTOS</span>
    <div>
        <div style="background-color: #53576b; height: 5px; width: 120px; margin-left: 45%"></div>
    </div>
    <br><br><br>
    </div>

    <div id="productos" class="container">
    <!-- Page Content goes here -->
    <div class="col s12 m1 l3">
        <a href="{{ route('facturacion') }}"><img class="blockservicios" src="img/blocks/320x340-facturacion.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-facturacion-b.png');"
        onmouseout="$(this).attr('src','img/blocks/320x340-facturacion.jpg');"></a>
        <a href="{{ route('products') }}#servicio"><img class="blockservicios" src="img/blocks/320x340-servicios.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-servicios-b.png');"
        onmouseout="$(this).attr('src','img/blocks/320x340-servicios.jpg');"></a>
        <a href="{{ route('products') }}#aditivos"><img class="blockservicios" src="img/blocks/320x340-aditivolubri.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-aditivolubri-b.jpg');"
        onmouseout="$(this).attr('src','img/blocks/320x340-aditivolubri.jpg');"> </a>
        <a href="https://www.pemex.com/negocio/gasolineras/nuestros-productos/Aditec/files/index.aspx" target="_blank"><img class="blockservicios" src="img/blocks/320x340-aditec.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-aditec-b.jpg');"
        onmouseout="$(this).attr('src','img/blocks/320x340-aditec.jpg');">  </a>
        <a href="#ubicacion"><img class="blockservicios" src="img/blocks/320x340-guia.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-guia-b.jpg');"
        onmouseout="$(this).attr('src','img/blocks/320x340-guia.jpg');">  </a>
        <a href="#historia"><img class="blockservicios" src="img/blocks/320x340-historia-c.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-historia-d.jpg');"
        onmouseout="$(this).attr('src','img/blocks/320x340-historia-c.jpg');"></a>
    </div>
    </div>

    <div class="eco-servicio">
        <img src="img/politeco-u28874-fr.png">
        <a class="waves-effect waves-light btn-large green modal-trigger" href="#ecopolitica">Conocer más</a>
        <div id="ecopolitica" class="modal">
            <div class="modal-content" style="background-image: url(img/politica-eco.jpg);"><br><br><br><br><br><br><br><br><br>
            <p class="white-text">
                {{ $information->politic }}
            </p><br><br><br><br>
            </div>
        </div>
    </div>

    <div id="somos" class="empresa-servicio">
    <br>
    <img src="img/historia1c.png">
    <br>
    <p>
        {{ $information->description }}
    </p>
    <div style="margin-left: 10%;">

        <div class="container">
        <!-- Page Content goes here -->
        <div class="row">
            <div class="col s12 m4">
            <div class="mvv-servicio">
                <a href="{{ route('mision') }}"><img src="img/ico-mision.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)"><br>
                <span>Misión</span></a>
            </div>
            </div>
            <div class="col s12 m4">
            <div class="mvv-servicio">
                <a href="{{ route('mision') }}"><img src="img/ico-vision.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)"><br>
                <span>Visión</span></a>
            </div>
            </div>
            <div class="col s12 m4">
            <div class="mvv-servicio">
                <a href="{{ route('mision') }}"><img src="img/ico-valores.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)"><br>
                <span>Valores</span></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <br><br><br>
    <div class="row">
        <div class="eco-servicio ">
            {{-- <img src="img/politeco-u28874-fr.png"> --}}
            <a class="btn-large modal-trigger" href="#priv" id="privacidad" style="background-color: #ffffff;">Pólitica de privacidad</a>
            <div id="priv" class="modal" style="width: 90%; height: 90%">
                <div class="modal-content" style="width: 100%;">
                <p class="white-text" style="width: 100%">
                    <embed src="{{ $information->privacidad }}" type="application/pdf" width="100%" height="600px" />

                </p><br><br><br><br>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #53576b; height: 5px">
    </div>

    <div id="ubicacion">
    <div id="u47950" class="shared_content" data-content-guid="u47950_content"><!-- custom html -->
        <iframe src="{{ $information->map }}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

    <div style="background-color: #53576b; height: 5px">
    </div>

    <div class="form-servicio">
    <div class="container">
    <!-- Page Content goes here -->
    <form action="mail.php" method="POST">
        @csrf
        <div id="contacto" class="row">
        <div class="col s12 ">
            <p style="color: #1EC7C1; font-size: 50px; font-family: Raleway, cursive;">CONTACTO</p>
            <p style="color: #7F7F7F; font-weight: bold;">{{ $information->address }} <br>
                {{ $information->city }}</p><br>
            <div class="input-field col s12 m6">
            <input placeholder="Nombre" name="nombreweb" id="first_name" type="text" class="validate" required style="background-color: white">

            </div>
            <div class="input-field col s12 m6">
            <input placeholder="Correo" name="correoweb" id="email" type="email" class="validate" required style="background-color: white">

            </div>
            <div class="input-field col s12">
            <textarea placeholder="Mensaje" name="mensajeweb" id="textarea1" class="materialize-textarea" required style="background-color: white; height: 100%;"></textarea>

            </div>
        </div>
            <button class="btn waves-effect waves-light col s12 m6" type="submit">Enviar

        </button>
        </div>
    </form>
    </div>
@stop
