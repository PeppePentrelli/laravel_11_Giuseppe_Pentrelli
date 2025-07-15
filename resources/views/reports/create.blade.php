
<x-layout>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Segnala una Storia</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reports.store') }}">
                        @csrf

                        {{-- Campo nascosto per l'ID della storia --}}
                        <input type="hidden" name="story_id" value="{{ $story_id ?? '' }}">

                        {{-- Dettagli della storia segnalata --}}
                        <div class="mb-3">
                            <label for="story_title" class="form-label">Stai segnalando la storia:</label>
                            {{-- Visualizza il titolo della storia come testo non modificabile --}}
                            <p class="form-control-plaintext"><strong>{{ $story_title ?? 'Nessuna storia selezionata' }}</strong></p>
                        </div>

                        {{-- Nome Utente (non modificabile) --}}
                        <div class="mb-3">
                            <label class="form-label">Il tuo Nome:</label>
                            <p class="form-control-plaintext">{{ Auth::check() ? Auth::user()->name : 'Anonimo' }}</p>
                            {{-- Campo nascosto per inviare il nome nel form --}}
                            <input type="hidden" name="name" value="{{ Auth::check() ? Auth::user()->name : '' }}">
                        </div>

                        {{-- Email Utente (non modificabile) --}}
                        <div class="mb-3">
                            <label class="form-label">La tua Email:</label>
                            <p class="form-control-plaintext">{{ Auth::check() ? Auth::user()->email : 'N/D' }}</p>
                            {{-- Campo nascosto per inviare l'email nel form --}}
                            <input type="hidden" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}">
                        </div>

                        <div class="mb-3">
                            <label for="reason" class="form-label">Motivo della segnalazione:</label>
                            <textarea class="form-control @error('reason') is-invalid @enderror" id="reason" name="reason" rows="5" required>{{ old('reason', $default_report_message ?? '') }}</textarea>
                            @error('reason')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Invia Segnalazione</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>