<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FriendController;
use GuzzleHttp\Psr7\Request;
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
// Authentication routes

// ROUTES AUTHENTICATION
Route::post('/login', [AuthController::class, 'login']);
Route::get('/me', [AuthController::class, 'index'])->middleware('auth:sanctum');
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

// ROUTES POSTS
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/friend-request/send', [FriendController::class, 'sendFriendRequest']);
    Route::get('/friend-request/pending', [FriendController::class, 'getPendingFriendRequests']);
    Route::post('/friend-request/accept', [FriendController::class, 'acceptFriendRequest']);
    Route::post('/friend-request/reject', [FriendController::class, 'rejectFriendRequest']);

    // Post Router
    Route::get('/list', [PostController::class, 'index']);
    Route::post('/add-post', [PostController::class, 'addPost']);
    Route::get('/show/{id}', [PostController::class, 'show']);
    Route::put('/update/{id}', [PostController::class, 'update']);
    Route::delete('/delete/{id}', [PostController::class, 'destroy']);

    // Comment Router
    Route::get('/list', [CommentController::class, 'index']);
    Route::post('/create', [CommentController::class, 'store']);
    Route::get('/show/{id}', [CommentController::class, 'show']);
    Route::put('/update/{id}', [CommentController::class, 'update']);
    Route::delete('/delete/{id}', [CommentController::class, 'destroy']);

    // Like Router
    Route::post('/like-post', [LikeController::class, 'Addlike'])->middleware('auth');
    Route::post('/unlike-post', [LikeController::class, 'Unlike'])->middleware('auth');
});


// ROUTES COMMENTS


