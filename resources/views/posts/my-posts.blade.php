@extends('layouts.app')
@section('content')
<main class="main">
  <div class="page-title position-relative">
    <div class="container d-flex justify-content-between align-items-center">
      <h1 class="mb-0">My Posts</h1>
      <form action="" class="d-flex align-items-center gap-2">
        <h3 class="widget-title mb-0">Search</h3>
        <input type="text" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-dark" title="Search">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <section id="blog-posts" class="blog-posts section mb-4">
          <div class="container">
            <div class="row gy-4">
              @foreach($posts as $post)
              <div class="col-lg-4">
                <article class="position-relative h-100">
                  <div class="post-img position-relative overflow-hidden" style="height: 250px;">
                    <img src="{{ asset('storage/'.$post->bg_img) }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="thumbnail">
                    <span class="post-date">{{ $post->created_at->format('F j, Y') }}</span>
                  </div>
                  <div class="post-content d-flex flex-column">
                    <h3 class="post-title">{{ Str::limit($post->title, 50, '...') }}</h3>
                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2">{{ $post['author'] }}</span>
                      </div>
                      <span class="px-3 text-black-50">|</span>
                      <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i> <span class="ps-2">{{ $post['category'] }}</span>
                      </div>
                    </div>
                    <p>{{ Str::limit($post->content, 100, '...')}}</p>
                    <hr>
                    <x-post-readmore :post="$post"/>
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
    </div>
  </div>
</main>
@endsection