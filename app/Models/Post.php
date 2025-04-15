<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
    'category',
    'title',
    'content',
    'user_id',
    'author',
    'bg_img'
  ];
}
