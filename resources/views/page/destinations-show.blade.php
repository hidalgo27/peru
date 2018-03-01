@extends('layouts.page.default')
@section('content')
    <header class="header-video-default position-relative">
        @include('layouts.page.menu')
        <div id="overlay" class="overlay-img">
            <img src="{{asset('images/destinations/'.str_replace(' ','-', strtolower($title)).'.jpg')}}" alt="" id="hero-vid">
        </div>
        <div class="position-absolute bottom-n-1">
            <img src="{{asset('images/pce.png')}}" alt="" class="img-fluid">
        </div>

        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center">
                    <div class="col text-center">
                        <h3 class="text-white text-center h1">{{strtoupper($title)}}</h3>
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
                    {{Breadcrumbs::render('destino-show', $title)}}
                </div>
            </div>
        </div>
    </section>


    <section class="py-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-g-yellow pt-3">DESTINO PERÚ: {{strtoupper($title)}}</h1>
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
                @php $d_none = "d-none"; @endphp
                @foreach($tours_destinos as $tour_de)
                    @if(isset($tour_de->destinos))
                        @foreach($tours->where('id',$tour_de->tours->id) as $num)
                            @php $d_none = ""; @endphp
                        @endforeach
                    @endif
                @endforeach
                <div class="col-12 mt-3 mb-5 sticky-top text-center bg-white">
                    @foreach($destinos->where('estado', 1)->sortBy('nombre') as $destino)
                        <a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}"><img src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'.jpg')}}" alt="" width="60" height="60" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destino->nombre))}}"></a>
                    @endforeach
                </div>

                <div class="col-12">
                    <div class="alert alert-primary text-center h3" role="alert">
                        <a href="#tours" class="{{$d_none}}">Tours en {{ucwords(strtolower($title))}}</a> <span class="{{$d_none}}">|</span> <a href="#paquetes">Paquetes de Viaje {{ucwords(strtolower($title))}}</a>
                    </div>
                </div>

                <div class="col-12">
                    <h3 class="font-weight-bold text-g-green pt-4 {{$d_none}}" id="tours">Tours en {{ucwords(strtolower($title))}}</h3>
                    @foreach($tours_destinos as $tour_de)
                        @if(isset($tour_de->destinos))
                            @foreach($tours->where('id',$tour_de->tours->id) as $tour)
                                <a href="{{route('itinerario_tours_show_path', str_replace(' ','-',strtolower($tour->titulo)))}}" class="list-group-item list-group-item-action">
                                    <div class="row no-gutters">
                                        <div class="col-5 text-primary">
                                            <b>{{ucwords(strtolower($tour->titulo))}}</b>
                                        </div>

                                        <div class="col">
                                            <i class="fa fa-clock pl-2 pr-1 text-info"></i> {{$tour->duracion}}
                                        </div>
                                        <div class="col">
                                            <i class="fa fa-map-marker-alt pl-2 pr-1 text-info"></i>
                                            @php
                                                $i = 1;
                                                $num_des = count($tours_destinos->where('idtours',$tour->id));
                                            @endphp
                                            @foreach($tours_destinos->where('idtours',$tour->id) as $tour_destino)
                                                {{ucwords(strtolower($tour_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                                @php $i++; @endphp
                                            @endforeach
                                        </div>
                                        <div class="col-2 text-right">
                                            <b>
                                                @if($tour->precio < 0)
                                                    <span class="text-danger">Pida una cotización</span>
                                                @else
                                                    <sup>$</sup>{{$tour->precio_g}}<small>USD</small>
                                                @endif
                                                {{--@if($paquetes->precio == 0 OR $paquetes->precio == NULL)--}}
                                                {{--@foreach($paquetes->precio_paquetes as $precio)--}}
                                                {{--@if($precio->estrellas == 2)--}}
                                                {{--@if($precio->precio == 0)--}}
                                                {{--<span class="text-danger">Pida una cotización</span>--}}
                                                {{--@else--}}
                                                {{--<sup>$</sup>{{$precio->precio}}<small>USD</small>--}}
                                                {{--@endif--}}
                                                {{--@endif--}}
                                                {{--@endforeach--}}
                                                {{--@else--}}
                                                {{--@if($paquetes->precio < 0)--}}
                                                {{--<span class="text-danger">Pida una cotización</span>--}}
                                                {{--@else--}}
                                                {{--<sup>$</sup>{{$paquetes->precio}}<small>USD</small>--}}
                                                {{--@endif--}}
                                                {{--@endif--}}
                                            </b>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    @endforeach
                </div>


                <div class="col-12 col-sm">
                    <h3 class="font-weight-bold text-g-green pt-4" id="tours">Paquetes de viaje en {{ucwords(strtolower($title))}}</h3>

                    @foreach($paquetes_de as $paquetes_des)
                        @if(isset($paquetes_des->destinos))
                            @foreach($paquete->where('id',$paquetes_des->paquetes->id)->sortBy("duracion") as $paquetes)
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
                        @endif
                    @endforeach
                </div>




            </div>
        </div>
    </section>

@stop