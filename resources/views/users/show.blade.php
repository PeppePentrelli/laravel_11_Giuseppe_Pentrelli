<x-layout>
    <div class="container py-5">
        <div class="row">
          <div class="profile-card shadow-lg rounded-4 p-4 d-flex flex-lg-row align-items-start gap-4">


                <!-- Foto profilo -->
                <div class="profile-image-wrapper position-relative">
                    @if ($user->img_user)
                        <img src="{{ asset('storage/' . $user->img_user) }}" alt="Foto di {{ $user->name }}"
                            class="profile-image rounded-circle shadow-lg">
                    @else
                        <img src="{{ asset('media/default-profile.png') }}" alt="Foto di default"
                            class="profile-image rounded-circle shadow-lg">
                    @endif
                    <div class="profile-badge">Utente</div>
                </div>

                <!-- Info profilo -->
                <div class="profile-info flex-grow-1">

                    <h1 class="profile-name mb-3">{{ $user->name }}</h1>

                    <div class="mb-4 d-flex flex-wrap gap-3">
                        <div class="info-chip">
                            <i class="bi bi-envelope"></i> {{ $user->email }}
                        </div>
                        <div class="info-chip">
                            <i class="bi bi-calendar-check"></i> Registrato il {{ $user->created_at->format('d/m/Y') }}
                        </div>
                        <div class="info-chip">
                            <i class="bi bi-pencil-square"></i> Ultimo aggiornamento
                            {{ $user->updated_at->format('d/m/Y') }}
                        </div>
                    </div>

                    <hr class="my-4">

                    <h3 class="mb-3">Storie pubblicate</h3>
                    @if ($user->stories && $user->stories->count() > 0)
                        <div class="stories-list d-grid gap-3">
                            @foreach ($user->stories as $story)
                                <a href="{{ route('stories.show', $story->id) }}"
                                    class="story-item shadow-sm rounded-3 p-3 d-flex justify-content-between align-items-center text-decoration-none">
                                    <span>
                                        <img src="{{ asset('storage/' . ($story->immagine ?? 'default-story.png')) }}"
                                            alt="">
                                    </span>
                                    <span class="story-title">{{ $story->title ?? 'Storia senza titolo' }}</span>
                                    <small class="">{{ $story->created_at->format('d/m/Y') }}</small>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <p class="">Non ci sono storie pubblicate.</p>
                    @endif

<hr class="my-4">


<h3 class="mb-3">Adozioni Pubblicate</h3>

@if(($user->dogs && $user->dogs->count() > 0) || ($user->cats && $user->cats->count() > 0))
<div class="stories-list row row-cols-1 g-3">



        @foreach ($user->dogs as $dog)
            <a href="{{ route('dogs.show', $dog->id) }}" class="story-item shadow-sm rounded-3 p-3 d-flex justify-content-between align-items-center text-decoration-none">
                <span>
                    <img src="{{ $dog->photo ? asset('storage/' . $dog->photo) : asset('media/default-dog.png') }}" alt="{{ $dog->name }}" width="50" class="rounded-circle">
                </span>
                <span class="story-title">{{ $dog->name }}</span>
                <small>{{ $dog->created_at->format('d/m/Y') }}</small>
            </a>
        @endforeach

        @foreach ($user->cats as $cat)
            <a href="{{ route('cats.show', $cat->id) }}" class="story-item shadow-sm rounded-3 p-3 d-flex justify-content-between align-items-center text-decoration-none">
                <span>
                    <img src="{{ $cat->photo ? asset('storage/' . $cat->photo) : asset('media/default-cat.png') }}" alt="{{ $cat->name }}" width="50" class="rounded-circle">
                </span>
                <span class="story-title">{{ $cat->name }}</span>
                <small>{{ $cat->created_at->format('d/m/Y') }}</small>
            </a>
        @endforeach

    </div>
@else
    <p class="">Non ci sono adozioni registrate.</p>
@endif

                </div>




            </div>


        </div>

    </div>




</x-layout>
