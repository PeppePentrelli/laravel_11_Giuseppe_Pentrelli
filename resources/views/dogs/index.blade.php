<x-layout>
    <h1 class="mb-4 text-center">Cani Disponibili per Adozione</h1>

    @auth
        <div class="text-center mt-5">
            <a href="{{ route('dogs.create') }}" class="btn btnCustom">Inserisci nuova adozione</a>
        </div>


    @endauth


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($dogs->isEmpty())
        <div class="alert alert-info text-center mt-5">Nessun cane disponibile per l'adozione al momento. Torna a trovarci
            presto!</div>
    @else
<section class="container">
            <div class="row" id="section-dog">
            @foreach ($dogs as $dog)
                <div class="col-md-4 mb-4 my-5 mx-auto ">
                    <div class="card h-100 shadow-on-green border-0 rounded-lg">
                        @if ($dog->photo)
                            <img src="{{ asset('storage/' . $dog->photo) }}" class="card-img-top img-fluid rounded-top"
                                alt="{{ $dog->name }}"
                                style="height: 220px; object-fit: contain; object-position: center">
                        @else
                            {{-- Immagine predefinita --}}
                            <img src="{{ asset('media/default-dog.png') }}" class="card-img-top img-fluid rounded-top"
                                alt="Immagine non disponibile" style="height: 220px; object-fit: contain;">
                        @endif
                        <div class="card-body d-flex flex-column pb-0">
                            <h5 class="card-title text-primary font-weight-bold">{{ $dog->name }}</h5>
                            <p class="card-text text-muted small mb-2">
                                Età presunta: {{ $dog->approx_age ? $dog->approx_age . ' anni' : 'Sconosciuta' }}
                            </p>
                            <p class="card-text flex-grow-1 text-dark">

                                {{ Str::limit($dog->description, 100) }}
                            </p>
                            <p><strong>Pubblicato da:</strong>
                                @if ($dog->user)
                                    <a href="{{ route('users.show', $dog->user) }}">{{ $dog->user->name }}</a>
                                @else
                                    Utente sconosciuto
                                @endif
                            </p>
                        </div>
                        <div class="card-footer bg-white border-top-0 pt-0 pb-3 text-center">

                            <a href="{{ route('dogs.show', $dog->id) }}"
                                class="btn btn-outline-primary btn-sm mt-2 w-75">Vedi Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
    @endif

    <div class="text-center mt-5">
        <a href="{{ route('Adozioni') }}" class="btn btnCustom my-4">Torna alla Sezione Adozioni</a>
    </div>
    </div>
</x-layout>
