<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\throwException;

class SessionController extends Controller
{
  public function login() {
    return view('auth.login');
  }

  public function store() {
    //validate
    $validate = request()->validate([
      'email' => ['required', 'email'],
      'password' => ['required']
    ]);
    //attempt to login
    if (! Auth::attempt($validate)) {
      throw ValidationException::withMessages([
        'email' => 'Sorry, these credentials do not match'
      ]);
    };
    //regenarate token
    request()->session()->regenerate();
    //redirect
    return redirect('/');
  }
  public function destroy() {
    Auth::logout();

    return redirect('/')->with('logoutSuccess', 'You have been logged out');
  }
}
