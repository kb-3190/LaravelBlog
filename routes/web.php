<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/create', [BlogController::class, 'create']);
Route::get('/post/{id}', [BlogController::class, 'show'])->name('post.show');
Route::post('/post/store', [BlogController::class, 'store'])->name('post.store');
Route::get('/post/{id}/edit', [BlogController::class, 'edit']);
Route::put('/post/{id}/update', [BlogController::class, 'update']);
//Route::delete('post/{id}/delete', [BlogController::class, 'delete']);