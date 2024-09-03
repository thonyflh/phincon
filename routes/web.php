<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'login']);

Route::group([
    'middleware' => ['auth']
], function () {
    Route::get('/logout', [SessionController::class, 'logout']);

    Route::get('/account', [AccountController::class, 'index']);
    Route::post('/account/add', [AccountController::class, 'addAgent']);
    Route::get('/account/delete/{id}', [AccountController::class, 'delete']);
    Route::get('/account/update/{id}', [AccountController::class, 'updateAccount']);
    Route::post('/account/update/updateaccount/{id}', [AccountController::class, 'updatelogic']);
    Route::get('/account/editpass/{id}', [AccountController::class, 'editpass']);
    Route::post('/account/updatepass/{id}', [AccountController::class, 'updatepass']);
});
