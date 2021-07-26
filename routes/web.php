<?php

use App\Categoria;
use App\Http\Controllers\CategoriaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', 'CategoriaController')->names('Categorias');
Route::resource('user', 'UsuarioController')->names('Usuario');
Route::resource('user', 'ProductoController')->names('Productos');
Route::resource('user', 'VentaController')->names('Venta');
Route::resource('user', 'DetalleVentaController')->names('DetalleVenta');

