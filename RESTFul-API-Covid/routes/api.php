<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;

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

Route::get('/patients', [PatientsController::class, 'index']);
Route::post('/patient', [PatientsController::class, 'store']);
Route::get('/patient/{id}', [PatientsController::class, 'show']);
Route::put('/patients/{id}', [PatientsController::class, 'update']);
Route::delete('/patients/{id}', [PatientsController::class, 'destroy']);

Route::get('/patients/search/{name}', [PatientsController::class, 'search']);
Route::get('/patients/status/positive', [PatientsController::class, 'positive']);
Route::get('/patients/status/recovered', [PatientsController::class, 'recovered']);
Route::get('/patients/status/dead', [PatientsController::class, 'dead']);