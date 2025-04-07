<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class RegisterController extends Controller
{
  public function create() {
    return view('auth.register');
  }

  public function store(Request $request) {
    $validated = $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'password' => ['required', Password::min(6),'confirmed'] 
    ]);
    //encrypt
    $validated['password'] = Hash::make($validated['password']);
    //create user
    $user = User::create($validated);
    //login 
    Auth::login($user);
    //redirect to dashboard
    return redirect('/')->with('message', 'Account created successfully');
  }

}
