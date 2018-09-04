@extends('layouts.page.default')

@section('content')
    <header class="header-video-default position-relative">
        @include('layouts.page.menu')
        <div id="overlay">
            <video class="" id="hero-vid" poster="{{asset('images/sliders/cusco.jpg')}}" autoplay loop muted>
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
    @include('layouts.page.menu-mobil')
    <section class="bg-white m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    {{Breadcrumbs::render('tours-show', $title)}}
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-montserrat text-g-green font-weight-bold">TOURS EN PERU: {{strtoupper(str_replace('-', ' ', $title))}}</h1>
                    {{--<p class="h3 my-3 font-weight-bold ">Lorem elit. Accusamus asperiores commodi</p>--}}
                    {{--<p class="lead">L orem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad assumenda blanditiis consectetur cumque, debitis enim eveniet id <b>labore nam necessitatibus</b> repellat? Consectetur doloremque harum necessitatibus quis repellendus sit veniam.</p>--}}
                </div>
            </div>
        </div>
    </section>
    @foreach($tours as $tour)
        @endforeach
    <section class="bg-white">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm">
                    <div class="row">
                        <div class="col-12 col-sm d-none d-sm-block">
                            <img src="{{asset('images/machu-picchu.jpg')}}" alt="" class="img-fluid w-100 rounded">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            {{--<h3 class="font-weight-bold mt-4">Itinerario:</h3>--}}

                                    <h4 class="font-weight-bold mt-4 text-g-yellow">{{ucwords(strtolower($tour->titulo))}}</h4>
                                    @php echo $tour->descripcion; @endphp

                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold mt-4">Incluye:</h3>
                            @php echo $tour->incluye; @endphp
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold mt-4">No Incluye:</h3>
                            @php echo $tour->noincluye; @endphp
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold mt-4">Opcional:</h3>
                            @php echo $tour->opcional; @endphp
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-4 d-none d-lg-inline-block">

                    <div class="sticky-top">
                        <div class="row">
                            <div class="col-12 col-sm">

                                    <table class="table table-sm table-bordered m-0">
                                        <tr>
                                            <td><b>Inicio del Tours</b></td>
                                            <td>{{$tour->horario}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Duración</b></td>
                                            <td>{{$tour->duracion}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Precio por persona (GRUPO)</b></td>
                                            <td><sup>$</sup>{{$tour->precio_g}} <small>USD</small></td>
                                        </tr>
                                        <tr>
                                            <td><b>Precio por persona (PRIVADO)</b></td>
                                            <td><i class="text-danger">Pida Cotización</i></td>
                                        </tr>
                                    </table>

                            </div>
                        </div>
                        <!-- <div class="row mt-3">
                            <div class="col">
                                <a  href="#book-now" type="button" class="btn btn-primary btn-avalavility btn-block">
                                    Consultas
                                </a>
                            </div>
                        </div> -->
                        <hr>
                        <div class="row">
                            <div class="col">
                                <!-- FareHarbor book button for item #105338 -->
                            {{--<a href="https://fareharbor.com/embeds/book/gotoperu/items/{{$tour->codigo_fh}}/?full-items=yes&flow=92655" class="btn btn-block btn-g-yellow">Reservar Ahora</a>--}}

                            <!-- FareHarbor calendar of item #105338 -->
                                <script src="https://fareharbor.com/embeds/script/calendar/gotoperu/items/{{$tour->codigo_fh}}/?fallback=simple&full-items=yes&flow=92655"></script>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-none d-sm-block pt-5">
                        <div class="alert alert-info py-2 mb-1" role="alert">
                            <h5 class="font-weight-bold m-0">Tours Similares</h5>
                        </div>
                        <p class="text-secondary"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</p>

                        @foreach($tours_a as $tour2)
                            <a href="{{route('itinerario_tours_show_path', str_replace(' ','-',strtolower($tour2->titulo)))}}" class="list-group-item list-group-item-action">
                                <div class="row no-gutters">
                                    <div class="col-5 text-primary">
                                        <b>{{ucwords(strtolower($tour2->titulo))}}</b>
                                    </div>
                                    <div class="col">
                                    <i class="fa fa-clock pl-2 pr-1 text-info"></i> {{$tour2->duracion}}
                                    </div>
                                    <div class="col">
                                        <i class="fa fa-map-marker-alt pl-2 pr-1 text-info"></i>
                                        @php
                                            $i = 1;
                                            $num_des = count($tours_destinos->where('idtours',$tour2->id));
                                        @endphp
                                        @foreach($tours_destinos->where('idtours',$tour2->id) as $tour_destino)
                                            {{ucwords(strtolower($tour_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                            @php $i++; @endphp
                                        @endforeach
                                    </div>
                                    <div class="col-2 text-right">
                                        <b>
                                            @if($tour2->precio < 0)
                                                <span class="text-danger">Pida una cotización</span>
                                            @else
                                                <sup>$</sup>{{$tour2->precio_g}}<small>USD</small>
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
        </div>
    </section>
    <!-- <section class="py-5 bg-light" id="book-now">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-9 col-lg-8 text-center">
                    <span class="text-secondary font-weight-bold">TOURS</span>
                    <h2 class="text-primary font-weight-bold">{{$tour->titulo}} {{$tour->duracion}} DIAS</h2>
                    {{--<h5 class="text-secondary">{{$paquetes->duracion}} Days</h5>--}}
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-9 col-lg-8">
                    <form id="i_form" role="form">
                        {{csrf_field()}}
                        <h3 class="text-secondary mt-4 d-none">Acomodación</h3>

                        <div class="row d-none">
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
                                <input type="hidden" id="i_package" value="{{$tour->codigo}}: {{$tour->titulo}} {{$tour->duracion}} DAYS">
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
    </section> -->

    @push('scripts')
        <!-- <script>
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

        </script> -->

    @endpush

@stop