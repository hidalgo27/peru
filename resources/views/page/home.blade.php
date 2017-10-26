<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <link rel="stylesheet" href="{{mix("css/app.css")}}">

</head>
<body>
    <section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-2 position-relative">
                <div class="logo-goto position-absolute w-100 top-0 p-3 border rounded border-dark bg-dark">
                    <img src="{{asset('images/logo-goto-b.png')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col">
                <div class="row justify-content-end">
                    <div class="col-auto text-right my-2">
                        <a href="" class="btn btn-g-green btn-sm text-white"><i class="fa fa-commenting"></i> Chat</a>
                        <span class="mx-2">|</span>
                        <a href="" class="btn btn-g-yellow btn-sm text-white">INQUIRE NOW</a>
                        <a href="" class="text-white d-inline mx-1"><i class="fa fa-facebook"></i></a>
                        <a href="" class="text-white d-inline mx-1"><i class="fa fa-twitter"></i></a>
                        <a href="" class="text-white d-inline mx-1"><i class="fa fa-instagram"></i></a>
                        <a href="" class="text-white d-inline mx-1"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <nav class="nav nav-pills nav-fill bg-light rounded-right">
                            <a class="nav-item nav-link border text-dark" href="#">TOURS</a>
                            <a class="nav-item nav-link border text-dark" href="#">DESTINOS</a>
                            <a class="nav-item nav-link border text-dark" href="#">ACERCA DE NOSOTROS</a>
                            <a class="nav-item nav-link border text-dark disabled" href="#">RESPONSABILIDAD SOCIAL</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <header class="position-relative">
        <img src="{{asset('images/sliders/slider-1.jpg')}}" alt="" class="img-fluid">
        <div class="position-absolute bottom-0">
            <img src="{{asset('images/pce.png')}}" alt="" class="img-fluid">
        </div>
        <div class="position-absolute top-0 w-100">
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
    {{--<section class="bg-dark">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col">hola1</div>--}}
                {{--<div class="col">hola1</div>--}}
                {{--<div class="col">hola1</div>--}}
                {{--<div class="col">hola1</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Diseñe su viaje</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="" class="btn btn-g-green">Diseñe su viaje ahora</a>
                </div>
                <div class="col text-center border border-top-0 border-bottom-0">
                    <h3>Contacte con nosotros</h3>
                    <p>Telefono: <i class="fa fa-phone"></i> 9843585698</p>
                    <a href="" class="btn btn-g-yellow"><i class="fa fa-envelope"></i> Contactar Ahora</a>
                </div>
                <div class="col text-center">
                    <h3>Chatee ahora</h3>
                    <p>Contacte mediante:</p>
                    <a href="" class="btn btn-primary"><i class="fa fa-facebook"></i> Messenger</a>
                    <a href="" class="btn btn-success"><i class="fa fa-whatsapp"></i> Whatsapp</a>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-montserrat text-g-green">Tours a Machu Picchu Perú Agencia de Viajes y Turismo Machupicchu</h1>
                    <p class="h3 my-3 font-weight-bold ">Lorem elit. Accusamus asperiores commodi</p>
                    <p class="lead">L orem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad assumenda blanditiis consectetur cumque, debitis enim eveniet id <b>labore nam necessitatibus</b> repellat? Consectetur doloremque harum necessitatibus quis repellendus sit veniam.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-2">
        <div class="container">
            <div class="row justify-content-center alert-secondary no-gutters p-3 rounded">
                <div class="col-8">
                    <div class="row text-primary h5">
                        <div class="col"><a href="" class="text-secondary">Peru Ofertas</a></div>
                        <div class="col"><a href="" class="text-secondary">Trekking</a></div>
                        <div class="col"><a href="" class="text-secondary">Aventura</a></div>
                        <div class="col"><a href="" class="text-secondary">Tours Clásicos</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3 class="font-weight-bold">Perú Ofertas</h3>
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
                        <table class="table table-responsive border-0 m-0">
                            <thead class="thead-inverse">
                            {{--<tr>--}}
                                {{--<th>Nombre del Paquete</th>--}}
                                {{--<th>Destinos</th>--}}
                                {{--<th>Categoria</th>--}}
                                {{--<th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>--}}
                            {{--</tr>--}}
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="" class="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            <tr>
                                <td><a href="" class="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            <tr>
                                <td><a href="" class="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3 class="font-weight-bold mt-4">Perú Ofertas</h3>
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
                        <table class="table table-responsive border-0 m-0">
                            <thead class="thead-inverse">
                            {{--<tr>--}}
                            {{--<th>Nombre del Paquete</th>--}}
                            {{--<th>Destinos</th>--}}
                            {{--<th>Categoria</th>--}}
                            {{--<th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>--}}
                            {{--</tr>--}}
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="" class="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            <tr>
                                <td><a href="" class="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            <tr>
                                <td><a href="" class="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="font-weight-bold mt-4">Perú Ofertas</h3>
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
                        <table class="table table-responsive border-0 m-0">
                            <thead class="thead-inverse">
                            {{--<tr>--}}
                            {{--<th>Nombre del Paquete</th>--}}
                            {{--<th>Destinos</th>--}}
                            {{--<th>Categoria</th>--}}
                            {{--<th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>--}}
                            {{--</tr>--}}
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="" class="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            <tr>
                                <td><a href="" class="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            <tr>
                                <td><a href="" class="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            </tbody>
                        </table>
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




                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5 bg-light">
        <div class="container">

            <div class="row pb-5 justify-content-center">
                <div class="col-12 col-sm-8 col-md-8 col-lg-3">
                    <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid">
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
                            Grupos pequenos e passeios privados
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
                            Moramos no perú, porém oferecemos assistencia 24/7
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
                            Escolha de programas prontos para comprar ou personalizar suas férias
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
                            Custos menores, somos uma agencia local
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
                            Excelentes coméntarios na tripadvisor
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
                            Temos passeios todos os dias do ano
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--scripts--}}
    <script src="{{asset("js/app.js")}}"></script>

</body>
</html>