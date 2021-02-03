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

        </div>

       </footer>
    </body>
</html>
