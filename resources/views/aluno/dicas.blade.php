@extends('layouts.dicas')

@php
use Illuminate\Support\Str;
// Defina aqui um array de classes de cor para os containers de ícone,
// de forma que cada dica possa ter uma cor de fundo diferente,
// simulando a diversidade da imagem original.
$icon_bg_colors = [
    'style="background-color: #fce4e4;"', // Vermelho claro (Pomodoro)
    'style="background-color: #f7f7dc;"', // Amarelo claro (Tarefas)
    'style="background-color: #e4fce4;"', // Verde claro (Calmo)
    'style="background-color: #fff0f0;"', // Rosa claro (Rotina)
    'style="background-color: #e8f0fe;"', // Azul claro (Música)
    'style="background-color: #fff8e1;"', // Laranja claro (Movimento)
];
$color_index = 0;
@endphp

@section('title', 'Dicas para Alunos')
<head>
    <link rel="stylesheet" href="{{ asset('css/dicas.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
@section('content')
<h2 class="section-title">Dicas Personalizadas</h2>
<p class="section-subtitle">Sugestões baseadas em seu aprendizado</p>

@if(isset($dicas) && $dicas->count())
    <div class="tips-grid">
        </div>
@else
    <p class="text-gray-600">Não há dicas disponíveis no momento.</p>
@endif
    @if(isset($dicas) && $dicas->count())
        {{-- A classe 'tips-grid' implementa o layout de grid que substitui grid-cols-3 --}}
        <div class="tips-grid">
            @foreach($dicas as $dica)
                {{-- A classe 'tip-card' aplica o estilo de cartão --}}
                <div class="tip-card">

                    @if($dica->icone)
                        {{-- Atribui uma cor de fundo do array de forma cíclica --}}
                        <div class="tip-icon-container" {!! $icon_bg_colors[$color_index % count($icon_bg_colors)] !!}>
                            {{-- Nota: Se $dica->icone for um nome de classe Font Awesome (ex: 'fas fa-clock'), use <i>.
                                Se for um path de imagem, use <img>, como abaixo.
                                Se for uma imagem real:
                            --}}
                            <img src="{{ asset('icones/' . $dica->icone) }}" alt="Ícone da dica" class="tip-image">

                            {{-- Se for um ícone FA/personalizado, use (necessário linkar Font Awesome):
                            <i class="{{ $dica->icone }} tip-icon"></i>
                            --}}
                        </div>
                        @php $color_index++; @endphp
                    @else
                        {{-- Fallback para garantir que o layout não quebre --}}
                        <div class="tip-icon-container" style="background-color: #e0e0e0;">
                            <i class="fas fa-bookmark tip-icon" style="color: #666;"></i>
                        </div>
                    @endif

                    <h3 class="tip-title">{{ $dica->titulo }}</h3>

                    <p class="tip-description">{{ Str::limit($dica->descricao, 120) }}</p>

                    <a href="{{ route('aluno.dicas.show', $dica->id) }}"
                       class="saber-mais" {{-- Classe 'saber-mais' é o botão estilizado --}}>
                        Ler mais
                    </a>
                </div>
            @endforeach

            {{-- Adiciona o Box Adicional fixo para manter o layout da imagem original --}}
            <div class="tabler-icons-box">
                <div class="tabler-content">
                    <span class="tabler-code-icon">>_</span>
                    <div class="tabler-details">
                        <p class="tabler-title">Recurso Adicional</p>
                        <p class="tabler-info">Aprenda a otimizar</p>
                        <p class="tabler-info">Seu foco</p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p class="text-gray-600">Não há dicas disponíveis no momento.</p>
    @endif
</div>
@endsection
