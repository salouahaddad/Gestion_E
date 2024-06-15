<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NoteController;
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


Route::apiResource('profs',ProfController::class);
Route::apiResource('etudiants',EtudiantController::class);
Route::apiResource('Module',ModuleController::class);
Route::get('etudiants/etudiantsbymodule/{id}', [EtudiantController::class, 'getById']);
Route::apiResource('note',NoteController::class);
