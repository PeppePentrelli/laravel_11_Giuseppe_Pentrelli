<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Illuminate\Http\Request;
use App\Mail\RichiestaAdozioneMail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public  function welcomeFunction()
    {
        return view('welcome');
    }

    // Invio Email 

public function send_email(Request $request) { 
    
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:2000',
    ]);

    $contactMail = [
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'message' => $validatedData['message'],
    ];


    Mail::to('Canile@noReplay.it')->send(new AdminMail($contactMail));


    return redirect()->back()->with('message', 'La tua richiesta è stata inviata correttamente, sarai ricontattato al più presto da un nostro volontario.');
}  

// Invio Modulo di adozione

public function adoption_form(Request $request) 
{ 
   
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address_city' => 'required|string|max:255',
        'address_street' => 'required|string|max:255',
        'address_zip' => 'required|string|max:20',
        'living_situation' => 'required|in:apartment,house_with_garden',
        'num_adults' => 'required|integer|min:1',
        'num_children' => 'required|integer|min:0',
        'previous_pets' => 'nullable|string|max:1000',
    ]);

    $datiRichiesta = $validated;

    Mail::to('Canile@noReplay.it')->send(new RichiestaAdozioneMail($datiRichiesta));

    return redirect()->back()->with('messaggio_adozione', 'La richiesta di adozione è stata inviata con successo!');
}

}
