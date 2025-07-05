<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        

             $stories = Story::all();
             
        return view('stories.index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
              return view('stories.create');;
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $validated = $request->validate([

        'immagine' => '|max:2048',
        'testimonianza' => 'required|string',
        'title' => 'required|string|max:255'
    ]);

 
$imagePath = null; 

if ($request->hasFile('immagine')) {
    $imagePath = $request->file('immagine')->store('stories', 'public');
}




  
      $story = new Story([
        'title' => $validated['title'], 
        'immagine' => $imagePath,
        'testimonianza' => $validated['testimonianza'],
    ]);
    $story->user_id = Auth::user()->id;
    $story->save();

    return redirect()->route('stories.index')->with('success', 'Storia creata con successo!');
}


    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
      
    return view('stories.show', compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
               // Controlla che l'utente sia il proprietario della storia
        if ($story->user_id !== Auth::id()) {
            abort(403);
        }
        return view('stories.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Story $story)
    {
    
        if ($story->user_id !== Auth::id()) {
            abort(403); 
        }

    
        $rules = [
            'title' => 'required|string|max:255', 
            'testimonianza' => 'required|string',
  
            'immagine' => 'nullable|image|max:2048', 
        ];

        $validatedData = $request->validate($rules);

        $imagePath = $story->immagine; 

        if ($request->hasFile('immagine')) {

            if ($story->immagine && Storage::disk('public')->exists($story->immagine)) {
                Storage::disk('public')->delete($story->immagine);
            }

            $imagePath = $request->file('immagine')->store('stories', 'public');
        }

        $story->title = $validatedData['title'];
        $story->testimonianza = $validatedData['testimonianza'];
        $story->immagine = $imagePath; 

        $story->save();

        return redirect()->route('stories.index', $story)->with('success', 'Storia aggiornata con successo!');
    }

        public function destroy(Story $story)
    {
       
        if ($story->user_id !== Auth::id()) {
            abort(403); 
        }

        if ($story->immagine && Storage::disk('public')->exists($story->immagine)) {
            Storage::disk('public')->delete($story->immagine);
        }

        $story->delete();

        return redirect()->route('stories.index')->with('success', 'Storia eliminata con successo!');
    }

}
