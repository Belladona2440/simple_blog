<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
  <div class="container px-2 px-lg-2">
    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('storage/logo.png') }}" alt="logo" width="165" height="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto py-4 py-lg-0">
              <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('home') }}">Home</a></li>
              @auth
              <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">My posts</a></li>
              <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Bloggers</a></li>
              <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('profile') }}">Profile</a></li>
              @endauth
          </ul>
          @guest
          <form action="{{ route('login.create') }}" method="get">
            @csrf
            <x-form-button>
              Sign in
            </x-form-button>
          </form>
          @endguest
          @auth
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <x-form-button>
              Logout
            </x-form-button>
          </form>
          @endauth
      </div>
  </div>
</nav>