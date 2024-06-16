<?php

use App\Http\Controllers\CommentController;
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

Route::prefix('/index')->group(function () {
    Route::get('/', [CommentController::class, 'index']);
    Route::post('/', [CommentController::class, 'store']);
    // Route::get('/create', [EventController::class, 'create']);
    // Route::get('/edit/{id}', [EventController::class, 'edit']);
    // Route::post('/{id}', [EventController::class, 'update']);
    // Route::get('/show/{id}', [EventController::class, 'show']);
    // Route::delete('/{id}', [EventController::class, 'destroy']);
});
