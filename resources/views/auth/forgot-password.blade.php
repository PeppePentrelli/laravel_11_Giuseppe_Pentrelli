<x-layout>


    <div class="password-reset-container my-5 container-fluid">
        <div class="row">
            <h2>Hai dimenticato la tua Password?</h2>
            <h2>Nessun problema,Ripristina la Tua Password</h2>
            <p>Inserisci l'indirizzo email associato al tuo account. Ti invieremo un link sicuro per reimpostare la
                password.</p>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Il tuo indirizzo email</label>
                    <input type="email" id="email" name="email" placeholder="es. la.tua.email@dominio.com">
                </div>
                <button type="submit" class="btn-submit">Invia Link di Reset</button>
            </form>

            @if (session('status'))
                <div class="status-message">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <a href="{{ route('login') }}" class="back-link">Torna alla pagina di Login</a>
        </div>
    </div>
</x-layout>
