<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuriosityController extends Controller
{
     public  function show()
    {
        return view('curiosita.curiosita');
    }
}
