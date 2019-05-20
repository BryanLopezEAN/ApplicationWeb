<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    return view('home.index');
});

$router->get('login', function(){
	return view('authentication.login');
});

/* Registro de usuario - Vista - Luis Arias*/
$router->get('sign-up', function(){
	return view('authentication.sign-up');
});

$router->get('reservation-form', function(){
	return view('reservation.form');
});

$router->get('scenarios', function(){
	return view('reservation.list');
});

$router->get('alfa', function(){
	return view('scenarios.alfa');
});

$router->get('event1', function(){
	return view('events.event');
});