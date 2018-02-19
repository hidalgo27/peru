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
                        <h3 class="text-white text-center h1">{{strtoupper(str_replace('-', ' ', $title))}}</h3>
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
                    @foreach($paquete_iti as $paquete_i)
                        <h1 class="font-montserrat text-g-green font-weight-bold">TOURS EN PERU {{$paquete_i->duracion}} DIAS: {{strtoupper(str_replace('-', ' ', $title))}}</h1>
                    @endforeach
                    {{--<p class="h3 my-3 font-weight-bold ">Lorem elit. Accusamus asperiores commodi</p>--}}
                    {{--<p class="lead">L orem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad assumenda blanditiis consectetur cumque, debitis enim eveniet id <b>labore nam necessitatibus</b> repellat? Consectetur doloremque harum necessitatibus quis repellendus sit veniam.</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 d-none d-lg-inline-block">
                    <div class="row">
                        <div class="col">
                            <div class="d-none d-sm-block">
                                {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}
                                <div class="alert alert-g-green py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Paquetes</h5>
                                </div>
                                <p class="text-secondary"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</p>
                                <div class="list-group">
                                    @foreach($paquete->where('estado', 1)->sortBy('duracion')->take(6) as $paquetes)
                                        <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action text-primary">
                                            {{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}. <b class="text-g-green">Visite</b>:

                                            @php
                                                $i = 1;
                                                $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                            @endphp
                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                                @php $i++; @endphp
                                            @endforeach
                                        </a>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="d-none d-sm-block pt-5">
                                {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}
                                <div class="alert alert-danger py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Paquetes sin Hotel</h5>
                                </div>
                                <p class="text-secondary"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</p>

                                @foreach($paquete->where('estado', 1)->sortBy('duracion')->take(6) as $paquetes)
                                    <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action text-primary">
                                        {{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}. <b class="text-danger">Visite</b>:

                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="d-none d-sm-block pt-5">
                                <div class="alert alert-info py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Solo Tours</h5>
                                </div>
                                <p class="text-secondary"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</p>

                                @foreach($paquete->where('estado', 1)->sortBy('duracion')->take(6) as $paquetes)
                                    <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action text-primary">
                                        {{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}. <b class="text-info">Visite</b>:

                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="d-none d-sm-block pt-5">
                                {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}
                                <div class="alert alert-g-yellow py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Solo Traslados</h5>
                                </div>
                                <p class="text-secondary"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</p>

                                @foreach($paquete->where('estado', 1)->sortBy('duracion')->take(6) as $paquetes)
                                    <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action text-primary">
                                        {{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}. <b class="text-g-yellow">Visite</b>:

                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm">
                    <div class="row">
                        <div class="col-12 col-sm-7 d-none d-sm-block">
                            <img src="{{asset('images/machu-picchu.jpg')}}" alt="" class="img-fluid w-100 rounded">
                        </div>
                        <div class="col-12 col-sm">
                            <div class="card">
                                <div class="p-3">
                                    <p class="h1 text-secondary"><b>{{$paquete_i->duracion}} <small>días</small></b></p>
                                    @if($paquete_i->duracion == 1)
                                        @php $h_precio = "d-none"; @endphp
                                    @else
                                        @php $h_precio = ""; @endphp
                                    @endif
                                    <h5 class="h1 text-center"><sup class="h3 text-secondary {{$h_precio}}">Desde</sup> <b class="text-g-yellow">


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
                                    <p class="m-0"><b>Trip Code: {{$paquetes->codigo}}</b></p>
                                    {{--<a href="" class="btn btn-primary btn-lg btn-avalavility margin-top-10">Check Availability</a>--}}
                                </div>
                                <a  href="#book-now" type="button" class="btn btn-primary btn-lg btn-avalavility margin-top-10">
                                    Consultas
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
                    <div class="row {{$h_precio}}">
                        <div class="col">
                            <h3 class="font-weight-bold mt-4">Precios:</h3>
                            <table class="table table-bordered table-responsive">
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

    <section class="my-5 py-5 bg-light" id="book-now">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-9 col-lg-8 text-center">
                    <span class="text-secondary font-weight-bold">PAQUETE DE VIAJE</span>
                    <h2 class="text-primary font-weight-bold">{{$paquetes->titulo}} {{$paquetes->duracion}} DIAS</h2>
                    {{--<h5 class="text-secondary">{{$paquetes->duracion}} Days</h5>--}}
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-9 col-lg-8">
                    <form id="i_form" role="form">
                        {{csrf_field()}}
                        <h3 class="text-secondary mt-4">Acomodación</h3>

                        <div class="row">
                            <div class="col-6 col-sm" data-toggle="buttons">
                                <label class="btn btn-outline-primary btn-block">
                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Econômico"> Económico
                                    <div class="d-block text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 col-sm" data-toggle="buttons">
                                <label class="btn btn-outline-primary btn-block">
                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Turista"> Turista
                                    <div class="d-block text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 col-sm" data-toggle="buttons">
                                <label class="btn btn-outline-primary btn-block">
                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Superior"> Superior
                                    <div class="d-block text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 col-sm" data-toggle="buttons">
                                <label class="btn btn-outline-primary btn-block">
                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Luxo"> Lujo
                                    <div class="d-block text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <h3 class="text-secondary mt-4">Numero de Pasajeros</h3>

                        <div class="row no-gutters" data-toggle="buttons">
                            <label class="btn col btn-outline-primary">
                                <input type="radio" name="number" class="number" autocomplete="off" value="1" checked> 1 <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col mx-2 btn-outline-primary">
                                <input type="radio" name="number" class="number" autocomplete="off" value="2"> 2 <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col btn-outline-primary">
                                <input type="radio" name="number" class="number" autocomplete="off" value="3"> 3 <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col mx-2 btn-outline-primary">
                                <input type="radio" name="number" class="number" autocomplete="off" value="4"> 4 <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col btn-outline-primary">
                                <input type="radio" name="number" class="number" autocomplete="off" value="5+"> 5+ <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col ml-2 btn-outline-primary">
                                <input type="radio" name="number" class="number" autocomplete="off" value="Undecided"><small>Indeciso</small>
                            </label>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h3 class="text-secondary mt-4">Fecha de Viaje</h3>
                                <input type="text" class="form-control" id="i_date" placeholder="Fecha de Viaje">
                                <input type="hidden" id="i_package" value="{{$paquetes->codigo}}: {{$paquetes->titulo}} {{$paquetes->duracion}} DAYS">
                            </div>
                            <div class="col">
                                <h3 class="text-secondary mt-4">Telefono</h3>
                                <input type="tel" class="form-control" id="i_tel" placeholder="Ingrese su numero">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h3 class="text-secondary mt-4">Nombre</h3>
                                <input type="text" class="form-control" id="i_name" placeholder="Nombre completo">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h3 class="text-secondary mt-4">Email</h3>
                                <input type="email" class="form-control" id="i_email" placeholder="Ingrese su email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h3 class="text-secondary mt-4">Algun Duda?</h3>
                                <textarea class="form-control" id="i_comment" rows="3" placeholder="Como usted imagina un viaje inolvidable al Perú, sugerencias especiales, preguntas, comentarios"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col my-3">

                                <button class="btn btn-g-green btn-block btn-lg btn-next" id="i_send" type="button" onclick="inquire()">Enviar
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </button>
                                <ul class="fa-ul pull-right d-none" id="loader2">
                                    <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Enviando...</i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade d-none" id="i_alert" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Muchas</strong> por contactar con GOTOPERU, un agente de viajes se pondrá en contacto con usted en las próximas 24 horas para ayudarle con la planificación de su viaje. :)
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            function inquire(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                $("#i_send").attr("disabled", true);

                var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;



                var s_accommodation = document.getElementsByName('accommodation[]');
                var $accommodation = "";
                for (var i = 0, l = s_accommodation.length; i < l; i++) {
                    if (s_accommodation[i].checked) {
                        $accommodation += s_accommodation[i].value+' , ';
                    }
                }
                s_accommodation = $accommodation.substring(0,$accommodation.length-3);


                var s_number = $(".number:checked").val();

                var s_date = $('#i_date').val();
                var s_tel = $('#i_tel').val();
                var s_name = $('#i_name').val();
                var s_email = $('#i_email').val();
                var s_package = $('#i_package').val();


                var s_comment = $('#i_comment').val();


                if (filter.test(s_email)){
                    sendMail = "true";
                } else{
                    $('#i_email').css("border-bottom", "2px solid #FF0000");
                    sendMail = "false";
                }
                if (s_name.length == 0 ){
                    $('#i_name').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if(sendMail == "true"){
                    var datos = {

                        "txt_accommodation" : s_accommodation,
                        "txt_number" : s_number,

                        "txt_date" : s_date,
                        "txt_tel" : s_tel,
                        "txt_name" : s_name,
                        "txt_email" : s_email,
                        "txt_package" : s_package,
                        "txt_comment" : s_comment,

                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('inquire_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#i_send').removeClass('show');
                            $("#i_send").addClass('d-none');

                            $("#loader2").removeClass('d-none');
                            $("#loader2").addClass('show');
                        },
                        success:  function (response) {
                            $('#i_form')[0].reset();
                            $('#i_send').removeClass('d-none');
                            $('#i_send').addClass('show');
                            $("#loader2").removeClass('show');
                            $("#loader2").addClass('d-none');
                            $('#i_alert').removeClass('d-none');
                            $("#i_alert").addClass('show');
                            $("#i_alert b").html(response);
                            $("#i_alert").fadeIn('slow');
                            $("#i_send").removeAttr("disabled");
                        }
                    });
                } else{
                    $("#i_send").removeAttr("disabled");
                }
            }

            $('#i_date').datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
            });

        </script>
    @endpush

@stop