    <nav class="navbar navbar-expand-lg nav-light sticky-top shadow-on-green">
        <div class="container-fluid">
            <picture class=""><img class="img-fluid Logo" src="/media/LogoNavDark.png"
                    alt="immagine del logo del sito web"></picture>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('welcome') }}">Home</a>
                    </li>
                    {{-- Adozioni --}}
                    <li class="nav-item dropdown" data-bs-auto-close="outside">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Adozioni
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('stories.index') }}">Storie Felici</a></li>
                            <li><a class="dropdown-item" href="{{ route('dogs.index') }}#section-dog">Cani
                                    Disponibili</a></li>
                            <li><a class="dropdown-item" href="{{ route('cats.index') }}#section-cat"">Gatti
                                    Disponibili</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="{{ route('Adozioni') }}">Come Adottare</a></li>
                            <li><a class="dropdown-item" href="{{ route('Adozioni') }}#RegolamentoAdozioni">Regolamento
                                    Adozioni</a></li>
                            <li><a class="dropdown-item" href="{{ route('Adozioni') }}#ModuloAdozioni">Modulo richiesta
                                    adozione</a></li>
                            <li><a class="dropdown-item" href="{{ route('Adozioni') }}#FaqAdozioni">FAQ
                                    sull’adozione</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="{{ route('Contatti') }}">Contatti adozioni</a></li>
                    </li>
                </ul>
                </li>
                {{-- Volontariato --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Volontariato
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('volontariato.volontariato') }}">Eventi & Giornate
                                aperte</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item"
                                href="{{ route('volontariato.volontariato') }}#diventa-volontario">Diventa
                                volontario</a></li>
                        <li><a class="dropdown-item"
                                href="{{ route('volontariato.volontariato') }}#compiti-volontari">Compiti dei
                                volontari</a></li>
                        <li><a class="dropdown-item"
                                href="{{ route('volontariato.volontariato') }}#testimonials">Testimonianze dei
                                volontari</a></li>
                    </ul>
                </li>
                {{-- Curiosità  --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Curiosità
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('curiosity.show') }}#cura">Consigli cura
                                animali</a></li>
                        <li><a class="dropdown-item"
                                href="{{ route('curiosity.show') }}#alimentazione">Alimentazione</a></li>
                        <li><a class="dropdown-item" href="{{ route('curiosity.show') }}#addestramento">Educazione e
                                addestramento</a></li>
                        <li><a class="dropdown-item" href="{{ route('curiosity.show') }}#vaccini">Vaccinazioni e
                                sterilizzazioni</a></li>
                        <li><a class="dropdown-item" href="{{ route('curiosity.show') }}#casa">Preparare la casa
                                all’arrivo di un animale</a></li>

                    </ul>
                </li>
                <!-- Dropdown Autenticazione -->
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item dropdown" data-bs-auto-close="outside">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('register') }}#LoginForm">Accedi</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                                <div id="google_translate_element"></div>
                                <li class="nav-item align-items-center d-flex">
                                    <select id="customLangSelect" class="form-select custom-language-select mx-auto">
                                        <option value="it">🇮🇹 Italiano</option>
                                        <option value="en">🇬🇧 Inglese</option>
                                        <option value="fr">🇫🇷 Francese</option>
                                        <option value="de">🇩🇪 Tedesco</option>
                                        <option value="es">🇪🇸 Spagnolo</option>
                                        <option value="pt">🇵🇹 Portoghese</option>
                                    </select>
                                </li>
                                <li class="dropdown-item d-flex align-items-center justify-content-between">
                                    <span>🌙 / ☀️</span>
                                    <label class="switch m-0">
                                        <input type="checkbox" id="themeToggle">
                                        <span class="slider"></span>
                                    </label>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">Blog</a>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('users.show', ['user' => Auth::id()]) }}"> <img
                                        src="{{ Auth::user()->img_user ? asset('storage/' . Auth::user()->img_user) : asset('media/default-profile.png') }}"
                                        class="rounded-circle me-2 imgProfileBorder" width="35" height="35"
                                        alt="Profilo Utente Loggato">Visualizza Profilo </a></li>
                            {{-- Immagine del profilo dell'utente loggato --}}
                            <li>
                                <p class="dropdown-item">{{ Auth::user()->name }}</p>
                            </li>
                            <li>
                                <p class="dropdown-item">{{ Auth::user()->email }}</p>
                            </li>
                            <li>
                                <p class="dropdown-item">Utente da: {{ Auth::user()->created_at->format('d/m/Y') }}</p>
                            </li>
                            <li class="dropdown-item d-flex align-items-center justify-content-between">

                                <a style="color: inherit;" class="text-decoration-none"
                                    href="{{ route('password.request') }}">Password Dimenticata</a>
                            </li>
                            <hr>
                            <li><a href="{{ route('stories.create') }}" class="dropdown-item">Crea nuova storia</a></li>
                            <li><a href="{{ route('dogs.create') }}" class="dropdown-item">Inserisci nuova adozione
                                    cane</a></li>
                            <li><a href="{{ route('cats.create') }}" class="dropdown-item">Inserisci nuova adozione
                                    gatto</a></li>
                            <hr>
                            <li> <a class="dropdown-item" href="{{ route('posts.create') }}#LoginForm">Crea Post</a></li>



                            <hr>

                            <li>
                                <div id="google_translate_element"></div>
                            <li class="nav-item align-items-center d-flex">
                                <select id="customLangSelect" class="form-select custom-language-select mx-auto">
                                    <option value="it">🇮🇹 Italiano</option>
                                    <option value="en">🇬🇧 Inglese</option>
                                    <option value="fr">🇫🇷 Francese</option>
                                    <option value="de">🇩🇪 Tedesco</option>
                                    <option value="es">🇪🇸 Spagnolo</option>
                                    <option value="pt">🇵🇹 Portoghese</option>
                                </select>
                            </li>
                            <li class="dropdown-item d-flex align-items-center justify-content-between">
                                <span>🌙 / ☀️</span>
                                <label class="switch m-0">
                                    <input type="checkbox" id="themeToggle">
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <hr>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>



                    </li>
                    </ul>
                    </li>
                @endauth
                </ul>

            </div>
        </div>
    </nav>
