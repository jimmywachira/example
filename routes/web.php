<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

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
    $jobs = Job::all();
    #dd($jobs[0]->title);
    return view('home'); 
});

Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->get();

    return view('jobs',[ 'jobs' => $jobs
        ]);
});

Route::get('/jobs/{id}', function ($id)  {
    
    $job = Job::find($id);
    return view('job',[ 'job' => $job
]);
});

Route::get('/about', function () {
    return view('about');
});