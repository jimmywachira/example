<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(6);

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
        #route model binding
        #$job = Job::findOrFail($id);
        return view('jobs.edit', ['job' => $job]);
    } 

    public function update(Job $job)
    {
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
        $job->delete();
        return redirect('/jobs');
    }
}