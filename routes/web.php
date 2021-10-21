<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminPageController::class, 'index']);
    Route::prefix('job')->group(function(){
        Route::prefix('category')->group(function(){
            Route::get('create', [CategoryController::class, 'create']);
            Route::post('store', [CategoryController::class, 'store']);
        });
    });
});

Route::resource('test', App\Http\Controllers\TestTemplate::class);
