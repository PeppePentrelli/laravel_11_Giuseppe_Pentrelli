<x-layout>
    <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifica Storia</div>

                <div class="card-body">
                    <form action="{{ route('stories.update', $story->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- O @method('PATCH') --}}

                        {{-- Campo Titolo --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text"
                                   class="form-control @error('title') is-invalid @enderror"
                                   id="title"
                                   name="title"
                                   value="{{ old('title', $story->title) }}" {{-- Pre-compila con il valore esistente --}}
                                   required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Campo Immagine --}}
                        <div class="mb-3">
                            <label for="immagine" class="form-label">Immagine</label>
                            <input type="file"
                                   class="form-control @error('immagine') is-invalid @enderror"
                                   id="immagine"
                                   name="immagine">
                            @error('immagine')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            {{-- Mostra l'immagine attuale se esiste --}}
                            @if($story->immagine)
                                <div class="mt-2">
                                    <p>Immagine attuale:</p>
                                    <img src="{{ asset('storage/' . $story->immagine) }}" alt="Immagine attuale" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        {{-- Campo Testimonianza (Textarea) --}}
                        <div class="mb-3">
                            <label for="testimonianza" class="form-label">Testimonianza</label>
                            <textarea class="form-control @error('testimonianza') is-invalid @enderror"
                                      id="testimonianza"
                                      name="testimonianza"
                                      rows="5"
                                      required>{{ old('testimonianza', $story->testimonianza) }}</textarea> {{-- Pre-compila con il valore esistente --}}
                            @error('testimonianza')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn comment-btn">Aggiorna Storia</button>
                        <a href="{{ route('stories.index', $story->id) }}" class="btn btn-secondary">Annulla</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>