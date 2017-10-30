@extends('layouts.page.default')

@section('content')

    <section class="mt-5 mb-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    @foreach($paquete_iti as $paquete_i)
                        <h1 class="font-montserrat text-g-green">TOURS EN PERU {{$paquete_i->duracion}} DIAS: {{strtoupper(str_replace('-', ' ', $title))}}</h1>
                    @endforeach
                    {{--<p class="h3 my-3 font-weight-bold ">Lorem elit. Accusamus asperiores commodi</p>--}}
                    {{--<p class="lead">L orem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad assumenda blanditiis consectetur cumque, debitis enim eveniet id <b>labore nam necessitatibus</b> repellat? Consectetur doloremque harum necessitatibus quis repellendus sit veniam.</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-4">

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
                            @foreach($paquete as $paquetes)
                                <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                    <td class="text-primary">
                                        {{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}. <b>Visite</b>:

                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach

                                    </td>
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
                            @foreach($paquete->take(6) as $paquetes)
                                <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                    <td class="text-primary">
                                        {{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}. <b>Visite</b>:

                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach

                                    </td>
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
                            @foreach($paquete->take(6) as $paquetes)
                                <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                    <td class="text-primary">
                                        {{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}. <b>Visite</b>:

                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-8">
                            <img src="{{asset('https://www.machupicchu.biz/imagenes/cusco/machupicchu/machu_picchu.jpg')}}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="p-3">
                                    <p class="h5 text-secondary"><b>{{$paquete_i->duracion}} days</b></p>
                                    <h5 class="h2"><sup class="h6 text-secondary">Desde</sup> <b class="text-g-yellow">


                                                @foreach($paquete_iti as $paquetes)
                                                    @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                        @if($precio->estrellas == 2)
                                                            @if($precio->precio == 0)
                                                                Pida una cotización
                                                            @else
                                                                ${{$precio->precio}}
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endforeach

                                        </b> <span class="h6 text-secondary">USD</span></h5>
                                    <p>Trip Code: {{$paquetes->codigo}}</p>
                                    {{--<a href="" class="btn btn-primary btn-lg btn-avalavility margin-top-10">Check Availability</a>--}}
                                </div>
                                <a  href="#inquire" type="button" class="btn btn-primary btn-lg btn-avalavility margin-top-10">
                                    Reservar Ahora
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold mt-4">Itinerario:</h3>
                            @foreach($paquete_iti as $paquete_itinerary)
                                @foreach($paquete_itinerary->itinerario as $itinerario)
                                    <h4 class="font-weight-bold mt-4 text-g-yellow"><b>Day {{$itinerario->dia}}: </b> {{ucwords(strtolower($itinerario->titulo))}}</h4>
                                    @php echo $itinerario->descripcion; @endphp
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold mt-4">Precios:</h3>
                            <table class="table table-bordered">
                                {{--<caption>Price per person</caption>--}}
                                <thead>
                                <tr>
                                    <th colspan="5">Precios basados en doble acomodación</th>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <th>Económico  2 <i class="fa fa-star text-warning" aria-hidden="true"></i></th>
                                    <th>Tourista 3 <i class="fa fa-star text-warning" aria-hidden="true"></i></th>
                                    <th>Superior 3 <i class="fa fa-star text-warning" aria-hidden="true"></i></th>
                                    <th>Comfort 4 <i class="fa fa-star text-warning" aria-hidden="true"></i></th>
                                    <th>Lujo 5 <i class="fa fa-star text-warning" aria-hidden="true"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($paquete_iti as $paquetes)
                                        @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                            @if($precio->precio == 0)
                                                <td>Ask for a quote</td>

                                            @elseif($precio->estrellas == 2)
                                                    <td>USD ${{$precio->precio}}</td>
                                                    <td>Pida una cotización</td>
                                            @elseif($precio->estrellas > 2)
                                                <td>USD ${{$precio->precio}}</td>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold mt-4">Incluye:</h3>
                            @php echo $paquetes->incluye; @endphp
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold mt-4">No Incluye:</h3>
                            @php echo $paquetes->noincluye; @endphp
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold mt-4">Opcional:</h3>
                            @php echo $paquetes->opcional; @endphp
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@stop