<?php

use App\Http\Controllers\API\SpesialistController;
use App\Http\Controllers\ApiAuthController;
use App\Http\Resources\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [ApiAuthController::class, 'signin']);
Route::post('register', [ApiAuthController::class, 'signup']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('specialist', [SpesialistController::class, 'index']);
});
