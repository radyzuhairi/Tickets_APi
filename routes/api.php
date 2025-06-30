<?php

use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\V1\AuthorsController;
use App\Http\Controllers\Api\V1\AuthorTicketsController;
use App\Http\Controllers\Api\V1\UserController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::apiResource('tickets', TicketController::class)->except('update');
    Route::put('tickets/{ticket}', [TicketController::class,'replace']);
    Route::patch('tickets/{ticket}', [TicketController::class,'update']);

    Route::apiResource('users', UserController::class)->except('update');
    Route::put('users/{user}', [UserController::class,'replace']);
    Route::patch('users/{user}', [UserController::class,'update']);

    Route::apiResource('authors', AuthorsController::class)->except('store','update','delete');
    Route::apiResource('authors.tickets', AuthorTicketsController::class)->except('update');
    Route::put('authors/{author}/tickets/{ticket}', [AuthorTicketsController::class,'replace']);
    Route::patch('authors/{author}/tickets/{ticket}', [AuthorTicketsController::class,'update']);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->post('/logout',[AuthController::class,'logout']);
Route::get('/tickets', function () {
    return Ticket::all();
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
