@extends('layouts.main')

@section('content')
<main>
  <div id="product-container">
    <h1 id="products-title">{{ $product["titolo"] }}</h1>
    <img src="{{ $product["src-h"] }}" alt="{{ $product["titolo"] }}">
    <img src="{{ $product["src-p"] }}" alt="{{ $product["titolo"] }}" id="product-pack"> 
    <div class="container">
      <p>{!! $product["descrizione"] !!}</p>
    </div>
  </div>
</main>    
@endsection