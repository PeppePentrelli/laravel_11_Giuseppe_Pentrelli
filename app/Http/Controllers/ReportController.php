<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\StoryReportMail;
use App\Models\Story;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log; 

class ReportController extends Controller
{
    /**
  
     *
     * @param  \App\Models\Story  $story 
     * @return \Illuminate\View\View
     */
    public function create(Story $story) 
    {
        return view('reports.create', [
            'story_id' => $story->id,
            'story_title' => $story->title,
   'story_author_name' => $story->user->name ?? 'Utente sconosciuto',
            'default_report_message' => $story->default_report_message ?? '',
        ]);
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'reason' => 'required|string|min:10|max:2000',
            'story_id' => 'nullable|exists:stories,id',
        ]);

        $story = null;
        if (isset($validatedData['story_id'])) {
            $story = Story::find($validatedData['story_id']);
        }

             Mail::to('admin@example.com')->send(new StoryReportMail($validatedData, $story));
   return redirect()->route('stories.index')->with('success', 'La tua segnalazione è stata inviata correttamente. Grazie per il tuo contributo!');

    }

}