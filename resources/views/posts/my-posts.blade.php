@extends('layouts.app')
@section('content')
<main class="main">
  @include('partials.posts-header')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <section id="blog-posts" class="blog-posts section mb-4">
          <div class="container">
            <div class="row gy-4">
              @foreach($posts as $post)
              <div class="col-lg-4 col-md-4">
                @include('posts.posts')
              </div>
              @endforeach
              <div>
                {{ $posts->links('pagination::bootstrap-5') }}
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
@endsection