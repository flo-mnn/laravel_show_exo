<?php

use App\Http\Controllers\IngredientController;
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

Route::get('/',[IngredientController::class, 'index']);
Route::get('/ingredient-show/{id}',[IngredientController::class, 'show']);
Route::get('/create-ingredient',[IngredientController::class, 'create']);
Route::post('/add-ingredient',[IngredientController::class, 'store']);
Route::post('/delete-ingredient/{id}',[IngredientController::class, 'destroy']);
Route::get('/ingredient/{id}/edit',[IngredientController::class, 'edit']);
Route::post('/ingredient/{id}/update',[IngredientController::class, 'update']);
