<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

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

# This is the default route for the application
Route::view('/', 'home');

Route::resource('jobs', JobController::class)->middleware('auth');

#It returns the about view
Route::view('/about', 'about')->name('about');

#auth
Route::get('/register', [RegisteredUserController::class, 'create']);

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');

Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

// #index
// Route::get('/jobs',[JobController::class, 'index']);

// #create
// Route::get('/jobs/create', [JobController::class, 'create']);

// #show
// Route::get('/jobs/{job}', [JobController::class, 'show']);

// #store
// Route::post('/jobs', [JobController::class, 'store']);

// #edit
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// #update 
// Route::patch('/jobs/{job}', [JobController::class, 'update']);

// #destroy 
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);