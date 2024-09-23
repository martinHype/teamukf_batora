<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AcademicYearController;
use \App\Http\Controllers\StudyProgramController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::post("/register",[AuthController::class,'register']);
Route::post("/login",[AuthController::class,'login']);
Route::post("/logout",[AuthController::class,'logout'])->middleware('auth:sanctum');;

Route::get('/academicyears', [AcademicYearController::class, 'index']);


Route::get('/studyprograms', [StudyProgramController::class, 'index']);

Route::get("/subjects", [SubjectController::class, 'index']);
