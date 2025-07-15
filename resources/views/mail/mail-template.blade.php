<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Nuova richiesta di contatto dal sito</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333; background-color: #f9f9f9; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="color: #0A1A0D;">📩 Nuova richiesta di contatto ricevuta</h2>

        <p>È appena arrivata una nuova richiesta di contatto dal modulo presente sul sito del canile.</p>

        <h3>Dati del richiedente:</h3>
        <ul>
            <li><strong>Nome:</strong> {{$contactMail['name']}}</li>
            <li><strong>Email:</strong> {{$contactMail['email']}}</li>
        </ul>

        <h3>Messaggio:</h3>
        <p style="background-color: #f0f0f0; padding: 15px; border-radius: 5px;">
            {{$contactMail['message']}}
        </p>

        <hr>

        <p style="font-size: 0.9em; color: #777;">
            Questa email è stata generata automaticamente dal modulo contatti del sito web.
        </p>
    </div>
</body>
</html>