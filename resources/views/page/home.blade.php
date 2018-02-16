@extends('layouts.page.default')

@section('content')



    <section class="d-none d-lg-block bg-white">
        <div class="container">
            {{--<div class="row justify-content-center alert-secondary no-gutters p-3 rounded">--}}
                {{--<div class="col-8">--}}
                    {{--<div class="row text-primary h5">--}}
                        {{--<div class="col"><a href="#ofertas" class="text-secondary">Peru Ofertas</a></div>--}}
                        {{--<div class="col"><a href="#familiar" class="text-secondary">Familiar</a></div>--}}
                        {{--<div class="col"><a href="#aventura" class="text-secondary">Aventura</a></div>--}}
                        {{--<div class="col"><a href="#clasicos" class="text-secondary">Clásicos</a></div>--}}
                        {{--<div class="col"><a href="#trekking" class="text-secondary">Trekking</a></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="row">
                <div class="col">
                    <ul id="menu" class="nav nav-pills nav-fill bg-light rounded  d-sm-flex sticky-top nav-itinerary">
                        <li class="nav-item d-none d-sm-block">
                            <a class="nav-link text-white rounded-0 bg-g-green" href="#paquetes">Paquetes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white rounded-0 bg-danger" href="#hotel">Paquetes sin Hoteles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white rounded-0 bg-info" href="#tours">Solo Tours</a>
                        </li>
                        <li class="nav-item d-none d-sm-block">
                            <a class="nav-link text-white rounded-0 bg-g-yellow" href="#traslados">Solo Traslados</a>
                        </li>
                    </ul>


                            <div class="row">
                                <div class="col text-center">
                                    {{--<h1 class="font-montserrat text-g-green">Tours a Machu Picchu Perú Agencia de Viajes y Turismo</h1>--}}
                                    {{--<p class="text-secondary">Oficinas: Lima, Cusco, Arequipa.</p>--}}
                                    <p class="h3 my-3 font-weight-bold ">Los mejores testimonios, 10 años de experiencia nos respaldan.</p>
                                    <p class="lead d-none d-sm-block">Desde su llegada al aeropuerto de Lima o Cusco, le demostraremos nuestra pasión por nuestro país, mostrandole lo mejor del Perú con nuestro selecto equipo de guías profesionales de GOTOPERU, siempre con nuestra mejor hospitalidad peruana!</p>
                                </div>
                            </div>


                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <div class="col">
                                    <div id="paquetes" class="d-none d-sm-block">
                                        {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}

                                        <h3 class="font-weight-bold pt-3" id="ofertas">Paquetes</h3>
                                        <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: hoteles, tours, traslados, entradas, desayunos, trenes.</h5>
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
                                                @foreach($paquete->where('estado', 1)->sortBy('duracion')->take(6) as $paquetes)
                                                    <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                                        <td class="text-primary w-40"><b>{{$paquetes->duracion}} Días</b> {{ucwords(strtolower($paquetes->titulo))}}</td>
                                                        <td class="d-none d-sm-inline-block"><i class="fa fa-map-marker text-primary"></i>
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
                                                        <td class="font-montserrat text-right"><b class="">
                                                                @foreach($paquetes->precio_paquetes as $precio)
                                                                    @if($precio->estrellas == 2)
                                                                        @if($precio->precio == 0)
                                                                            <span class="text-danger">Pida una cotización</span>
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

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div id="hotel" class="d-none d-sm-block">
                                        {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}

                                        <h3 class="font-weight-bold pt-5" id="ofertas">Paquetes sin Hotel</h3>
                                        <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: hoteles, tours, traslados, entradas, desayunos, trenes.</h5>
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
                                                @foreach($paquete->where('estado', 1)->sortBy('duracion')->take(6) as $paquetes)
                                                    <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                                        <td class="text-primary w-40"><b>{{$paquetes->duracion}} Días</b> {{ucwords(strtolower($paquetes->titulo))}}</td>
                                                        <td class="d-none d-sm-inline-block"><i class="fa fa-map-marker text-primary"></i>
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
                                                        <td class="font-montserrat text-right"><b class="">
                                                                @foreach($paquetes->precio_paquetes as $precio)
                                                                    @if($precio->estrellas == 2)
                                                                        @if($precio->precio == 0)
                                                                            <span class="text-danger">Pida una cotización</span>
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

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="d-none d-sm-block">
                                        {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}

                                        <h3 class="font-weight-bold pt-5" id="tours">Solo Tours</h3>
                                        <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: hoteles, tours, traslados, entradas, desayunos, trenes.</h5>
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
                                                @foreach($paquete->where('estado', 1)->sortBy('duracion')->take(6) as $paquetes)
                                                    <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                                        <td class="text-primary w-40"><b>{{$paquetes->duracion}} Días</b> {{ucwords(strtolower($paquetes->titulo))}}</td>
                                                        <td class="d-none d-sm-inline-block"><i class="fa fa-map-marker text-primary"></i>
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
                                                        <td class="font-montserrat text-right"><b class="">
                                                                @foreach($paquetes->precio_paquetes as $precio)
                                                                    @if($precio->estrellas == 2)
                                                                        @if($precio->precio == 0)
                                                                            <span class="text-danger">Pida una cotización</span>
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

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="d-none d-sm-block">
                                        {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}

                                        <h3 class="font-weight-bold pt-5" id="traslados">Solo Traslados</h3>
                                        <h5 class="text-secondary font-pompiere font-weight-bold">Incluye: hoteles, tours, traslados, entradas, desayunos, trenes.</h5>
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
                                                @foreach($paquete->where('estado', 1)->sortBy('duracion')->take(6) as $paquetes)
                                                    <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                                        <td class="text-primary w-40"><b>{{$paquetes->duracion}} Días</b> {{ucwords(strtolower($paquetes->titulo))}}</td>
                                                        <td class="d-none d-sm-inline-block"><i class="fa fa-map-marker text-primary"></i>
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
                                                        <td class="font-montserrat text-right"><b class="">
                                                                @foreach($paquetes->precio_paquetes as $precio)
                                                                    @if($precio->estrellas == 2)
                                                                        @if($precio->precio == 0)
                                                                            <span class="text-danger">Pida una cotización</span>
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

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h3 class="font-weight-bold mt-4">Consultanos</h3>
                                    <h5 class="text-secondary font-pompiere font-weight-bold">Comentarios, dudas, información de paquetes, etc.</h5>
                                    <div class="card my-4">
                                        <div class="fb-comments" data-href="http://gotoperu.com.pe/" data-width="100%" data-numposts="5" data-mobile="1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-deck owl-carousel owl-theme">

                                <div class="card">
                                    {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title">City tour em cusco</h4>--}}
                                    {{--</div>--}}
                                    <a href="http://gotoperu.com.pe/paquete/peru-magico"><img class="card-img-top " src="http://www.andesviagens.com/images/packages/AV700.jpg" alt="Card image cap"></a>

                                    <div class="card-body text-center">
                                        <h4 class="card-title"><a href="http://gotoperu.com.pe/paquete/peru-magico" class="text-dark">Perú Magico</a></h4>
                                        <p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>
                                        <p class="text-left card-text"><i class="fa fa-map-marker text-primary" aria-hidden="true"></i>
                                            Lima, Cusco, Sacred Valley, Machu Picchu
                                        </p>
                                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                    </div>
                                    <div class="card-footer text-muted">
                                        <div class="row">
                                            <div class="col text-left">Desde</div>
                                            <div class="col text-right font-weight-bold text-primary font-montserrat">
                                                <sup>$</sup> 898 <small>USD</small>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{--<img src="{{asset('images/banner-restaurante.jpg')}}" alt="" class="img-fluid my-4">--}}
                            <div class="my-4">
                                <h3 class="font-weight-bold mt-4">Planes de Pago</h3>
                                <h5 class="text-secondary font-pompiere font-weight-bold">Para más información<button type="button" class="btn-link mb-2" data-toggle="modal" data-target="#contant_m">
                                        <b>Contáctenos</b>
                                    </button>.</h5>
                                <div class="row">
                                    <div class="col">
                                        <div class="card text-white bg-g-yellow mb-3 text-center" style="max-width: 20rem;">
                                            <div class="card-header h3">Plan A</div>
                                            <div class="card-body">
                                                <p class="card-title display-3 font-montserrat font-weight-bold m-0">0%</p>
                                                <p class="m-0">de interés</p>
                                                <p class="m-0"><b>Dos</b> Cuotas</p>
                                            </div>
                                            <div class="card-footer text-muted">
                                                <span class="text-white">50% | 50%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">

                                        <div class="card text-white bg-g-green mb-3 text-center" style="max-width: 20rem;">
                                            <div class="card-header h3">Plan B</div>
                                            <div class="card-body">
                                                <p class="card-title display-3 font-montserrat font-weight-bold m-0">0%</p>
                                                <p class="m-0">de interés</p>
                                                <p class="m-0"><b>Tres</b> Cuotas</p>
                                            </div>
                                            <div class="card-footer text-muted">
                                                <span class="text-white">40% | 30% | 30%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe  src="https://www.youtube.com/embed/HfBo74hJId0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>

                            <h3 class="font-weight-bold mt-4">Nuestra Promesa</h3>
                            <h5 class="text-secondary font-pompiere font-weight-bold">Una aventura distinta cada día.</h5>

                            <div class="mt-4">
                                <img src="{{asset('images/banners/1.jpg')}}" alt="" class="img-fluid rounded">
                            </div>

                            <div class="mt-4">
                                <img src="{{asset('images/banners/2.jpg')}}" alt="" class="img-fluid rounded">
                            </div>

                            <div class="mt-4">
                                <img src="{{asset('images/banners/3.jpg')}}" alt="" class="img-fluid rounded">
                            </div>

                            <div class="mt-4">
                                <div class="fb-page" data-href="https://www.facebook.com/GOTOPERUcom/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/GOTOPERUcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GOTOPERUcom/">GOTOPERUcom</a></blockquote></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>

    @stop