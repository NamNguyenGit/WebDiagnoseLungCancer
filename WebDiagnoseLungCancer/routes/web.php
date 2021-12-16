<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RiskFactorsController;
use App\Http\Controllers\SymptomsController;
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

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/patients', [PatientsController::class, 'index'])->name('patients.index');
    Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs.index');
    Route::get('/add-blog', [BlogsController::class, 'create'])->name('blogs.create');
    Route::post('/add-blog', [BlogsController::class, 'store'])->name('blogs.store');
    Route::get('/edit-blog/{id}', [BlogsController::class, 'edit'])->name('blogs.edit');
    Route::put('/edit-blog', [BlogsController::class, 'update'])->name('blogs.update');
    Route::get('/delete-blog/{id}', [BlogsController::class, 'delete'])->name('blogs.delete');

    Route::get('/riskfactors', [RiskFactorsController::class, 'index'])->name('riskfactors.index');
    Route::get('/add-riskfactor', [RiskFactorsController::class, 'create'])->name('riskfactors.create');
    Route::post('/add-riskfactor', [RiskFactorsController::class, 'store'])->name('riskfactors.store');
    Route::get('/edit-riskfactor/{id}', [RiskFactorsController::class, 'edit'])->name('riskfactors.edit');
    Route::put('/edit-riskfactor', [RiskFactorsController::class, 'update'])->name('riskfactors.update');
    Route::get('/delete-riskfactor/{id}', [RiskFactorsController::class, 'delete'])->name('riskfactors.delete');

    Route::get('/symptoms', [SymptomsController::class, 'index'])->name('symptoms.index');
    Route::get('/add-symptom', [SymptomsController::class, 'create'])->name('symptoms.create');
    Route::post('/add-symptom', [SymptomsController::class, 'store'])->name('symptoms.store');
    Route::get('/edit-symptom/{id}', [SymptomsController::class, 'edit'])->name('symptoms.edit');
    Route::put('/edit-symptom', [SymptomsController::class, 'update'])->name('symptoms.update');
    Route::get('/delete-symptom/{id}', [SymptomsController::class, 'delete'])->name('symptoms.delete');

    Route::get('/contactus', [ContactController::class, 'index'])->name('contactus.index');
    Route::post('/editstatuscontact', [ContactController::class, 'editstatus'])->name('contactus.editstatus');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('clients.home');
    Route::get('/login', [HomeController::class, 'login'])->name('clients.login');
    Route::post('/login', [HomeController::class, 'check_login'])->name('clients.login');
    Route::get('/logout', [HomeController::class, 'logout'])->name('clients.logout');

    Route::get('/contactus', [HomeController::class, 'contactus'])->name('clients.contact');
    Route::post('/contactus', [HomeController::class, 'postcontactus'])->name('clients.contact');

    Route::get('/blogs', [HomeController::class, 'blog'])->name('clients.blog');
    Route::get('/blogdetail/{id}', [HomeController::class, 'detailblog'])->name('clients.blogdetail');
});
