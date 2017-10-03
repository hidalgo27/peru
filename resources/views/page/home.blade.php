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
                        <p class="display-4 font-weight-normal m-0 mt-4">Visite Peru</p>
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
                <div class="col">

                </div>
                <div class="col">
                    <span class="display-3">846548455</span>
                    <a href="" class="btn btn-danger btn-block">Llame</a>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-montserrat text-g-yellow">Tours a Machu Picchu Perú Agencia de Viajes y Turismo Machupicchu</h1>
                    <p class="h3 my-3 font-weight-bold text-primary">Lorem elit. Accusamus asperiores commodi</p>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad assumenda blanditiis consectetur cumque, debitis enim eveniet id <b>labore nam necessitatibus</b> repellat? Consectetur doloremque harum necessitatibus quis repellendus sit veniam.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="m-4">
        <div class="container">
            <div class="row justify-content-center bg-light no-gutters p-3 rounded">
                <div class="col-8">
                    <div class="row text-primary h5">
                        <div class="col">Peru Ofertas</div>
                        <div class="col">Trekking</div>
                        <div class="col">Aventura</div>
                        <div class="col">Tours Clásicos</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header bg-info">
                            <p class="text-white m-0">Peru Ofertas</p>
                        </div>
                        {{--<div class="card-body">--}}
                            {{--<h4 class="card-title">Special title treatment</h4>--}}
                            {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                            {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}
                        <table class="table table-responsive m-0">
                            <thead class="thead-inverse">
                            <tr>
                                <th>Nombre del Paquete</th>
                                <th>Destinos</th>
                                {{--<th>Categoria</th>--}}
                                <th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            <tr>
                                <td><a href="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            <tr>
                                <td><a href="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header bg-info">
                            <p class="text-white m-0">Trekking</p>
                        </div>
                        {{--<div class="card-body">--}}
                        {{--<h4 class="card-title">Special title treatment</h4>--}}
                        {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}
                        <table class="table table-responsive m-0">
                            <thead class="thead-inverse">
                            <tr>
                                <th>Nombre del Paquete</th>
                                <th>Destinos</th>
                                {{--<th>Categoria</th>--}}
                                <th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            <tr>
                                <td><a href="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header bg-info">
                            <p class="text-white m-0">Aventura</p>
                        </div>
                        {{--<div class="card-body">--}}
                        {{--<h4 class="card-title">Special title treatment</h4>--}}
                        {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}
                        <table class="table table-responsive m-0">
                            <thead class="thead-inverse">
                            <tr>
                                <th>Nombre del Paquete</th>
                                <th>Destinos</th>
                                {{--<th>Categoria</th>--}}
                                <th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="">7 Dias Peru Machu Picchu Especial</a></td>
                                <td>Lima, Cusco, Machu Picchu, Puno, Titicaca</td>
                                {{--<td>Clasico</td>--}}
                                <td class="font-montserrat"><sup>$</sup><b>1500</b><small>USD</small></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>

                    <div class="embed-responsive embed-responsive-16by9 my-4">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{--scripts--}}
    <script src="{{asset("js/app.js")}}"></script>

</body>
</html>