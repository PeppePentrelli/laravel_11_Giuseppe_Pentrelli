<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Nuova Richiesta di Adozione</title>
</head>
<body>
    <h2>Nuova richiesta di adozione ricevuta</h2>

    <p><strong>Nome e Cognome:</strong> {{ $datiRichiesta['name'] }}</p>
    <p><strong>Email:</strong> {{ $datiRichiesta['email'] }}</p>
    <p><strong>Telefono:</strong> {{ $datiRichiesta['phone'] }}</p>
    <p><strong>Città:</strong> {{ $datiRichiesta['address_city'] }}</p>
    <p><strong>Indirizzo (Via/Piazza):</strong> {{ $datiRichiesta['address_street'] }}</p>
    <p><strong>CAP:</strong> {{ $datiRichiesta['address_zip'] }}</p>
    <p><strong>Tipo di abitazione:</strong> 
        @if($datiRichiesta['living_situation'] === 'apartment')
            Appartamento
        @elseif($datiRichiesta['living_situation'] === 'house_with_garden')
            Casa con Giardino
        @else
            Non specificato
        @endif
    </p>
    <p><strong>Numero di adulti conviventi:</strong> {{ $datiRichiesta['num_adults'] }}</p>
    <p><strong>Numero di bambini/minori conviventi:</strong> {{ $datiRichiesta['num_children'] }}</p>
    <p><strong>Esperienza precedente con animali:</strong><br> {{($datiRichiesta['previous_pets'])}} </p>

    <hr>
    <p>Questa email è stata generata automaticamente dal sistema di adozione.</p>
</body>
</html>
