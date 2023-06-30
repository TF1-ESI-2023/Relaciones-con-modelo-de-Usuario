<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideojuegoController;
use App\Http\Middleware\Autenticacion;
use App\Http\Middleware\PermisoDeEscritura;
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




Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});


Route::get('/videojuego', function () {return view('crearVideojuego');})
    ->middleware(Autenticacion::class)
    ->middleware(PermisoDeEscritura::class);


Route::post('/videojuego',[VideojuegoController::class,"Crear"])
    ->middleware(Autenticacion::class)
    ->middleware(PermisoDeEscritura::class);

Route::get("/",[UserController::class,"Home"]);

Route::get('/listar',[VideojuegoController::class,"Listar"])->middleware(Autenticacion::class);
Route::post('/login',[UserController::class,"Login"]);
Route::post('/register',[UserController::class,"Register"]);
Route::get('/logout',[UserController::class,"Logout"]);