 <footer class="footerCustom footer-light fade-in py-5 text-center container-fluid shadow-on-green">
     <div class="row">
         <div class="col-12 mb-4">
             <img src="/media/LogoNavDark.png" alt="Logo Associazione" class="img-fluid mb-3 Logo"
                 style="max-width: 150px;">
             <h5>Un cuore per ogni zampa 💖</h5>
             <p>Dal 2010 aiutiamo cani e gatti a trovare una casa piena d’amore.</p>
         </div>
         {{-- Sezione contatti --}}
         <div class="col-12 col-md-4 my-3">
             <h3>Contatti Rapidi</h3>
             <p><i class="bi bi-telephone-fill"></i> +39 012 345 6789</p>
             <p><i class="bi bi-envelope-fill"></i> happylittlepaws@gmail.com</p>
             <p><i class="bi bi-geo-alt-fill"></i> Via dei cuccioli 12, Modugno,(Ba)</p>
             <p><i class="bi bi-clock-fill"></i> Lun - Ven: 9:00 - 18:00</p>
             <div class="mt-3">
                 <a href="#" aria-label="Facebook"><i class="bi bi-facebook fs-3 mx-2 footerLink "></i></a>
                 <a href="#" aria-label="Instagram"><i class="bi bi-instagram fs-3 mx-2 footerLink"></i></a>
                 <a href="#" aria-label="YouTube"><i class="bi bi-twitter fs-3 mx-2 footerLink"></i></a>
                 <a href="#" aria-label="YouTube"><i class="bi bi-tiktok fs-3 mx-2 footerLink"></i></a>
                 <a href="#" aria-label="YouTube"><i class="bi bi-youtube fs-3 mx-2 footerLink"></i></a>
             </div>
         </div>
         {{-- Sezione Navigazione --}}
         <div class="col-12 col-md-4 my-3">
             <h3>Navigazione</h3>
             <ul class="list-unstyled">
                 <li><a href="{{ route('welcome') }}" class="text-decoration-none footerLink">Home</a></li>
                 <li><a href="{{route('Adozioni')}}" class="text-decoration-none footerLink">Adozioni</a></li>
                 <li><a href="{{route('volontariato.volontariato')}}" class="text-decoration-none footerLink">Volontariato</a></li>
                 <li><a href="{{route('volontariato.volontariato')}}" class="text-decoration-none footerLink">Eventi</a></li>
                 <li><a href="{{route('Adozioni')}}#FaqAdozioni" class="text-decoration-none footerLink">FAQ</a></li>
                 <li><a href="{{route('curiosity.show')}}" class="text-decoration-none footerLink">Curiosità</a></li>
                 <li><a href="{{route('posts.index')}}" class="text-decoration-none footerLink">Notizie e Blog</a></li>
             </ul>
         </div>
         {{-- Sezione Supportaci --}}
         <div class="col-12 col-md-4 my-3">
             <h3>Supportaci</h3>
             <a href="#" class="btn btn-lg btn-success mb-3 btn-donazione">Fai una Donazione</a>
             <p>Oppure diventa volontario e cambia una vita.</p>
         </div>
     </div>
     {{-- Sezione Partner --}}
     <hr class="my-5">
     <div class="row">
         <div class="col-12 my-3">
             <h3>Partner</h3>
             <div class="d-flex justify-content-center flex-wrap">
                 <a target="_blank" href="https://aulab.it/lp-hackademy-2024?utm_term=aulab&utm_source=adwords&utm_medium=ppc&utm_campaign=googleads_Aulab_Search_Brand&hsa_cam=10617260380&hsa_grp=154262707821&hsa_mt=e&hsa_src=g&hsa_ad=686641668378&hsa_acc=1259057101&hsa_net=adwords&hsa_kw=aulab&hsa_tgt=kwd-1048611554352&hsa_ver=3&gad_source=1&gad_campaignid=10617260380&gbraid=0AAAAADQgCuqE9j0S4_nyqyjWm9-MUw4FQ&gclid=Cj0KCQjwpf7CBhCfARIsANIETVq0cAhgvurrWudYz_v45msxaTAudf18GtlzproYFP0o0C2o0mOcz6MaAiZkEALw_wcB" class="text-decoration-none footerLink mx-2 my-1">Aulab</a> |
                 <a target="_blank" href="https://joezampetti.it/" class="text-decoration-none footerLink mx-2 my-1">joe zampetti </a> |
                 <a target="_blank" href="https://www.arcaplanet.it/?utm_source=google&utm_medium=cpc&utm_campaign=Arcaplanet_PMX_RoyalCanin-Gatto-COM_6.pp&gad_source=1&gad_campaignid=22666919193&gbraid=0AAAAADmXwgnn3aJVwbHZ2h0WlSob0E0T8&gclid=Cj0KCQjwpf7CBhCfARIsANIETVragQe1C4ZrPsfzRNeCqd8x-hiVX3Dw84qqQukNe8JHSq0LxTKPBpIaAlsbEALw_wcB&gclsrc=aw.ds" class="text-decoration-none footerLink mx-2 my-1">Arca Planet</a> |
                 <a target="_blank" href="https://www.pingry.it/" class="text-decoration-none footerLink mx-2 my-1">Pingry</a>
             </div>
         </div>
         {{-- Sezione Privacy --}}
         <div class="col-12 my-3">
    <a href="{{ route('privacy.legal') }}#termini-condizioni" class="text-decoration-none footerLink mx-2">Termini e Condizioni</a> |
    <a href="{{ route('privacy.legal') }}#cookie-policy" class="text-decoration-none footerLink mx-2">Cookie Policy</a> |
    <a href="{{ route('privacy.legal') }}#privacy-policy" class="text-decoration-none footerLink mx-2">Privacy Policy</a> | 
    <a href="{{ route('privacy.legal') }}#dichiarazione-accessibilita" class="text-decoration-none footerLink mx-2">Dichiarazione di Accessibilità</a>
</div>
         </div>
         {{-- Sezione Finale --}}
         <div class="col-12 mt-4">
             <small class="text-muted footerLink">© 2025 Happy Little Paws | P.IVA 00000000</small>
             <p class="mt-1">Powered by Giuseppe Pentrelli</p>
         </div>
         {{-- Bottone Torna su --}}
         <div class="col-12 mt-3 mb-2">
             <a href="#" class="btn btn-footer btn-torna-su">Torna su ↑</a>
         </div>
     </div>
 </footer>
