<?php
use Illuminate\Support\Facades\DB;
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


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/students', "RestStudentController@index");
    $router->post('/students', "RestStudentController@store");
    $router->get('/students/{student}', "RestStudentController@show");
    $router->put('/students/{student}', "RestStudentController@update");
    $router->delete('/students/{student}', "RestStudentController@destroy");
});

$router->get('zoap/{key}/server', [
    'as' => 'zoap.server.wsdl',
    'uses' => '\Viewflex\Zoap\ZoapController@server'
]);

$router->post('zoap/{key}/server', [
    'as' => 'zoap.server',
    'uses' => '\Viewflex\Zoap\ZoapController@server'
]);
