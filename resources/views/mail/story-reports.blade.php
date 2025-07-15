<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuova Segnalazione</title>
</head>
<body>
    <h1>Nuova Segnalazione Storia</h1>

    <h3>Dettagli del Segnalatore:</h3>
    <ul>
        <li><strong>Nome:</strong> {{ $name ?? 'Anonimo' }}</li>
        <li><strong>Email:</strong> {{ $email ?? 'N/D' }}</li>
    </ul>

    <h3>Dettagli della Storia Segnalata:</h3>
    @if($story)
        <ul>
            <li><strong>ID Storia:</strong> {{ $story->id }}</li>
            <li><strong>Titolo:</strong> {{ $story->title ?? 'Senza titolo' }}</li>
            <li><strong>Autore:</strong> {{ $story->user->name ?? 'Sconosciuto' }}</li>
            <li><a href="{{ route('stories.show', $story->id) }}">Visualizza Storia</a></li>
        </ul>
    @else
        <p>Storia non trovata.</p>
    @endif

    <h3>Motivo della Segnalazione:</h3>
    <p>{{ $reason }}</p>

  
</body>
</html>