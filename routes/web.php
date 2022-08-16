<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', HomeController::class);

/*
Route::get('productos', [ProductController::class, 'index']);
Route::get('productos/create', [ProductController::class, 'create']);
Route::get('productos/{producto}', [ProductController::class, 'show']);
*/

Route::controller(ProductController::class)->group(function(){
    Route::get('productos', 'index')->name('productos.index');
    Route::get('productos/create', 'create')->name('productos.create');

    Route::post('productos', 'store')->name('productos.store');

    Route::get('productos/{id}', 'show')->name('producto.show');
});