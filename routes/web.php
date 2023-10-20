<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\WebController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginIndex')->name('login');
    Route::post('/login', 'loginPost')->name('post.login')->middleware('throttle:login');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'dashboard')->name('dashboard');
});


Route::group(['middleware' => 'auth'], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::controller(WebController::class)
        ->prefix('web')
        ->name('web.')
        ->group(function () {
            Route::get('/', 'Index')->name('index');

            Route::get('/create', 'Create')->name('create');
            Route::post('/', 'CreateStore')->name('store');

            Route::get('/{id}/edit', 'Edit')->name('edit');
            Route::put('/{id}', 'Update')->name('update');
        });

    // if wanna custom you can edit above, this is dynamic routes base on models
    // Route::controller(AppController::class)
    //     ->prefix('{models}')
    //     ->name(request()->segment(1) . '.')
    //     ->group(function () {
    //         Route::get('/', 'Index')->name('index');

    //         Route::get('/create', 'Create')->name('create');
    //         Route::post('/', 'CreateStore')->name('store');

    //         Route::get('/{id}/edit', 'Edit')->name('edit');
    //         Route::put('/{id}', 'Update')->name('update');
    //     });
});
