<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\InicioController::class,'inicio']);

Route::get('/sobre', [\App\Http\Controllers\SobreController::class,'sobre']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato']);


Route::get('/request', [\App\Http\Controllers\RequestController::class,'request']);

