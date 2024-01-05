<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Seytar\Routing\Router;

require '../vendor/autoload.php';

$request_body = file_get_contents('php://input');
if ($request_body !== '') {
    $payload = json_decode($request_body);
    foreach ($payload as $key => $value) $_REQUEST[$key] = $value;
}

function apiResource($uri, $controller)
{
    // index, store, show, update, destroy

    Route::get($uri, ['uses' => "{$controller}@index"]);
    Route::post($uri, ['uses' => "{$controller}@store"]);
    Route::get($uri . '/{id}', ['uses' => "{$controller}@show"]);
    Route::put($uri . '/{id}', ['uses' => "{$controller}@update"]);
    Route::delete($uri . '/{id}', ['uses' => "{$controller}@destroy"]);
}


Router::bootstrap(function ($ex) {
    header('Content-Type: text/html; charset=utf-8');
    echo '404 - Page Not Found';
});

Route::get('/', function () {
    echo 'Hello world.';
});

apiResource('/orders', OrderController::class);
