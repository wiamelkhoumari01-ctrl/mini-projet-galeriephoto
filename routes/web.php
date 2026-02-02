<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\FormController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [GalerieController::class,'home']
)->name('home');
Route::get('/galerie', [GalerieController::class,'galerie']
)->name('galerie');
Route::get('/apropos', [GalerieController::class,'apropos']
)->name('apropos');
Route::get('/inscription', [FormController::class,'index']
)->name('user.index');
Route::post('/inscription', [FormController::class,'store']
)->name('user.store');

