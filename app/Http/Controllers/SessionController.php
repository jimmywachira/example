<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        #validate
        $attributes = request()->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);
        
        #attempt to login the user
        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'the provided credentials do not match'
            ]);
        }

        #assigmnt; reset passwrd? rate limiting?

        #regenerate the session token avoid session hijacking/fixation
        $request->session()->regenerate();

        #redirect to the intended page 
        return redirect('/jobs')->with('success', 'Login successful!');

        
        // $credentials = $request->only('email', 'password');

        // if (auth()->attempt($credentials),request()->filled('remember')) {
        //     return redirect('/')->with('success', 'Login successful!');
        // }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }

    public function destroy()
    {
        #dd('Logout');
        Auth::logout();
        return redirect('/')->with('success', 'Logout successful!');
    } 
}
