<x-layout>
    <main class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <fieldset class="shadow p-3  fieldset-switch">
                    <legend class="">Crea un Post</legend>
                    <picture class="d-flex justify-content-center"><img class="img-fluid Logo2"
                            src="/media/LogoNavDark.PNG" alt="immagine del logo del sito web"></picture>
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 mt-5">
                            <label for="titolo" class="form-label">Titolo del Post</label>
                            <input type="text" class="form-control @error('titolo') is-invalid @enderror"
                                id="titolo" name="titolo" value="{{ old('titolo', $post->titolo ?? '') }}" required>
                            @error('titolo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="imgPost" class="form-label">Carica Immagine</label>
                            <input type="file" id="imgPost" name="imgPost" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="paragrafo" class="form-label">Inserisci descrizione</label>
                            <textarea id="paragrafo" name="paragrafo" rows="5" class="form-control" required>{{ old('paragrafo') }}</textarea>
                        </div>


                        <div class="mb-3">
                            <label for="category" class="form-label">category</label>
                            <input type="text" class="form-control @error('titolo') is-invalid @enderror"
                                id="category" name="category" value="{{ old('category', $post->category ?? '') }}"
                                required>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btnCustom">Salva Post</button>
                    </form>
                </fieldset>

            </div>
        </div>

    </main>
</x-layout>
