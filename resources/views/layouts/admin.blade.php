<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/coreui-icons.min.css') }}') }}" rel="stylesheet">
    <link href="{{ asset('css/fag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet">
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">


</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show   pace-done pace-done">
    <div class="pace  pace-inactive pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            AdminPanel
            {{-- <img class="navbar-brand-full" src="img/brand/marca-ok.png" width="100" height="17" alt="ServicioRenacimiento">
            <img class="navbar-brand-minimized" src="img/brand/marca-ok.png" width="100" height="17" alt="ServicioRenacimiento"> --}}
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="{{ route('welcome') }}">Ir al Sitio</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Cuenta</strong>
                    </div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-lock"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </header>
    <div class="app-body" id="app">
        <div class="sidebar">
            <nav class="sidebar-nav ps ps--active-y">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">
                            <i class="nav-icon icon-speedometer"></i> Sitio
                            {{-- <span class="badge badge-info">NEW</span> --}}
                        </a>
                    </li>
                    <li class="nav-title">Secciones</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            <i class="nav-icon icon-drop"></i> Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.index') }}">
                            <i class="nav-icon icon-pencil"></i> Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('notices.index') }}">
                            <i class="nav-icon icon-note"></i> Prensa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('invoices.index') }}">
                            <i class="nav-icon icon-wallet"></i> Facturación</a>
                    </li>

                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 618px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 321px;"></div>
                </div>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">

            <ol class="breadcrumb">
                <li class="breadcrumb-item">Sección Administrativa</li>

                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-lock"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div id="ui-view">
                    <div>

                        <div class="animated fadeIn">

                            @yield('content')



                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <footer class="app-footer">
        <div>
            <a href="{{ route('welcome') }}">{{ config('app.name', 'Laravel') }}</a>
            <span>© 2020 graficosidea.</span>
        </div>
        <div class="ml-auto">
            <span>Ir a la página:</span>
            <a href="{{ route('welcome') }}">{{ config('app.name', 'Laravel') }}</a>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/coreui.min.js') }}"></script>

    <script src="{{ asset('/js/app.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/custom-tooltips.min.js') }}" class="view-script"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}" class="view-script"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            var ttrevapi;
            var tpj =jQuery;
            if(tpj("#rev_slider_486_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            }else{
                ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"{{ asset('assets/vendors/revolution/js/') }}",
                    sliderLayout:"fullwidth",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                        onHoverStop:"on",
                        touch:{
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },

                    },
                    viewPort: {
                        enable:true,
                        outof:"pause",
                        visible_area:"80%",
                        presize:false
                    },
                    responsiveLevels:[1240,1024,778,480],
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[768,600,600,600],
                    lazyType:"none",
                    parallax: {
                        type:"scroll",
                        origo:"enterpoint",
                        speed:400,
                        levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
                        type:"scroll",
                    },
                    shadow:0,
                    spinner:"off",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
        });
        </script>
        <script>
            $(document).ready(function() {
                $('#products').DataTable({
                "language": {
                    "info": "_TOTAL_ registros",
                    "search": "Buscar",
                    "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                    },
                    "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                                    '<option value="25">25</option>'+
                                                    '<option value="50">50</option>'+
                                                    '<option value="100">100</option>'+
                                                    '<option value="-1">Todos</option>'+
                                                    '</select> registros',
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "emptyTable": "No hay datos",
                    "zeroRecords": "No hay coincidencias",
                    "infoEmpty": "Ningún registro",
                    "infoFiltered": "encontrados"

                }
                });
            } );
        </script>
        <script>
            $(document).ready(function() {
                $('#invoices').DataTable({
                "language": {
                    "info": "_TOTAL_ registros",
                    "search": "Buscar",
                    "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                    },
                    "lengthMenu": 'Mostrar <select class="form-control">'+'<option value="10">10</option>'+
                                                    '<option value="25">25</option>'+
                                                    '<option value="50">50</option>'+
                                                    '<option value="100">100</option>'+
                                                    '<option value="-1">Todos</option>'+
                                                    '</select> registros',
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "emptyTable": "No hay datos",
                    "zeroRecords": "No hay coincidencias",
                    "infoEmpty": "Ningún registro",
                    "infoFiltered": "encontrados"

                }
                });
            } );
        </script>
</body>

</html>
