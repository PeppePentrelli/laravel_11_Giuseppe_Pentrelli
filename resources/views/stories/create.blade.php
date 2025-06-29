<x-layout>

    <section class="container my-5">
        <h1 class="mb-4 text-center">Crea una nuova Storia di Adozione</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <fieldset class="shadow p-3  fieldset-switch">
                    <legend>Crea la tua storia</legend>

                    <form action="{{ route('stories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <picture class="d-flex justify-content-center"><img class="img-fluid Logo2"
                                src="/media/LogoNavDark.PNG" alt="immagine del logo del sito web"></picture>
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo della Storia:</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ old('title', $story->title ?? '') }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="immagine" class="form-label">Carica Immagine</label>
                            <input type="file" id="immagine" name="immagine" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="testimonianza" class="form-label">Testimonianza</label>
                            <textarea id="testimonianza" name="testimonianza" rows="5" class="form-control" required>{{ old('testimonianza') }}</textarea>
                        </div>

                        <button type="submit" class="btn btnCustom">Salva Storia</button>
                    </form>
                </fieldset>
            </div>
        </div>
    </section>
</x-layout>
