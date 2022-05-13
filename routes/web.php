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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//---------Book---------

$router->post('book/create', 'BookController@store');
$router->get('book', 'BookController@index');
$router->get('book/{id}', 'BookController@show');
$router->put('book/{id}/update', 'BookController@update');
$router->delete('book/{id}/delete', 'BookController@delete');
