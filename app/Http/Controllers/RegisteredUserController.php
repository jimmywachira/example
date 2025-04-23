<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', Password::min(8) ,'confirmed']
        ]);

        // Create the user
        $user = User::create($attributes);

        // Log the user in
        auth()->login($user);

        return redirect('/jobs')->with('success', 'Registration successful!');
    }
}