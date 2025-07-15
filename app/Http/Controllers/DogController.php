<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DogController extends Controller
{



    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
             $dogs = Dog::all(); 
        return view('dogs.index', compact('dogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('dogs.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
   
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'photo' => 'nullable|image|max:2048',
        'approx_age' => 'nullable|integer|min:0',
        'description' => 'required|string',
    ]);

 
    if ($request->hasFile('photo')) {
        $validatedData['photo'] = $request->file('photo')->store('dogs_photos', 'public');
    } else {
        $validatedData['photo'] = null;
    }

 
$validatedData['user_id'] = Auth::id();

 
    Dog::create($validatedData);

  
    return redirect()->route('dogs.index')->with('success', 'Cane aggiunto con successo!');
}

    /**
     * Display the specified resource.
     */
       public function show(Dog $dog) 
    {
        return view('dogs.show', compact('dog')); 
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dog $dog)
    {
               return view('dogs.edit', compact('dog')); 

    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Dog $dog)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'approx_age' => 'nullable|integer|min:0',
            'description' => 'required|string',
        ]);

        $photoPath = $dog->photo; 

        if ($request->hasFile('photo')) {

            if ($dog->photo && Storage::disk('public')->exists($dog->photo)) {
                Storage::disk('public')->delete($dog->photo);
            }
           
            $photoPath = $request->file('photo')->store('dogs_photos', 'public');
        }

    
        $dog->update([
            'name' => $validatedData['name'],
            'photo' => $photoPath, 
            'approx_age' => $validatedData['approx_age'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('dogs.show', $dog)->with('success', 'Cane aggiornato con successo!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog)
    {
        if ($dog->photo && Storage::disk('public')->exists($dog->photo)) {
            Storage::disk('public')->delete($dog->photo);
        }

        $dog->delete();

        return redirect()->route('dogs.index')->with('success', 'Cane eliminato con successo!');
    }
}
