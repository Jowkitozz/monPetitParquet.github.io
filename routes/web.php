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
    return view('index');
});

$router->get('/actus', function () use ($router) {
    return view('actus');
});

$router->get('/qsm', function () use ($router) {
    return view('qsm');
});

$router->get('/contact', function () use ($router) {
    return view('contact');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('authors',  ['uses' => 'AuthorController@showAllAuthors']);
  
    $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);
  
    $router->post('authors', ['uses' => 'AuthorController@create']);
  
    $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);
  
    $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
});