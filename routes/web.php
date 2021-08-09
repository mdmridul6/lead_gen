<?php

use App\Http\Controllers\LeadsController;
use App\Http\Controllers\project\ProjectController;
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
Route::middleware('guest')->group(function (){
    Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
    Route::get('/about',[App\Http\Controllers\HomeController::class,'index'])->name('about');
    Route::get('/login',[App\Http\Controllers\HomeController::class,'login'])->name('login');
    Route::post('/login',[App\Http\Controllers\HomeController::class,'auth'])->name('login');

    Route::prefix('/service')->group(function (){

        Route::get('/software-development',[App\Http\Controllers\HomeController::class,'index'])->name('software-development');
        Route::get('/web-development',[App\Http\Controllers\HomeController::class,'index'])->name('web-development');
        Route::get('/mobile-app',[App\Http\Controllers\HomeController::class,'index'])->name('mobile-app');
        Route::get('/eCommerce',[App\Http\Controllers\HomeController::class,'index'])->name('eCommerce');
        Route::get('/seo',[App\Http\Controllers\HomeController::class,'index'])->name('seo');
        Route::get('/itConsultancy',[App\Http\Controllers\HomeController::class,'index'])->name('itConsultancy');
        Route::get('/digitalMarketing',[App\Http\Controllers\HomeController::class,'index'])->name('digitalMarketing');

    });
});


Route::middleware('auth')->group(function (){
    Route::get('/dashboard',[App\Http\Controllers\HomeController::class,'index'])->name('dashboard');
    Route::get('/logout',[App\Http\Controllers\HomeController::class,'logout'])->name('logout');

    //    Project Section
    Route::prefix('/project')->name('project.')->group(function (){
        Route::get('index',[ProjectController::class,'index'])->name('index');
        Route::get('create',[ProjectController::class,'createForm'])->name('create');
        Route::post('create',[ProjectController::class,'createProject'])->name('create');
        Route::get('edit/{id}',[ProjectController::class,'editForm'])->name('edit');
        Route::post('edit/{id}',[ProjectController::class,'updateProject'])->name('edit');
        Route::get('delete/{id}',[ProjectController::class,'delete'])->name('delete');
    });

    //    Lead Section
    Route::prefix('/leads')->name('leads.')->group(function (){
        Route::get('index',[LeadsController::class,'index'])->name('index');
        Route::get('create',[LeadsController::class,'createForm'])->name('create');
        Route::post('create',[LeadsController::class,'createLeads'])->name('create');
        Route::get('edit/{id}',[LeadsController::class,'editForm'])->name('edit');
        Route::post('edit/{id}',[LeadsController::class,'updateLeads'])->name('edit');
        Route::get('deactivate/{id}',[LeadsController::class,'deactivate'])->name('deactivate');
        Route::get('delete/{id}',[LeadsController::class,'delete'])->name('delete');
    });
});

