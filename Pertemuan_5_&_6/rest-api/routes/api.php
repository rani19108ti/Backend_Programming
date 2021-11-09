<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#method GET
Route::get("/animals", [AnimalController::class, 'index']);

Route::post("/animals", [AnimalController::class, 'store']);

Route::put("/animals/{id}", [AnimalController::class, 'update']);

Route::delete("/animals/{id}", [AnimalController::class, 'destroy']);

#Route Student

#Metode GET, route /students
Route::get('/students', [StudentController::class, 'index']);

#Metode POST, route /students
Route::post('/students', [StudentController::class, 'store']);

#Metode GET 1 datum, route /students
Route::get('/students/{id}', [StudentController::class, 'show']);

#Metode PUT, route /students
Route::put('/students/{id}', [StudentController::class, 'update']);

#Metode DELETE, route /students
Route::delete('/students/{id}', [StudentController::class, 'destroy']); 