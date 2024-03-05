<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/inicio/cliente-nuevo', function () {
    return view('cliente.cliente-nuevo');
})->name('cliente.nuevo');


#---------------------------------------------------------------#
#                  Controlador Cliente                          #
#---------------------------------------------------------------#
Route::prefix('inicio')->group(function () {
    Route::get('/cliente-listar', [ControladorCliente::class, 'index'])->name('cliente-listar');
    Route::post('/cliente-nuevo', [ControladorCliente::class, 'guardar']);
    Route::get('/cliente-listar/{id}/eliminar', [ControladorCliente::class, 'eliminar'])->name('cliente.eliminar');
    
    // Route::get('/mostrar-clientes', [ControladorCliente::class, 'mostrarClientes'])->name('mostrar.clientes');
    // Route::get('/culturas', [culturaControlador::class, 'index']);
});
#---------------------------------------------------------------#