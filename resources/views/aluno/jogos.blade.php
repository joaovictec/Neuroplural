@extends('layouts.dicas') {{-- Estende o mesmo layout de Header/Footer --}}

@section('title', 'Jogos Interativos - NeuroPlural')
<link rel="stylesheet" href="{{ asset('css/dicas.css') }}">
<link rel="stylesheet" href="{{ asset('css/jogos.css') }}">
@section('content')
<div class="jogos-page-container">

    <div class="section-header-jogos">
        <h1 class="section-title">Jogos Interativos</h1>
        <p class="section-subtitle">Aprenda enquanto se diverte!</p>
    </div>

    {{-- Grid de Jogos --}}
    <div class="jogos-grid">

        {{-- Cartão de Jogo 1: Jogos Interativos (Alvo) --}}
        <div class="jogo-card">
            {{-- O ícone é uma imagem, mas vamos simular com Font Awesome e cores --}}
            <div class="jogo-icon-container" style="background-color: #f7e8e8;">
                <i class="fas fa-bullseye jogo-icon" style="color: #e53935;"></i>
            </div>

            <h3 class="jogo-title">Jogos Interativos</h3>
            <p class="jogo-description">Teste e melhore seu foco</p>

            <div class="jogo-stats">
                <span class="stat-item rating"><i class="fas fa-star"></i> 4.8/5</span>
                <span class="stat-item players"><i class="fas fa-users"></i> 1.2K Jogadores</span>
            </div>

            <a href="#" class="jogo-button">Jogar</a>
        </div>

        {{-- Cartão de Jogo 2: Quebra-Cabeça TDAH (Quebra-Cabeça) --}}
        <div class="jogo-card">
            <div class="jogo-icon-container" style="background-color: #e8f7e8;">
                <i class="fas fa-puzzle-piece jogo-icon" style="color: #4caf50;"></i>
            </div>

            <h3 class="jogo-title">Quebra-Cabeça TDAH</h3>
            <p class="jogo-description">Resolva quebra-cabeças divertidos</p>

            <div class="jogo-stats">
                <span class="stat-item rating"><i class="fas fa-star"></i> 4.6/5</span>
                <span class="stat-item players"><i class="fas fa-users"></i> 856 Jogadores</span>
            </div>

            <a href="#" class="jogo-button">Jogar</a>
        </div>

        {{-- Cartão de Jogo 3: Desafio de Tempo (Cronômetro) --}}
        <div class="jogo-card">
            <div class="jogo-icon-container" style="background-color: #fceceb;">
                <i class="fas fa-clock jogo-icon" style="color: #ff8c00;"></i>
            </div>

            <h3 class="jogo-title">Desafio de Tempo</h3>
            <p class="jogo-description">Organize tarefas em tempo limite</p>

            <div class="jogo-stats">
                <span class="stat-item rating"><i class="fas fa-star"></i> 4.7/5</span>
                <span class="stat-item players"><i class="fas fa-users"></i> 945 Jogadores</span>
            </div>

            <a href="#" class="jogo-button">Jogar</a>
        </div>

        {{-- Cartão de Jogo 4: Memória Estratégica (Cérebro) --}}
        <div class="jogo-card">
            <div class="jogo-icon-container" style="background-color: #fff8f8;">
                <i class="fas fa-brain jogo-icon" style="color: #e53935;"></i>
            </div>

            <h3 class="jogo-title">Memória Estratégica</h3>
            <p class="jogo-description">Desenvolva sua memória de trabalho</p>

            <div class="jogo-stats">
                <span class="stat-item rating"><i class="fas fa-star"></i> 4.5/5</span>
                <span class="stat-item players"><i class="fas fa-users"></i> 723 Jogadores</span>
            </div>

            <a href="#" class="jogo-button">Jogar</a>
        </div>

        {{-- Cartão de Jogo 5: Desafio de Organização (Cama/Arrumar) --}}
        <div class="jogo-card">
            <div class="jogo-icon-container" style="background-color: #e8f7f8;">
                <i class="fas fa-bed jogo-icon" style="color: #1976d2;"></i>
            </div>

            <h3 class="jogo-title">Desafio de Organização</h3>
            <p class="jogo-description">Organize informações de forma eficiente</p>

            <div class="jogo-stats">
                <span class="stat-item rating"><i class="fas fa-star"></i> 4.9/5</span>
                <span class="stat-item players"><i class="fas fa-users"></i> 1.5K Jogadores</span>
            </div>

            <a href="#" class="jogo-button">Jogar</a>
        </div>

        {{-- Cartão de Jogo 6: Trivia TDAH (Chapéu de Festa) --}}
        <div class="jogo-card">
            <div class="jogo-icon-container" style="background-color: #fcf7e7;">
                <i class="fas fa-hat-wizard jogo-icon" style="color: #f9a825;"></i>
            </div>

            <h3 class="jogo-title">Trivia TDAH</h3>
            <p class="jogo-description">Teste seus conhecimentos sobre TDAH</p>

            <div class="jogo-stats">
                <span class="stat-item rating"><i class="fas fa-star"></i> 4.4/5</span>
                <span class="stat-item players"><i class="fas fa-users"></i> 634 Jogadores</span>
            </div>

            <a href="#" class="jogo-button">Jogar</a>
        </div>

    </div>
</div>
@endsection
