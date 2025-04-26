<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', [MovieController::class, 'index']);
Route::get('/movie/{id}', [MovieController::class, 'detail']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies/store', [MovieController::class, 'store']);
Route::get('/movies/data', [MovieController::class, 'data']);
Route::get('/movies/edit/{id}', [MovieController::class, 'form_edit']);

Route::post('movies/{movie}/update', [MovieController::class, 'update'])->name('movies.update');
Route::get('/movies/edit/{id}', [MovieController::class, 'edit'])->name('movies.edit');
Route::get('movies/delete/{id}', [MovieController::class, 'delete'])->name('movies.delete');
Route::delete('/movies/delete/{id}', [MovieController::class, 'destroy'])->name('movies.delete');
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/watchlist', function () {
    return view('watchlist');
})->name('watchlist');
// route ini untuk halaman watchlist
Route::get('/watchlist', [MovieController::class, 'watchlist'])->name('watchlist');