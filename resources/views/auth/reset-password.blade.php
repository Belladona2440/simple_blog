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
            <form action="{{ route('password.update') }}" method="POST">
              @csrf
              <input type="hidden" name="token" value="{{ request()->route('token') }}">
              <div class="row gy-3 overflow-hidden">
                <h4 class="text-center mb-4">Reset Password</h4>
                <x-form-field>
                  <x-form-floating type="email" name="email" id="email" placeholder="Email" label="Email" />
                </x-form-field>
                <x-form-field>
                  <x-form-floating type="password" name="password" id="password" placeholder="New Password" label="New Password" />
                  <x-form-error name="password" />
                </x-form-field>
                <x-form-field>
                  <x-form-floating type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" label="Confirm Password" />
                  <x-form-error name="password_confirmation" />
                </x-form-field>
                <div class="col-12">
                  <div class="d-grid">
                    <x-form-button class="btn-dark">Sign in</x-form-button>
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