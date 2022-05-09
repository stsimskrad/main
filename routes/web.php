<?php

use Illuminate\Support\Facades\Route;
use Spatie\WelcomeNotification\WelcomesNewUsers;
use App\Http\Controllers\Auth\WelcomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web', WelcomesNewUsers::class,]], function () {
    Route::get('welcome/{user}', [WelcomeController::class, 'showWelcomeForm'])->name('welcome');
    Route::post('welcome/{user}', [WelcomeController::class, 'savePassword']);
});

Auth::routes(['register' => false]);

/*
|--------------------------------------------------------------------------
| Web Requests
|--------------------------------------------------------------------------
*/

Route::prefix('request')->group(function(){

    Route::middleware(['auth','role:Super Administrator'])->group(function () {
        Route::prefix('user')->group(function(){
            Route::controller(App\Http\Controllers\UserController::class)->group(function () {
                Route::get('/lists/{key}/{counts}', 'lists');
                Route::get('/logs', 'logs');
                Route::post('/password', 'password');
                Route::post('/store', 'store');
                Route::post('/verify', 'verify');
            });
        });

        Route::prefix('agency')->group(function(){
            Route::controller(App\Http\Controllers\AgencyController::class)->group(function () {
                Route::get('/{key}/{counts}', 'index');
                Route::post('/store', 'store');
            });
        });

        Route::prefix('program')->group(function(){
            Route::controller(App\Http\Controllers\ProgramController::class)->group(function () {
                Route::get('/{key}/{counts}', 'index');
                Route::post('/store', 'store');
            });
        });

        Route::prefix('course')->group(function(){
            Route::controller(App\Http\Controllers\CourseController::class)->group(function () {
                Route::get('/{key}/{counts}', 'index');
                Route::post('/store', 'store');
            });
        });

        Route::prefix('expense')->group(function(){
            Route::controller(App\Http\Controllers\ExpenseController::class)->group(function () {
                Route::get('/{key}/{counts}', 'index');
                Route::post('/store', 'store');
            });
        });

        Route::prefix('dropdowns')->group(function(){
            Route::controller(App\Http\Controllers\DropdownController::class)->group(function () {
                Route::get('/{classification}/{key}/{counts}', 'index');
                Route::post('/store', 'store');
            });
        });

        Route::prefix('school')->group(function(){
            Route::controller(App\Http\Controllers\SchoolController::class)->group(function () {
                Route::get('/{key}/{counts}', 'index');
                Route::get('/{id}', 'view');
                Route::post('/store', 'store');
            });
        });
    });

});

Route::prefix('lists')->group(function(){
    Route::get('/', [App\Http\Controllers\ListController::class, 'index']);
    Route::get('/logs/{key}/{count}', [App\Http\Controllers\HomeController::class, 'logs']);
    Route::get('/location/{type}/{key}/{count}', [App\Http\Controllers\LocationController::class, 'index']);
    Route::get('/provinces/{code}', [App\Http\Controllers\ListController::class, 'provinces']);
    Route::get('/municipalities/{code}', [App\Http\Controllers\ListController::class, 'municipalities']);
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::get('/{any?}', [App\Http\Controllers\HomeController::class, 'index'])->where('any', '[\/\w\.-]*');