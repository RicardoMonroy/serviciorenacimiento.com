@extends('layouts.app')

@section('content')
    <div>
    <div class="carousel carousel-slider center">
        <div class="carousel-item white-text" href="#one!" style="background-image: url(img/slider/cabecera-mv.jpg); background-size: cover; background-position: center;">
        </div>
    </div>
    </div>

    <div class="center">
    <br>
    <span style="font-size: 200%; color: #53576b; font-weight: bold">Misión - Visión</span>
    <div>
        <div style="background-color: #53576b; height: 5px; width: 120px; margin-left: 45%"></div>
    </div>
    <br><br><br>
    </div>

    <div id="productos" class="container">
    <!-- Page Content goes here -->
    {{-- <div class="col s12 m1 l3">
        <a href="#facturacion"><img class="blockservicios" src="img/blocks/320x340-facturacion.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-facturacion-b.png');"
        onmouseout="$(this).attr('src','img/blocks/320x340-facturacion.jpg');"></a>
        <a href="servicio.php#servicio"><img class="blockservicios" src="img/blocks/320x340-servicios.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-servicios-b.png');"
        onmouseout="$(this).attr('src','img/blocks/320x340-servicios.jpg');"></a>
        <a href="servicio.php#producto"><img class="blockservicios" src="img/blocks/320x340-aditivolubri.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-aditivolubri-b.jpg');"
        onmouseout="$(this).attr('src','img/blocks/320x340-aditivolubri.jpg');"> </a>
        <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwj954b8vtrqAhVCX60KHZhVDJIQFjAAegQIAxAB&url=https%3A%2F%2Fwww.pemex.com%2Fnegocio%2Fgasolineras%2Fnuestros-productos%2FAditec%2Ffiles%2Findex.html&usg=AOvVaw3oevq8onR6TtTXbVPMD-oU"><img class="blockservicios" src="img/blocks/320x340-aditec.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-aditec-b.jpg');"
        onmouseout="$(this).attr('src','img/blocks/320x340-aditec.jpg');">  </a>
        <a href="#ubicacion"><img class="blockservicios" src="img/blocks/320x340-guia.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-guia-b.jpg');"
        onmouseout="$(this).attr('src','img/blocks/320x340-guia.jpg');">  </a>
        <a href="#historia"><img class="blockservicios" src="img/blocks/320x340-historia-c.jpg"
        onmouseover="$(this).attr('src','img/blocks/320x340-historia-d.jpg');"
        onmouseout="$(this).attr('src','img/blocks/320x340-historia-c.jpg');"></a>
    </div> --}}
    </div>


    <div id="somos" >
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
                        <strong style="font-weight: 800;">{{ $information->value1title }}</strong> {{ $information->value1text }}
                    </span>
                </div>
            </div><br>
            <div class="row">
                <div class="col s12 m12 l12">
                    <span style="font-size: 30px;">
                        <strong style="font-weight: 800;">{{ $information->value2title }}</strong> {{ $information->value2text }}
                    </span>
                </div>
            </div><br>
            <div class="row">
                <div class="col s12 m12 l12">
                    <span style="font-size: 30px;">
                        <strong style="font-weight: 800;">{{ $information->value3title }}</strong> {{ $information->value3text }}
                    </span>
                </div>
            </div><br>
            <div class="row">
                <div class="col s12 m12 l12">
                    <span style="font-size: 30px;">
                        <strong style="font-weight: 800;">{{ $information->value4title }}</strong> {{ $information->value4text }}
                    </span>
                </div>
            </div><br>
            <div class="row">
                <div class="col s12 m12 l12">
                    <span style="font-size: 30px;">
                        <strong style="font-weight: 800;">{{ $information->value5title }}</strong> {{ $information->value5text }}
                    </span>
                </div>
            </div><br>
            <br><br>
            </div>
        </div>
    </div>



    <div class="form-servicio">
@stop
