<?php

use App\Http\Controllers\animalsController;
use App\Http\Controllers\newAnimalController;
use App\Http\Controllers\updateAnimalController;
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

Route::get('/', [animalsController::class,'displayAnimals'])->name('animals');
Route::get('/newAnimal', [newAnimalController::class,'newAnimal'])->name('newAnimal');
Route::post('/createAnimal',[newAnimalController::class,'storeAnimal']);
Route::delete('/crud/{id}/delete',[animalsController::class,'deleteAnimal']);
Route::get('updateAnimal/{id}',[updateAnimalController::class,'updatPage']);
Route::put('/{id}/update',[updateAnimalController::class,'updateAnimal']);
