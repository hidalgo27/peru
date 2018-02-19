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
                        <h3 class="text-white text-center h1">ACERCA DE NOSOTROS</h3>
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


                <div class="col-12 col-md-auto d-sm-none d-md-none d-lg-inline">
                    <img src="{{asset('images/about/about12.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row w-100 no-gutters align-items-center bg-light">
                <div class="col-12 col-md-auto d-none d-sm-inline">
                    <img src="{{asset('images/about/about28.jpg')}}" alt="" class="img-fluid d-sm-none d-md-none d-lg-inline">
                </div>


                <div class="col-12 col-md-auto">
                    <img src="{{asset('images/about/about6.jpg')}}" alt="" class="img-fluid">
                </div>

                <div class="col-12 col-md">
                    <div class="border-0 p-2 text-center">
                        <h3 class="text-primary">MISIÓN</h3>
                        <p>Ofrecer a nuestros clientes los mejores recursos peruanos para una aventura inolvidable.</p>
                    </div>
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