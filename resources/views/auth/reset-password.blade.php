<x-layout>
    <div class="container">
    <h1>Reset Password</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <label for="email">Email</label><br>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus>
        </div>

        <div>
            <label for="password">Nuova Password</label><br>
            <input id="password" type="password" name="password" required autocomplete="new-password">
        </div>

        <div>
            <label for="password_confirmation">Conferma Password</label><br>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button type="submit">Resetta Password</button>
    </form>
</div>
</x-layout>