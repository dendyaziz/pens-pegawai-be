<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::get('/addresses', [AddressController::class, 'index']);
Route::post('/addresses', [AddressController::class, 'store']);
Route::get('/addresses/{id}', [AddressController::class, 'show']);
Route::put('/addresses/{id}', [AddressController::class, 'update']);




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
