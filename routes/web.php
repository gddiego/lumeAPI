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

$app->group([
    'prefix' => 'api/clients',
    'namespace' => 'App\Http\Controller'
].function () use($app){
    
    $app->get('', 'ClientsController@index');//trabalhando com coleção de dados.
    $app->get('{id}', 'ClientsController@show');
    $app->post('', 'ClientsController@store');
    $app->post('id', 'ClientsController');
});