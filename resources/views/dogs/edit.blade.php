<x-layout>
    <div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header">Modifica Cane: {{ $dog->name }}</div>
        <div class="card-body">
            <form action="{{ route('dogs.update', $dog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') {{-- O @method('PATCH') --}}

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $dog->name) }}" required>
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
                    @if ($dog->photo)
                        <div class="mt-2">
                            <p>Foto attuale:</p>
                            <img src="{{ asset('storage/' . $dog->photo) }}" alt="Foto attuale" style="max-width: 150px; border: 1px solid #ddd; padding: 5px;">
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="approx_age" class="form-label">Età Presunta (anni)</label>
                    <input type="number" class="form-control @error('approx_age') is-invalid @enderror" id="approx_age" name="approx_age" value="{{ old('approx_age', $dog->approx_age) }}" min="0">
                    @error('approx_age')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description', $dog->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Aggiorna Cane</button>
                <a href="{{ route('dogs.show', $dog->id) }}" class="btn btn-secondary">Annulla</a>
            </form>
        </div>
    </div>
</div>
</x-layout>