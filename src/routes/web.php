<?php
use Illuminate\Http\Request;

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
$router->get('/test', function() use ($router) {
    return view('test');
});

$router->post('/test1', function(Request $request) use ($router) {
    print($request->name);
    return view('test', ['quote' => 10]);
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
