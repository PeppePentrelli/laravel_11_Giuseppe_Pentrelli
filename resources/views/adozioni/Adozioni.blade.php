<x-layout>
    <!-- Introduzione -->

    <section class="container mx-auto px-4 py-8 text-center bg-canile-dark text-canile-light mt-5">
        <h1 class="section-heading text-canile-light mb-6">Un Atto d'Amore❤: La Tua Guida all'Adozione</h1>
        <p class="text-lg mb-8">L'adozione di un animale è una decisione che cambierà la tua vita e quella di un amico
            peloso. Qui troverai tutte le informazioni per intraprendere questo meraviglioso percorso con consapevolezza
            e gioia, passo dopo passo.</p>
        <picture>
            <img src="/media/ImgHeaderAdozioni.jpg" alt="..." class="img-fluid imgIntroduzione">

        </picture>
    </section>


    <div class="text-center my-5">
        <h2 class="text-center">Il Tuo Percorso Verso l'Adozione 🐶</h2>
        <p class="">Adottare è un viaggio fatto di reciproca scoperta. Abbiamo semplificato il processo in pochi
            chiari passaggi per guidarti verso l'incontro con il tuo nuovo compagno di vita.</p>
    </div>


    {{-- Step Adozione --}}
    <section class="timeline container-fluid my-5">

        <div class="row flex-column justify-content-center d-flex">
            <div class="timeline-item left" data-aos="fade-up">
                <div class="icon"><i class="bi bi-file-earmark-text"></i></div>
                <h4>Compila il modulo</h4>
                <p>Inserisci i tuoi dati e scegli il cane che vorresti adottare.</p>
            </div>

            <div class="timeline-item right" data-aos="fade-up">
                <div class="icon"><i class="bi bi-telephone"></i></div>
                <h4>Primo colloquio</h4>
                <p>Ti contatteremo per conoscerti meglio e capire le tue esigenze.</p>
            </div>

            <div class="timeline-item left" data-aos="fade-up">
                <div class="icon"><i class="bi bi-house-door"></i></div>
                <h4>Visita pre-affido</h4>
                <p>Facciamo un sopralluogo per assicurarci che tutto sia pronto.</p>
            </div>

            <div class="timeline-item right" data-aos="fade-up">
                <div class="icon"><i class="bi bi-heart-fill"></i></div>
                <h4>Inserimento in famiglia</h4>
                <p>Il tuo amico peloso arriva a casa tua per iniziare la nuova vita insieme!</p>
            </div>
        </div>
    </section>


    {{-- Regolamento Adozione --}}

    <section class="container mx-auto px-4 py-12 bg-canile-dark text-canile-light" id="RegolamentoAdozioni"
        data-aos="fade-up">
        <h2 class="section-heading text-canile-light mb-10 text-center">Regolamento per un'Adozione Responsabile</h2>
        <div class="max-w-4xl mx-auto text-left">
            <p class="text-lg mb-4">Per garantire il benessere dei nostri amici a quattro zampe e la serenità delle
                famiglie adottive, abbiamo stabilito un regolamento chiaro e trasparente. La lettura e l'accettazione di
                queste linee guida sono passaggi fondamentali del processo di adozione.</p>
            <ul class="list-disc list-inside text-lg space-y-2">
                <li>L'adottante deve essere maggiorenne e in possesso di un documento d'identità valido.</li>
                <li>L'ambiente domestico deve essere sicuro e idoneo ad accogliere un animale, con spazi adeguati e
                    protezione da pericoli.</li>
                <li>L'adottante si impegna a fornire all'animale cibo di qualità, cure veterinarie regolari
                    (vaccinazioni, sverminazioni, microchip), e un ambiente stimolante.</li>
                <li>È obbligatoria la sterilizzazione dell'animale entro i tempi stabiliti, salvo diverse indicazioni
                    mediche certificate.</li>
                <li>L'animale non potrà essere ceduto a terzi senza il preventivo consenso della nostra associazione.
                </li>
                <li>Ci riserviamo il diritto di effettuare controlli post-affido per verificare le condizioni
                    dell'animale.</li>
                <li>In caso di difficoltà o problemi, l'adottante si impegna a contattare l'associazione per ricevere
                    supporto e consigli.</li>
            </ul>
            <p class="text-lg mt-6">Questo regolamento è parte integrante del nostro impegno per un'adozione etica e
                consapevole. Per il testo completo, ti invitiamo a scaricare il documento ufficiale <a
                    href="{{ asset('documents/regolamento-adozioni.pdf') }}"
                    class="text-link-color hover:text-link-hover-color font-bold"
                    download="Regolamento_Adozioni.pdf">qui</a> (link al PDF).</p>
        </div>
    </section>

    <hr>

    {{-- Modulo adozione --}}
    <div class=" my-5 text-center" data-aos="fade-up">
        <h1 class="mb-3"><i class="bi bi-heart-fill text-danger"></i> Adotta un Amico per la Vita</h1>
        <p class="lead">Ogni adozione è un nuovo inizio. Scopri il nostro percorso e trova il compagno giusto per te.
        </p>
    </div>


    <section class="container-fluid d-flex justify-content-center align-items-center" data-aos="fade-up">
        <div class="row">
            <div class="col-12">

                <fieldset class="shadow p-3 form-dark-theme fieldset-switch">
                    <legend>Compila il modulo</legend>
                    <picture class="d-flex justify-content-center">
                        <img class="img-fluid Logo2" src="" alt="immagine del logo del sito web">
                    </picture>
                    <form action="{{ route('adoption_form') }}" method="POST" id="ModuloAdozioni"
                        enctype="multipart/form-data" class="col-12 ">
                        @csrf
                        @if (session('messaggio_adozione'))
                            <div class="alert alert-success">
                                {{ session('messaggio_adozione') }}
                            </div>
                        @endif
                        {{-- Campo Nome/Cognome --}}
                        <div class="mb-3 mx-5">
                            <label for="name" class="form-label">Inserisci nome e cognome</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" autocomplete="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Campo Email --}}
                        <div class="mb-3 mx-5">
                            <label for="email" class="form-label">Indirizzo Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}" autocomplete="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Campo Telefono --}}
                        <div class="mb-3 mx-5">
                            <label for="phone" class="form-label">Numero di Telefono</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                <input type="tel" pattern="[0-9+\s()-]{6,15}"
                                    title="Inserisci un numero di telefono valido"
                                    class="form-control @error('phone') is-invalid @enderror" id="phone"
                                    name="phone" value="{{ old('phone') }}" autocomplete="tel">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Campo Indirizzo: Città  --}}
                        <div class="mb-3 mx-5">
                            <label for="address_city" class="form-label">Città</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control @error('address_city') is-invalid @enderror"
                                    id="address_city" name="address_city" value="{{ old('address_city') }}"
                                    autocomplete="address-level2">
                                @error('address_city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Campo Indirizzo: Via  --}}
                        <div class="mb-3 mx-5">
                            <label for="address_street" class="form-label">Indirizzo (Via/Piazza)</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-house"></i></span>
                                <input type="text"
                                    class="form-control @error('address_street') is-invalid @enderror"
                                    id="address_street" name="address_street" value="{{ old('address_street') }}"
                                    autocomplete="street-address">
                                @error('address_street')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        {{-- Campo Indirizzo: CAP  --}}
                        <div class="mb-3 mx-5">
                            <label for="address_zip" class="form-label">CAP</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                <input type="text" class="form-control @error('address_zip') is-invalid @enderror"
                                    id="address_zip" name="address_zip" value="{{ old('address_zip') }}"
                                    autocomplete="postal-code">
                                @error('address_zip')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Campo Situazione Abitativa  --}}
                        <div class="mb-3 mx-5">
                            <label class="form-label d-block">Tipo di abitazione</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('living_situation') is-invalid @enderror"
                                    type="radio" name="living_situation" id="apartment" value="apartment"
                                    {{ old('living_situation') == 'apartment' ? 'checked' : '' }}>
                                <label class="form-check-label" for="apartment">Appartamento</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('living_situation') is-invalid @enderror"
                                    type="radio" name="living_situation" id="house_with_garden"
                                    value="house_with_garden"
                                    {{ old('living_situation') == 'house_with_garden' ? 'checked' : '' }}>
                                <label class="form-check-label" for="house_with_garden">Casa con Giardino</label>
                            </div>
                            @error('living_situation')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Campo Numero Adulti  --}}
                        <div class="mb-3 mx-5">
                            <label for="num_adults" class="form-label">Numero di adulti conviventi</label>
                            <input type="number" class="form-control @error('num_adults') is-invalid @enderror"
                                id="num_adults" name="num_adults" value="{{ old('num_adults', 1) }}"
                                min="1">
                            @error('num_adults')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Campo Numero Bambini --}}
                        <div class="mb-3 mx-5">
                            <label for="num_children" class="form-label">Numero di bambini/minori conviventi (se
                                presenti)</label>
                            <input type="number" class="form-control @error('num_children') is-invalid @enderror"
                                id="num_children" name="num_children" value="{{ old('num_children', 0) }}"
                                min="0">
                            @error('num_children')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Campo Esperienza Precedente con Animali --}}
                        <div class="mb-3 mx-5">
                            <label for="previous_pets" class="form-label">Hai avuto altri animali domestici in
                                passato? Se sì, quali e di che tipo?</label>
                            <textarea class="form-control @error('previous_pets') is-invalid @enderror" id="previous_pets" name="previous_pets"
                                rows="3">{{ old('previous_pets') }}</textarea>
                            @error('previous_pets')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>



                        {{-- Bottone Registrati --}}
                        <div class="d-flex justify-content-center">
                            <button class=" btn btnCustom">Invia Modulo</button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </section>


    {{-- FAQ ADOZIONI --}}

    <section class="container my-5" id="FaqAdozioni" data-aos="fade-up">
        <h2 class="text-center mb-4">Domande Frequenti (FAQ Adozioni) 🐾</h2>

        <div class="accordion" id="faqAccordion">

            <!-- Prima domanda -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                        Chi può adottare un animale?
                    </button>
                </h2>
                <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Può adottare qualsiasi persona maggiorenne, in grado di garantire tempo, amore, sicurezza e
                        stabilità economica per il benessere dell’animale.
                    </div>
                </div>
            </div>

            <!-- Seconda domanda -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                        È prevista una visita pre-affido?
                    </button>
                </h2>
                <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sì. Prima dell’adozione un nostro volontario effettuerà un sopralluogo per verificare l’idoneità
                        dell’ambiente domestico.
                    </div>
                </div>
            </div>

            <!-- Terza domanda -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                        L’adozione ha un costo?
                    </button>
                </h2>
                <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        No, l’adozione non ha un costo obbligatorio, ma chiediamo un contributo simbolico per aiutarci a
                        sostenere le spese veterinarie e gestionali.
                    </div>
                </div>
            </div>

            <!-- Quarta domanda -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                        Quanto tempo dura il processo di adozione?
                    </button>
                </h2>
                <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Il processo può variare da pochi giorni a qualche settimana, in base alla disponibilità
                        dell’animale e alle verifiche necessarie per garantire un buon affido.
                    </div>
                </div>
            </div>

            <!-- Quinta domanda -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                        Posso adottare se ho altri animali in casa?
                    </button>
                </h2>
                <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sì, ma è importante che la convivenza venga valutata attentamente durante il colloquio e la
                        visita pre-affido, per garantire la sicurezza e il benessere di tutti gli animali.
                    </div>
                </div>
            </div>

            <!-- Sesta domanda -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                        Posso restituire l’animale se non riesco ad adattarmi?
                    </button>
                </h2>
                <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Certo, la cosa più importante è il benessere dell’animale. In caso di difficoltà è fondamentale
                        contattare subito il canile, che potrà supportarti e trovare la soluzione migliore.
                    </div>
                </div>
            </div>

            <!-- Settima domanda -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven">
                        Quali documenti servono per adottare?
                    </button>
                </h2>
                <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        È necessario presentare un documento di identità valido e compilare il modulo di richiesta
                        adozione. In alcuni casi potrà essere richiesto un documento che attesti la proprietà
                        dell’abitazione o il consenso dei coinquilini.
                    </div>
                </div>
            </div>

            <!-- Ottava domanda -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight">
                        Cosa succede se l’animale si ammala dopo l’adozione?
                    </button>
                </h2>
                <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqHeadingEight"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        L’adottante è responsabile delle cure veterinarie dopo l’adozione. Tuttavia, il canile resta a
                        disposizione per consigli e supporto in caso di necessità.
                    </div>
                </div>
            </div>


        </div>
    </section>

    {{-- Sezione Finale  --}}

    <section class="container my-5 text-center" data-aos="fade-up">
        <h3>Non vedi l’ora di iniziare?</h3>
        <p class="lead">Contattaci subito e cambia la vita di un nostro ospite.</p>
        <a href="{{ route('Adozioni') }}#ModuloAdozioni" class="btn btn-lg btnCustom">Inizia il percorso di
            adozione</a>
    </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <img class="img-fluid" src="/media/007-dog.png" alt="">
            </div>
        </div>
    </div>

</x-layout>
