<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->get('/', function () use ($router) {
    return "Microservices working. This is book service";
});
$router->get('/test', function(){
   return "RAJIS GNTNG";
});
$router->get('/books', 'Book\BookController@index');
$router->post('/books', 'Book\BookController@store');
$router->get('/books/{book}', 'Book\BookController@show');
$router->put('/books/{book}', 'Book\BookController@update');
$router->patch('/books/{book}', 'Book\BookController@update');
$router->delete('/books/{book}', 'Book\BookController@destroy');
