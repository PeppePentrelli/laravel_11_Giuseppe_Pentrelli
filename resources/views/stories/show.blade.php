<x-layout>
    <div class="container my-5">
        <div class="card shadow rounded-4 border-0 overflow-hidden">
            @if ($story->immagine)
                <img src="{{ asset('storage/' . $story->immagine) }}" alt="Immagine storia" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
            @else
                <img src="{{ asset('media/default-story.png') }}" alt="Immagine di default" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
            @endif

            <div class="card-body p-4">
                <h1 class="card-title display-5 text-green fw-bold">{{ $story->title ?? 'Storia senza titolo' }}</h1>

                <p class="text-muted mb-3">
                    <strong>Pubblicato da:</strong>
                    @if ($story->user)
                        <a href="{{ route('users.show', $story->user) }}" class="comment-link fw-semibold">
                            {{ $story->user->name }}
                        </a>
                    @else
                        <em>Utente sconosciuto</em>
                    @endif
                    <span class="ms-2 comment-link">| {{ $story->created_at->format('d/m/Y') }}</span>
                </p>

                <p class="fs-5 text-green" >{{ $story->testimonianza }}</p>

                <a href="{{ route('stories.index') }}" class="btn comment-btn mt-4">
                    <i class="bi bi-arrow-left-circle me-1"></i> Torna alle storie
                </a>
            </div>
        </div>
    </div>
</x-layout>
