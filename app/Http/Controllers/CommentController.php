<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
   public function store(Request $request, Post $post)
{
    $request->validate([
        'body' => 'required|string|max:1000',
    ]);

    $post->comments()->create([
        'body' => $request->body,
        'user_id' => Auth::id(),
    ]);

    return redirect()->route('posts.show', $post)->with('success', 'Commento aggiunto!');
}

}
