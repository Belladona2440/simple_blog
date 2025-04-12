<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function create() {
    return view('posts.create');
  }

  public function store(Request $request) {
    $incomingFields = $request->validate([
      'post_category' => ['required'],
      'post_title' => ['required'],
      'post_content' => ['required']
    ]);
    //dd($incomingFields);
    //dont store script tags
    $incomingFields['post_category'] = strip_tags($incomingFields['post_category']);
    $incomingFields['post_title'] = strip_tags($incomingFields['post_title']);
    $incomingFields['post_content'] = strip_tags($incomingFields['post_content']); 

    //get user id
    $incomingFields['user_id'] = auth()->id();
    Post::create($incomingFields);
    return redirect('/'); 
  }
}
