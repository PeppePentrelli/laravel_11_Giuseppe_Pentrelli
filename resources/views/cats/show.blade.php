<x-layout> 
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header">{{ $cat->name }}</div> 
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        @if ($cat->photo) 
                            <img src="{{ asset('storage/' . $cat->photo) }}" class="img-fluid rounded" alt="{{ $cat->name }}"> 
                        @else
                            <img src="{{ asset('media/default-cat.png') }}" class="img-fluid rounded" alt="Nessuna immagine"> 
                        @endif
                    </div>
                    <div class="col-md-8">
                        <p><strong>Nome:</strong> {{ $cat->name }}</p> 
                        <p><strong>Età Presunta:</strong> {{ $cat->approx_age ? $cat->approx_age . ' anni' : 'Sconosciuta' }}</p> 
                        <p><strong>Descrizione:</strong> {{ $cat->description }}</p> 
                        <p><strong>Pubblicato da:</strong> {{ $cat->user->name ?? 'Utente sconosciuto' }}</p>

                        <hr>

                          @if (auth()->id() === $cat->user_id)
                            <div class="d-flex">
                                <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-warning me-2">Modifica</a> 
                                <form action="{{ route('cats.destroy', $cat->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo gatto?');"> 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                            @endif
                        <a href="{{ route('cats.index') }}" class="btn btn-secondary mt-3">Torna alla lista</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>