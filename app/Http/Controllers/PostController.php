<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    // $post->user_id = Auth::id();



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(10);
    return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Devi essere loggato per creare un post.');
    }

    $request->validate([
        'titolo' => 'required|string|max:255',
        'paragrafo' => 'required|string',
        'category' => 'required|string|max:255',
        'imgPost' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imgPost = null;

    if ($request->hasFile('imgPost')) {
        $imgPost = $request->file('imgPost')->store('posts', 'public');
    }

    $post = new Post();
    $post->titolo = $request->titolo;
    $post->paragrafo = $request->paragrafo;
    $post->category = $request->category;
    $post->imgPost = $imgPost; 
    $post->user_id = Auth::id();
    $post->save();

    return redirect()->route('posts.index')->with('success', 'Post creato con successo!');
}

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
    return view('posts.show', compact('post'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
    if (Auth::id() !== $post->user_id) {
        abort(403);
    }

    return view('posts.edit', compact('post')); 


    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Post $post)
{
    if (Auth::id() !== $post->user_id) {
        abort(403);
    }

    $request->validate([
        'titolo' => 'required|string|max:255',
        'paragrafo' => 'required|string',
        'imgPost' => 'nullable|image|max:2048',
    ]);

    $post->titolo = $request->titolo;
    $post->paragrafo = $request->paragrafo;

    if ($request->hasFile('imgPost')) {
        if ($post->imgPost) {
            Storage::disk('public')->delete($post->imgPost);
        }
        $post->imgPost = $request->file('imgPost')->store('posts', 'public');
    }

    $post->save();

    return redirect()->route('posts.show', $post->id)->with('success', 'Post aggiornato con successo!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

    if (Auth::id() !== $post->user_id) {
        abort(403, 'Non sei autorizzato a eliminare questo post.');
    }

    if ($post->imgPost) {
        Storage::delete('public/' . $post->imgPost);
    }

    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post eliminato con successo.');
    }
}
