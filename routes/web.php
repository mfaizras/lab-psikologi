<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::prefix('register')->group(function(){
    Route::get('/',[RegistrationController::class,'index']);
    Route::post('/',[RegistrationController::class,'store'])->name('registrationProcess');
});

Route::prefix('admin')->group(function(){
    Route::get('/login',[AdminController::class,'login'])->name('login');
    Route::post('/login',[AdminController::class,'authenticate'])->name('loginAction');
    Route::middleware('auth')->group(function (){
        Route::get('/',[AdminController::class,'index']);
    });
});
