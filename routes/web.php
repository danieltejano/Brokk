<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SimCardController;
use App\Http\Controllers\SimCardsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/playground', function(){
    return Inertia::render('Playground');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::prefix('/products')->middleware(['auth:sanctum'])->group(function (){
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::post('/create', [ProductController::class, 'create'])->name('product.create');
    Route::put('/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
});

Route::prefix('/clients')->middleware(['auth:sanctum'])->group(function(){
    Route::get('/', [ClientController::class, 'index'])->name('clients.index');
});

Route::prefix('/simcards')->middleware(['auth:sanctum'])->group(function(){
    Route::get('/',[SimCardController::class,'index'])->name('simcards.index');
    Route::get('/create',[SimCardController::class,'create'])->name('simcards.create');
    Route::get('/update',[SimCardController::class,'update'])->name('simcards.update');
});
