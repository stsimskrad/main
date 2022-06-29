<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [App\Http\Controllers\Api\AuthenticationController::class, 'login']);

Route::get('/endorsements/{code}', [App\Http\Controllers\Api\EndorsementController::class, 'index']);
Route::post('/endorsement/store', [App\Http\Controllers\Api\EndorsementController::class, 'store']);
Route::post('/endorsement/update', [App\Http\Controllers\Api\EndorsementController::class, 'update']);

Route::prefix('01101011 01110010 01100001 01100100')->group(function(){
    Route::get('/dropdowns', [App\Http\Controllers\DropdownController::class, 'api']);
    Route::get('/courses', [App\Http\Controllers\CourseController::class, 'api']);
    Route::get('/schools', [App\Http\Controllers\SchoolController::class, 'api']);
    Route::get('/location/{type}', [App\Http\Controllers\LocationController::class, 'api']);
    Route::get('/agencies', [App\Http\Controllers\AgencyController::class, 'api']);
    Route::get('/expenses', [App\Http\Controllers\ExpenseController::class, 'api']);
    Route::get('/programs', [App\Http\Controllers\ProgramController::class, 'api']);
    Route::get('/benefits', [App\Http\Controllers\BenefitController::class, 'api']);
});