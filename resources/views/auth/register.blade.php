@extends('layouts.auth')
@section('content')
<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="mb-5">
          <div class="text-center mb-4">
            <a href="{{ route('register.create') }}">
              <img src="{{ asset('storage/logo.png') }}" alt="logo" width="175" height="57">
            </a>
          </div>
        </div>
        <div class="card border border-dark rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <form action="{{ route('register.store') }}" method="POST">
              @csrf
              <div class="row gy-3 overflow-hidden">
                <h4 class="text-center mb-4">Mag register ka na</h4>
                <x-form-field>
                  <x-form-floating name="name" label="Name" id="name" placeholder="Choi Kupal" label="Name" />
                  <x-form-error name="name" />
                </x-form-field>
                <x-form-field>
                  <x-form-floating type="email" name="email" id="email" placeholder="choi@kupal.com" label="Email" />
                  <x-form-error name="email" />
                </x-form-field>
                <x-form-field>
                  <x-form-floating type="password" name="password" id="password" placeholder="Password" label="Password" />
                  <x-form-error name="password" />
                </x-form-field>
                <x-form-field>
                  <x-form-floating type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" label="Confirm password" />
                  <x-form-error name="password_confirmation" />
                </x-form-field>
                <x-form-checkbox name="remember_me" id="remember_me" for="remember_me" label="Keep me signed in" />
                <div class="col-12">
                  <div class="d-grid">
                    <x-form-button>Register</x-form-button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-4">
          <p>Already have an account?<a href="{{ route('login') }}" class="link-secondary text-decoration-none"> Sign in.</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection