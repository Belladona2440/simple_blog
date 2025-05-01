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
                <article class="position-relative h-100">
                  <div class="post-img position-relative overflow-hidden" style="height: 250px;">
                    <img src="{{ asset('storage/'.$post->bg_img) }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="thumbnail">
                    <span class="post-date">{{ $post->created_at->format('F j, Y') }}</span>
                  </div>
                  <div class="post-content d-flex flex-column">
                    <h3 class="post-title">{{ Str::limit($post->title, 30, '...') }}</h3>
                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2">{{ $post['author'] }}</span>
                      </div>
                      <span class="px-3 text-black-50">|</span>
                      <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i> <span class="ps-2">{{ $post['category'] }}</span>
                      </div>
                    </div>
                    <p>{{ Str::limit($post->content, 130, '...')}}</p>
                    <hr>
                    <div class="d-flex align-items-center justify-content-between">
                      <x-post-readmore :post="$post"/>
                      @auth
                      <div class="d-flex gap-2">
                        <a href="{{ route('post.update', [$post->id]) }}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('post.destroy', [$post->id]) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <x-form-button class="btn-danger"><i class="bi bi-trash3"></i></x-form-button> 
                          {{-- <button type="submit" class="btn"><i class="bi bi-trash3"></i></button> --}}
                        </form>
                        {{-- <a href="{{ route('post.destroy', [$post->id]) }}" class="btn btn-warning"><i class="bi bi-trash3"></i></a> --}}
                      </div>
                      @endauth
                    </div>
                  </div>
                </article>
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
