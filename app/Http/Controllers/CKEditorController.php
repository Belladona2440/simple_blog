<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CKEditorController extends Controller
{
  public function upload(Request $request) {
    if ($request->hasFile('upload')) {
      $file = $request->file('upload');
      $filename = time() . '_' . $file->getClientOriginalName();
      $path = $file->storeAs('public/media', $filename);

      //$url = asset(Storage::url($path));
      $url = asset('storage/media/' . $filename);

      return response()->json([
        'uploaded' => 1,
        'fileName' => $filename,
        'url' => $url
      ]); 
    }
    
    return response()->json([
      'uploaded' => 0,
      'error' => ['message' => 'No file uploaded.']
    ]);
  }

  /* public function upload(Request $request) {
    if ($request->hasFile('upload')) {

      $originalName = $request->file('upload')->getClientOriginalName();
      $fileName = pathinfo($originalName, PATHINFO_FILENAME);
      $extension = $request->file('upload')->getClientOriginalExtension();
      $fileName = $fileName.'_'.time().'.'.$extension;
      
      $request->file('upload')->move(public_path('media', $fileName));

      $url = asset('media/'.$fileName);
      return response()->json([
      'fileName' => $fileName, 
      'uploaded' => 1, 
      'url' => $url
      ]);
    }
  } */
}
