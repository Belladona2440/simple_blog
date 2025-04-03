@extends('layouts.auth')
@section('content')
<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="mb-5">
          <div class="text-center mb-4">
            <a href="#">
              <img src="{{ asset('storage/logo.png') }}" alt="logo" width="175" height="57">
            </a>
          </div>
        </div>
        <div class="card border border-dark rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <form action="#!">
              <div class="row gy-3 overflow-hidden">
                <h4 class="text-center mb-4">Mag sign in ka na</h4>
                <div class="col-12">
                  <div class="form-floating border border-dark rounded mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating border border-dark rounded mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Keep me logged in
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-4">
          <a href="{{ route('register') }}" class="link-secondary text-decoration-none">Create new account</a>
          <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection