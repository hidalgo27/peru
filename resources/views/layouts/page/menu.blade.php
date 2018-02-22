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
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route('paquetes_path')}}">PAQUETES DE VIAJE</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route('destinations_path')}}">DESTINOS</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route('hoteles_path')}}">HOTELES</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route("about_path")}}">ACERCA DE NOSOTROS</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light d-none d-lg-inline" href="{{route('social_path')}}">RESPONSABILIDAD SOCIAL</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>