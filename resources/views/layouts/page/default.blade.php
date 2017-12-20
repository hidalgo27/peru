<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Agencia de Viajes en Peru | Tours Machu Picchu</title>
    <meta name="description" content="Paquetes de viaje a Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.">

    <link rel="stylesheet" href="{{mix("css/app.css")}}">

</head>
<body>
<section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-4 col-sm-2 position-relative">
                <div class="logo-goto position-absolute w-100 top-0 p-3 border rounded border-dark bg-dark">
                    <a href="/"><img src="{{asset('images/logo-goto-b.png')}}" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col col-sm">
                <div class="row justify-content-end">
                    <div class="col-auto text-right my-2">
                        <a href="" class="btn btn-g-green btn-sm text-white d-none d-sm-inline-block"><i class="fa fa-commenting"></i> Chat</a>
                        <span class="mx-2">|</span>
                        <button type="button" class="btn btn-g-yellow btn-sm text-white d-none d-sm-inline-block" data-toggle="modal" data-target="#contant_m">
                            Pregunte Ahora
                        </button>
                        <a href="https://www.facebook.com/GOTOPERUcom/" class="text-white d-inline mx-1" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/GOTOPERUCOM" class="text-white d-inline mx-1" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/gotoperucom/" class="text-white d-inline mx-1" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg" class="text-white d-inline mx-1" target="_blank"><i class="fa fa-youtube-play"></i></a>
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
<header class="position-relative">
    <img src="{{asset('images/sliders/slider-1.jpg')}}" alt="" class="img-fluid d-none d-sm-inline">
    <img src="{{asset('images/sliders/slider-2.jpg')}}" alt="" class="img-fluid d-sm-none">
    <div class="position-absolute bottom-n-1">
        <img src="{{asset('images/pce.png')}}" alt="" class="img-fluid">
    </div>
    <div class="position-absolute top-0 w-100 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col mt-10-p text-white">
                    <p class="display-4 font-weight-normal m-0 mt-1">Visite Peru</p>
                    <i class="h4 font-weight-light">Tierra de los incas</i>
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
<section class="mt-4">
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
                <p>Telefono: <i class="fa fa-phone"></i>+51(084) 262-0555</p>
                {{--<a href="" class="btn btn-g-yellow">Contáctenos</a>--}}
                <button type="button" class="btn btn-g-yellow btn-sm mb-2" data-toggle="modal" data-target="#contant_m">
                    Contáctenos
                </button>

                <button type="button" class="btn btn-dark btn-sm mb-2" data-toggle="modal" data-target="#llamada_m">
                    Nosotros te llamamos
                </button>
                {{--<a href="" class="btn btn-dark">Nosotros te llamamos</a>--}}
            </div>
            <div class="col-12 col-sm text-center mb-4">
                <h3>Chatee ahora</h3>
                <p>Contacte mediante:</p>
                <a href="https://m.me/GOTOPERUcom/" class="btn btn-primary mb-2" target="_blank"><i class="fa fa-facebook"></i> Messenger</a>
                <a href="https://api.whatsapp.com/send?phone=51992051190" class="btn btn-success mb-2" target="_blank"><i class="fa fa-whatsapp"></i> Whatsapp</a>
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
    <div class="modal fade" id="contant_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contacte con nosotros</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Envié la información requerida y nos pondremos en contacto dentro de las 24 horas garantizado.</p>
                    <form id="c_form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="c_nombre">Nombres</label>
                            <input type="text" class="form-control" id="c_nombre" placeholder="Nombre completo">
                        </div>

                        <div class="form-group">
                            <label for="c_email">Email</label>
                            <input type="email" class="form-control" id="c_email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="c_comentario">Comentario</label>
                            <textarea id="c_comentario" class="form-control" cols="10" rows="3"></textarea>
                        </div>

                        <div class="alert alert-success alert-dismissible fade d-none" id="c_alert" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Muchas</strong> por contactar con GOTOPERU, un agente de viajes se pondrá en contacto con usted en las próximas 24 horas para ayudarle con la planificación de su viaje. :)
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-lg btn-block btn-g-green" id="c_send" type="button" onclick="contact()">Enviar
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </button>
                    <ul class="fa-ul pull-right d-none" id="loader3">
                        <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Enviando...</i></li>
                    </ul>
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



@yield('content')


{{--<section class="my-5 py-5 bg-light">--}}
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-6">--}}
                {{--sds--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}


<section class="my-5 py-5">
    <div class="container">

        <div class="row pb-5 justify-content-center">
            <div class="col-12 col-sm-8 col-md-8 col-lg-3">
                <img src="{{asset('images/logo-gotoperu.png')}}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/group.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Grupos de 6 a 14 pasajeros y/o paseos privados.
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/assistance.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Vivimos en el Peru, ofreciendo asistencia real las 24horas.
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/customize.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Elija programas prearmados o personalize vuestras vacaciones
                    </div>
                </div>
            </div>

            {{--<div class="w-100 py-4"></div>--}}
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/location.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Costos menores al ser una operadora local
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/trip.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Excelentes comentarios en Tripadvisor
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/departure.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Salidas Diarias para todos nuestros tours.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light d-none d-sm-block">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{asset("images/sponsor/logo-facebook.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-asta.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-newyorktimes.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-apotur.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-promperu.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-meetup.png")}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark">
    <img src="{{asset("images/footer.jpg")}}" alt="" class="w-100">
    <div class="container">
        <div class="row pt-4">
            <div class="col text-center text-white">
                <p>LAS MEJORES VACACIONES AL PERÚ CON EL MEJOR OPERADOR DE VIAJES</p>
                <p>&copy; GOTOPERU COMPANY</p>
            </div>
        </div>
    </div>
</footer>
{{--scripts--}}
<script src="{{asset("js/app.js")}}"></script>
@stack('scripts')
<div id="fb-root"></div>
<script>

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=1712869952328301';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function CrearEnlace(url) {
        location.href=url;
    }

</script>


    <script>
        //form
        function design(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

            $("#d_send").attr("disabled", true);

            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


            var s_destinations = document.getElementsByName('destinations[]');
            var $destinations = "";
            for (var i = 0, l = s_destinations.length; i < l; i++) {
                if (s_destinations[i].checked) {
                    $destinations += s_destinations[i].value+' , ';
                }
            }
            s_destinations = $destinations.substring(0,$destinations.length-3);

//                alert(s_destinations);

            var s_name = $('#d_name').val();
            var s_email = $('#d_email').val();
            var s_date = $('#d_date').val();
            var s_tel = $('#d_tel').val();
            var s_duration = $('#d_duration').val();
            var s_number = $('#d_numero').val();
            var s_other = $('#d_otros').val();


//                var s_comment = $('#d_comment').val();


            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#d_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#d_name').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }

            if(sendMail == "true"){
                var datos = {

                    "txt_destinations" : s_destinations,
                    "txt_other" : s_other,

                    "txt_name" : s_name,
                    "txt_email" : s_email,
                    "txt_date" : s_date,
                    "txt_tel" : s_tel,
                    "txt_duration" : s_duration,
                    "txt_number" : s_number

                };
                $.ajax({
                    data:  datos,
                    url:   "{{route('design_path')}}",
                    type:  'post',

                    beforeSend: function () {

                        $('#d_send').removeClass('show');
                        $("#d_send").addClass('d-none');

                        $("#loader2").removeClass('d-none');
                        $("#loader2").addClass('show');
                    },
                    success:  function (response) {
                        $('#d_form')[0].reset();
                        $('#d_send').removeClass('d-none');
                        $('#d_send').addClass('show');
                        $("#loader2").removeClass('show');
                        $("#loader2").addClass('d-none');
                        $('#d_alert').removeClass('d-none');
                        $("#d_alert").addClass('show');
                        $("#d_alert b").html(response);
                        $("#d_alert").fadeIn('slow');
                        $("#d_send").removeAttr("disabled");
                    }
                });
            } else{
                $("#d_send").removeAttr("disabled");
            }
        }


        function contact(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

            $("#c_send").attr("disabled", true);

            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


//                alert(s_destinations);

            var s_name = $('#c_nombre').val();
            var s_email = $('#c_email').val();
            var s_comentario = $('#c_comentario').val();


//                var s_comment = $('#d_comment').val();


            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#c_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#c_nombre').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }

            if(sendMail == "true"){
                var datos = {


                    "txt_name" : s_name,
                    "txt_email" : s_email,
                    "txt_comentario" : s_comentario,
                };
                $.ajax({
                    data:  datos,
                    url:   "{{route('contact_path')}}",
                    type:  'post',

                    beforeSend: function () {

                        $('#c_send').removeClass('show');
                        $("#c_send").addClass('d-none');

                        $("#loader3").removeClass('d-none');
                        $("#loader3").addClass('show');
                    },
                    success:  function (response) {
                        $('#c_form')[0].reset();
                        $('#c_send').removeClass('d-none');
                        $('#c_send').addClass('show');
                        $("#loader3").removeClass('show');
                        $("#loader3").addClass('d-none');
                        $('#c_alert').removeClass('d-none');
                        $("#c_alert").addClass('show');
                        $("#c_alert b").html(response);
                        $("#c_alert").fadeIn('slow');
                        $("#c_send").removeAttr("disabled");
                    }
                });
            } else{
                $("#c_send").removeAttr("disabled");
            }
        }

        function tel(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

            $("#t_send").attr("disabled", true);

            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;
//                alert(s_destinations);

            var s_name = $('#t_name').val();
            var s_email = $('#t_email').val();
            var s_city = $('#t_city').val();
            var s_tel = $('#t_tel').val();


            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#t_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }

            if (s_name.length == 0 ){
                $('#t_name').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }

            if (s_name.length == 0 ){
                $('#t_city').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#t_tel').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }


            if(sendMail == "true"){
                var datos = {

                    "txt_email" : s_email,
                    "txt_name" : s_name,
                    "txt_city" : s_city,
                    "txt_tel" : s_tel,
                };
                $.ajax({
                    data:  datos,
                    url:   "{{route('tel_path')}}",
                    type:  'post',

                    beforeSend: function () {

                        $('#t_send').removeClass('show');
                        $("#t_send").addClass('d-none');

                        $("#loader4").removeClass('d-none');
                        $("#loader4").addClass('show');
                    },
                    success:  function (response) {
                        $('#t_form')[0].reset();
                        $('#t_send').removeClass('d-none');
                        $('#t_send').addClass('show');
                        $("#loader4").removeClass('show');
                        $("#loader4").addClass('d-none');
                        $('#t_alert').removeClass('d-none');
                        $("#t_alert").addClass('show');
                        $("#t_alert b").html(response);
                        $("#t_alert").fadeIn('slow');
                        $("#t_send").removeAttr("disabled");
                    }
                });
            } else{
                $("#t_send").removeAttr("disabled");
            }
        }


        $('#d_date').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
        });
    </script>

    <!-- begin olark code -->
    <script type="text/javascript" async>
        ;(function(o,l,a,r,k,y){if(o.olark)return;
            r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0];
            y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r);
            y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)};
            y.extend=function(i,j){y("extend",i,j)};
            y.identify=function(i){y("identify",k.i=i)};
            y.configure=function(i,j){y("configure",i,j);k.c[i]=j};
            k=y._={s:[],t:[+new Date],c:{},l:a};
        })(window,document,"static.olark.com/jsclient/loader.js");
        / Add configuration calls below this comment /
        olark.identify('8407-174-10-8084');</script>
    <!-- end olark code -->
</body>
</html>