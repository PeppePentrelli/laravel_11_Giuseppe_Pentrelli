<x-layout>
    <section class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 bg-white p-5 rounded-4 shadow-on-green">

                <!-- Titolo -->
                <h1 class="cutsom-link display-3 text-center mb-4 show-post">
                {{ $post->titolo}}
                </h1>

                <!-- Immagine -->
                @if ($post->imgPost)
                <div  class=" justify-content-center d-flex">
                    <img  src="{{ asset('storage/' . $post->imgPost) }}" class="card-img-top justify-content-center shadow-on-green" alt="{{ $post->titolo }}" style="height: 600px; width: auto; border:solid 2px  var(--bg-color-primary);">

                </div>
                @endif


                <!-- Data -->
                <p class="text-center text-muted mb-5 my-3">
                    Pubblicato il {{ $post->created_at->format('d/m/Y') }}
                </p>

                <!-- Contenuto -->
                <div class="mb-5 border rounded ">
                    <p class="fs-4 show-post ms-3">
                        {{ $post->paragrafo }}
                    </p>
                </div>
                    <p class="card-text">
                        <small class="text-muted">Creato da: <strong><a class="comment-link" href="{{ route('users.show', $post->user) }}">{{ $post->user->name }}</a> </strong>| Pubblicato il {{ $post->created_at->format('d/m/Y') }}</small>
                    </p>
                        @if ($post->user)
        
    @else
        Utente sconosciuto
    @endif
    <hr>

<h4 class="comment-link">Commenti</h4>

@auth
    <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mb-4">
        @csrf
        <div class="mb-3">
            <textarea name="body" class="form-control" rows="3" placeholder="Scrivi un commento..."></textarea>
        </div>
        <button type="submit" class="btn comment-btn  shadow">Invia Commento</button>
    </form>
@else
    <p><a href="{{ route('login') }}">Accedi</a> per lasciare un commento.</p>
@endauth

@foreach ($post->comments as $comment)
    <div class="mb-3 p-3 border rounded bg-light">
        <a class="comment-link" href="{{ route('users.show', $comment->user->id) }}">
    {{ $comment->user->name }}
</a>
        <p class="mb-1">{{ $comment->body }}</p>
        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
    </div>
@endforeach


                <!-- Bottone -->
                <div class="text-center">
                    <a href="{{ route('posts.index') }}" class="btn comment-btn  shadow">
                        Torna alla lista
                    </a>
                </div>

            </div>
        </div>
    </section>
</x-layout>
