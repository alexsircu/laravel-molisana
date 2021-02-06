@extends('layouts.main')

@section('content')
<main>
  <div id="product-container">
    <h1 id="products-title">{{ $product["titolo"] }}</h1>
    <img src="{{ $product["src-h"] }}" alt="{{ $product["titolo"] }}">
  </div>
</main>    
@endsection