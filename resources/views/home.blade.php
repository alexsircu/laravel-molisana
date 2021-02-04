@extends('layouts.main')

@section('content')
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
@endsection 
