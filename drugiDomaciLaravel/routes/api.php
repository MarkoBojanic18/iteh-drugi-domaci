<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::get('/surveys', [SurveyController::class,'index']); 
Route::post('/surveys', [SurveyController::class,'store']); 
Route::put('/surveys/{id}', [SurveyController::class,'update']); 
Route::delete('/surveys/{id}', [SurveyController::class,'destroy']); 