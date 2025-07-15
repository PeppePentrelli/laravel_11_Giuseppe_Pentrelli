<x-layout>
    <h1 class="mb-4 text-center">Gatti Disponibili per Adozione</h1>


    @auth
        <div class="text-center mt-5">
            <a href="{{ route('cats.create') }}" class="btn btnCustom">Inserisci nuova adozione</a>
        </div>
    @endauth


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif


    @if ($cats->isEmpty())
        <div class="alert alert-info text-center">Nessun Gatto disponibile per l'adozione al momento. Torna a trovarci
            presto!</div>
    @else
        <section class="container">
            <div class="row" id="section-cat">
                @foreach ($cats as $cat)
                    <div class="col-md-4 mb-4 my-4 mx-auto ">
                        <div class="card h-100 shadow-on-green border-0 rounded-lg">
                            @if ($cat->photo)
                                <img src="{{ asset('storage/' . $cat->photo) }}"
                                    class="card-img-top img-fluid rounded-top" alt="{{ $cat->name }}"
                                    style="height: 220px; object-fit: cover;">
                            @else
                                <img src="{{ asset('media/default-cat.png') }}"
                                    class="card-img-top img-fluid rounded-top" alt="Immagine non disponibile"
                                    style="height: 220px; object-fit: cover;">
                            @endif
                            <div class="card-body d-flex flex-column pb-0">
                                <h5 class="card-title text-primary font-weight-bold">{{ $cat->name }}</h5>
                                <p class="card-text text-muted small mb-2">
                                    Età presunta: {{ $cat->approx_age ? $cat->approx_age . ' anni' : 'Sconosciuta' }}
                                </p>
                                <p class="card-text flex-grow-1 text-dark">

                                    {{ Str::limit($cat->description, 100) }}
                                </p>
                                <p><strong>Pubblicato da:</strong>
                                    @if ($cat->user)
                                        <a href="{{ route('users.show', $cat->user) }}">{{ $cat->user->name }}</a>
                                    @else
                                        Utente sconosciuto
                                    @endif
                                </p>

                            </div>
                            <div class="card-footer bg-white border-top-0 pt-0 pb-3 text-center">
                                {{-- Link ai dettagli del cane --}}
                                <a href="{{ route('cats.show', $cat->id) }}"
                                    class="btn btn-outline-primary btn-sm mt-2 w-75">Vedi Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <div class="text-center mt-5">
        <a href="{{ route('Adozioni') }}" class="btn btnCustom my-3">Torna alla Sezione Adozioni</a>
    </div>
    </div>
</x-layout>
