@extends('layouts.page.default')
@section('content')
    <header class="header-video-default position-relative">
        @include('layouts.page.menu')
        <div id="overlay">
            <video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>
                <source src="{{asset('media/video6.mp4')}}" />
                <source src="{{asset('media/video6.m4v')}}" type="video/mp4" />
                <source src="{{asset('media/video6.webm')}}" type="video/webm" />
                <source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />
            </video>

            <img src="{{asset('images/logos/logo-expedia2.png')}}" alt="" class="header-expedia">
        </div>
        <div class="position-absolute bottom-n-1">
            <img src="{{asset('images/pce.png')}}" alt="" class="img-fluid">
        </div>

        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center">
                    <div class="col text-center">
                        <h3 class="text-white text-center h1">DESTINOS EN LA TIERRA DE LOS INCAS</h3>
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


    <section class="py-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-g-yellow">DESTINOS DE VIAJE EN PERÚ</h1>
                    {{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0 lead text-secondary text-center"><b>Trabajaremos en torno a su agenda y sus intereses de viaje para construir juntos los planes de viaje más exclusivos. Revise nuestros programas de viajes y explore Perú.</b></p>
                </div>

            </div>
        </div>
    </section>


    <section class="py-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 mb-4">
                    <h3 class="font-weight-bold text-g-green" id="ofertas">Destinos Perú</h3>
                    <h5 class="text-g-yellow font-pompiere font-weight-bold"><b>Region:</b> Sur</h5>
                    <div class="card p-1">
                        @foreach($destinos->where('region', 'sur') as $destino)
                            <a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}" class="btn btn-link text-left"><i class="fa fa-chevron-right"></i> {{ucwords(strtolower($destino->nombre))}}</a>
                        @endforeach
                    </div>

                    <h5 class="text-g-yellow font-pompiere font-weight-bold mt-3"><b>Region:</b> Centro</h5>
                    <div class="card p-1">
                        @foreach($destinos->where('region', 'centro') as $destino)
                            <a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}" class="btn btn-link text-left"><i class="fa fa-chevron-right"></i> {{ucwords(strtolower($destino->nombre))}}</a>
                        @endforeach
                    </div>

                    <h5 class="text-g-yellow font-pompiere font-weight-bold mt-3"><b>Region:</b> Norte</h5>
                    <div class="card p-1">
                        @foreach($destinos->where('region', 'norte') as $destino)
                            <a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}" class="btn btn-link text-left"><i class="fa fa-chevron-right"></i> {{ucwords(strtolower($destino->nombre))}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-sm">
                    <h3 class="font-weight-bold text-g-green" id="ofertas">Paquetes de viajes a Perú</h3>
                    <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: ---.</h5>
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

@stop