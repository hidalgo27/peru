<?php

namespace App\Http\Controllers;

use App\TCategoria;
use App\TDestino;
use App\THotel;
use App\THotelDestino;
use App\TPaquete;
use App\TPaqueteDestino;
use App\TTour;
use App\TTourDestino;
use App\TTraslado;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $tours = TTour::with('tours_destinos')->get();
        $tours_destinos = TTourDestino::with('destinos')->get();
        $traslado = TTraslado::all();

        SEOMeta::setTitle('Agencia de Viajes en Peru | Tours Machu Picchu');
        SEOMeta::setDescription('Paquetes de viaje a Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
        SEOMeta::setCanonical('http://gotoperu.com.pe/');
        SEOMeta::addKeyword(['paquetes de viaje a peru', 'tours a peru', 'peru tours', 'viajes a machu picchu', 'vacaiones en peru', 'paquetes de vacaiones en peru', 'ofertas para machu picchu', 'ofertas de viaje a peru', 'paquetes turisticos a Machu Picchu', 'personalizar paquetes de viaje en peru', 'solo tours en peru']);

        OpenGraph::setDescription('Paquetes de viaje a Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
        OpenGraph::setTitle('Agencia de Viajes en Peru | Tours Machu Picchu');
        OpenGraph::setUrl('http://gotoperu.com.pe/');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/sliders/cusco.jpg']);
        OpenGraph::setSiteName('Paquetes de Viaje a Perú');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Agencia de Viajes en Peru | Tours Machu Picchu');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/sliders/cusco.jpg');


        return view('page.home', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'categoria'=>$categoria, 'tours'=>$tours, 'tours_destinos'=>$tours_destinos, 'traslado'=>$traslado]);
    }

    public function tours()
    {
        $tours = TTour::with('tours_destinos')->get();
        $tours_destinos = TTourDestino::with('destinos')->get();


        SEOMeta::setTitle('Tours a Machu Picchu Perú | Tours en Perú');
        SEOMeta::setDescription('Tours de un día a más en Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/peru-tours');
        SEOMeta::addKeyword(['tours de un dia en peru', 'tours en peru', 'peru tours', 'viajes a machu picchu']);

        OpenGraph::setDescription('Tours de un día a más en Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
        OpenGraph::setTitle('Tours a Machu Picchu Perú | Tours en Perú');
        OpenGraph::setUrl('http://gotoperu.com.pe/peru-tours');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/destinations/machu-picchu.jpg']);
        OpenGraph::setSiteName('Tours en Perú');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Tours a Machu Picchu Perú | Tours en Perú');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/destinations/machu-picchu.jpg');


        return view('page.tours', ['tours'=>$tours, 'tours_destinos'=>$tours_destinos]);
    }

    public function paquetes()
    {
        SEOMeta::setTitle('Paquetes de Viajes en Perú | Tours en Perú');
        SEOMeta::setDescription('Paquetes de viaje y tours en Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/');
        SEOMeta::addKeyword(['paquetes de viaje a peru', 'tours a peru', 'peru tours', 'viajes a machu picchu', 'vacaiones en peru', 'paquetes de vacaiones en peru', 'ofertas para machu picchu', 'ofertas de viaje a peru', 'paquetes turisticos a Machu Picchu', 'personalizar paquetes de viaje en peru', 'solo tours en peru']);

        OpenGraph::setDescription('Paquetes de viaje y tours en Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
        OpenGraph::setTitle('Paquetes de Viajes en Perú | Tours en Perú');
        OpenGraph::setUrl('http://gotoperu.com.pe/paquetes-de-viaje-peru');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/sliders/cusco.jpg']);
        OpenGraph::setSiteName('Paquetes de viaje a Perú');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Paquetes de Viajes en Perú | Tours en Perú');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/sliders/cusco.jpg');

        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.packages', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'categoria'=>$categoria]);
    }

    public function destinations()
    {
        SEOMeta::setTitle('Destinos Turísticos en Perú | Perú Destinos');
        SEOMeta::setDescription('Destinos turísticos en Perú organizado con un auténtico operador peruano, con viajes en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/');
        SEOMeta::addKeyword(['detinos de viaje a peru', 'turismo en  peru', 'destinos de viaje en peru', 'viajes a machu picchu', 'vacaiones en peru']);

        OpenGraph::setDescription('Destinos turísticos en Perú organizado con un auténtico operador peruano, con viajes en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
        OpenGraph::setTitle('Destinos Turísticos en Perú | Perú Destinos');
        OpenGraph::setUrl('http://gotoperu.com.pe/destinos-peru');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/destinations/puno.jpg']);
        OpenGraph::setSiteName('destinos de viaje en perú');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Destinos Turísticos en Perú | Perú Destinos');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/destinations/puno.jpg');

        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $destinos = TDestino::get();

        $tours = TTour::with('tours_destinos')->get();
        $tours_destinos = TTourDestino::with('destinos')->get();

        return view('page.destinations', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'categoria'=>$categoria, 'destinos'=>$destinos, 'tours'=>$tours, 'tours_destinos'=>$tours_destinos]);
    }
    public function destinations_show($title)
    {
        SEOMeta::setTitle('Paquetes y Tours en '.str_replace('-',' ', ucwords(strtolower($title))).' | Perú Destinos');
        SEOMeta::setDescription('Destinos turísticos en '.str_replace('-',' ', ucwords(strtolower($title))).' organizado con un auténtico operador peruano, con viajes en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/');
        SEOMeta::addKeyword(['detinos de viaje a peru', 'turismo en  peru', 'destinos de viaje en peru', 'viajes a machu picchu', 'vacaiones en peru']);

        OpenGraph::setDescription('Destinos turísticos en '.str_replace('-',' ', ucwords(strtolower($title))).' organizado con un auténtico operador peruano, con viajes en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.');
        OpenGraph::setTitle('Paquetes y Tours en '.str_replace('-',' ', ucwords(strtolower($title))).' | Perú Destinos');
        OpenGraph::setUrl('http://gotoperu.com.pe/destinos-peru/'.strtolower($title).'');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/destinations/'.strtolower($title).'.jpg']);
        OpenGraph::setSiteName('destino perú: '.str_replace('-',' ', ucwords(strtolower($title))).'');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Paquetes y Tours en '.str_replace('-',' ', ucwords(strtolower($title))).' | Perú Destinos');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/destinations/'.strtolower($title).'.jpg');

        $destinations = str_replace('-', ' ', ucwords(strtolower($title)));

        $destinos = TDestino::get();
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquetes_de = TPaqueteDestino::with(['destinos'=>function($query) use ($destinations) { $query->where('nombre', $destinations);}])->get();


        $destination = str_replace('-', ' ', $title);

        $tours = TTour::with('tours_destinos')->get();
        $tours_destinos = TTourDestino::with(['destinos'=>function($query) use ($destinations) { $query->where('nombre', $destinations);}])->get();


//        dd($paquetes_de);
        return view('page.destinations-show', ['paquetes_de'=>$paquetes_de, 'paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'destinos'=>$destinos, 'title'=>$destinations, 'destination'=>$destination, 'tours'=>$tours, 'tours_destinos'=>$tours_destinos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($titulo)
    {
        SEOMeta::setTitle('Paquete de Viaje: '.str_replace('-',' ', ucwords(strtolower($titulo))).' | GotoPeru');
        SEOMeta::setDescription('Nuestro paquete de viaje '.str_replace('-',' ', ucwords(strtolower($titulo))).' organizado con un auténtico operador peruano.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/');
        SEOMeta::addKeyword(['detinos de viaje a peru', 'turismo en  peru', 'destinos de viaje en peru', 'viajes a machu picchu', 'vacaiones en peru']);

        OpenGraph::setDescription('Nuestro paquete de viaje '.str_replace('-',' ', ucwords(strtolower($titulo))).' organizado con un auténtico operador peruano.');
        OpenGraph::setTitle('Paquete de Viaje: '.str_replace('-',' ', ucwords(strtolower($titulo))).' | GotoPeru');
        OpenGraph::setUrl('http://gotoperu.com.pe/paquetes-de-viaje-peru/'.strtolower($titulo).'');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/sliders/cusco.jpg']);
        OpenGraph::setSiteName('Paquete de Viaje: '.str_replace('-',' ', ucwords(strtolower($titulo))).'');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Paquetes y Tours en '.str_replace('-',' ', ucwords(strtolower($titulo))).' | Perú Destinos');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/sliders/cusco.jpg');

        $title = str_replace('-', ' ', strtoupper($titulo));

        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquete_iti = TPaquete::with('itinerario','paquetes_destinos', 'precio_paquetes')->where('titulo', $title)->get();

        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();

        return view('page.itinerary', ['title'=>$title, 'paquete_iti'=>$paquete_iti, 'paquete_destinos'=>$paquete_destinos, 'paquete'=>$paquete,'hoteles'=>$hoteles, 'hoteles_destinos'=>$hoteles_destinos]);
    }

    public function sin_hotel($titulo)
    {
        SEOMeta::setTitle('Paquete de Viaje: '.str_replace('-',' ', ucwords(strtolower($titulo))).' | GotoPeru');
        SEOMeta::setDescription('Nuestro paquete de viaje '.str_replace('-',' ', ucwords(strtolower($titulo))).' organizado con un auténtico operador peruano.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/paquetes-de-viaje-peru/');
        SEOMeta::addKeyword(['detinos de viaje a peru', 'turismo en  peru', 'destinos de viaje en peru', 'viajes a machu picchu', 'vacaiones en peru']);

        OpenGraph::setDescription('Nuestro paquete de viaje '.str_replace('-',' ', ucwords(strtolower($titulo))).' organizado con un auténtico operador peruano.');
        OpenGraph::setTitle('Paquete de Viaje: '.str_replace('-',' ', ucwords(strtolower($titulo))).' | GotoPeru');
        OpenGraph::setUrl('http://gotoperu.com.pe/paquetes-de-viaje-peru/'.strtolower($titulo).'/sin-hotel');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/sliders/cusco.jpg']);
        OpenGraph::setSiteName('Paquete de viaje: '.str_replace('-',' ', ucwords(strtolower($titulo))).'');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Paquetes y Tours en '.str_replace('-',' ', ucwords(strtolower($titulo))).' | Perú Destinos');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/sliders/cusco.jpg');

        $title = str_replace('-', ' ', strtoupper($titulo));
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquete_iti = TPaquete::with('itinerario','paquetes_destinos', 'precio_paquetes')->where('titulo', $title)->get();




        return view('page.itinerary-sin-hotel', ['title'=>$title, 'paquete_iti'=>$paquete_iti, 'paquete_destinos'=>$paquete_destinos, 'paquete'=>$paquete]);
    }

    public function itinerario_tours($titulo)
    {
        $title = str_replace('-', ' ', strtoupper($titulo));

        $tours_a = TTour::with('tours_destinos')->get();
        $tours = TTour::with('tours_destinos')->where('titulo', $title)->get();
        $tours_destinos = TTourDestino::with('destinos')->get();

        SEOMeta::setTitle('Tours en Perú: '.str_replace('-',' ', ucwords(strtolower($titulo))).' | GotoPeru');
        SEOMeta::setDescription('Nuestro tours '.str_replace('-',' ', ucwords(strtolower($titulo))).' organizado con un auténtico operador peruano.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/paquetes-de-viaje-peru');
        SEOMeta::addKeyword(['detinos de viaje a peru', 'turismo en  peru', 'destinos de viaje en peru', 'viajes a machu picchu', 'vacaiones en peru']);

        OpenGraph::setDescription('Nuestro tours '.str_replace('-',' ', ucwords(strtolower($titulo))).' organizado con un auténtico operador peruano.');
        OpenGraph::setTitle('Paquete de Viaje: '.str_replace('-',' ', ucwords(strtolower($titulo))).' | GotoPeru');
        OpenGraph::setUrl('http://gotoperu.com.pe/peru-tours/'.strtolower($titulo).'');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/sliders/cusco.jpg']);
        OpenGraph::setSiteName('Tours en Perú: '.str_replace('-',' ', ucwords(strtolower($titulo))).'');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Tours en '.str_replace('-',' ', ucwords(strtolower($titulo))).' | Perú Destinos');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/sliders/cusco.jpg');

        return view('page.itinerary-tours', ['title'=>$title, 'tours'=>$tours, 'tours_destinos'=>$tours_destinos, 'tours_a'=>$tours_a]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function about()
    {
        SEOMeta::setTitle('Acerca de Nosotros | GotoPeru');
        SEOMeta::setDescription('Somos especialistas en viajes y tours en Perú, creemos que la calidad de servicio y nuestra experiencia hará de su viaje a Perú una experiencia inolvidable.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/');
        SEOMeta::addKeyword(['hoteles en peru', 'reserva de hoteles en peru', 'hoteles baratos en peru', 'hoteles en machu pichu', 'hoteles en cusco']);

        OpenGraph::setDescription('Somos especialistas en viajes y tours en Perú, creemos que la calidad de servicio y nuestra experiencia hará de su viaje a Perú una experiencia inolvidable.');
        OpenGraph::setTitle('Acerca de Nosotros | GotoPeru');
        OpenGraph::setUrl('http://gotoperu.com.pe/acerca-de-nosotros');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/about.jpg']);
        OpenGraph::setSiteName('Acerca de Nosotros');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Acerca de Nosotros | GotoPeru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/about.jpg');

        return view('page.about');
    }

    public function social()
    {
        SEOMeta::setTitle('Responsabilidad Social | GotoPeru');
        SEOMeta::setDescription('Nos hacemos cargo de personas y comunidades alejadas en Perú, el apoyo social es organizado por nuestro equipo, destinando parte de nuestras ganancias para los que más lo necesitan.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/');
//        SEOMeta::addKeyword(['hoteles en peru', 'reserva de hoteles en peru', 'hoteles baratos en peru', 'hoteles en machu pichu', 'hoteles en cusco']);

        OpenGraph::setDescription('Nos hacemos cargo de personas y comunidades alejadas en Perú, el apoyo social es organizado por nuestro equipo, destinando parte de nuestras ganancias para los que más lo necesitan.');
        OpenGraph::setTitle('Responsabilidad Social | GotoPeru');
        OpenGraph::setUrl('http://gotoperu.com.pe/responsabilidad-social');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/social.jpg']);
        OpenGraph::setSiteName('Responsabilidad Social');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Responsabilidad Social | GotoPeru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/social.jpg');

        return view('page.social');
    }
    public function hoteles()
    {
        SEOMeta::setTitle('Hoteles en Perú | GotoPeru');
        SEOMeta::setDescription('Nuestro equipo puede reservar cualquier hotel en Perú. Explore nuestras mejores opciones de alojamiento en Machu Picchu, Cusco, Arequipa, Lago Titicaca y más.');
//        SEOMeta::setCanonical('http://gotoperu.com.pe/');
        SEOMeta::addKeyword(['hoteles en peru', 'reserva de hoteles en peru', 'hoteles baratos en peru', 'hoteles en machu pichu', 'hoteles en cusco']);

        OpenGraph::setDescription('Nuestro equipo puede reservar cualquier hotel en Perú. Explore nuestras mejores opciones de alojamiento en Machu Picchu, Cusco, Arequipa, Lago Titicaca y más.');
        OpenGraph::setTitle('Hoteles en Perú | GotoPeru');
        OpenGraph::setUrl('http://gotoperu.com.pe/hoteles-peru');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/hotels.jpg']);
        OpenGraph::setSiteName('Hoteles en Perú');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Hoteles en Perú | GotoPeru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/hotels.jpg');

        $hoteles = THotel::all();
        return view('page.hotels', ['hoteles'=>$hoteles]);
    }
    public function transfer($titulo)
    {
        SEOMeta::setTitle('Transportes en Perú | GotoPeru');
        SEOMeta::setDescription('Tenemos una variedad de servicios de transporte compartido o privado a los mejores precios.');
        SEOMeta::setCanonical('http://gotoperu.com.pe/traslados');
//        SEOMeta::addKeyword(['hoteles en peru', 'reserva de hoteles en peru', 'hoteles baratos en peru', 'hoteles en machu pichu', 'hoteles en cusco']);

        OpenGraph::setDescription('Tenemos una variedad de servicios de transporte compartido o privado a los mejores precios.');
        OpenGraph::setTitle('Transportes en Perú | GotoPeru');
        OpenGraph::setUrl('http://gotoperu.com.pe/traslados');
        OpenGraph::addImages(['url'=>'http://gotoperu.com.pe/images/destinations/puno.jpg']);
        OpenGraph::setSiteName('Transportes en Perú');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Transportes en Perú | GotoPeru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('http://gotoperu.com.pe/images/destinations/puno.jpg');

        $title = str_replace('-', ' ', strtoupper($titulo));
        $transfer = TTraslado::where('titulo', $title)->get();
        return view('page.transfer', ['transfer'=>$transfer, 'title'=>$title]);
    }

    public function design()
    {
        $from = 'doriam@gotoperu.com';
        $from2 = 'emails.gotoperu@gmail.com';

        $destinations = $_POST['txt_destinations'];
        $other = $_POST['txt_other'];

        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $date = $_POST['txt_date'];
        $tel = $_POST['txt_tel'];
        $duration = $_POST['txt_duration'];
        $number = $_POST['txt_number'];
//        $comment = $_POST['txt_comment'];


        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru');
            });


            Mail::send(['html' => 'notifications.page.admin-form-design'], [
                'destinations' => $destinations,
                'other' => $other,
                'duration' => $duration,
                'number' => $number,
                'date' => $date,
                'name' => $name,
                'email' => $email,
                'tel' => $tel
//                'comment' => $comment
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'GotoPeru ES')
                    ->subject('GotoPeru ES')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru ES');
            });


            Mail::send(['html' => 'notifications.page.admin-form-design'], [
                'destinations' => $destinations,
                'other' => $other,
                'duration' => $duration,
                'number' => $number,
                'date' => $date,
                'name' => $name,
                'email' => $email,
                'tel' => $tel
//                'comment' => $comment
            ], function ($messaje) use ($from2) {
                $messaje->to($from2, 'GotoPeru ES')
                    ->subject('GotoPeru ES')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru ES');
            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }

    public function contact()
    {
        $from = 'doriam@gotoperu.com';
        $from2 = 'emails.gotoperu@gmail.com';

        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $comment = $_POST['txt_comentario'];


        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru');
            });


            Mail::send(['html' => 'notifications.page.admin-from-contact'], [
                'name' => $name,
                'email' => $email,
                'comment' => $comment
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'GotoPeru ES')
                    ->subject('GotoPeru ES')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru ES');
            });


            Mail::send(['html' => 'notifications.page.admin-from-contact'], [
                'name' => $name,
                'email' => $email,
                'comment' => $comment
//                'comment' => $comment
            ], function ($messaje) use ($from2) {
                $messaje->to($from2, 'GotoPeru ES')
                    ->subject('GotoPeru ES')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru ES');
            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }

    public function tel()
    {
        $from = 'doriam@gotoperu.com';
        $from2 = 'emails.gotoperu@gmail.com';

        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $city = $_POST['txt_city'];
        $tel = $_POST['txt_tel'];


        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru');
            });


            Mail::send(['html' => 'notifications.page.admin-form-tel'], [
                'name' => $name,
                'email' => $email,
                'city' => $city,
                'tel' => $tel
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'GotoPeru ES')
                    ->subject('GotoPeru ES')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru ES');
            });


            Mail::send(['html' => 'notifications.page.admin-form-tel'], [
                'name' => $name,
                'email' => $email,
                'city' => $city,
                'tel' => $tel
            ], function ($messaje) use ($from2) {
                $messaje->to($from2, 'GotoPeru ES')
                    ->subject('GotoPeru ES')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru ES');
            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }


    public function inquire()
    {
        $from = 'doriam@gotoperu.com';
        $from2 = 'emails.gotoperu@gmail.com';

        $accommodation = $_POST['txt_accommodation'];
        $number = $_POST['txt_number'];

        $date = $_POST['txt_date'];
        $tel = $_POST['txt_tel'];
        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $package = $_POST['txt_package'];

        $comment = $_POST['txt_comment'];


        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('GotoPeru ES')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru ES');
            });


            Mail::send(['html' => 'notifications.page.admin-form-inquire'], [
                'accommodation' => $accommodation,
                'number' => $number,

                'date' => $date,
                'tel' => $tel,
                'name' => $name,
                'email' => $email,
                'package' => $package,
                'comment' => $comment
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'GotoPeru ES')
                    ->subject('GotoPeru ES')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru ES');
            });


            Mail::send(['html' => 'notifications.page.admin-form-inquire'], [
                'accommodation' => $accommodation,
                'number' => $number,

                'date' => $date,
                'tel' => $tel,
                'name' => $name,
                'email' => $email,
                'package' => $package,
                'comment' => $comment
            ], function ($messaje) use ($from2) {
                $messaje->to($from2, 'GotoPeru ES')
                    ->subject('GotoPeru ES')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com.pe', 'GotoPeru ES');
            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }


}
