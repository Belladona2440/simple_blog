@extends('layouts.auth')
@section('content')
<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="mb-5">
          <div class="text-center mb-4">
            <a href="">
              <img src="{{ asset('storage/logo.png') }}" alt="logo" width="175" height="57">
            </a>
          </div>
        </div>
        <div class="card border border-dark rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <form action="{{ route('password.email') }}" method="POST">
              @csrf
              <div class="alert alert-success alert-dismissible fade show small" role="alert">
                  Password reset successful. You may now login.
                <button type="button" class="btn-close btn-close-xs small" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <x-success-message type="error"></x-success-message>
              <div class="row gy-3 overflow-hidden">
                <h4 class="text-center mb-4">Forgot Password</h4>
                <x-form-field>
                  <x-form-floating type="email" name="email" id="email" placeholder="choi@kupal.com" label="Email" value="{{ old('email') }}" />
                  <x-form-error name="email" />
                </x-form-field>
                <div class="col-12">
                  <div class="d-grid">
                    <x-form-button class="btn-dark">Send Password Reset Link</x-form-button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection