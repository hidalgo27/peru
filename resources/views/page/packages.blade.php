@extends('layouts.page.default')
@section('content')
    <header class="header-video-default position-relative">
        @include('layouts.page.menu')
        {{--<div id="overlay">--}}
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
                {{--<source src="{{asset('media/video6.mp4')}}" />--}}
                {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
                {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
                {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            {{--<img src="{{asset('images/logos/logo-expedia2.png')}}" alt="" class="header-expedia">--}}
        {{--</div>--}}
        <div id="overlay" class="overlay-img">
            <img src="{{asset('images/sliders/cusco.jpg')}}" alt="" id="hero-vid">
        </div>
        <div class="position-absolute bottom-n-1">
            <img src="{{asset('images/pce.png')}}" alt="" class="img-fluid">
        </div>

        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center">
                    <div class="col text-center">
                        <h3 class="text-white text-center h1">PAQUETES & TOURS</h3>
                        <i class="fa fa-chevron-down text-white h1"></i>
                    </div>

                </div>

            </div>
        </div>
    </header>
    @include('layouts.page.menu-mobil')

    <section class="bg-white m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    {{Breadcrumbs::render('paquetes')}}
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-g-yellow">PAQUETES DE VIAJE A PERÚ</h1>
                    {{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0 lead text-secondary text-center"><b>Nuestros paquetes turísticos más populares a Perú. Estos paquetes podrían usarse como referencia para personalizar su propio viaje. En GOTOPERU nos especializamos en crear experiencias personalizadas según sus preferencias; Invitamos a revisar estos programas para tener una idea de los destinos más importantes, por ejemplo, MachuPicchu, Lago Titicaca, Nazca y el Amazonas.</b></p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="alert alert-light text-center h3" role="alert">
                        <a href="#con-hoteles" class="text-g-green">Paquetes con <b>*Hoteles</b></a> | <a href="#sin-hoteles" class="text-danger">Paquetes <b>*sin Hoteles</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="py-5 bg-white" id="con-hoteles">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="alert alert-g-green py-2 mb-1" role="alert">
                        <h5 class="font-weight-bold m-0">Todos nuestros paquetes a Perú <small><b>(*con Hoteles incluido)</b></small></h5>
                    </div>
                    {{--<h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> ---.</h5>--}}

                    @foreach($paquete->sortBy('duracion') as $paquetes)
                        <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action">
                            <div class="row no-gutters">
                                <div class="col-5 text-primary">
                                    <b>{{$paquetes->duracion}} Días</b> {{ucwords(strtolower($paquetes->titulo))}}
                                </div>
                                <div class="col">
                                    <i class="fa fa-map-marker-alt pl-2 pr-1 text-g-green"></i>
                                    @php
                                        $i = 1;
                                        $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                    @endphp
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                        {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                        @php $i++; @endphp
                                    @endforeach
                                </div>
                                <div class="col-2 text-right">
                                    <b>
                                        @foreach($paquetes->precio_paquetes as $precio)
                                            @if($precio->estrellas == 2)
                                                @if($precio->precio == 0)
                                                    <span class="text-danger">Pida una cotización</span>
                                                @else
                                                    <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                @endif
                                            @endif
                                        @endforeach
                                    </b>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-white" id="sin-hoteles">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger py-2 mb-1" role="alert">
                        <h5 class="font-weight-bold m-0">Todos nuestros paquetes a Perú <small><b>(*sin Hoteles incluido)</b></small></h5>
                    </div>
                    {{--<h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> ---.</h5>--}}

                    @foreach($paquete->where('s_precio', 1)->sortBy('duracion') as $paquetes)
                        <a href="{{route('sin_hotel_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action">
                            <div class="row no-gutters">
                                <div class="col-5 text-primary">
                                    <b>{{$paquetes->duracion}} Días</b> {{ucwords(strtolower($paquetes->titulo))}}
                                </div>
                                <div class="col">
                                    <i class="fa fa-map-marker-alt pl-2 pr-1 text-g-green"></i>
                                    @php
                                        $i = 1;
                                        $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                    @endphp
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                        {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                        @php $i++; @endphp
                                    @endforeach
                                </div>
                                <div class="col-2 text-right">
                                    <b>
                                        <sup>$</sup>{{$paquetes->precio}}<small>USD</small>
                                    </b>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@stop