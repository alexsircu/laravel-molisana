<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    </head>
    <body>
       <header>

         <img src="{{ asset("img/marchio-sito-test.png") }}" alt="Logo">
         <ul class="list-inline">
           <li class="active"><a href="#">Home</a></li>
           <li><a href="#">Prodotti</a></li>
           <li><a href="#">News</a></li>
         </ul>

       </header>

       <main>

         <div class="container">
            <h2>LE LUNGHE</h2>
            <div class="card-container">
              @foreach ($pasta_lunga as $pasta)
                <div class="card">
                  <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                </div>
              @endforeach
            </div>
         </div>

         <div class="container">
            <h2>LE CORTE</h2>
            <div class="card-container">
              @foreach ($pasta_corta as $pasta)
                <div class="card">
                  <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                </div>
              @endforeach
           </div>
         </div>

         <div class="container">
            <h2>LE CORTISSIME</h2>
            <div class="card-container">
              @foreach ($pasta_cortissima as $pasta)
                <div class="card">
                  <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                </div>
              @endforeach
           </div>
         </div>

       </main>

       <footer>

        <div class="container">
          <div id="footer-left">
            <img src="{{ asset("img/marchio-sito-test.png") }}" alt="Logo">

            <ul class="column-list">
              <li><a href="#">Ragione sociale: La Molisana S.P.A.</a></li>
              <li><a href="#">Sede legale: Contrada Colle delle Alpi, 100/A</a></li>
              <li><a href="#">86100 - Campobasso (CB)</a></li>
              <li><a href="#">Pec: lamolisana@pec.it</a></li>
              <li><a href="#">Tel: +39 0874 4981</a></li>
              <li><a href="#">Fax: +39 0874 629584</a></li>
              <li><a href="#">info@lamolisana.it (per segnalazioni degli utenti)</a></li>
              <li><a href="#">commerciale@lamolisana.it</a></li>
              <li><a href="#">export@lamolisana.it</a></li>
              <li><a href="#">numero verde 800818081</a></li>
              <li><a href="#">telefono 3801292455</a></li>
            </ul>
          </div>

          <div id="footer-middle">
            <h2>PASTIFICIO</h2>

            <ul class="column-list">
              <li><a href="#">Il Pastificio</a></li>
              <li><a href="#">Grano decorticato a pietra</a></li>
              <li><a href="#">Il Molise c'è</a></li>
              <li><a href="#">Filiera Integrata</a></li>
              <li><a href="#">100 anni di pasta</a></li>
              <li><a href="#">Sartoria della pasta</a></li>
              <li><a href="#">Spaghetto Quadrato</a></li>
              <li><a href="#">Le persone</a></li>
            </ul>
            
            <h2>PRODOTTI</h2>

            <ul class="column-list">
              <li><a href="#">Le Classiche</a></li>
              <li><a href="#">Le Integrali</a></li>
              <li><a href="#">Le Speciali</a></li>
              <li><a href="#">Le Biologiche</a></li>
              <li><a href="#">Le Gluten-Free</a></li>
              <li><a href="#">Le Semole</a></li>
              <li><a href="#">Le Extra di Lusso</a></li>
            </ul>
          </div>

          <div id="footer-right">
            <h2>COLLEZIONE DA CHEF</h2>

            <ul class="column-list">
              <li><a href="#">Collezione da Chef</a></li>
              <li><a href="#">Grandi Cucine</a></li>
              <li><a href="#">Biologiche</a></li>
              <li><a href="#">Quadrate</a></li>
            </ul>            
          </div>          
        </div>

        <div id="footer-bottom"></div>

       </footer>
    </body>
</html>
