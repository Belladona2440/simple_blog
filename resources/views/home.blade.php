@extends('layouts.app')
@section('content')
@include('partials.page-header')
<main class="main">
  @include('partials.posts-header')
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <section id="blog-posts" class="blog-posts section mb-4">
          <div class="container">
            <div class="row gy-4">
              @foreach($posts as $post)
              <div class="col-lg-6">
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
      <div class="col-lg-4 sidebar">
        <div class="widgets-container">
          <div class="recent-posts-widget widget-item">
            <h3 class="widget-title">Recent Posts</h3>
            <div class="post-item">
              <img src="{{ asset('storage/media') }}" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
