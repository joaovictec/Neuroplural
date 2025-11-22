@extends('layouts.dicas') {{-- Estende o mesmo layout de Header/Footer --}}

@section('title', 'Trilhas de Aprendizagem - NeuroPlural')
<link rel="stylesheet" href="{{ asset('css/dicas.css') }}">
<link rel="stylesheet" href="{{ asset('css/trilhas.css') }}">
@section('content')
<div class="trilhas-page-container">

    <div class="section-header-trilhas">
        <h1 class="section-title">Trilhas de Aprendizagem</h1>
        <p class="section-subtitle">Caminhos estruturados para seu desenvolvimento</p>
    </div>

    {{-- Grid de Trilhas --}}
    <div class="trilhas-grid">

        {{-- Cartão de Trilha 1: Fundamentos do TDAH (Iniciante) --}}
        <div class="trilha-card">

            <div class="trilha-header">
                <h3 class="trilha-title">Fundamentos do TDAH</h3>
                <span class="trilha-tag iniciante">Iniciante</span>
            </div>

            <p class="trilha-description">Entenda o que é o TDAH e como funciona</p>

            <div class="progress-container">
                <div class="progress-bar" style="width: 45%;"></div>
            </div>
            <p class="progress-text">45% completo</p>

            <a href="#" class="trilha-button continuar">Continuar</a>
        </div>

        {{-- Cartão de Trilha 2: Estratégias Práticas (Intermediário) --}}
        <div class="trilha-card">

            <div class="trilha-header">
                <h3 class="trilha-title">Estratégias Práticas</h3>
                <span class="trilha-tag intermediario">Intermediário</span>
            </div>

            <p class="trilha-description">Aprenda técnicas para melhorar seu foco</p>

            <div class="progress-container">
                <div class="progress-bar" style="width: 72%;"></div>
            </div>
            <p class="progress-text">72% completo</p>

            <a href="#" class="trilha-button continuar">Continuar</a>
        </div>

        {{-- Cartão de Trilha 3: Organização e Planejamento (Intermediário) --}}
        <div class="trilha-card">

            <div class="trilha-header">
                <h3 class="trilha-title">Organização e Planejamento</h3>
                <span class="trilha-tag intermediario">Intermediário</span>
            </div>

            <p class="trilha-description">Organize sua vida de forma eficiente</p>

            <div class="progress-container">
                <div class="progress-bar" style="width: 28%;"></div>
            </div>
            <p class="progress-text">28% completo</p>

            <a href="#" class="trilha-button continuar">Continuar</a>
        </div>

        {{-- Cartão de Trilha 4: Gestão Emocional (Avançado/Não Iniciado) --}}
        <div class="trilha-card">

            <div class="trilha-header">
                <h3 class="trilha-title">Gestão Emocional</h3>
                <span class="trilha-tag avancado">Avançado</span>
            </div>

            <p class="trilha-description">Controle suas emoções e impulsos</p>

            <div class="progress-container not-started">
                <div class="progress-bar" style="width: 0%;"></div>
            </div>
            <p class="progress-text not-started-text">Não iniciado</p>

            <a href="#" class="trilha-button comecar">Começar</a>
        </div>

    </div>
</div>
@endsection
