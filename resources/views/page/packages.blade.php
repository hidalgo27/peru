@extends('layouts.page.default')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="text-secondary pt-3">PAQUETES DE VIAJE A PERÚ</h2>
                    {{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <blockquote class="blockquote text-center alert-primary py-3">
                        <p class="mb-0">Nuestros paquetes turísticos más populares a Perú y América del Sur, estos paquetes podrían usarse como referencia para personalizar su propio viaje. En GOTOPERU nos especializamos en crear experiencias personalizadas según sus preferencias; Invitamos a revisar estos programas para tener una idea de los destinos más importantes, por ejemplo, MachuPicchu, Lago Titicaca, Nazca y el Amazonas.</p>
                        {{--<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
                    </blockquote>

                </div>

            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="font-weight-bold" id="ofertas">Paquetes de viajes a Perú</h3>
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
                            @foreach($paquete->sortBy('duracion') as $paquetes)
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
                                                    <sup>$</sup>{{$precio->precio}}
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
    </section>

@stop