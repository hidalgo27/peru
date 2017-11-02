<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home_path',
]);

//paquetes
Route::get('/tours', [
    'uses' => 'HomeController@tours',
    'as' => 'tours_path',
]);

//paquetes
Route::get('/destinos-peru', [
    'uses' => 'HomeController@destinations',
    'as' => 'destinations_path',
]);

Route::get('/destinos-peru/{titulo}', [
    'uses' => 'HomeController@destinations_show',
    'as' => 'destinations_show_path',
]);

//detail promgram
Route::get('/paquete/{titulo}', [
    'uses' => 'HomeController@show',
    'as' => 'home_show_path',
]);
//nosotros
Route::get('/acerca-de-nosotros', [
    'uses' => 'HomeController@about',
    'as' => 'about_path',
]);

//form
Route::post('/design', [
    'uses' => 'HomeController@design',
    'as' => 'design_path',
]);

Route::post('/contact', [
    'uses' => 'HomeController@contact',
    'as' => 'contact_path',
]);

Route::post('/tel', [
    'uses' => 'HomeController@tel',
    'as' => 'tel_path',
]);

Route::post('/inquire', [
    'uses' => 'HomeController@inquire',
    'as' => 'inquire_path',
]);