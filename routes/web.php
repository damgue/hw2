<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'LoginController@Login')->name('login');
Route::post('login', 'LoginController@CheckLogin');
Route::get('logout', 'LoginController@Logout');

Route::get('home', 'HomeController@Home')->name('home');

Route::get('register', "RegisterController@index")->name('register');
Route::post('register', "RegisterController@create");


Route::get('/booking/nome/{q}', 'BookingController@AddBooking');
Route::get('/service/nome/{q}', 'ServiceController@Search');
Route::get('/service', 'ServiceController@index');

Route::get('/drugstore', 'DrugstoreController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('/equipe', 'EquipeController@index');

Route::get('prenota_visita', 'VisitController@index');
Route::post('/prenota/visita', 'VisitController@PostPrenota')->name("prenota.visita");

Route::get('/aggiorna', 'ProfileController@UpdateProfileVisit');
Route::get('/booking/elimina/{q}', 'ProfileController@DeleteBooking');
Route::get('/booking', 'ProfileController@UpdateProfileBooking');
