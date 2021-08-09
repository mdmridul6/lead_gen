<?php

use App\Http\Controllers\LeadsController;
use App\Http\Controllers\project\ProjectController;
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


    //    Project Section
    Route::prefix('/project')->name('project.')->group(function (){
        Route::get('index',[ProjectController::class,'index'])->name('index');
        Route::post('create',[ProjectController::class,'createProject'])->name('create');
        Route::post('edit/{id}',[ProjectController::class,'updateProject'])->name('edit');
        Route::get('delete/{id}',[ProjectController::class,'delete'])->name('delete');
    });

    //    Lead Section
    Route::prefix('/leads')->name('leads.')->group(function (){
        Route::get('index',[LeadsController::class,'index'])->name('index');
        Route::get('create',[LeadsController::class,'createForm'])->name('create');
        Route::post('create',[LeadsController::class,'createLeads'])->name('create');
        Route::post('edit/{id}',[LeadsController::class,'updateLeads'])->name('edit');
        Route::get('deactivate/{id}',[LeadsController::class,'deactivate'])->name('deactivate');
        Route::get('delete/{id}',[LeadsController::class,'delete'])->name('delete');
    });
});
