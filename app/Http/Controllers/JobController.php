<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->paginate(15);

        return view('jobs.index',[ 'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        #route model binding
        #$job = Job::findOrFail($id);
        return view('jobs.show',[ 'job' => $job 
        ]);
    }
 
    public function store(Job $job)
    {
        request()->validate([
            'title' => ['required','min:3'] ,
            'salary' => 'required | numeric',
        ]);

        Job::create([
            'title' => request('title'),
            'employer_id' => 2,
            'salary' => request('salary'),
        ]);
        return redirect('/jobs');
    }
    public function edit(Job $job)
    {

    //    if(Auth::user()->can('edit-job', $job)){
    //     dd('You are not authorized to edit this job');
    //    };

            // return $user->id === $job->employer->user_id;
        

        #route model binding
        #$job = Job::findOrFail($id);

        #authorize
        // if(Auth::guest()){
        //     redirect('/login')->with('error', 'You must be logged in to edit a job');
        // }

        Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    } 

    public function update(Job $job)
    {

        Gate::authorize('edit-job', $job);

        #authorize(on hold!)
        #validate
        request()->validate([
            'title' => 'required',
            'salary' => 'required | numeric',
        ]);

        #update
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        #persist & redirect
        return redirect('/jobs/' . $job->id);
    }
    public function destroy(Job $job)
    {

        Gate::authorize('edit-job', $job);

        $job->delete();
        return redirect('/jobs');
    }
}