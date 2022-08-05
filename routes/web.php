<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProductosSucursalesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SucursalesController;

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

Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});

// Route::get('/', 'CategoriasController@index');

Route::resource('categorias', CategoriasController::class);
Route::resource('sucursales', SucursalesController::class);
Route::resource('productos', ProductosController::class);
Route::resource('productossucursales', ProductosSucursalesController::class);

Route::get('/productos/{id}', [ProductosController::class, 'index']);
Route::get('/eliminarProductos/{id}', [ProductosController::class, 'delete']);
Route::get('/eliminarProductosSucursales/{id}', [ProductosSucursalesController::class, 'delete']);
Route::get('/mostrarProductosSucursales/{id}', [ProductosSucursalesController::class, 'show']);
Route::get('/verProductosSucursales/{id}', [ProductosSucursalesController::class, 'ver']);
Route::get('/editarProductos/{id}', [ProductosController::class, 'update']);




// Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
