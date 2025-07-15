<x-layout>

    <style>
        .hero-section * {
            position: relative;
            z-index: 2;
        }
    </style>


    <header class="hero-section py-5 text-white shadow position-relative">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold">Benvenuto nel nostro blog!</h1>
                    <p class="lead mb-4">Condividi le tue storie, scopri nuovi racconti e lasciati ispirare dalla
                        community.</p>

                    @auth
                        <a class="btn btn-primary btn-lg shadow btnCustom" href="{{ route('posts.create') }}#LoginForm">
                            <i class="bi bi-pencil-square me-2 "></i> Crea un nuovo post
                        </a>
                    @endauth

                    @guest
                        <a class="btn btn-outline-light btn-lg shadow" href="{{ route('register') }}">
                            <i class="bi bi-person-plus-fill me-2"></i> Registrati o Accedi
                        </a>
                    @endguest
                </div>

                <div class="col-md-4 d-none d-md-block">
                    <img src="/media/LogoNavLight.png" alt="Blog Illustration" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50" style="z-index: 0;"></div>
    </header>

    <main class="container py-5">
        <h1 class="mb-4 text-center">Elenco Post</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            @foreach ($posts as $post)
                <div class="custom-card shadow-light  mb-5 col-12 col-md-5 mx-auto " style="height: 600px">
                    @if ($post->imgPost)
                        <img  src="{{ asset('storage/' . $post->imgPost) }}" class="card-img-top img-fluid"
                            alt="{{ $post->titolo }}"  >
                    @endif
                    <div class="">
                        <h5 class="post-link">
                            <a class="post-link" href="{{ route('posts.show', $post->id) }}">{{ $post->titolo }}</a>
                        </h5>
                        <p class="card-text">{{ Str::limit($post->paragrafo, 100) }}</p>
                        <p class="card-text">
                            <small class=""><a class="post-link"
                                    href="{{ route('users.show', $post->user) }}">{{ $post->user->name }}</a> |
                                Pubblicato il {{ $post->created_at->format('d/m/Y') }}</small>
                        </p>
                        @if ($post->user)
                        @else
                            Utente sconosciuto
                        @endif
                    </div>
                    @auth
                        @if (Auth::id() === $post->user_id)
                            <div class="d-flex gap-2 align-items-center mt-3">
                                {{-- Pulsante Modifica --}}
                                <a href="{{ route('posts.edit', $post->id) }}"
                                    class="btn btn-warning d-flex align-items-center">
                                    <i class="bi bi-pencil-fill me-2"></i> Modifica
                                </a>

                                {{-- Pulsante Elimina --}}
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Sei sicuro di voler eliminare questo post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger d-flex align-items-center">
                                        <i class="bi bi-trash3-fill me-2"></i> Elimina
                                    </button>
                                </form>
                            </div>
                        @endif
                    @endauth
                    <h4 class="card-text my-2">Commenti</h4>

                    @auth
                        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mb-4">
                            @csrf
                            <div class="mb-3">
                                <textarea name="body" class="form-control" rows="3" placeholder="Scrivi un commento..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-torna-su shadow">Invia Commento</button>
                            <br>
                            <div class="my-3">
                                <small><a class="my-5 comment-link ms-2" href="{{ route('posts.show', $post->id) }}">Leggi
                                        commenti</a></small>
                            </div>

                        </form>
                    @else
                        <p><a class="post-link" href="{{ route('login') }}">Accedi</a> per lasciare un commento.</p>
                    @endauth


                </div>
            @endforeach
        </div>

        {{ $posts->links() }}
    </main>
</x-layout>
