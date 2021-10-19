<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\LoginApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('auth/create-token', [LoginApiController::class, 'createToken']);
Route::post('auth/login', [LoginApiController::class, 'login']);
Route::post('auth/register', [LoginApiController::class, 'register']);
Route::get('auth/userlist', [LoginApiController::class, 'list']);
