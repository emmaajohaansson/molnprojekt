<?php


use App\Http\Controllers\Controller;
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

$router->get('/api/games', 'GamesController@index');

$router->get('/api/users/{userId}', 'UsersController@get');
$router->get('/api/games/{gameId}', 'GamesController@get');
$router->get('/api/reviews/{gameId}', 'ReviewsController@get');
$router->post('/api/reviews', 'controller');
$router->post('/api/users', 'UsersController@add');
$router->post('/api/login', 'controller');
$router->post('/api/games', 'controller');


$router->put('/api/reviews/{reviewId}', 'controller');
$router->put('/api/games/{gameId}', 'controller');


$router->delete('/api/games/{gameId}', 'GamesController@delete');
$router->delete('/api/reviews/{reviewId}', 'ReviewsController@delete');
$router->delete('/api/users/{userId}', 'UsersController@delete');
