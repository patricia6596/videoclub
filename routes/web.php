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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

Route::get('/', [HomeController::class, 'getHome']);
Route::get('login', [HomeController::class, 'login']);
Route::get('catalog', [CatalogController::class, 'getIndex']);
Route::get('catalog/show', [CatalogController::class, 'getShow']);
Route::get('catalog/create', [CatalogController::class, 'getCreate']);
Route::get('catalog/edit', [CatalogController::class, 'getEdit']);