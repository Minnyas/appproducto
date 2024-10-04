<?php
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Models\Proveedor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('formcategorias', function () {
    return view('categorias.categoriasform');
    
})->name('categoriasform');

Route::get('proveedoresform', function () {
    return view('proveedores.create');
})->name('proveedoresform');

Route::resource('categorias', categoriaController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('productos', ProductoController::class);

