<x-layout>

    <style>


    </style>

    <header class="header-contatti">
        <div class="overlay"></div>
        <div class="content">
            <h1 class="display-4 fw-bold">Contattaci</h1>
            <p class="lead">Siamo qui per aiutarti a trovare un amico per sempre 🐾</p>
        </div>
    </header>

    <section class="container my-5">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="contact-card h-100">
                    <div class="icon-circle bg-success">
                        <i class="bi bi-telephone-fill fs-2 text-white"></i>
                    </div>
                    <h5 class="mt-3 text-green">Telefono</h5>
                    <p class="mb-0 text-green">+39 123 456 7890</p>
                </div>
            </div>
            <div class="col-md-4 text-green">
                <div class="contact-card h-100">
                    <div class="icon-circle bg-warning">
                        <i class="bi bi-envelope-fill fs-2 text-white"></i>
                    </div>
                    <h5 class="mt-3 text-green">Email</h5>
                    <p class="mb-0">happypetpaws@gmail.it</p>
                </div>
            </div>
            <div class="col-md-4 text-green">
                <div class="contact-card h-100">
                    <div class="icon-circle bg-primary">
                        <i class="bi bi-geo-alt-fill fs-2 text-white"></i>
                    </div>
                    <h5 class="mt-3">Dove siamo</h5>
                    <p class="mb-0">Via dei Cuccioli, 12<br>Modugno (BA)</p>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid" id="ModuloAdozioni">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <fieldset class="shadow p-3 form-dark-theme fieldset-switch">
                    <legend>Contattaci</legend>
                    <picture class="d-flex justify-content-center">
                        <img class="img-fluid Logo2" src="/media/LogoNavDark.PNG" alt="immagine del logo del sito web">
                    </picture>

                    {{-- Messaggi di successo --}}
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif



                    <form action="{{ route('send_email') }}" method="POST" id="Form-Contattaci" class="col-12">
                        @csrf

                        {{-- Campo Nome/Cognome --}}
                        <div class="mb-3 mx-5">
                            <label for="name" class="form-label">Inserisci nome e cognome</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" autocomplete="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Campo Email --}}
                        <div class="mb-3 mx-5">
                            <label for="email" class="form-label">Indirizzo Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}" autocomplete="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Campo Messaggio --}}
                        <div class="mb-3 mx-5">
                            <label for="message" class="form-label">Messaggio</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-chat-text"></i></span>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4"
                                    placeholder="Raccontaci..." style="resize: none;">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Bottone Contattaci --}}
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btnCustom">Contattaci</button>
                        </div>

                    </form>
                </fieldset>
            </div>
        </div>
    </section>
    <div class="text-center mt-5">
        <p class="lead fw-bold">Ogni contatto è un passo verso una nuova adozione ❤️</p>
    </div>

</x-layout>
