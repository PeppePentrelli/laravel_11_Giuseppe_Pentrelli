<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-theme-dark bodyCustom fade-in">
    <x-navbar></x-navbar>
    
    
    
    {{$slot}}
    
    <x-footer></x-footer>
    @vite(['resources/js/app.js'])



  <!-- Script di Google translate -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({
  pageLanguage: 'it',
  includedLanguages: 'en,fr,de,es,pt'
}, 'google_translate_element');
    }

  </script>
  
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const gtCookie = document.cookie.split('; ').find(row => row.startsWith('googtrans='));
      if (gtCookie && !gtCookie.includes('/it/it')) {
        document.cookie = "googtrans=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
        location.reload();
      }
    });
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script>
function triggerTranslate(lang) {
  const select = document.querySelector(".goog-te-combo");
  if (select) {
    if (lang === "it") {
     
      document.cookie = "googtrans=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
      location.reload();
    } else {
      select.value = lang;
      select.dispatchEvent(new Event("change"));
    }
  }
}
  
    document.addEventListener("DOMContentLoaded", () => {
      const customSelect = document.getElementById("customLangSelect");
      if (customSelect) {
        customSelect.addEventListener("change", function () {
          const lang = this.value;
          
          if (lang) triggerTranslate(lang);
        });
      }
    });
  </script>

</body>

</html>