<?php

use App\Http\Livewire\ModificarProducts;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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
//->middleware('can:Admin.vista')

Route::get('/logout',[SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::middleware(['guest'])->group(function () {
    //Route::get('/register', [RegisterController::class, 'create'])->name('register');
    //Route::post('/register',[RegisterController::class, 'store'])->name('register.store');
    //este codigo redirige cualquier get ó post '/register' de nuevo a '/'
        Route::match(['get', 'post'], '/register', function () {
            return redirect('/');
        });
    //
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/login',[SessionsController::class, 'store'])->name('login.store');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->middleware('can:Admin.vista')->group(function () {
        Route::view('/', 'index-products')->name('home');
        //Route::view('/products', 'index-products');
        Route::view('/crear-products', 'index-create-products');
        //Route::view( '/modificar-producto');
        Route::get('modificar-producto/{id}', ModificarProducts::class);

        Route::view('/crear-personal', 'index-create-personal');
    });

    Route::middleware(['auth:sanctum', 'verified'])->middleware(['can:Vendedor.vista'])->group(function () {
        Route::view('/vendedores', 'index-vendedores');
        Route::view('/ventas-realizadas', 'index-ventas');
        Route::view('/pre-factura', 'index-ventas');
    });
});