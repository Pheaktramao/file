<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\BookRecordController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Users

Route::get('/user/list', [UserController::class, 'index'])->name('user.list');
Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');


// Books
Route::get('/book/list', [BookController::class, 'index'])->name('book.list');
Route::post('/book/create', [BookController::class, 'store'])->name('book.store');
Route::put('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::delete('/book/delete/{id}', [BookController::class, 'destroy'])->name('book.delete');
Route::get('/book/show/{id}', [BookController::class, 'show'])->name('book.show');

// Borrow

Route::get('/borrow/list', [BookRecordController::class, 'index'])->name('book.list');
Route::post('/borrow/create', [BookRecordController::class, 'store'])->name('book.store');