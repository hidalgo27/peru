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
                    <a href="/"><img src="{{asset('images/logo-goto-b.png')}}" alt="" class="img-fluid"></a>
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
                <a href="" class="btn btn-g-yellow">Contáctenos</a>
                <a href="" class="btn btn-dark">Nosotros te llamamos</a>
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




@yield('content')


<section class="my-5 py-5">
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

<section class="py-4 bg-light">
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

<footer>
    <img src="{{asset("images/footer.jpg")}}" alt="" class="w-100">
</footer>
{{--scripts--}}
<script src="{{asset("js/app.js")}}"></script>

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

</body>
</html>