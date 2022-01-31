<?php
use Illuminate\Http\Request;
use Predis\Client as Redis;

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
    $client = new Redis([
        'scheme' => 'tcp',
        'host'   => env('REDIS_HOST'),
        'port'   => env('REDIS_PORT'),
    ]);
    $client->set('foo', 'bar');
    return view('test');
});

$router->post('/test1', function(Request $request) use ($router) {
    $credentials = $request->only(['email', 'password']);
    print(json_encode($credentials));
    return view('test', ['quote' => 10]);
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
