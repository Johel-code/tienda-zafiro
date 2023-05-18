<?php

use App\Http\Livewire\ModificarProducts;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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





// Route::middleware([
//      'auth:sanctum',
//      config('jetstream.auth_session'),
//      'verified'
//  ])->group(function () {
//      Route::get('/dashboard', function () {
//          return view('dashboard');
//      })->name('dashboard');
//  });


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/', 'index-products')->name('home');
    //Route::view('/products', 'index-products');
    Route::view('/crear-products', 'index-create-products');
    //Route::view( '/modificar-producto');
    Route::get('modificar-producto/{id}', ModificarProducts::class);

    Route::view('/crear-personal', 'index-create-personal');

    Route::view('/vendedores', 'index-vendedores');

    Route::view('/emitir-factura', 'index-emitir-factura');

    
    Route::view('/pre-factura', 'index-ventas');
});
