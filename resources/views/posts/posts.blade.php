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
      <div class="d-flex gap-2">
        @can('update', $post)
        <a href="{{ route('post.update', [$post->id]) }}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
        @endcan
        @can('delete', $post)
        <form action="{{ route('post.destroy', [$post->id]) }}" method="post">
          @csrf
          @method('DELETE')
          <x-form-button class="btn-danger"><i class="bi bi-trash3"></i></x-form-button> 
        </form>
        @endcan
        {{-- <a href="{{ route('post.destroy', [$post->id]) }}" class="btn btn-warning"><i class="bi bi-trash3"></i></a> --}}
      </div>
    </div>
  </div>
</article>