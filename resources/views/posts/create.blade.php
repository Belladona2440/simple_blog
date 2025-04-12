@extends('layouts.app')
@section('content')
<div class="container">
  <h4 class="text-center mt-4 mb-4">Gawa ka post mo</h4>
<div class="card border border-dark rounded-4">
  <div class="card-body p-3 p-md-4 p-xl-5">
    <form action="{{ route('post.store') }}" method="POST">
      @csrf
      <div class="row gy-3 overflow-hidden">
        <x-form-field>
          <x-form-floating name="post_category" id="post_category" placeholder="Category" label="Category" value="{{ old('post_category') }}" />
          <x-form-error name="post_category" />
        </x-form-field>
        <x-form-field>
          <x-form-floating type="text" name="post_title" id="post_title" placeholder="Title" label="Title" />
          <x-form-error name="post_title" />
        </x-form-field>
        <x-form-field>
          <textarea name="post_content" id="post_content" cols="100" rows="15" placeholder="Start typing..."></textarea>
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
</div>
@endsection