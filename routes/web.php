<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Mail\JobPosted;

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

// Route::get('test', function(){
//     \Illuminate\Support\Facades\Mail::to('jwachira40@gmail.com')->send(new JobPosted());
//     return 'Done!';
//     // return new JobPosted();
// });

# This is the default route for the application
Route::view('/', 'home');

#It returns the about view
Route::view('/about', 'about')->name('about');

#auth
Route::get('/register', [RegisteredUserController::class, 'create']);

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');

Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

#index
Route::get('/jobs',[JobController::class, 'index'])->name('jobs.index');

#create
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');

#show
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

#store
Route::post('/jobs', [JobController::class, 'store'])
->middleware(['auth']);

#edit
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
->middleware('auth')
->can('edit','job')->name('jobs.edit');

#update 
Route::patch('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');    

#destroy 
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');

// Route::resource('jobs', JobController::class)->only(['index','show']);

// Route::resource('jobs', JobController::class)->except(['index','show'])->middleware('auth');