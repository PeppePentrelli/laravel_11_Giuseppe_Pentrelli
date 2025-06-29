<x-layout>
    <section class="container py-5">
        <h1 class="mb-4">Modifica Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" name="titolo" id="titolo" class="form-control" value="{{ old('titolo', $post->titolo) }}">
            </div>

            <div class="mb-3">
                <label for="paragrafo" class="form-label">Contenuto</label>
                <textarea name="paragrafo" id="paragrafo" rows="5" class="form-control">{{ old('paragrafo', $post->paragrafo) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="imgPost" class="form-label">Immagine (facoltativa)</label>
                <input type="file" name="imgPost" id="imgPost" class="form-control">
                @if ($post->imgPost)
                    <p class="mt-2"><img src="{{ asset('storage/' . $post->imgPost) }}" alt="Immagine attuale" class="img-fluid" style="max-height: 200px;"></p>
                @endif
            </div>

            <button class="btn btn-primary">Salva modifiche</button>
        </form>
    </section>
</x-layout>
