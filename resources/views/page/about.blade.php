@extends('layouts.page.default')
@section('content')

    <header class="header-video-default position-relative">
        @include('layouts.page.menu')
        <div id="overlay" class="overlay-img">
            <img src="{{asset('images/about.jpg')}}" alt="" id="hero-vid">
        </div>
        <div class="position-absolute bottom-n-1">
            <img src="{{asset('images/pce.png')}}" alt="" class="img-fluid">
        </div>

        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center">
                    <div class="col text-center">
                        <h3 class="text-white text-center h1">ACERCA DE NOSOTROS</h3>
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
                    {{Breadcrumbs::render('about')}}
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-g-yellow">QUIÉNES SOMOS Y POR QUÉ AMAMOS VIAJAR</h1>
                    {{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0 lead text-secondary text-center"><b>En GOTOPERU creemos en la excelencia, seguridad, atención personalizada y calidad de los servicios, es nuestro compromiso para con nuestros pasajeros. Por eso, nos esforzamos en satisfacer las necesidades de nuestros clientes al máximo.</b></p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-3 bg-white">
        <div class="container">

            <div class="row no-gutters align-items-center bg-light">

                <div class="col-12 col-md p-4">
                    <h3 class="align-middle">NUESTRO COMPROMISO</h3>
                    <p class="align-middle">No dejar escapar la oportunidad de que nuestros turistas descubran los encantos de Perú y vivir una aventura inolvidable.</p>
                </div>

                <div class="col-12 col-md p-4">
                    <h3 class="align-middle">MISIÓN</h3>
                    <p class="align-middle">Ofrecer a nuestros clientes los mejores recursos peruanos para una aventura inolvidable.</p>
                </div>
            </div>
            <div class="row w-100 no-gutters align-items-center bg-light">


                <div class="col-12 col-md">
                    <img src="{{asset('images/about/about-l.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row w-100 no-gutters align-items-center bg-dark">
                <div class="col text-white text-center">
                    <div class="row justify-content-center">
                        <div class="col-2 my-3">
                            <img src="{{asset('images/logo-goto-b.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12">
                        <p>La filosofía de GOTOPERU se creó de un principio muy simple: "Hacer todas las cosas correctas, tanto para nuestros pasajeros así con nuestro equipo."</p>
                    </div>
                </div>
            </div>
            <div class="row bg-g-yellow no-gutters">
                <div class="col p-5 text-center">
                    <h3>Andes Viajes fue fundada con el fin de hacer un sueño personal:</h3>
                    <p>"Proveer inolvidables y diferentes experiencias para su viaje al Perú, proporcionando un servicio de primera clase para toda la comunidad internacional. Y con ello, generar nuevas oportunidades de empleo local en el área de turismo en Perú.</p>
                </div>
            </div>
            <div class="row no-gutters align-items-center bg-light">
                <div class="col-12 col-md p-5">
                    <p class="lead font-weight-normal">Ayudar a los pasajeros a elegir el viaje perfecto a la tierra de los Incas, con el fin de que tengan una hermosa experiencia, desde los Andes hasta el Amazonas, saldremos de nuestra rutina para asegurar una experiencia de viaje diferente, todo lo que usted imaginó.</p>
                </div>

                <div class="col-12 col-md-auto">
                    <img src="{{asset('images/about/about-j.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/about/about-n.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row bg-dark no-gutters align-items-center py-5">

                <div class="col text-white text-justify">
                    <div class="row justify-content-center">
                        <div class="col-3 mb-4">
                            <img src="{{asset('images/logo-goto-b.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col">
                        <p class="lead">"GOTOPERU" fue fundada para realizar un sueño personal: "Proporcionar experiencia de primera clase a la comunidad internacional, y generando oportunidades de empleo a nivel local". Es sumamente gratificante emplear y premiar a personas que demuestran esfuerzo, entusiasmo y compromiso de compartir lo mejor de Perú y América del Sur con el resto del mundo. "GOTOPERU" se ha convertido en una familia para todos nosotros. La mejor cosa de trabajar en los viajes de los Andes es que me obliga a estar conectado permanentemente con el mundo del arte, la cultura, la arqueología, la geografía, la conservación de la vida silvestre, y la cocina. Por esta razón, esto me ayuda a entender más del mundo de los viajes y formular nuevos métodos que garantizan memorables experiencias de viaje de nuestros clientes. Es maravilloso interactuar con personas increíbles de todo el mundo a diario.</p>
                    </div>
                </div>

            </div>
            <div class="row my-4">
                <div class="col-12 col-sm my-3">
                    <div class="card text-white">
                        <img class="card-img-top" src="{{asset('images/about/about-o.jpg')}}" alt="Card image cap">
                        <div class="card-body text-center bg-dark">
                            <p class="card-text"><span class="h4">PAUL CATANO</span> <small class="d-block">Director & Fundador</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm my-3">
                    <div class="card bg-light">
                        <img class="card-img-top" src="{{asset('images/about/about-u.jpg')}}" alt="Card image cap">
                        <div class="card-body text-center">
                            <p class="card-text"><span class="h4">MARTIN CATANO</span> <small class="d-block">Director General</small></p>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="row box-more py-5">--}}
            {{--<div class="col">--}}
            {{--sdsdsd--}}
            {{--</div>--}}
            {{--</div>--}}


        </div>
    </section>

@stop