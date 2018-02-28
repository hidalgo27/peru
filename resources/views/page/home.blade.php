@extends('layouts.page.default')

@section('content')
    <header class="header-video position-relative">
        @include('layouts.page.menu')
        {{--<img src="{{asset('images/sliders/slider-1.jpg')}}" alt="" class="img-fluid d-none d-sm-inline">--}}
        {{--<img src="{{asset('images/sliders/slider-2.jpg')}}" alt="" class="img-fluid d-sm-none">--}}
        <div id="overlay">
            <video class="" id="hero-vid" poster="{{asset('images/sliders/cusco.jpg')}}" autoplay loop muted>
                <source src="{{asset('media/video6.mp4')}}" />
                <source src="{{asset('media/video6.m4v')}}" type="video/mp4" />
                <source src="{{asset('media/video6.webm')}}" type="video/webm" />
                <source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />
            </video>
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
            {{----}}
            <img src="{{asset('images/logos/logo-expedia2.png')}}" alt="" class="header-expedia">
        </div>
        {{--<div class="position-absolute bottom-n-1">--}}
        {{--<img src="{{asset('images/pce.png')}}" alt="" class="img-fluid">--}}
        {{--</div>--}}
        {{--<div class="position-absolute top-0 w-100 d-none d-lg-block">--}}
        {{--<div class="container">--}}
        {{--<div class="row">--}}
        {{--<div class="col mt-10-p text-white">--}}
        {{--<p class="display-4 font-weight-normal m-0 mt-1">Visite Peru</p>--}}
        {{--<i class="h4 font-weight-light">Tierra de los incas</i>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center">
                    <div class="col col-sm-7">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row justify-content-center">
                                        <div class="col-9">
                                            <a href="peru-tours/machu-picchu-todo-el-dia">
                                                <div class="banner-header rounded text-white py-2 px-4">
                                                    <h2 class="text-center h1 text-g-yellow m-0">Machu Picchu</h2>
                                                    <p class="m-0 h4 font-weight-normal text-center">Tours a Machu Picchu de 1 dia</p>
                                                    <p class="m-0 text-center">desde solo <span class="h1 text-info"><sup>$</sup>290</span> p.p</p>
                                                    <hr class="my-1">
                                                    <small class="m-0">Incluye: Traslados, trenes, entradas, buses, guiado, asistencias.</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="carousel-item">--}}
                                {{--<img class="d-block w-100" src="..." alt="Second slide">--}}
                                {{--</div>--}}
                                {{--<div class="carousel-item">--}}
                                {{--<img class="d-block w-100" src="..." alt="Third slide">--}}
                                {{--</div>--}}
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col d-none d-sm-block">
                        <div class="row justify-content-center d-none d-sm-flex">
                            <div class="col">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Assistances">
                                        {{--<span>Assistances</span>--}}
                                    </div>

                                    <div class="col">
                                        <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Entrances">
                                        {{--<span>Entrances</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/transfers.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Transfers">
                                        {{--<span>Transfers</span>--}}
                                    </div>

                                    <div class="col">
                                        <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Hotels">
                                        {{--<span>Hotels</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/tours.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Tours">
                                        {{--<span>Tours</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/trains.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Trains">
                                        {{--<span>Trains</span>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="row mt-2">--}}
                        {{--<div class="col text-white text-center">--}}
                        {{--<h4 class="h5 font-weight-light text-g-yellow">Top recommended Peru Travel Company</h4>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="row my-3 justify-content-center">
                            <div class="col">
                                <p class="text-white mb-3 h5"><span class="bg-g-green p-1 rounded-circle px-3 text-white">1</span> <b>Los mejores precios:</b> <small>Somos operadores locales.</small></p>
                                <p class="text-white mb-3 h5"><span class="bg-g-yellow p-1 rounded-circle px-3 text-white">2</span> <b>Flexibles:</b> <small>Paquetes completos o solo transportes.</small></p>
                                <p class="text-white mb-3 h5"><span class="bg-g-dark p-1 rounded-circle px-3 text-white">3</span> <b>Calidad:</b> <small>Cientos de testimonios lo comprueban.</small></p>
                            </div>
                        </div>
                        {{--<div class="row justify-content-center">--}}
                        {{--<div class="col-6 text-center">--}}
                        {{--<a href="#Inquire" class="btn btn-lg btn-g-yellow">GET STARTED NOW</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
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


    <div class="bg-white">

        <ul id="menu" class="nav nav-pills nav-fill bg-light rounded d-none  d-sm-flex sticky-top nav-itinerary">
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



        <section class="pt-3 bg-light">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-sm text-center mb-4">
                        <h3>Diseñe su viaje</h3>
                        <p>Sin compromiso.</p>
                        <button type="button" class="btn btn-g-green" data-toggle="modal" data-target="#design_m">
                            Mi viaje ideal seria ...
                        </button>
                    </div>
                    <div class="col-12 col-sm text-center mb-4 border border-top-0 border-bottom-0">
                        <h3>Contacte con nosotros</h3>
                        <p>Telefono: <i class="fa fa-phone"></i>51(84)262555</p>
                        {{--<a href="" class="btn btn-g-yellow">Contáctenos</a>--}}
                        <button type="button" class="btn btn-g-yellow btn-sm mb-2" data-toggle="modal" data-target="#contant_m">
                            Contáctenos
                        </button>

                        <button type="button" class="btn btn-dark btn-sm mb-2" data-toggle="modal" data-target="#llamada_m">
                            Nosotros te llamamos
                        </button>
                        {{--<a href="" class="btn btn-dark">Nosotros te llamamos</a>--}}
                    </div>
                    <div class="col-12 col-sm text-center mb-3">
                        <h3>Chatee ahora</h3>
                        <p>Contacte mediante:</p>
                        <a href="https://m.me/GOTOPERUcom/" class="btn btn-primary mb-2" target="_blank"><i class="fab fa-facebook-messenger"></i> Messenger</a>
                        <a href="https://api.whatsapp.com/send?phone=5184262555" class="btn btn-success mb-2" target="_blank"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="design_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Contacte con nosotros</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Envié la información requerida y nos pondremos en contacto dentro de las 24 horas garantizado.</p>
                            <form id="d_form">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12 col-sm border-secondary border-right-0  m-0">

                                        <div class="d-block mb-3">
                                            <span class="text-secondary align-bottom">Información Personal</span>
                                            {{--<img src="{{asset('images/icons/subtitle.png')}}" alt="" class="img-fluid mb-1" width="100">--}}
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Nome</label>--}}
                                                    <input type="text" class="form-control" id="d_name" placeholder="Nombre Completo">
                                                </div>
                                                <div class="form-group">
                                                    {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Email</label>--}}
                                                    <input type="email" class="form-control" id="d_email" placeholder="Su email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm">
                                                <div class="form-group">
                                                    {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Data</label>--}}
                                                    <input type="text" class="form-control" id="d_date" placeholder="Fecha de viaje">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm">
                                                <div class="form-group">
                                                    {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Telefone</label>--}}
                                                    <input type="tel" class="form-control" id="d_tel" placeholder="N° de Telefono">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-sm-6">
                                                <div class="form-group">
                                                    {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Dias</label>--}}
                                                    <input type="number" class="form-control" id="d_duration" placeholder="N° de Dias">
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6">
                                                <div class="form-group">
                                                    {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Passageiros</label>--}}
                                                    <input type="number" class="form-control" id="d_numero" placeholder="N° de Pasajeros">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm border-secondary border-right-0 border-left-0 m-0">

                                        {{--<h4 class="card-title">Card title</h4>--}}
                                        {{--<label class="d-block">Eu Gostaria de visitar</label>--}}
                                        <div class="d-block mb-3">
                                            <span class="text-secondary align-bottom">Le gustaria visitar:</span>
                                            {{--<img src="{{asset('images/icons/subtitle.png')}}" alt="" class="img-fluid mb-1" width="100">--}}
                                        </div>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                                    <label class="btn btn-outline-primary btn-block">
                                                        <input type="checkbox"  autocomplete="off" name="destinations[]" value="Machu Picchu"> Machu Picchu
                                                    </label>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                                    <label class="btn btn-outline-primary btn-block">
                                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Cusco"> Cusco
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                                    <label class="btn btn-outline-primary btn-block">
                                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lago Titicaca"> Lago titicaca
                                                    </label>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                                    <label class="btn btn-outline-primary btn-block">
                                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Puno"> Puno
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                                    <label class="btn btn-outline-primary btn-block">
                                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lima"> Lima
                                                    </label>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                                    <label class="btn btn-outline-primary btn-block">
                                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lineas de Nazca"> Lineas de Nazca
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon" id="">Otros</span>
                                            <input type="text" class="form-control" id="d_otros" aria-describedby="basic-addon3">
                                        </div>

                                    </div>
                                    {{--<div class="col border-secondary border-left-0 m-0 d-none">--}}

                                    {{--<div class="form-group">--}}
                                    {{--<div class="d-block mb-3">--}}
                                    {{--<span class="text-secondary align-bottom">Dúvidas?</span>--}}
                                    {{--<img src="{{asset('images/icons/subtitle.png')}}" alt="" class="img-fluid mb-1" width="100">--}}
                                    {{--</div>--}}
                                    {{--<textarea class="form-control" id="d_comment" rows="5" placeholder="Como você imagina uma viagem inesquecivel ao Perú, sugestões especiais, perguntas, comentários"></textarea>--}}
                                    {{--</div>--}}
                                    {{--<div class="my-3">--}}
                                    {{--<button type="submit" class="btn btn-lg btn-block btn-warning">Submit</button>--}}

                                    {{--<button class="btn btn-lg btn-block btn-warning" id="d_send" type="button" onclick="design()">Enviar--}}
                                    {{--<i class="fa fa-paper-plane" aria-hidden="true"></i>--}}
                                    {{--</button>--}}
                                    {{--<ul class="fa-ul pull-right d-none" id="loader2">--}}
                                    {{--<li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Enviando...</i></li>--}}
                                    {{--</ul>--}}

                                    {{--</div>--}}

                                    {{--</div>--}}

                                    <div class="alert alert-success alert-dismissible fade d-none" id="d_alert" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Muchas</strong> por contactar con GOTOPERU, un agente de viajes se pondrá en contacto con usted en las próximas 24 horas para ayudarle con la planificación de su viaje. :)
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        {{--<button type="submit" class="btn btn-lg btn-block btn-warning">Submit</button>--}}

                                        <button class="btn btn-lg btn-block btn-g-green" id="d_send" type="button" onclick="design()">Enviar
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        </button>
                                        <ul class="fa-ul pull-right d-none" id="loader2">
                                            <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Enviando...</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="llamada_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nosotros te llamamos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Ingrese la información requeriada y nosotros te llamamos.</p>
                            <form id="t_form">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="t_name">Nombres</label>
                                    <input type="text" class="form-control" id="t_name" placeholder="Nombre completo">
                                </div>
                                <div class="form-group">
                                    <label for="t_email">Email</label>
                                    <input type="email" class="form-control" id="t_email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="t_city">Ciudad/País</label>
                                    <input type="text" class="form-control" id="t_city" placeholder="Lima/Perú">
                                </div>

                                <div class="form-group">
                                    <label for="t_tel">Telefono</label>
                                    <input type="text" class="form-control" id="t_tel" placeholder="Ej. +51 980385734">
                                </div>


                                <div class="alert alert-success alert-dismissible fade d-none" id="t_alert" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Muchas</strong> por contactar con GOTOPERU, un agente de viajes se pondrá en contacto con usted en las próximas 24 horas para ayudarle con la planificación de su viaje. :)
                                </div>

                                {{--<button type="submit" class="btn btn-primary">Sign in</button>--}}
                            </form>
                        </div>
                        <div class="modal-footer">
                            {{--<button type="submit" class="btn btn-primary">Llámenme ahora mismo</button>--}}

                            <button class="btn btn-lg btn-block btn-g-green" id="t_send" type="button" onclick="tel()">Llámenme ahora mismo
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            </button>
                            <ul class="fa-ul pull-right d-none" id="loader4">
                                <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Enviando...</i></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        {{--<h1 class="font-montserrat text-g-green">Tours a Machu Picchu Perú Agencia de Viajes y Turismo</h1>--}}
                        {{--<p class="text-secondary">Oficinas: Lima, Cusco, Arequipa.</p>--}}
                        <p class="h3 my-3 font-weight-bold ">Los mejores testimonios, 10 años de experiencia nos respaldan.</p>
                        <p class="lead d-none d-sm-block">Desde su llegada al aeropuerto de Lima o Cusco, le demostraremos nuestra pasión por nuestro país, mostrandole lo mejor del Perú con nuestro selecto equipo de guías profesionales de GOTOPERU, siempre con nuestra mejor hospitalidad peruana!</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="container bg-white">
            <div class="row">
                <div class="col col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col">
                            <div id="paquetes" class="d-sm-block">
                                {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}
                                <div class="alert alert-g-green py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Paquetes</h5>
                                </div>
                                <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</h5>
                                <div class="list-group">
                                    @foreach($paquete->where('estado', 1)->sortBy('duracion') as $paquetes)
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
                    </div>
                    <div class="row mt-2">
                        <div class="col text-right">
                            <a href="{{route('paquetes_path')}}" class="btn-link font-weight-normal">Ver todos los paquetes <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div id="hotel" class="d-sm-block pt-5">
                                {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}
                                <div class="alert alert-danger py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Paquetes sin Hotel</h5>
                                </div>
                                <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</h5>

                                @foreach($paquete->where('s_precio', 1)->sortBy('duracion')->take(6) as $paquetes)
                                        <a href="{{route('sin_hotel_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action">
                                        <div class="row no-gutters">
                                            <div class="col-5 text-primary">
                                                <b>{{$paquetes->duracion}} Días</b> {{ucwords(strtolower($paquetes->titulo))}}
                                            </div>
                                            <div class="col">
                                                <i class="fa fa-map-marker-alt pl-2 pr-1 text-danger"></i>
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
                    <div class="row mt-2">
                        <div class="col text-right">
                            <a href="{{route('paquetes_path')}}" class="btn-link font-weight-normal">Ver todos los paquetes <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div id="tours" class="d-sm-block pt-5">
                                <div class="alert alert-info py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Solo Tours</h5>
                                </div>
                                <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</h5>

                                @foreach($tours as $tour)
                                    <a href="{{route('itinerario_tours_show_path', str_replace(' ','-',strtolower($tour->titulo)))}}" class="list-group-item list-group-item-action">
                                        <div class="row no-gutters">
                                            <div class="col-5 text-primary">
                                                <b>{{ucwords(strtolower($tour->titulo))}}</b>
                                            </div>
                                            {{--<div class="col">--}}
                                                {{--<i class="fa fa-clock pl-2 pr-1 text-info"></i> {{$tour->duracion}}--}}
                                            {{--</div>--}}
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

                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col text-right">
                            <a href="{{route('tours_path')}}" class="btn-link font-weight-normal">Ver todos los tours <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div id="traslados" class="d-sm-block pt-5">
                                {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}
                                <div class="alert alert-g-yellow py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Solo Traslados</h5>
                                </div>
                                <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</h5>

                                @foreach($traslado as $traslados)
                                    <a href="{{route('transfer_path', str_replace(' ','-',strtolower($traslados->titulo)))}}" class="list-group-item list-group-item-action">
                                        <div class="row no-gutters">
                                            <div class="col-5 text-primary">
                                                <b>{{ucwords(strtolower($traslados->titulo))}}</b>
                                            </div>

                                            <div class="col text-right">
                                                <b>
                                                    @if($traslados->precio_p < 0)
                                                        <span class="text-danger">Pida una cotización</span>
                                                    @else
                                                        <sup>$</sup>{{$traslados->precio_p}}<small>USD</small>
                                                    @endif
                                                </b>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="row pt-5">
                        <div class="col">
                            <div class="alert alert-primary py-2 mb-1" role="alert">
                                <h5 class="font-weight-bold m-0">Consultanos</h5>
                            </div>
                            <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> Comentarios, dudas, información de paquetes, etc.</h5>

                            <div class="card my-4">
                                <div class="fb-comments" data-href="http://gotoperu.com.pe/" data-width="100%" data-numposts="5" data-mobile="1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-4">
                    {{--<div class="card-deck owl-carousel owl-theme">--}}

                        {{--<div class="card">--}}
                            {{--<div class="card-header">--}}
                            {{--<h4 class="card-title">City tour em cusco</h4>--}}
                            {{--</div>--}}
                            {{--<a href="http://gotoperu.com.pe/paquete/peru-magico"><img class="card-img-top " src="http://www.andesviagens.com/images/packages/AV700.jpg" alt="Card image cap"></a>--}}

                            {{--<div class="card-body text-center">--}}
                                {{--<h4 class="card-title"><a href="http://gotoperu.com.pe/paquete/peru-magico" class="text-dark">Perú Magico</a></h4>--}}
                                {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                                {{--<p class="text-left card-text"><i class="fa fa-map-marker text-primary" aria-hidden="true"></i>--}}
                                    {{--Lima, Cusco, Sacred Valley, Machu Picchu--}}
                                {{--</p>--}}
                                {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                            {{--</div>--}}
                            {{--<div class="card-footer text-muted">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col text-left">Desde</div>--}}
                                    {{--<div class="col text-right font-weight-bold text-primary font-montserrat">--}}
                                        {{--<sup>$</sup> 898 <small>USD</small>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    <div class="row">
                        <div class="col">
                            <a href="mailto:grupos@gotoperu.com.pe"><img src="{{asset('images/grupos.jpg')}}" alt="" class="img-fluid rounded"></a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="peru-tours/machu-picchu-todo-el-dia"><img src="{{asset('images/oferta.jpg')}}" alt="" class="img-fluid rounded"></a>
                        </div>
                    </div>

                    {{--<img src="{{asset('images/banner-restaurante.jpg')}}" alt="" class="img-fluid my-4">--}}
                    {{--<div class="my-4">--}}
                        {{--<h3 class="font-weight-bold mt-4">Planes de Pago</h3>--}}
                        {{--<h5 class="text-secondary font-pompiere font-weight-bold">Para más información<button type="button" class="btn-link mb-2" data-toggle="modal" data-target="#contant_m">--}}
                                {{--<b>Contáctenos</b>--}}
                            {{--</button>.</h5>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="card text-white bg-g-yellow mb-3 text-center" style="max-width: 20rem;">--}}
                                    {{--<div class="card-header h3">Plan A</div>--}}
                                    {{--<div class="card-body">--}}
                                        {{--<p class="card-title display-3 font-montserrat font-weight-bold m-0">0%</p>--}}
                                        {{--<p class="m-0">de interés</p>--}}
                                        {{--<p class="m-0"><b>Dos</b> Cuotas</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-footer text-muted">--}}
                                        {{--<span class="text-white">50% | 50%</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}

                                {{--<div class="card text-white bg-g-green mb-3 text-center" style="max-width: 20rem;">--}}
                                    {{--<div class="card-header h3">Plan B</div>--}}
                                    {{--<div class="card-body">--}}
                                        {{--<p class="card-title display-3 font-montserrat font-weight-bold m-0">0%</p>--}}
                                        {{--<p class="m-0">de interés</p>--}}
                                        {{--<p class="m-0"><b>Tres</b> Cuotas</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-footer text-muted">--}}
                                        {{--<span class="text-white">40% | 30% | 30%</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="row mt-4">
                        <div class="col">
                            <h3 class="font-weight-bold">Nuestra Promesa</h3>
                            <h5 class="text-secondary font-pompiere font-weight-bold">Una aventura distinta cada día.</h5>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <img src="{{asset('images/banners/1.jpg')}}" alt="" class="img-fluid rounded">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <img src="{{asset('images/banners/2.jpg')}}" alt="" class="img-fluid rounded">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <img src="{{asset('images/banners/3.jpg')}}" alt="" class="img-fluid rounded">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe  src="https://www.youtube.com/embed/HfBo74hJId0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="fb-page" data-href="https://www.facebook.com/GOTOPERUcom/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/GOTOPERUcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GOTOPERUcom/">GOTOPERUcom</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-light">
            <div class="container">
                <div class="row align-items-center no-gutters">
                    <div class="col d-none d-xl-block">
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('images/social/we-care.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col">
                                <img src="{{asset('images/social/ninos.jpg')}}" alt="" class="img-fluid clickable" data-toggle="modal" data-target="#social-1">
                                <!-- Modal -->
                                <div class="modal fade" id="social-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <img src="{{asset('images/social/ninos.jpg')}}" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid clickable" data-toggle="modal" data-target="#social-2">
                                <!-- Modal -->
                                <div class="modal fade" id="social-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-4">
                            <h3 class="h1 font-weight-light">PORQUE NOS IMPORTA <i class="fa fa-heart text-danger"></i></h3>
                            <p class="">Retribuimos a nuestras comunidades</p>
                            <hr>
                            <p class="text-primary"><i>Chaullacota se ubica a 15,000 alimentaciones (4500 mts) 2 horas al noroeste de Cusco.</i></p>
                            <p class="text-justify font-weight-light">En GOTOPERU estamos comprometidos a hacer negocios de una manera que realmente le devuelva a nuestras comunidades parte de nuestras ganancias especialmente a comunidades ubicadas en lugares remotos. Nuestra planificación y ejecución de uno de nuestros viajes implica una larga cadena de suministro: desde guías y operadores locales hasta proveedores de transporte, hoteles y restaurantes, interactuamos con muchas organizaciones en diferentes lugares, pero también sabemos que algunas comunidades especialmente ubicadas arriba de los Andes a más de 15,000 pies que debido al difícil acceso, no reciben la asistencia que merecen, es por eso que organizamos periódicamente viajes a comunidades tan lejanas para traerles especialmente suéteres y juguetes para niños.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    @stop