<x-layout>

    <section class="container my-5 text-center">
        <h1 class="display-4 fw-bold">Storie Felici di Adozione</h1>
        <p class="lead mt-3">
            In questa pagina raccogliamo le testimonianze commoventi di chi ha adottato un amico a quattro zampe dal
            nostro canile.
        </p>
    </section>

    <div class="container my-4">
        <h2 class="mb-4 text-start">Tutte le storie</h2>
       @guest
            <p><a class="forgot-link" href="{{ route('register') }}">Iscriviti</a> per postare anche tu la tua storia!</p>
       @endguest

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (isset($stories) && $stories->isEmpty())
            <p>Nessuna storia disponibile.</p>
        @elseif(isset($stories))
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                @foreach ($stories as $story)
                    <div class="col shadow-xl">
                        <div class="card h-100 shadow rounded-4 overflow-hidden position-relative">

                            <!-- Header utente -->
                            <div class="d-flex align-items-center p-3 border-bottom">
                                <img src="{{ $story->user->img_user ? asset('storage/' . $story->user->img_user) : asset('media/default-profile.png') }}"
                                    class="rounded-circle me-2 imgProfileBorder" width="40" height="40" alt="Profilo">
                                <strong class="text-start">{{ $story->user->name ?? 'Utente sconosciuto' }}</strong>

                            </div>

                            <!-- Immagine -->
                            <h2 class="text-center">{{ $story->title }}</h2>
<img class="img-fluid" src="{{ $story->immagine ? asset('storage/' . $story->immagine) : asset('media/default-story.png') }}" 
     class="card-img-top object-fit-cover"
     style="height: 200px; object-fit: contain" alt="immagine storia">

                            <!-- Testimonianza con scroll -->
                            <div class="card-body">
                                <div class="overflow-auto" style="max-height: 100px;">
                                    <p class="card-text small">{{ $story->testimonianza }}</p>
                                </div>
                                                         <p class="comment-link mt-3"><strong>Pubblicato da:</strong>
    @if ($story->user)
        <a class="comment-link" href="{{ route('users.show', $story->user) }}">{{ $story->user->name }}</a>
    @else
        Utente sconosciuto
    @endif
</p>
<small><a class="comment-link" href="{{ route('stories.show', $story->id) }}">Vedi dettagli</a></small>
                            </div>

                            <!-- Azioni -->
                            @auth
                                @if ($story->user_id === auth()->id())
                                    <div class="card-footer bg-white d-flex justify-content-between">
                                        <a href="{{ route('stories.edit', $story) }}"
                                            class="btn btn-sm btn-outline-primary">Modifica</a>
                                        <form action="{{ route('stories.destroy', $story) }}" method="POST"
                                            onsubmit="return confirm('Sei sicuro di eliminare questa storia?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger">Elimina</button>
                                        </form>
                                    </div>
                                @endif
                                <a href="{{ route('reports.create', ['story' => $story->id]) }}" class="btn ">Segnala
                                    Storia</a>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Non ci sono storie da mostrare.</p>
        @endif

        @auth
            <div class="text-center mt-5">
                <a href="{{ route('stories.create') }}" class="btn btnCustom">Crea nuova storia</a>
            </div>
        @endauth
    </div>

    <hr>

    <div class="container mt-4">
        <h2 class="mb-4 text-center h1">Sezione Adozioni</h2>
        <h3 class="text-center">Cagnolini in cerca di amore </h3>
    <p class="lead text-center">Scegli la categoria di animali che desideri visualizzare.</p>

    <div class="row justify-content-center mt-5">
        {{-- Card per i Cani --}}
        <div class="col-md-5 mb-4">
            <div class="card h-100 shadow-lg text-center">
                <img src="{{ asset('media/img-card.dog.jpg') }}" class="card-img-top img-fluid" alt="Cani" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h2 class="card-title">I Nostri Cani</h2>
                    <p class="card-text">Scopri i nostri amici a quattro zampe che cercano una casa per sempre.</p>
                  
                    <a href="{{ route('dogs.index') }}" class="btn staticBtn btn-lg mt-auto">Vedi i Cani</a>
                </div>
            </div>
        </div>

        {{-- Card per i Gatti --}}
        <div class="col-md-5 mb-4">
            <div class="card h-100 shadow-lg text-center">
                <img src="{{ asset('media/img-card.cat.jpg') }}" class="card-img-top" alt="Gatti" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h2 class="card-title">I Nostri Gatti</h2>
                    <p class="card-text">Esplora la sezione dedicata ai nostri adorabili felini in cerca di adozione.</p>
                    <a href="{{ route('cats.index') }}" class="btn staticBtn btn-lg mt-auto">Vedi i Gatti</a>
                </div>
            </div>
        </div>
    </div>
</div>



</x-layout>
