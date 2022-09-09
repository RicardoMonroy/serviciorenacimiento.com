@extends('layouts.app')

@section('content')
    <div>
    <div class="carousel carousel-slider center">
        <div class="carousel-item white-text" href="#one!" style="background-image: url(img/slider/cabecera-bs.jpg); background-size: cover; background-position: center;">
        </div>
    </div>
    </div>

    <div class="center">
    <br>
    <span style="font-size: 200%; color: #53576b; font-weight: bold">PRENSA</span>
    <div>
        <div style="background-color: #53576b; height: 5px; width: 120px; margin-left: 45%"></div>
    </div>
    <br><br><br>
    </div>


    <div id="somos" >
        <br>
        <div style="margin-left: 10%;">

            <div class="container">
            <!-- Page Content goes here -->
                <div class="class row">
                    @foreach ($notices as $notice)
                        <h4>
                            {{ $notice->title }}
                        </h4>
                        <h6> {{ $notice->created_at->toFormattedDateString() }} </h6>
                        <p>
                            {{ $notice->content }}
                        </p><br><br>
                    @endforeach
                </div>
                {{-- {{ $notices->links() }} --}}
            </div>
        </div>
    </div>



    <div class="form-servicio">
@stop
