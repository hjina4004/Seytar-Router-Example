<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Seytar\Routing\Router;

require '../vendor/autoload.php';

Router::bootstrap(function ($ex) {
    header('Content-Type: text/html; charset=utf-8');
    echo '404 - Page Not Found';
});

Route::get('/', function () {
    echo 'Hello world.';
});

Route::get('/orders', ['uses' => OrderController::class . '@index']);
Route::post('/orders', ['uses' => OrderController::class . '@store']);
Route::get('/orders/{id}', ['uses' => OrderController::class . '@show']);
Route::put('/orders/{id}', ['uses' => OrderController::class . '@update']);
Route::delete('/orders/{id}', ['uses' => OrderController::class . '@destory']);
