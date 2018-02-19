@extends('layouts.page.default')
@section('content')
    <header class="header-video-default position-relative">
        <section id="title" class="header-menu-g bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 col-sm-2 position-relative">
                        <div class="logo-goto position-absolute w-100 top-0 p-3 border rounded border-dark bg-dark">
                            <a href="/"><img src="{{asset('images/logo-goto-b.png')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col col-sm">
                        <div class="row justify-content-end">
                            <div class="col-auto text-right my-2">
                                <a href="" class="btn btn-g-green btn-sm text-white d-none d-sm-inline-block"><i class="fa fa-comment"></i> Chat</a>
                                <span class="mx-2">|</span>
                                <button type="button" class="btn btn-g-yellow btn-sm text-white d-none d-sm-inline-block" data-toggle="modal" data-target="#contant_m">
                                    Pregunte Ahora
                                </button>
                                <a href="https://www.facebook.com/GOTOPERUcom/" class="text-white d-inline mx-1" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://twitter.com/GOTOPERUCOM" class="text-white d-inline mx-1" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/gotoperucom/" class="text-white d-inline mx-1" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg" class="text-white d-inline mx-1" target="_blank"><i class="fa fa-youtube-play"></i></a>
                                <i class="fa fa-face"></i>
                            </div>
                        </div>
                        <div class="row d-none d-sm-block">
                            <div class="col">
                                <nav class="nav nav-pills nav-fill rounded-right bg-light">
                                    <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route('tours_path')}}">TOURS</a>
                                    <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route('destinations_path')}}">DESTINOS</a>
                                    <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route("about_path")}}">ACERCA DE NOSOTROS</a>
                                    <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light d-none d-lg-inline" href="{{route('social_path')}}">RESPONSABILIDAD SOCIAL</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                        <h3 class="text-white text-center h1">PAQUETES & TOURS</h3>
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
                    <h1 class="text-g-yellow">PAQUETES DE VIAJE A PERÚ</h1>
                    {{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0 lead text-secondary text-center"><b>Nuestros paquetes turísticos más populares a Perú y América del Sur, estos paquetes podrían usarse como referencia para personalizar su propio viaje. En GOTOPERU nos especializamos en crear experiencias personalizadas según sus preferencias; Invitamos a revisar estos programas para tener una idea de los destinos más importantes, por ejemplo, MachuPicchu, Lago Titicaca, Nazca y el Amazonas.</b></p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="alert alert-primary py-2 mb-1" role="alert">
                        <h5 class="font-weight-bold m-0">Todos nuestros paquetes y tours a Perú</h5>
                    </div>
                    <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> ---.</h5>

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