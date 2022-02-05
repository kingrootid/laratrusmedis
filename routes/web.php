<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpesialistController;
use App\Models\Spesialist;
use Illuminate\Support\Facades\Route;

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
    $data = [
        'title' => env('APP_NAME'),
        'content' => 'Home Page',
        'user' => (!auth()->user() ? null : auth()->user()),
        'specialist' => Spesialist::limit(4)->get(),
    ];
    return view('index', $data);
});
Route::get('doctor', [DoctorController::class, 'index']);
Route::get('spesialist', [SpesialistController::class, 'index']);
Route::get('spesialist/{name}', [SpesialistController::class, 'getbyname']);
Route::get('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/register', [AuthController::class, 'register']);
