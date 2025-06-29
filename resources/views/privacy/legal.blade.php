<x-layout>
    <style>
        section h2 {
            border-left: 5px solid #198754;
            padding-left: 15px;
        }
        section p {
            font-size: 1.1rem;
            line-height: 1.8;
        }
    </style>

    <header class="container-fluid bg-success text-white py-5 shadow">
        <div class="container text-center">
            <h1 class="display-5 fw-bold">Informazioni Legali</h1>
            <p class="lead">Consulta i nostri documenti legali per navigare in sicurezza e trasparenza</p>
        </div>
    </header>

    <section class="container my-5">
        <div class="container my-5">
            <h1 class="mb-4 text-center">Termini e Condizioni, Privacy e Cookie Policy</h1>

            <section id="termini-condizioni" class="mb-5">
                <h2>Termini e Condizioni</h2>
                <p>Benvenuto nel nostro sito web dedicato al canile "Un cuore per ogni zampa". Utilizzando questo sito, accetti di rispettare i seguenti termini e condizioni:</p>
                <ul>
                    <li>Il contenuto del sito è fornito a scopo informativo e non costituisce consulenza legale o professionale.</li>
                    <li>Non siamo responsabili per eventuali danni derivanti dall'uso del sito.</li>
                    <li>Ti impegni a non utilizzare il sito per scopi illegali o non autorizzati.</li>
                    <li>Il materiale pubblicato è protetto da copyright e non può essere copiato senza autorizzazione.</li>
                </ul>
                <p>Ci riserviamo il diritto di modificare questi termini in qualsiasi momento, quindi ti consigliamo di controllarli periodicamente.</p>
            </section>

            <section id="cookie-policy" class="mb-5">
                <h2>Cookie Policy</h2>
                <p>Il nostro sito utilizza cookie per migliorare la tua esperienza di navigazione. I cookie sono piccoli file di testo che vengono memorizzati sul tuo dispositivo.</p>
                <p>Utilizziamo cookie per:</p>
                <ul>
                    <li>Analizzare il traffico e migliorare il sito.</li>
                    <li>Memorizzare le tue preferenze e impostazioni.</li>
                    <li>Personalizzare contenuti e pubblicità.</li>
                </ul>
                <p>Puoi scegliere di disabilitare i cookie tramite le impostazioni del tuo browser, ma alcune funzionalità potrebbero non funzionare correttamente.</p>
            </section>

            <section id="privacy-policy" class="mb-5">
                <h2>Privacy Policy</h2>
                <p>Rispettiamo la tua privacy e ci impegniamo a proteggere i tuoi dati personali. Di seguito ti spieghiamo quali dati raccogliamo e come li utilizziamo.</p>
                <ul>
                    <li><strong>Dati raccolti:</strong> Nome, email, informazioni di contatto, e qualsiasi dato che fornisci volontariamente.</li>
                    <li><strong>Utilizzo:</strong> Per rispondere alle tue richieste, migliorare il servizio e inviarti comunicazioni relative al canile.</li>
                    <li><strong>Conservazione:</strong> Conserviamo i dati solo per il tempo necessario a soddisfare le finalità per cui sono stati raccolti.</li>
                    <li><strong>Diritti:</strong> Puoi chiedere accesso, rettifica, cancellazione o limitazione del trattamento dei tuoi dati in qualsiasi momento.</li>
                </ul>
                <p>Per qualsiasi domanda riguardo la privacy, contattaci all'indirizzo <strong>happypetpaws@gmail.it</strong></p>
            </section>

            <section id="dichiarazione-accessibilita">
                <h2>Dichiarazione di Accessibilità</h2>
                <p>Il nostro sito è progettato per essere accessibile a tutti, inclusi utenti con disabilità. Ci impegniamo a rispettare le linee guida WCAG 2.1 per garantire un'esperienza di navigazione semplice e inclusiva.</p>
                <ul>
                    <li>Struttura chiara e navigabile tramite tastiera.</li>
                    <li>Testi leggibili e contrasti adeguati.</li>
                    <li>Supporto per lettori di schermo.</li>
                </ul>
                <p>Se riscontri problemi di accessibilità, ti preghiamo di segnalarceli tramite <strong><a style="text-decoration: none" class="text-green" href="{{ route('Contatti') }}">la nostra pagina contatti</a></strong>.</p>
            </section>
        </div>

        <div class="text-center">
            <a href="{{ route('welcome') }}" class="btn btnCustom mt-4">
                <i class="bi bi-house-fill me-2"></i>Torna alla Home
            </a>
        </div>
    </section>
</x-layout>
