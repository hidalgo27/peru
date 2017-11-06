@extends('layouts.page.default')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="text-secondary pt-3">DESTINO PERÚ: {{strtoupper($title)}}</h2>
                    {{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <blockquote class="blockquote text-center alert-primary py-3">
                        <p class="mb-0">Trabajaremos en torno a su agenda y sus intereses de viaje para construir juntos los planes de viaje más exclusivos. Revise nuestros programas de viajes y explore Perú.</p>
                        {{--<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
                    </blockquote>

                </div>

            </div>
        </div>
    </section>


    <section class="my-5">
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
                    <h3 class="font-weight-bold text-g-green" id="ofertas">Destinos que incluyen "{{ucwords(strtolower($title))}}"</h3>
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
                            @foreach($paquetes_de as $paquetes_des)
                                @if(isset($paquetes_des->destinos))
                                    @foreach($paquete->where('id',$paquetes_des->paquetes->id)->sortBy("duracion") as $paquetes)
                                        <tr onClick="CrearEnlace('{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}');" class="clickable">
                                            <td class="text-primary">{{$paquetes->duracion}} Days {{ucwords(strtolower($paquetes->titulo))}}</td>
                                            <td><i class="fa fa-map-marker"></i>
                                                @php
                                                    $i = 1;
                                                    $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                @endphp
                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                                    @php $i++; @endphp
                                                @endforeach
                                            </td>
                                            {{--<td>--}}

                                            {{--@foreach($paquete_categoria->where('idpaquetes',$paquetes->id) as $paquete_categorias)--}}
                                            {{--<a href="#">{{ucfirst(strtolower($paquete_categorias->categoria->nombre))}}</a> |--}}
                                            {{--@endforeach--}}

                                            {{--</td>--}}
                                            <td class="text-right color-orange-2">
                                                @foreach($paquetes->precio_paquetes as $precio)
                                                    @if($precio->estrellas == 2)
                                                        @if($precio->precio == 0)
                                                            Pida una cotización
                                                        @else
                                                            <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop