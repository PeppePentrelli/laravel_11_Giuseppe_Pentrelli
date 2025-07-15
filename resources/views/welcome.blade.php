<x-layout>

    <style>
        body {
            overflow-x: hidden;
        }
    </style>


    <header
        class="container-fluid header-welcome text-white d-flex align-items-center justify-content-center border-bottom">
        <div class="overlay"></div>
        <div class="content text-center">
            <h1 class="display-4 fw-bold">Benvenuto nel canile "Un cuore per ogni zampa"!</h1>
            <p class="lead">La nostra missione è dare una seconda possibilità a ogni amico a quattro zampe, trovando
                loro una casa piena d'amore.</p>
            @auth <a href="{{ route('stories.index') }}" class="btn btn-lg btnCustom mt-3">Trova il tuo nuovo amico!</a>
            @endauth
            @guest<a href="{{ route('register') }}" class="btn btn-lg btnCustom mt-3"> Registrati o Accedi</a> @endguest
        </div>
    </header>


    <section data-aos="fade-right"
        class="container-fluid section2-welcome text-white d-flex align-items-center justify-content-center">
        <div class="overlay"></div>
        <div class="content text-center">
            <h2 class="display-4 fw-bold">La Nostra Missione</h2>
            <p class="lead">Siamo un'associazione no-profit dedicata al salvataggio, alla riabilitazione e
                all'adozione di cani e gatti abbandonati. Ogni giorno lavoriamo con passione per garantire loro un
                futuro migliore.</p>
            <p>Scegli la categoria di animali che desideri visualizzare per l'adozione.</p>
            <div>
                <a href="{{ route('dogs.index') }}#section-dog" class="btn btn-lg btnCustom mt-3 me-2">Cani</a>
                <a href="{{ route('cats.index') }}#section-cat" class="btn btn-lg btnCustom mt-3  ms-2">Gatti</a>
            </div>
        </div>
    </Section>


    <section data-aos="fade-left"
        class="container-fluid section4-welcome text-white d-flex align-items-center justify-content-center">
        <div class="overlay"></div>
        <div class="content text-center">
            <h2 class="display-4 fw-bold">Le Ultime Storie Felici</h2>
            <p class="lead">Lasciati emozionare dalle storie di successo dei nostri amici adottati.</p>
            <div>
                <a href="{{ route('stories.index') }}" class="btn btn-lg btnCustom mt-3 me-2">Leggi le storie</a>
            </div>
        </div>
    </Section>


    <section data-aos="fade-up"
        class="container-fluid section3-welcome text-white d-flex align-items-center justify-content-center">
        <div class="overlay"></div>
        <div class="content text-center">
            <h2 class="display-4 fw-bold">Come Puoi Aiutarci</h2>
            <p class="lead mb-8 max-w-4xl mx-auto">Il tuo supporto è fondamentale per dare una vita migliore ai nostri
                amici a quattro zampe. Scopri come puoi fare la differenza!</p>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-4">
                <a href="#" class="btn btnCustom">
                    <i class="bi bi-heart-fill me-2"></i> Fai una Donazione
                </a>
                <a href="{{ route('volontariato.volontariato') }}" class="btn btnCustom">
                    <i class="bi bi-people-fill me-2"></i> Diventa Volontario
                </a>
            </div>
        </div>
    </Section>




    <section data-aos="fade-left"
        class="container-fluid section5-welcome text-white d-flex align-items-center justify-content-center">
        <div class="overlay"></div>
        <div class="content text-center">
            <h2 class="display-4 fw-bold">Leggi tutte le curiosità</h2>
            <p class="lead mb-8 max-w-4xl mx-auto">Scopri i consigli su come trattare al meglio il tuo amico a quattro
                zampe</p>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-4">
                <a href="{{route('curiosity.show')}}" class="btn btnCustom">
                    <i class="bi bi-heart-fill me-2"></i>Leggi le curiosità
                </a>

            </div>
        </div>
    </Section>


<section data-aos="fade-right"
    class="container-fluid section6-welcome text-white d-flex align-items-center justify-content-center">
    <div class="overlay"></div>
    <div class="content text-center">
        <h2 class="display-4 fw-bold">Unisciti alla Nostra Community!</h2>
        <p class="lead mb-8 max-w-4xl mx-auto">La tua voce conta! Condividi le tue esperienze, posta i tuoi consigli e connettiti con altri amanti degli animali.</p>
        <div class="d-flex flex-column flex-md-row justify-content-center gap-4">
            <a href="{{route('register')}}" class="btn btnCustom">
                <i class="bi bi-chat-dots-fill me-2"></i>Inizia a Partecipare
            </a>
            <a href="{{route('posts.index')}}" class="btn btnCustom">
                <i class="bi bi-eye-fill me-2"></i>Esplora il Blog
            </a>
        </div>
    </div>
</section>



    {{-- <section class="container-fluid">
<div class="row  justify-content-center vh-100">
                    <div class="d-flex flex-column section-carosello align-items-center  col-  mt-5 ">
                        <h5>ORARI LAVORATIVI</h5>
                        <P>Lunedi <data>9.00 - 19.00</data></P>
                        <P>Martedi <data>9.00 - 19.00</data></P>
                        <P> Mercoledi <data>9.00 - 19.00</data></P>
                        <P>Giovedi <data>9.00 - 19.00</data></P>
                        <P>Venerdi <data>9.00 - 19.00</data></P>
                        <P>Sabato <data>9.00 - 19.00</data></P>
                        <P>Domenica <data>9.00 - 13.00</data></P>
                    </div>
</div>
</section> --}}

    {{-- 
<a href="">
    <section class="container-fluid">
        <div class="row vh-100 section-adottami shadow">
            
        </div>
    </section>
</a> --}}



</x-layout>
