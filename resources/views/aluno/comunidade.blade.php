@extends('layouts.dicas') {{-- Estende o mesmo layout de Header/Footer --}}

@section('title', 'Comunidade NeuroPlural')
<link rel="stylesheet" href="{{ asset('css/dicas.css') }}">
<link rel="stylesheet" href="{{ asset('css/comunidade.css') }}">
@section('content')
<div class="comunidade-page-container">

    <div class="section-header-comunidade">
        <h1 class="section-title">Comunidade</h1>
        <p class="section-subtitle">Conecte-se com outros estudantes</p>
    </div>

    {{-- Área de Discussões --}}
    <div class="discussion-section">
        <h2 class="discussion-title">Discussões Recentes</h2>

        {{-- Cartão de Discussão 1: João Silva --}}
        <div class="discussion-card">
            <div class="user-avatar-small" style="background-color: #ffe082;">&#128522;</div>
            <div class="discussion-content">
                <p class="discussion-question">
                    **João Silva**
                    <span class="question-text">Alguém tem dicas de como manter o foco durante as aulas?</span>
                </p>
                <div class="discussion-stats">
                    <span class="stat-item heart"><i class="fas fa-heart"></i> 15</span>
                    <span class="stat-item reply"><i class="fas fa-reply"></i> 5 Respostas</span>
                </div>
            </div>
        </div>

        {{-- Cartão de Discussão 2: Maria Costa --}}
        <div class="discussion-card">
            <div class="user-avatar-small" style="background-color: #ffccbc;">&#128543;</div>
            <div class="discussion-content">
                <p class="discussion-question">
                    **Maria Costa**
                    <span class="question-text">Completei a trilha de Organização! Recomendo muito!</span>
                </p>
                <div class="discussion-stats">
                    <span class="stat-item heart"><i class="fas fa-heart"></i> 28</span>
                    <span class="stat-item reply"><i class="fas fa-reply"></i> 8 Respostas</span>
                </div>
            </div>
        </div>

        {{-- Aqui você faria um loop @foreach($discussoes as $discussao) --}}

        {{-- Botão para criar nova discussão (Opcional, mas útil) --}}
        <div class="new-discussion-area">
            <button class="new-discussion-button"><i class="fas fa-plus"></i> Nova Publicação</button>
        </div>

    </div>
</div>
@endsection
