@extends('layouts.page.default')
@section('content')



    <section class="my-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="text-secondary pt-3">PORQUE NOS IMPORTA</h2>
                    <p class="h2 text-secondary pt-3">Retribuimos a nuestras comunidades</p>
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col text-justify">
                    {{--<blockquote class="blockquote text-center alert-primary py-3">--}}
                        {{--<p class="mb-0">En GOTOPERU creemos en la excelencia, seguridad, atención personalizada y calidad de los servicios, es nuestro compromiso para con nuestros pasajeros. Por eso, nos esforzamos en satisfacer las necesidades de nuestros clientes al máximo.</p>--}}
                        {{--<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
                    {{--</blockquote>--}}
                    <p class="lead">Chaullacota se ubica a 15,000 alimentaciones (4500 mts) 2 horas al noroeste de cusco.</p>
                    <p class="lead">GOTOPERU equipo niños de la comunidad de Cusco chaullacohca GotoPeru. Responsabilidad social con niños de la comunidad de Cusco chaullacohca.</p>
                    <p class="lead">En GOTOPERU estamos comprometidos a hacer negocios de una manera que realmente le devuelva a nuestras comunidades parte de nuestras ganancias especialmente a comunidades  ubicadas en lugares remotos. Nuestra planificación y ejecución de uno de nuestros viajes implica una larga cadena de suministro: desde guías y operadores locales hasta proveedores de transporte, hoteles y restaurantes, interactuamos con muchas organizaciones en diferentes lugares, pero también sabemos que algunas comunidades especialmente ubicadas arriba de los Andes a más de 15,000 pies que debido al difícil acceso, no reciben la asistencia que merecen, es por eso que organizamos periódicamente viajes a comunidades tan lejanas para traerles especialmente suéteres y juguetes para niños.</p>

                </div>

            </div>
        </div>
    </section>
    
    
    <section class="my-5">
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