<x-layout>



    <section class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-success">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <fieldset class="shadow p-3  fieldset-switch">
                    <legend>Iscriviti</legend>
                    <picture class="d-flex justify-content-center"><img class="img-fluid Logo2"
                            src="/media/LogoNavDark.PNG" alt="immagine del logo del sito web"></picture>
                    <form action="{{ route('register') }}" method="POST" id="Form-Registrati"
                        enctype="multipart/form-data" class="col-12 ">
                        @csrf
                        {{-- Campo Nome/Cognome --}}
                        <div class="mb-3 mx-5">
                            <label for="name" class="form-label">Inserisci nome e cognome</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" autocomplete="name">
                            </div>
                        </div>
                        {{-- Campo Email --}}
                        <div class="mb-3 mx-5">
                            <label for="email" class="form-label">Indirizzo Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" autocomplete="email">
                                    
                            </div>
                        </div>
                        <div class="mb-3 mx-5">
    <label for="imgUser" class="form-label">Immagine Profilo:</label>
    <input type="file" class="form-control @error('imgUser') is-invalid @enderror" id="imgUser" name="imgUser" value="{{ old('imgUser', $user->imgUser ?? '') }}">
    @error('imgUser')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
                        {{-- Campo password --}}
                        <div class="mb-3 mx-5">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password"
                                    autocomplete="new-password">
                                <button class="btn toggle-password" type="button" data-target="password">
                                    <i class="bi bi-eye-slash register-icon"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Campo conferma password --}}
                        <div class="mb-3 mx-5">
                            <label for="password_confirmation" class="form-label">Conferma Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" autocomplete="new-password">
                                <button class="btn toggle-password" type="button" data-target="password_confirmation">
                                    <i class="bi bi-eye-slash register-icon"></i>
                                </button>
                            </div>
                        </div>
                                <span  class=" my-4 text-center d-flex justify-content-center"> <small class="">La password deve avere almeno 8 caratteri,<br>inclusi un numero e un carattere speciale.</small></span>

                        {{-- Bottone Registrati --}}
                        <div class="d-flex justify-content-center">
                            <button class=" btn btnCustom">Registrati</button>
                        </div>
                        {{-- Bottone Registrati --}}
                    </form>
                </fieldset>
            </div>
    </section>


    {{-- Linea or  --}}
    <div style="display: flex; align-items: center;">
        <hr style="flex: 1;">
        <p style="margin: 0 10px;">or</p>
        <hr style="flex: 1;">
    </div>
    {{-- Linea or  --}}


    {{-- Form accedi --}}
    <section class="container-fluid d-flex justify-content-center align-items-center" id="LoginForm">
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <fieldset class="shadow p-3 fieldset-switch">
                    <legend>Accedi</legend>
                    <picture class="d-flex justify-content-center"><img class="img-fluid Logo2"
                            src="/media/LogoNavDark.PNG" alt="immagine del logo del sito web"></picture>
                    <form action="{{ route('login') }}" method="POST" id="Form-Accedi" class="col-12 ">
                        @csrf
                        {{-- Campo Email --}}
                        <div class="mb-3 mx-5">
                            <label for="email-login" class="form-label">Indirizzo Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email-login" name="email"
                                    autocomplete="email">
                            </div>
                        </div>
                        {{-- Campo Password --}}
                        <div class="mb-3 mx-5">
                            <label for="login-password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="login-password" name="password"
                                    autocomplete="current-password">
                                <button class="btn toggle-password" type="button" data-target="login-password">
                                    <i class="bi bi-eye-slash register-icon"></i>
                                </button>
                            </div>
                        </div>

                        <div class="my-3 text-center"><small><a class="forgot-link" href="{{ route('password.request') }}">Password Dimenticata</a></small></div>
                        <div class="d-flex justify-content-center">
                            <button class=" btn btnCustom">Accedi</button>

                        </div>

                    </form>
                </fieldset>
            </div>
        </div>
    </section>


</x-layout>
