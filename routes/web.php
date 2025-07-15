<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdozioniController;
use App\Http\Controllers\CuriosityController;
use App\Http\Controllers\VolunteeringContoller;
use App\Http\Controllers\CommentController;

// Public Controller
Route::get('/', [PublicController::class , 'welcomeFunction'])->name('welcome');

// Rotte Per form di contatti
Route::post('/send', [PublicController::class , 'send_email'] )->name('send_email');
Route::post('/adopt', [PublicController::class , 'adoption_form'] )->name('adoption_form');

// Rotta per inviare la segnalazione
Route::get('/stories/{story}/report', [ReportController::class, 'create'])->name('reports.create');
Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');

// Adozioni Controller
Route::get('/Adozioni', function () {
    return view('stories.index'); 
})->name('Adozioni');



Route::get('adozioni.Adozioni', function () {
    return view('adozioni.Adozioni'); 
})->name('Adozioni');

Route::get('/stories/{story}', [StoryController::class, 'show'])->name('stories.show');

Route::get('/Contatti', [AdozioniController::class , 'PaginaContattiFunction'])->name('Contatti');


// Rotte pubbliche per le Storie 
Route::get('/tutte/storie', [StoryController::class, 'index'])->name('stories.index');
Route::get('/dettaglio/storia/{story}', [StoryController::class, 'show'])->name('stories.show');


// Rotta per il profilo utente 
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');



// Rotte Curiosita

Route::get('/curiosita', [CuriosityController::class, 'show'])->name('curiosity.show');


// Rotte Volontariato

Route::get('volontariato.volontariato', [VolunteeringContoller::class, 'volunteeringFunction'])->name('volontariato.volontariato');


// Rotte blog

// Elenco dei post 
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Mostra il singolo post 
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');


Route::middleware('auth')->group(function () {
    // Form per creare un nuovo post
    Route::get('posts.create', [PostController::class, 'create'])->name('posts.create');
    
    // Salvataggio nuovo post
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});



Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');




// Rotte protette
Route::middleware('auth')->group(function () {

    Route::get('/crea/storia', [StoryController::class, 'create'])->name('stories.create');
    Route::post('/salva/storia', [StoryController::class, 'store'])->name('stories.store');
    Route::get('/modifica/storia/{story}', [StoryController::class, 'edit'])->name('stories.edit');
    Route::put('/aggiorna/storia/{story}', [StoryController::class, 'update'])->name('stories.update');
    Route::delete('/elimina/storia/{story}', [StoryController::class, 'destroy'])->name('stories.destroy');

});

// Rotte pubbliche cani
Route::resource('dogs', DogController::class)->only(['index', 'show']);

// Rotte protette cani 
Route::middleware('auth')->group(function () {
    Route::get('/crea/cane', [DogController::class, 'create'])->name('dogs.create');
    Route::post('/salva/cane', [DogController::class, 'store'])->name('dogs.store');
    Route::get('/modifica/cane/{dog}', [DogController::class, 'edit'])->name('dogs.edit');
    Route::put('/aggiorna/cane/{dog}', [DogController::class, 'update'])->name('dogs.update');
    Route::delete('/elimina/cane/{dog}', [DogController::class, 'destroy'])->name('dogs.destroy');
});

// Rotte pubbliche gatti
Route::resource('cats', CatController::class)->only(['index', 'show']);

// Rotte protette gatti 
Route::middleware('auth')->group(function () {
    Route::get('/crea/gatto', [CatController::class, 'create'])->name('cats.create');
    Route::post('/salva/gatto', [CatController::class, 'store'])->name('cats.store');
    Route::get('/modifica/gatto/{cat}', [CatController::class, 'edit'])->name('cats.edit');
    Route::put('/aggiorna/gatto/{cat}', [CatController::class, 'update'])->name('cats.update');
    Route::delete('/elimina/gatto/{cat}', [CatController::class, 'destroy'])->name('cats.destroy');
});


// Privacy

Route::get('legal', function () {
    return view('privacy.legal'); 
})->name('privacy.legal');
