
<x-layout>
    <div class="container mt-4">
    <div class="card shadow-sm my-5 shadow-on-green">
        <div class="card-header shadow-on-green">{{ $dog->name }}</div>
        <div class="card-body shadow-on-green">
            <div class="row my-5">
                <div class="col-md-4 my-5">
                    @if ($dog->photo)
                        <img src="{{ asset('storage/' . $dog->photo) }}" class="img-fluid rounded" alt="{{ $dog->name }}">
                    @else
                        <img src="{{ asset('media/default-dog.png') }}" class="img-fluid rounded" alt="Nessuna immagine">
                    @endif
                </div>
                <div class="col-md-8">
                    <p><strong>Nome:</strong> {{ $dog->name }}</p>
                    <p><strong>Età Presunta:</strong> {{ $dog->approx_age ? $dog->approx_age . ' anni' : 'Sconosciuta' }}</p>
                    <p><strong>Descrizione:</strong> {{ $dog->description }}</p>
                                             <p><strong>Pubblicato da:</strong>
    @if ($dog->user)
        <a href="{{ route('users.show', $dog->user) }}">{{ $dog->user->name }}</a>
    @else
        Utente sconosciuto
    @endif
</p>
                    <hr>
                        @if (auth()->id() === $dog->user_id)

                    <div class="d-flex">
                        <a href="{{ route('dogs.edit', $dog->id) }}" class="btn btn-warning me-2">Modifica</a>
                        <form action="{{ route('dogs.destroy', $dog->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo cane?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                     @endif
                    <a href="{{ route('dogs.index') }}" class="btn btnCustom mt-3">Torna alla lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>