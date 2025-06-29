<?php

namespace App\Http\Controllers;

use App\Models\Cat; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Auth;
class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Cat::all();
        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cats.create');
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
            $validatedData['photo'] = $request->file('photo')->store('cats_photos', 'public');
        } else {
            $validatedData['photo'] = null;
        }

        $validatedData['user_id'] = Auth::id();

        Cat::create($validatedData);

        return redirect()->route('cats.index')->with('success', 'Gatto aggiunto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        return view('cats.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $cat)
    {
        return view('cats.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'approx_age' => 'nullable|integer|min:0',
            'description' => 'required|string',
        ]);

        $photoPath = $cat->photo;

        if ($request->hasFile('photo')) {
            if ($cat->photo && Storage::disk('public')->exists($cat->photo)) {
                Storage::disk('public')->delete($cat->photo);
            }
            $photoPath = $request->file('photo')->store('cats_photos', 'public');
        }

        $cat->update([
            'name' => $validatedData['name'],
            'photo' => $photoPath,
            'approx_age' => $validatedData['approx_age'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('cats.show', $cat)->with('success', 'Gatto aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        if ($cat->photo && Storage::disk('public')->exists($cat->photo)) {
            Storage::disk('public')->delete($cat->photo);
        }

        $cat->delete();

        return redirect()->route('cats.index')->with('success', 'Gatto eliminato con successo!');
    }
}