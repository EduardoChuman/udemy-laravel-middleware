<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use App\Http\Middleware\PrimeiroMiddleware;

// Chamando o Middleware direto do namespace - requer uso de "use App\Http\Middleware...."
// Route::get('/usuarios', 'UsuarioControlador@index')->middleware(PrimeiroMiddleware::class);

// Chamando o Middleware após nomeá-lo no arquivo Kernel.php - dentro do atributo protected $routeMiddleware - não necessita "use App\Http\Middleware...." 
// Route::get('/usuarios', 'UsuarioControlador@index')->middleware('primeiro');

// Chamando o Middleware direto do construct - após nomeá-lo no arquivo Kernel.php - não necessita "use App\Http\Middleware...."
Route::get('/usuarios', 'UsuarioControlador@index')->middleware('primeiro', 'segundo', 'terceiro');
Route::get('/terceiro', function() {
    return 'passou pelo terceiro middleware :)';
})->middleware("terceiro:Eduardo,33");
