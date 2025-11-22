@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/dicas.css') }}">

<div class="page-container">

    <div class="header-section">
        <h2>Dicas Personalizadas</h2>
        <p>Sugestões baseadas no seu perfil</p>
    </div>

    <div class="cards-grid">

        @foreach($dicas as $dica)
        <div class="card">
            <div class="icon">
                <img src="{{ asset('icons/' . $dica->icone) }}" alt="icone">
            </div>

            <h3>{{ $dica->titulo }}</h3>
            <p>{{ $dica->descricao }}</p>

            <button class="btn">Saber Mais</button>
        </div>
        @endforeach

    </div>

</div>

@endsection
