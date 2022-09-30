<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\RecptionController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('products', ProductController::class);
Route::resource('tables', TableController::class);
Route::resource('recptions', RecptionController::class);
Route::get('/search/', 'App\Http\Controllers\PostsController@search')->name('search');
Route::get('/recption/', 'App\Http\Controllers\PostsController@recption')->name('recption');

require __DIR__.'/auth.php';
