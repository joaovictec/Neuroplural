@extends('layouts.aluno')

@section('title', $dica->titulo)

@section('content')
<div class="container py-6">
    <h1 class="text-3xl font-bold mb-4">{{ $dica->titulo }}</h1>
    <p class="mb-4">{{ $dica->descricao }}</p>

    @if($dica->icone)
        <img src="{{ asset('icones/' . $dica->icone) }}" alt="Ícone da dica" class="w-16 h-16 mb-4">
    @endif

    <a href="{{ route('aluno.dicas') }}" class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        Voltar para Dicas
    </a>
</div>
@endsection
