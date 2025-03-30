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

# This is the default route for the application
Route::get('/', function () {
    $jobs = Job::all();
    #dd($jobs[0]->title);
    return view('home'); 
});

#index
Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->latest()->paginate(6);

    return view('jobs.index',[ 'jobs' => $jobs
        ]);
});

#create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

#show
Route::get('/jobs/{id}', function ($id)  {
    
    $job = Job::find($id);
    return view('jobs.show',[ 'job' => $job
    ]);
});

#create
Route::post('/jobs', function () {

    request()->validate([
        'title' => 'required',
        'salary' => 'required | numeric',
    ]);

 Job::create([
        'title' => request('title'),
        'employer_id' => 2,
        'salary' => request('salary'),
    ]);
    return redirect('/jobs');
});

#edit
Route::get('/jobs/{id}/edit', function ($id)  {
    
    $job = Job::find($id);
    return view('jobs.edit',[ 'job' => $job
    ]);
});

#update 
Route::patch('/jobs/{id}', function ($id)  {
    #validate
    request()->validate([
        'title' => 'required',
        'salary' => 'required | numeric',
    ]);
    #authorize(on hold!)
    #update
    Job::findOrFail($id)->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    #persist & redirect
    return redirect('/jobs');

});

#destroy 
Route::delete('/jobs/{id}', function ($id)  {
    #authorize(on hold!)
    #delete
    Job::findOrFail($id)->delete();

    #redirect
    return redirect('/jobs');
});

# It returns the about view
Route::get('/about', function () {
    return view('about');
});