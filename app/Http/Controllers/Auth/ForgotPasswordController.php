<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetEmail;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Models\Post;
use App\Models\User;

class ForgotPasswordController extends Controller
{
  public function showLinkRequestForm() {
    return view('auth.forgot-password');
  }

  public function sendResetLink(Request $request) {
    /* $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
      $request->only('email')
    );

    if ($status === Password::RESET_LINK_SENT) {
      return redirect()->route('login')->with('success', 'A reset link has been sent to your email');
    } else {
      return back()->withErrors(['email' => __($status)]);
    } */
    //return $status === Password::RESET_LINK_SENT ? back()->with(['status' => __($status)]) : back()->withErrors(['email' => __($status)]);

    //return redirect()->route('login')->with('error', 'A reset link has been sent to your email');

    $request->validate(['email' => 'required|email']);

    $user = \App\Models\User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors(['email' => 'We can\'t find a user with that email address.']);
    }

    $token = Password::createToken($user);

    Mail::to($user->email)->queue(new \App\Mail\PasswordResetEmail($user, $token));

    return redirect()->route('login')->with('success', 'A reset link has been sent to your email.');
  }
}