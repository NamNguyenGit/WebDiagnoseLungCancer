<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientsController;
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

Route::group(['prefix' => '/'], function () {
    Route::get('/patients', [PatientsController::class, 'index'])->name('patients.index');

});

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('clients.home');
    Route::get('/login', [HomeController::class, 'login']);
    Route::post('/login', [HomeController::class, 'check_login'])->name('clients.login');

});
