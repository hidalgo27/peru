@extends('layouts.page.default')

@section('content')

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-montserrat text-g-green">Tours a Machu Picchu Perú Agencia de Viajes y Turismo</h1>
                    <p class="text-secondary">Oficinas: Lima, Cusco, Arequipa.</p>
                    <p class="h3 my-3 font-weight-bold ">Los mejores testimonios, 10 años de experiencia nos respaldan.</p>
                    <p class="lead">Desde su llegada al aeropuerto de Lima o Cusco, le demostraremos nuestra pasión por nuestro país, mostrandole lo mejor del Perú con nuestro selecto equipo de guías profesionales de GOTOPERU, siempre con nuestra mejor hospitalidad peruana!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-2">
        <div class="container">
            <div class="row justify-content-center alert-secondary no-gutters p-3 rounded">
                <div class="col-8">
                    <div class="row text-primary h5">
                        <div class="col"><a href="#ofertas" class="text-secondary">Peru Ofertas</a></div>
                        <div class="col"><a href="#familiar" class="text-secondary">Familiar</a></div>
                        <div class="col"><a href="#aventura" class="text-secondary">Aventura</a></div>
                        <div class="col"><a href="#clasicos" class="text-secondary">Clásicos</a></div>
                        <div class="col"><a href="#trekking" class="text-secondary">Trekking</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3 class="font-weight-bold" id="ofertas">Perú Ofertas</h3>
                    <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: hoteles, transporte, guia.</h5>
                    <div class="card">
                        {{--<div class="card-header bg-light">--}}
                            {{--<p class="m-0 text-g-yellow font-weight-bold">Peru Ofertas</p>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h4 class="card-title">Special title treatment</h4>--}}
                            {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                            {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}
                        <table class="table table-responsive border-0 m-0 table-hover">
                            <thead class="thead-inverse">
                            {{--<tr>--}}
                                {{--<th>Nombre del Paquete</th>--}}
                                {{--<th>Destinos</th>--}}
                                {{--<th>Categoria</th>--}}
                                {{--<th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>--}}
                            {{--</tr>--}}
                            </thead>
                            <tbody>
                            @foreach($paquete->where('estado', 1) as $paquetes)
                            <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                <td class="text-primary">{{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}</td>
                                <td>
                                    @php
                                        $i = 1;
                                        $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                    @endphp
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                        {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                        @php $i++; @endphp
                                    @endforeach
                                </td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><b>
                                        @foreach($paquetes->precio_paquetes as $precio)
                                            @if($precio->estrellas == 2)
                                                @if($precio->precio == 0)
                                                    Pida una cotización
                                                @else
                                                    <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                @endif
                                            @endif
                                        @endforeach
                                    </b></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3 class="font-weight-bold mt-4" id="familiar">Familiar</h3>
                    <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: hoteles, transporte, guia.</h5>
                    <div class="card">
                        {{--<div class="card-header bg-light">--}}
                        {{--<p class="m-0 text-g-yellow font-weight-bold">Peru Ofertas</p>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                        {{--<h4 class="card-title">Special title treatment</h4>--}}
                        {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}
                        <table class="table table-responsive border-0 m-0 table-hover">
                            <thead class="thead-inverse">
                            {{--<tr>--}}
                            {{--<th>Nombre del Paquete</th>--}}
                            {{--<th>Destinos</th>--}}
                            {{--<th>Categoria</th>--}}
                            {{--<th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>--}}
                            {{--</tr>--}}
                            </thead>
                            <tbody>
                            @foreach($paquete->where('estado', 2) as $paquetes)
                                <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                    <td class="text-primary">{{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}</td>
                                    <td>
                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach
                                    </td>
                                    {{--<td>Clasico</td>--}}
                                    <td class="font-montserrat"><b>
                                            @foreach($paquetes->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    @if($precio->precio == 0)
                                                        Pida una cotización
                                                    @else
                                                        <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </b></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3 class="font-weight-bold mt-4" id="aventura">Aventura</h3>
                    <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: hoteles, transporte, guia.</h5>
                    <div class="card">
                        {{--<div class="card-header bg-light">--}}
                        {{--<p class="m-0 text-g-yellow font-weight-bold">Peru Ofertas</p>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                        {{--<h4 class="card-title">Special title treatment</h4>--}}
                        {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}
                        <table class="table table-responsive border-0 m-0 table-hover">
                            <thead class="thead-inverse">
                            {{--<tr>--}}
                            {{--<th>Nombre del Paquete</th>--}}
                            {{--<th>Destinos</th>--}}
                            {{--<th>Categoria</th>--}}
                            {{--<th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>--}}
                            {{--</tr>--}}
                            </thead>
                            <tbody>
                            @foreach($paquete->where('estado', 3) as $paquetes)
                                <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                    <td class="text-primary">{{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}</td>
                                    <td>
                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach
                                    </td>
                                    {{--<td>Clasico</td>--}}
                                    <td class="font-montserrat"><b>
                                            @foreach($paquetes->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    @if($precio->precio == 0)
                                                        Pida una cotización
                                                    @else
                                                        <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </b></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3 class="font-weight-bold mt-4" id="clasicos">Clásicos</h3>
                    <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: hoteles, transporte, guia.</h5>
                    <div class="card">
                        {{--<div class="card-header bg-light">--}}
                        {{--<p class="m-0 text-g-yellow font-weight-bold">Peru Ofertas</p>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                        {{--<h4 class="card-title">Special title treatment</h4>--}}
                        {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}
                        <table class="table table-responsive border-0 m-0 table-hover">
                            <thead class="thead-inverse">
                            {{--<tr>--}}
                            {{--<th>Nombre del Paquete</th>--}}
                            {{--<th>Destinos</th>--}}
                            {{--<th>Categoria</th>--}}
                            {{--<th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>--}}
                            {{--</tr>--}}
                            </thead>
                            <tbody>
                            @foreach($paquete->where('estado', 4) as $paquetes)
                                <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                    <td class="text-primary">{{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}</td>
                                    <td>
                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach
                                    </td>
                                    {{--<td>Clasico</td>--}}
                                    <td class="font-montserrat"><b>
                                            @foreach($paquetes->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    @if($precio->precio == 0)
                                                        Pida una cotización
                                                    @else
                                                        <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </b></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3 class="font-weight-bold mt-4" id="trekking">Trekking</h3>
                    <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: hoteles, transporte, guia.</h5>
                    <div class="card">
                        {{--<div class="card-header bg-light">--}}
                        {{--<p class="m-0 text-g-yellow font-weight-bold">Peru Ofertas</p>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                        {{--<h4 class="card-title">Special title treatment</h4>--}}
                        {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}
                        <table class="table table-responsive border-0 m-0 table-hover">
                            <thead class="thead-inverse">
                            {{--<tr>--}}
                            {{--<th>Nombre del Paquete</th>--}}
                            {{--<th>Destinos</th>--}}
                            {{--<th>Categoria</th>--}}
                            {{--<th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>--}}
                            {{--</tr>--}}
                            </thead>
                            <tbody>
                            @foreach($paquete->where('estado', 5) as $paquetes)
                                <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                    <td class="text-primary">{{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}</td>
                                    <td>
                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach
                                    </td>
                                    {{--<td>Clasico</td>--}}
                                    <td class="font-montserrat"><b>
                                            @foreach($paquetes->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    @if($precio->precio == 0)
                                                        Pida una cotización
                                                    @else
                                                        <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </b></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3 class="font-weight-bold mt-4">Consultanos</h3>
                    <h5 class="text-secondary font-pompiere font-weight-bold">Comentarios, dudas, información de paquetes, etc.</h5>
                    <div class="card mt-4">
                        <div class="fb-comments" data-href="http://gotoperu.com.pe/" data-width="100%" data-numposts="5" data-mobile="1"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-deck owl-carousel owl-theme">

                        <div class="card">
                            {{--<div class="card-header">--}}
                            {{--<h4 class="card-title">City tour em cusco</h4>--}}
                            {{--</div>--}}
                            <a href=""><img class="card-img-top " src="http://www.andesviagens.com/images/packages/AV700.jpg" alt="Card image cap"></a>

                            <div class="card-body text-center">
                                <h4 class="card-title"><a href="" class="text-dark">Paquete a machu Picchu</a></h4>
                                <p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Dias</p>
                                <p class="text-left card-text"><i class="fa fa-map-marker text-primary" aria-hidden="true"></i>
                                    Lima, Cusco, Machu Picchu, Lago Titicaca
                                </p>
                                {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                            </div>
                            <div class="card-footer text-muted">
                                <div class="row">
                                    <div class="col text-left">Desde</div>
                                    <div class="col text-right font-weight-bold text-primary font-montserrat">
                                        <sup>$</sup> 500 <small>USD</small>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <img src="{{asset('images/banner-restaurante.jpg')}}" alt="" class="img-fluid my-4">

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe  src="https://www.youtube.com/embed/HfBo74hJId0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="mt-4">
                        <div class="fb-page" data-href="https://www.facebook.com/GOTOPERUcom/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/GOTOPERUcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GOTOPERUcom/">GOTOPERUcom</a></blockquote></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @stop