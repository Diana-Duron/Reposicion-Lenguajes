<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;

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

Route::get('/productos', [ProductoController::class, 'obtener'])->name('productos.todos');
Route::get('/productos/crear', [ProductoController::class, 'crear'])->name('productos.crear');
Route::post('/productos/guardar', [ProductoController::class, 'guardar'])->name('productos.guardar');

Route::get('/empleados', [EmpleadoController::class, 'obtener'])->name('empleados.todos');
Route::get('/empleados/crear', [EmpleadoController::class, 'crear'])->name('empleados.crear');
Route::post('/empleados/guardar', [EmpleadoController::class, 'guardar'])->name('empleados.guardar');

Route::get('/proveedores', [ProveedorController::class, 'obtener'])->name('proveedores.todos');
Route::get('/proveedores/crear', [ProveedorController::class, 'crear'])->name('proveedores.crear');
Route::post('/proveedores/guardar', [ProveedorController::class, 'guardar'])->name('proveedores.guardar');


