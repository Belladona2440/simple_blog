@extends('layouts.app')
@section('content')
  <h4 class="text-center mt-4 mb-4">Gawa ka post mo</h4>
<div class="card border border-dark rounded-4">
  <div class="card-body p-3 p-md-4 p-xl-5">
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row gy-3 overflow-hidden">
        <x-form-field>
          <x-form-floating name="category" id="category" placeholder="Category" label="Category" value="{{ old('category') }}" />
          <x-form-error name="category" />
        </x-form-field>
        <x-form-field>
          <x-form-floating type="text" name="title" id="title" placeholder="Title" label="Title" value="{{ old('title') }}" />
          <x-form-error name="title" />
        </x-form-field>
        <x-form-field>
          <x-form-floating type="file" name="bg_img" id="bg_img" label="Upload Background" ></x-form-floating>
          <x-form-error name="bg_img" />
        </x-form-field>
{{--         <div class="mb-3">
          <img id="imagePreview" src="#" alt="image preview" style="max-width: 300px, display: none;">
        </div> --}}
        <x-form-field>
          <textarea name="content" id="content" cols="100" rows="15" placeholder="Start typing...">{{ old('content') }}</textarea>
          <x-form-error name="content" />
        </x-form-field>
        <x-form-checkbox name="remember_me" id="remember_me" for="remember_me" label="Post anonymously" />
        <div class="col-12">
          <div class="d-grid">
            <x-form-button>Add Post</x-form-button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection