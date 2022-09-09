<!DOCTYPE html>
<html>
  <head>
    <title>Gasolinera - Servicio Renacimiento</title>
    <link rel=”shortcut icon” type=”image/png” href=”favicon.ico”/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('layout/css/materialize.min.css') }}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('layout/css/servicio.css') }}"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
  </head>

  <body>
    <div class="nav-servicio navbar-fixed">
      <div>
        <nav style="height: 100px;">
          <div class="nav-wrapper" style="margin-top: 35px;">
            <a href="{{ url('/') }}" class="brand-logo"><img src="img/marca-ok.png" style="width: 45%;"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down menu-servicio" style="font-weight: 400">
              <li><a href="{{ route('welcome') }}">Home</a></li>
              <li><a href="{{ route('facturacion') }}">Facturación</a></li>
              <li><a href="{{ route('welcome') }}#somos">Somos</a></li>
              <li><a href="{{ route('welcome') }}#productos">Productos</a></li>
              <li><a href="{{ route('products') }}">Servicios</a></li>
              <li><a href="{{ route('prensa') }}">Prensa</a></li>
              <li><a href="{{ route('welcome') }}#contacto">Contacto</a></li>
            </ul>
          </div>
        </nav>

      </div>
      <br>
    </div>
    <ul class="sidenav" id="mobile-demo">
      <li><a class="menu-active" href="{{ route('welcome') }}">Home</a></li>
      <li><a href="{{ route('facturacion') }}">Facturación</a></li>
      <li><a href="{{ route('welcome') }}#somos">Somos</a></li>
      <li><a href="{{ route('welcome') }}#productos">Productos</a></li>
      <li><a href="{{ route('products') }}">Servicios</a></li>
      <li><a href="{{ route('prensa') }}">Prensa</a></li>
      <li><a href="{{ route('welcome') }}#contacto">Contacto</a></li>
    </ul>

    @yield('content')


    <div style="background-color: #191827;" >
      <div class="container">
        <div class="row">
          <div class="col s12 center">
            <div class="footer-servicio">
              <br>
              <a href="https://www.facebook.com/GASOLINERARENACIMIENTO/"><i class="fa fa-facebook white-text fa-3x" aria-hidden="true"
              onmouseover="$(this).style.color= '#9ec66f';"
              onmouseout="$(this).style.color= 'white';"></i></a>
              <i class="fa fa-whatsapp white-text fa-3x" aria-hidden="true" style="margin-left: 7%"></i>
              <a href="https://twitter.com/Pemex"><i class="fa fa-twitter white-text fa-3x" aria-hidden="true" style="margin-left: 7%"></i></a>
              <br><br>
              <span class="center" style="font-size: 10px; color: #a5c9ff; font-weight: bold;">Derechos reservados - SERVICIORENACIMIENTO - 2019</span>
              <br>
              <span class="center" style="font-size: 8px; color: #a5c9ff; font-weight: bold;"><a href="{{ route('login') }}">Gestionar Sitio</a></span>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('layout/js/materialize.min.js') }}"></script>
    <script src="https://use.fontawesome.com/1585410cc9.js"></script>

    <script>
      $('.carousel.carousel-slider').carousel({
        fullWidth: true
      });
      $(document).ready(function(){
      $('.sidenav').sidenav();
      });
      $(document).ready(function(){
        $('.modal').modal();
      });

      function bigImg(x) {
        x.style.width = "35%";
      }

      function normalImg(x) {
        x.style.width = "50%";
      }
    </script>
  </body>
</html>
