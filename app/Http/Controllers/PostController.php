<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Toaster;

//use Alert;

class PostController extends Controller
{
  public function index() {
    $posts = Post::latest()->paginate(4);
    //$posts = Post::orderBy('created_at', 'desc')->paginate(4);
    return view('home', compact('posts'));
  }
  public function create() {
    return view('posts.create');
  }

  public function store(Request $request) {
    //dd($request->file('post_img'));
    $validated = $request->validate([
      'category' => ['required'],
      'title' => ['required'],
      'content' => ['required'],
      'bg_img' => ['required', 'image', 'mimes:jpeg,jpg,png,gif', 'max:8192']
    ]);

    //dont store script tags
    $validated['category'] = strip_tags($validated['category']);
    $validated['title'] = strip_tags($validated['title']);
    $validated['content'] = strip_tags($validated['content']); 

    if ($request->hasFile('bg_img')) {
      $imagePath = $request->file('bg_img')->store('posts', 'public');
      $validated['bg_img'] = $imagePath;
    }

    //get user id
    $validated['user_id'] = auth()->id();
    $validated['author'] = auth()->user()->name;
    Post::create($validated);
    //Alert::success('Successfully created', 'Your blog is now posted');
    toast('Your blog has been posted!', 'success');
    return redirect('/'); 
  }

  public function show($id) {
    $post = Post::findOrFail($id);
    
    return view('posts.single-post', compact('post'));
  }

  public function display() {
    //$posts = Post::latest()->paginate(9);
    $posts = Post::where('user_id', auth()->id())->latest()->paginate(9);
    return view('posts.my-posts', compact('posts'));
  }

  public function edit(Post $post) {
    //$post = Post::findOrFail($id);
    return view('posts.edit', compact('post'));
  }

  public function update(Request $request, Post $post) {
    $validated = $request->validate([
      'category' => ['required'],
      'title' => ['required'],
      'content' => ['required'],
      'bg_img' => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif', 'max:8192']
    ]);

    //dont store script tags
    $validated['category'] = strip_tags($validated['category']);
    $validated['title'] = strip_tags($validated['title']);
    $validated['content'] = strip_tags($validated['content']); 

    if ($request->hasFile('bg_img')) {
      $imagePath = $request->file('bg_img')->store('posts', 'public');
      $validated['bg_img'] = $imagePath;
    } else {
      unset($validated['bg_img']);
    }

    //get user id
    $validated['user_id'] = auth()->id();
    $validated['author'] = auth()->user()->name;

    $post->update($validated);

    return view('posts.single-post', compact('post')); 
  }

  public function destroy(Post $post) {
    $post->delete();

    //return redirect()->route('my-posts.display');
    //return redirect()->back()->with('message', 'Deleted successfully');
    $title = "Delete blog post!";
    $text = "Sure ka na ba?";
    confirmDelete($title, $text);
    return redirect()->back();
  }

}
