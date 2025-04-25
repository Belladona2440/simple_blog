@extends('layouts.app')
@section('content')
<header class="masthead" style="background-image: url('{{ asset('storage/'.$post->bg_img) }}')">
  <div class="container position-relative px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
              <div class="post-heading">
                  <h1>{{ $post->title }}</h1>
                  <h2 class="subheading"></h2>
                  <span class="meta">
                      Posted by
                      <a href="#!">{{ $post->author }}</a>
                      on {{ $post->created_at->format('F j, Y') }}
                  </span>
              </div>
          </div>
      </div>
  </div>
</header>
<article class="mb-2">
  <div class="container px-4 px-lg-5">
    <div class="row">
      <div class="col-6 justify-content-start mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-secondary px-">Back to posts</a>
      </div>
      {{-- @auth
      <div class="col-6 justify-content-end d-flex gap-4 mb-4">
        <a href="{{ route('post.edit', [$post->id]) }}" class="btn btn-dark"><i class="bi bi-pencil"></i> Edit blog</a>
      </div>
      @endauth --}}
    </div>
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-12">
        <p>{{$post->content}}</p>
        <h2 class="section-heading"></h2>
        <span class="caption text-muted"></span>
      </div>
    </div>
  </div>
</article>
@endsection
