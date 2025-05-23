<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->Paginate(15)
        ;

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
        #validate
        request()->validate([
            'title' => ['required','min:3'] ,
            'salary' => 'required | numeric',
        ]);

       $job = Job::create([
            'title' => request('title'),
            'employer_id' => 1,
            'salary' => request('salary')
        ]);

        Mail::to($job->employer->user)->queue(new JobPosted($job));

        return redirect('/jobs')->with('success', 'Job created successfully');
    }
    
    public function edit(Job $job)
    {

    //    if(Auth::user()->cannot('edit-job', $job)){
    //     dd('You are not authorized to edit this job');
    //    };

            // return $user->id === $job->employer->user_id;
        

        #route model binding
        #$job = Job::findOrFail($id);

        // Gate::define('edit-job', function(User $user, $job){
        //     return $job->employer->user->is(Auth::user());
        //     });

        #authorize
        // if(Auth::guest()){
        //     redirect('/login')->with('error', 'You must be logged in to edit a job');
        // }

        //  if($job->employer->user->isNot(Auth::user())){
        //   abort(403);
        //  }

        //  Gate::authorize('edit-job', $job); 

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
        return redirect('/jobs/' . $job->id)->with('success', 'Job updated successfully');
    }

    public function destroy(Job $job)
    {

        // Gate::authorize('edit-job', $job);

        $job->delete();
        return redirect('/jobs')->with('success', 'Job deleted successfully');
    }
}