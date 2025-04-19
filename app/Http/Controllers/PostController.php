<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
    $incomingFields = $request->validate([
      'category' => ['required'],
      'title' => ['required'],
      'content' => ['required'],
      'bg_img' => ['required', 'image', 'mimes:jpeg,jpg,png,gif', 'max:8192']
    ]);

    //dont store script tags
    $incomingFields['category'] = strip_tags($incomingFields['category']);
    $incomingFields['title'] = strip_tags($incomingFields['title']);
    //$incomingFields['content'] = strip_tags($incomingFields['content']); 

    if ($request->hasFile('bg_img')) {
      $imagePath = $request->file('bg_img')->store('posts', 'public');
      $incomingFields['bg_img'] = $imagePath;
    }

    //get user id
    $incomingFields['user_id'] = auth()->id();
    $incomingFields['author'] = auth()->user()->name;
    Post::create($incomingFields);
    return redirect('/'); 
  }

  public function upload() {
    
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
}
