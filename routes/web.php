<?php

use App\Http\Livewire\AsignarComponent;
use App\Http\Livewire\CoinsComponent;
use App\Http\Livewire\PermisosComponent;
use App\Http\Livewire\PosComponent;
use App\Http\Livewire\ProductsComponent;
use App\Http\Livewire\RolesComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Categories;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\SobrebandaiController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\WelcomeController;


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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('categories', Categories::class);
Route::get('products', ProductsComponent::class);
Route::get('coins', CoinsComponent::class);
Route::get('pos', PosComponent::class);
Route::get('roles', RolesComponent::class);
Route::get('permisos', PermisosComponent::class);
Route::get('asignar', AsignarComponent::class);
Route::get('miperfil', PaginasController::class);
Route::get('sobrebandai', SobrebandaiController::class);
Route::get('pedidos', PedidosController::class);
Route::get('welcome', WelcomeController::class);







