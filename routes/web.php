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
    return view('testchild');
});

$router->post('/api/users', 'UsersController@index');
$router->post('/api/login', 'UsersController@index');
$router->get('/api/users/{userId}', 'UsersController@index');
$router->get('/api/users/{userId}', 'UsersController@index');
$router->get('/api/games', 'GamesController@index');
$router->post('/api/games', 'GamesController@index');
$router->put('/api/games/{gameId}', 'GamesController@index');
$router->delete('/api/games/{gameId}', 'GamesController@index');
$router->get('/api/reviews/{gameId}', 'ReviewsController@index');
$router->post('/api/reviews', 'ReviewsController@index');
$router->put('/api/reviews/{reviewId}', 'ReviewsController@index');
$router->delete('/api/reviews/{reviewId}', 'ReviewsController@index');
