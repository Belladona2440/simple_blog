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
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
              <p>{{$post->content}}</p>
              <h2 class="section-heading"></h2>
              {{-- <a href="#!"><img class="img-fluid" src="assets/img/post-sample-image.jpg" alt="..." /></a> --}}
              <span class="caption text-muted"></span>
              {{-- <p>
                  <a href="http://spaceipsum.com/"></a>
                  &middot; Images by
                  <a href="https://www.flickr.com/photos/nasacommons/"></a>
              </p> --}}
          </div>
      </div>
  </div>
</article>
@endsection
