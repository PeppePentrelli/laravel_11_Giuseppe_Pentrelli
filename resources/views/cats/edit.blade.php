<x-layout>
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header">Modifica Gatto: {{ $cat->name }}</div> 
            <div class="card-body">
                <form action="{{ route('cats.update', $cat->id) }}" method="POST" enctype="multipart/form-data"> 
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $cat->name) }}" required> 
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                        @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if ($cat->photo)
                            <div class="mt-2">
                                <p>Foto attuale:</p>
                                <img src="{{ asset('storage/' . $cat->photo) }}" alt="Foto attuale" style="max-width: 150px; border: 1px solid #ddd; padding: 5px;"> {
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="approx_age" class="form-label">Età Presunta (anni)</label>
                        <input type="number" class="form-control @error('approx_age') is-invalid @enderror" id="approx_age" name="approx_age" value="{{ old('approx_age', $cat->approx_age) }}" min="0"> {{-- Cambiato $dog->approx_age a $cat->approx_age --}}
                        @error('approx_age')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description', $cat->description) }}</textarea> {{-- Cambiato $dog->description a $cat->description --}}
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Aggiorna Gatto</button>
                    <a href="{{ route('cats.show', $cat->id) }}" class="btn btn-secondary">Annulla</a> 
                </form>
            </div>
        </div>
    </div>
</x-layout>