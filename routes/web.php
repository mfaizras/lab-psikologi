<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminRegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/landing',function(){
    return view('landing');
});

Route::prefix('register')->group(function(){
    Route::get('/',[RegistrationController::class,'index']);
    Route::post('/',[RegistrationController::class,'store'])->name('registrationProcess');
});

Route::prefix('admin')->group(function(){
    Route::get('/login',[AdminController::class,'login'])->name('login');
    Route::post('/login',[AdminController::class,'authenticate'])->name('loginAction');
    Route::middleware('auth')->group(function (){
        Route::get('/',[AdminController::class,'index'])->name('dashboard');
        Route::prefix('participant')->group(function(){
            Route::get('/',[AdminRegisterController::class, 'index'])->name('participantList');
            Route::get('/export',[AdminRegisterController::class, 'export'])->name('exportParticipant');
            Route::get('/{registration:npm}',[AdminRegisterController::class, 'show'])->name('participantDetail');
            Route::get('/{registration:npm}/file/{type}',[AdminRegisterController::class, 'downloadFile'])->name('participantFile');
            Route::get('/{registration:npm}/edit',[AdminRegisterController::class, 'edit'])->name('participantEdit');
            Route::post('/{registration:npm}/edit',[AdminRegisterController::class, 'update'])->name('participantEditAction');
            Route::delete('/{registration:npm}',[AdminRegisterController::class, 'destroy'])->name('participantDelete');
        });
        Route::prefix('location')->group(function(){
            Route::get('/',[LocationController::class,'index'])->name('location');
            Route::post('/add',[LocationController::class,'store'])->name('locationStore');
            Route::delete('/{location}',[LocationController::class,'destroy']);
        });
        Route::prefix('major')->group(function(){
            Route::get('/',[MajorController::class,'index'])->name('major');
            Route::post('/add',[MajorController::class,'store'])->name('majorStore');
            Route::delete('/{major}',[MajorController::class,'destroy']);
        });
        Route::prefix('position')->group(function(){
            Route::get('/',[PositionController::class,'index'])->name('position');
            Route::post('/add',[PositionController::class,'store'])->name('positionStore');
            Route::delete('/{position}',[MajorController::class,'destroy']);
        });
    });
});
