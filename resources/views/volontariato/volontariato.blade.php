<x-layout>

    <!-- Sezione Eventi & Giornate Aperte -->
    <section id="eventi" class="container mx-auto px-4 py-12 text-center my-5">
        <div class="row">
            <h1 class="section-heading">Eventi & Giornate Aperte</h1>
            <p class="text-lg  mx-auto">Unisciti a noi per i nostri eventi speciali e giornate dedicate! Sono l'occasione
                perfetta per incontrare i nostri animali, conoscere i volontari e scoprire come puoi fare la differenza.
            </p>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-10 mx-auto">
                <!-- Evento 1: Giornata Adozioni Estiva -->
                <div class=" col-12 col-md-4 ">
                    <div class="custom-card shadow-light">
                        <img class="img-fluid card-event-img-left" src="/media/canile.jpg" alt="immagine evento adozioni">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Giornata Adozioni Estiva</h5>
                            <p class="custom-card-text">Vieni a conoscere i nostri cuccioli e adulti in cerca di una
                                famiglia! Tante attività e dolcetti per tutti.</p>
                            <ul class="list-unstyled text-start small mb-3">
                                <li><i class="bi bi-calendar list-icon"></i> 10 Agosto 2025</li>
                                <li><i class="bi bi-clock list-icon"></i> 10:00 - 18:00</li>
                                <li><i class="bi bi-geo-alt list-icon"></i> Sede del Canile, [Indirizzo]</li>
                            </ul>
                            <a href="#" class=" btn-cta btn-sm btn-card mt-auto">Partecipa</a>
                        </div>
                    </div>
                </div>
                <!-- Evento 2: Mercatino Solidale -->
                <div class="col-12 col-md-4">
                    <div class="custom-card shadow-light">
                        <img class="img-fluid card-event-img" src="/media/mercatino.png"
                            alt="immagine evento mercatino">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Mercatino Solidale Canile</h5>
                            <p class="custom-card-text">Acquista prodotti artigianali per sostenere le nostre attività.
                                Ogni acquisto è un aiuto concreto!</p>
                            <ul class="list-unstyled text-start small mb-3">
                                <li><i class="bi bi-calendar list-icon"></i> 25 Settembre 2025</li>
                                <li><i class="bi bi-clock list-icon"></i> 09:00 - 17:00</li>
                                <li><i class="bi bi-geo-alt list-icon"></i> Piazza Centrale, [Città]</li>
                            </ul>
                            <a href="#" class="btn-card  btn-cta btn-sm mt-auto">Scopri di più</a>
                        </div>
                    </div>
                </div>
                <!-- Evento 3: Open Day Canile -->
                <div class="col-12 col-md-4">
                    <div class="custom-card shadow-light">
                        <img class="img-fluid card-event-img" src="/media/openDay.PNG" alt="Immagine evento Open Day">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Open Day: "Un Giorno da Volontario"</h5>
                            <p class="custom-card-text">Vivi un'esperienza immersiva e scopri cosa significa essere
                                volontario nel nostro canile.</p>
                            <ul class="list-unstyled text-start small mb-3">
                                <li><i class="bi bi-calendar list-icon"></i> 15 Ottobre 2025</li>
                                <li><i class="bi bi-clock list-icon"></i> 14:00 - 17:00</li>
                                <li><i class="bi bi-geo-alt list-icon"></i> Sede del Canile, [Indirizzo]</li>
                            </ul>
                            <a href="#" class="btn-card  btn-cta btn-sm mt-auto">Registrati</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="diventa-volontario" class="container mx-auto px-4  text-center my-5">
        <h1 class="section-heading my-4">Diventa Volontario</h1>
        <p class="text-lg mb-8 max-w-4xl mx-auto">Se hai tempo, energia e un grande amore per gli animali, diventare
            volontario è un modo incredibile per fare la differenza. Il tuo aiuto è prezioso per il benessere dei nostri
            ospiti.</p>
        <a href="{{ route('Contatti') }}#ModuloAdozioni" class="btn btn-cta btn-lg btnCustom my-4">Invia la Tua Candidatura</a>
    </section>

    <!-- Sezione Compiti dei Volontari -->
    <section id="compiti-volontari" class="container mx-auto px-4 py-12 text-center my-4">
        <h2 class="section-heading">Cosa Fanno i Nostri Volontari?</h2>
        <p class="text-lg mb-10 max-w-4xl mx-auto">I compiti dei volontari sono vari e si adattano alle diverse abilità
            e disponibilità. Ogni aiuto è fondamentale per la gestione quotidiana e per migliorare la qualità di vita
            degli animali.</p>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="custom-card shadow-light" data-aos="zoom-in">
                    <div class="custom-card-body">
                        <i class="bi bi-dog custom-card-title display-4 mb-3"></i>
                        <h5 class="custom-card-title">Passeggiate e Socializzazione</h5>
                        <p class="custom-card-text">Portare i cani a passeggio, giocare con loro e aiutarli a
                            socializzare, fondamentale per il loro equilibrio.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="custom-card shadow-light" data-aos="zoom-in">
                    <div class="custom-card-body">
                        <i class="bi bi-basket3 custom-card-title display-4 mb-3"></i>
                        <h5 class="custom-card-title">Cura degli Ambienti</h5>
                        <p class="custom-card-text">Aiutare nella pulizia e nel mantenimento dei recinti e delle aree
                            comuni del canile, garantendo igiene e ordine.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="custom-card shadow-light" data-aos="zoom-in">
                    <div class="custom-card-body">
                        <i class="bi bi-megaphone custom-card-title display-4 mb-3"></i>
                        <h5 class="custom-card-title">Promozione e Eventi</h5>
                        <p class="custom-card-text">Supportare nell'organizzazione e nella promozione di eventi,
                            raccolte fondi e campagne di sensibilizzazione.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="custom-card shadow-light" data-aos="zoom-in">
                    <div class="custom-card-body">
                        <i class="bi bi-camera custom-card-title display-4 mb-3"></i>
                        <h5 class="custom-card-title">Gestione Social Media</h5>
                        <p class="custom-card-text">Aiutare a raccontare le storie dei nostri animali, gestire le pagine
                            social e aggiornare il sito web.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="custom-card shadow-light" data-aos="zoom-in">
                    <div class="custom-card-body">
                        <i class="bi bi-clipboard-check custom-card-title display-4 mb-3"></i>
                        <h5 class="custom-card-title">Supporto Amministrativo</h5>
                        <p class="custom-card-text">Offrire supporto nella gestione di documenti, modulistica e attività
                            d'ufficio.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="custom-card shadow-light" data-aos="zoom-in">
                    <div class="custom-card-body">
                        <i class="bi bi-car custom-card-title display-4 mb-3"></i>
                        <h5 class="custom-card-title">Trasporto Animali</h5>
                        <p class="custom-card-text">Assistere nel trasporto degli animali per visite veterinarie o
                            eventi di adozione, se in possesso di mezzi idonei.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Sezione Testimonianze dei Volontari -->
<section id="testimonials" class="">
  <h2>Le voci dei nostri volontari</h2>
  <div class="testimonial-container">
    <div class="testimonial testimonial-light shadow-light" data-aos="flip-left">
      <img src="/media/anna.jpg" alt="Maria Rossi" class="testimonialProfileImageWrapper">
      <p class="">"Far parte di questo progetto mi ha cambiato..."</p>
      <p class="">Maria Rossi</p>
    </div>
    <div class="testimonial shadow-light" data-aos="flip-left">
      <img src="/media/aceVentura.jpg" alt="AceVentura immagine" class="testimonialProfileImageWrapper">
      <p class="">"Un’esperienza che ha arricchito il mio cuore..."</p>
      <p class="">Ace Ventura</p>
    </div>
    <div class="testimonial shadow-light" data-aos="flip-left">
      <img src="/media/Dr.Dolittle.jpg" alt="Dr.Dolittle Immagine" class="testimonialProfileImageWrapper">
      <p class="">"Condividere sorrisi e speranza ogni giorno..."</p>
      <p class="">Dr.Dolittle</p>
    </div>
  </div>
</section>

</x-layout>
