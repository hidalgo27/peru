@extends('layouts.page.default')
@section('content')

    <header class="header-video-default position-relative">
        @include('layouts.page.menu')
        <div id="overlay" class="overlay-img">
            <img src="{{asset('images/social.jpg')}}" alt="" id="hero-vid">
        </div>
        <div class="position-absolute bottom-n-1">
            <img src="{{asset('images/pce.png')}}" alt="" class="img-fluid">
        </div>

        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center">
                    <div class="col text-center">
                        <h3 class="text-white text-center h1">RESPONSABILIDAD SOCIAL</h3>
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

    <section class="bg-white m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    {{Breadcrumbs::render('social')}}
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-g-yellow">PORQUE NOS IMPORTA</h1>
                    <p class="h2 text-secondary">Retribuimos a nuestras comunidades</p>
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {{--<blockquote class="blockquote text-center alert-primary py-3">--}}
                        {{--<p class="mb-0">En GOTOPERU creemos en la excelencia, seguridad, atención personalizada y calidad de los servicios, es nuestro compromiso para con nuestros pasajeros. Por eso, nos esforzamos en satisfacer las necesidades de nuestros clientes al máximo.</p>--}}
                        {{--<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
                    {{--</blockquote>--}}
                    <p class="lead text-center"><b>Chaullacota se ubica a 15,000 alimentaciones (4500 mts) 2 horas al noroeste de cusco.</b></p>
                    <div class="alert alert-primary" role="alert">
                        <p class="lead text-center"><b>El equipo de GOTOPERU se identifica con los niños de la comunidad de chaullacohca - Cusco. Tenemos en claro nuestra responsabilidad social con los niños de la comunidad de Chaullacohca-Cusco.</b></p>
                    </div>
                    <p class="lead"><b>En GOTOPERU estamos comprometidos a hacer negocios de una manera que realmente le devuelva a nuestras comunidades parte de nuestras ganancias especialmente a comunidades  ubicadas en lugares remotos. Nuestra planificación y ejecución de uno de nuestros viajes implica una larga cadena de suministro: desde guías y operadores locales hasta proveedores de transporte, hoteles y restaurantes, interactuamos con muchas organizaciones en diferentes lugares, pero también sabemos que algunas comunidades especialmente ubicadas arriba de los Andes a más de 15,000 pies que debido al difícil acceso, no reciben la asistencia que merecen, es por eso que organizamos periódicamente viajes a comunidades tan lejanas para traerles especialmente suéteres y juguetes para niños.</b></p>

                </div>

            </div>
        </div>
    </section>
    
    
    <section class="py-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset('images/social/care2.jpg')}}" alt="" class="w-100 rounded">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <img src="{{asset('images/social/care1.jpg')}}" alt="" class="w-100 rounded">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <img src="{{asset('images/social/care3.jpg')}}" alt="" class="w-100 rounded">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <img src="{{asset('images/social/care4.jpg')}}" alt="" class="w-100 rounded">
                </div>
            </div>
        </div>
    </section>
@stop