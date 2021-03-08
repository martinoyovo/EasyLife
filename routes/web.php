<?php

use Illuminate\Support\Facades\Route;
use App\User;



Auth::routes(['verify' => true]);
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//::::::::::::::::::SEND_MAIL PART::::::::::::::::::::

Route::get('send-email', 'MailSend@mailsend');

//Route::middleware(['auth'])->group(function() {
	Route::get('categories', 'CategoryController@index');
	Route::get('categories/{id}', 'CategoryController@show');
	Route::post('categories', 'CategoryController@store')->name('save-category');

    //::::::::::::::::::SERVICES PART::::::::::::::::::::

    Route::get('services', 'ServicesController@index')->name('services');
    Route::post('new-service', 'ServicesController@store')->name('save-service');
    Route::get('services/{id}', 'ServicesController@show')->name('show-service');
    Route::get('new-service', 'ServicesController@newService')->name('add-service');


    //::::::::::::::::::PRICES PART::::::::::::::::::::

	Route::get('prices', 'PricesController@index');
	Route::post('new-price', 'PricesController@store')->name('save-price');
	Route::get('prices/{id}', 'PricesController@show');
    Route::get('new-price', 'PricesController@newPrice')->name('add-price');

    //::::::::::::::::::PUBS PART::::::::::::::::::::

	Route::get('pubs', 'PublicitesController@index');
	Route::post('pubs', 'PublicitesController@store')->name('save-pub');
	Route::get('pubs/{id}', 'PublicitesController@show');

    //::::::::::::::::::COMMANDES PART::::::::::::::::::::

    Route::get('commandes', 'CommandController@index');
    Route::get('commandes/{id}', 'CommandController@show')->name('show-commande');
    Route::get('new-commande', 'CommandController@create')->name('add-commande');
    Route::post('new-commande', 'CommandController@store')->name('save-commande');

    //::::::::::::::::::MODE_PAYMENTS PART::::::::::::::::::::

    Route::get('payments', 'ModePaymentsController@index');
    Route::post('payments', 'ModePaymentsController@store')->name('save-payment');
    Route::get('payments/{id}', 'ModePaymentsController@show');

//});


