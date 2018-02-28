@extends('layouts.page.default')
@section('content')
    <header class="header-video-default position-relative">
        @include('layouts.page.menu')
        <div id="overlay" class="overlay-img">
            <img src="{{asset('images/hotels.jpg')}}" alt="" id="hero-vid">
        </div>
        <div class="position-absolute bottom-n-1">
            <img src="{{asset('images/pce.png')}}" alt="" class="img-fluid">
        </div>

        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center">
                    <div class="col text-center">
                        <h3 class="text-white text-center h1">HOTELES</h3>
                        <i class="fa fa-chevron-down text-white h1"></i>
                    </div>

                </div>

            </div>
        </div>
    </header>
    <section class="sticky-top bg-white d-sm-none">
        <div class="container">
            <div class="row no-gutters text-center">
                <div class="col">
                    <a href="{{route('tours_path')}}" class="btn btn-link">Tours</a>
                </div>
                <div class="col">
                    <a href="{{route('destinations_path')}}" class="btn btn-link">Destinos</a>
                </div>
                <div class="col">
                    <a href="{{route("about_path")}}" class="btn btn-link">Nosotros</a>
                </div>
                {{--<div class="col">hola1</div>--}}
            </div>
        </div>
    </section>
    <section class="bg-white m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    {{Breadcrumbs::render('hotel')}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container">
            @foreach($hoteles as $hotel)
                <div class="row pb-5">
                    <div class="col-12 col-md-3">
                        <img src="{{$hotel->imagen}}" alt="" class="w-100 rounded">
                    </div>
                    <div class="col">
                        <h3>{{$hotel->nombre}}</h3>
                        @for($i=0; $i < $hotel->estrellas; $i++)
                            <i class="fa fa-star text-g-yellow"></i>
                        @endfor
                        <p class="pt-2"><i class="fa fa-map-marker-alt"></i> {{$hotel->direccion}}</p>
                        <hr>
                        @php $services = explode(',', $hotel->servicios); @endphp
                        <p class="lead"><b>Services:</b>
                            @foreach($services as $service)
                                <i class="fa fa-check text-secondary"></i> {{$service}}
                            @endforeach
                        </p>
                        <hr>
                        <a href="{{$hotel->url}}" class="btn btn-outline-secondary" target="_blank">{{$hotel->nombre}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    @stop