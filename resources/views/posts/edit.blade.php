@extends('layouts.app')
@section('content')
  <h4 class="text-center mt-4 mb-4">Update mo na</h4>
  <div class="container">
    <div class="card border border-dark rounded-4">
      <div class="card-body p-3 p-md-4 p-xl-5">
        <form action="{{ route('post.update', [$post->id]) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="row gy-3 overflow-hidden">
            <x-form-field>
              <x-form-floating name="category" id="category" placeholder="Category" label="Category" value="{{ $post->category }}" />
              <x-form-error name="category" />
            </x-form-field>
            <x-form-field>
              <x-form-floating type="text" name="title" id="title" placeholder="Title" label="Title" value="{{ $post->title }}" />
              <x-form-error name="title" />
            </x-form-field>
            <x-form-field>
              @if (isset($post->bg_img))
                <p>Background</p>
                <img src="{{ asset('storage/'. $post->bg_img) }}" alt="preview" class="img-fluid mb-2 rounded" height="50" width="65">
              @endif 
              <x-form-floating type="file" name="bg_img" id="bg_img" label="Upload Background">{{ $post->bg_img }}</x-form-floating>
              <x-form-error name="bg_img" />
            </x-form-field>
            <x-form-field>
              <textarea name="content" id="content" cols="100" rows="15" placeholder="Start typing..." >{{ $post->content }}</textarea>          
              <x-form-error name="content" />
            </x-form-field>
            <x-form-checkbox name="remember_me" id="remember_me" for="remember_me" label="Post anonymously" value=""/>
            <div class="col-12 d-flex justify-content-between">
              <div>
                <a href="{{ url()->previous() }}" class="btn btn-secondary mx-lg-5">Back</a>
              </div>
              <div>
                <x-form-button class="btn-dark mx-lg-5">Update Post</x-form-button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection