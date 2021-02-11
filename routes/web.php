<?php

use App\Http\Controllers\AnimalController;
use App\Models\Animal;
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

Route::get('/', function () {
    $animals=Animal::all();
    return view('welcome',compact('animals'));
});
Route::post('/animal-store', [AnimalController::class, 'store']);
Route::get('/animal-show/{id}',[AnimalController::class,'show']);
Route::post('/animal-delete/{id}',[AnimalController::class,'destroy']);
Route::get('/animal-edit/{id}',[AnimalController::class,'edit']);
Route::post('/animal-update/{id}',[AnimalController::class,'update']);
