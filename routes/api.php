<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', [\App\Http\Controllers\UserController::class,'register']);
Route::post('login', [\App\Http\Controllers\UserController::class,'authenticate']);
Route::get('open', [\App\Http\Controllers\DataController::class,'open']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', [\App\Http\Controllers\UserController::class,'getAuthenticatedUser']);
    Route::get('closed', [\App\Http\Controllers\DataController::class,'closed']);
});