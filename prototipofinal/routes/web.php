<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomersController;

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

//rutas de roles
Route::get('/rol', [RolesController::class, 'index'])->name('role.index');
Route::get('/rol/create', [RolesController::class, 'create'])->name('role.create');
Route::post('/rol/store', [RolesController::class, 'store'])->name('role.store');
Route::get('/rol/{role}', [RolesController::class, 'show'])->name('role.shows');
Route::get('/rol/{role}/editar', [RolesController::class, 'edit'])->name('role.edit');
Route::put('/rol/{role}', [RolesController::class, 'update'])->name('role.update');
Route::delete('/rol/{role}', [RolesController::class, 'destroy'])->name('role.destroy');

//rutas de usuarios
Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('user.create');
Route::post('/usuarios/store', [UserController::class, 'store'])->name('user.store');
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('user.shows');
Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])->name('user.edit');
Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('user.destroy');

//rutas de clientes
Route::get('/cliente', [CustomersController::class, 'index'])->name('customer.index');
Route::get('/cliente/create', [CustomersController::class, 'create'])->name('customer.create');
Route::post('/cliente/store', [CustomersController::class, 'store'])->name('customer.store');
Route::get('/cliente/{clientes}', [CustomersController::class, 'show'])->name('customer.shows');
Route::get('/cliente/{clientes}/editar', [CustomersController::class, 'edit'])->name('customer.edit');
Route::put('/cliente/{clientes}', [CustomersController::class, 'update'])->name('customer.update');
Route::delete('/cliente/{clientes}', [CustomersController::class, 'destroy'])->name('customer.destroy');
