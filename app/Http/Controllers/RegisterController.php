<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        // create the user
        $attributes = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:7'
        ]);

        // log the user in 
        Auth::login($user = User::create($attributes));
    
        return redirect('/')->with('success', 'Your account has been created.');
    }
}
