<?php

namespace App\Http\Controllers;

use App\TCategoria;
use App\TDestino;
use App\THotel;
use App\TPaquete;
use App\TPaqueteDestino;
use App\TTour;
use App\TTourDestino;
use App\TTraslado;
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

        return view('page.home', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'categoria'=>$categoria, 'tours'=>$tours, 'tours_destinos'=>$tours_destinos, 'traslado'=>$traslado]);
    }

    public function tours()
    {
        $tours = TTour::with('tours_destinos')->get();
        $tours_destinos = TTourDestino::with('destinos')->get();
        return view('page.tours', ['tours'=>$tours, 'tours_destinos'=>$tours_destinos]);
    }

    public function paquetes()
    {
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.packages', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'categoria'=>$categoria]);
    }

    public function destinations()
    {
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
        $title = str_replace('-', ' ', strtoupper($titulo));

        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquete_iti = TPaquete::with('itinerario','paquetes_destinos', 'precio_paquetes')->where('titulo', $title)->get();

        return view('page.itinerary', ['title'=>$title, 'paquete_iti'=>$paquete_iti, 'paquete_destinos'=>$paquete_destinos, 'paquete'=>$paquete]);
    }

    public function sin_hotel($titulo)
    {
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
        return view('page.about');
    }

    public function social()
    {
        return view('page.social');
    }
    public function hoteles()
    {
        $hoteles = THotel::all();
        return view('page.hotels', ['hoteles'=>$hoteles]);
    }
    public function transfer($titulo)
    {
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
