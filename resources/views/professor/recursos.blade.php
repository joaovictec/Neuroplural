@extends('layouts.professor')

@section('title', 'Biblioteca de Recursos - NeuroPlural')
<link rel="stylesheet" href="{{ asset('css/recursos.css') }}">
{{-- Menu de navegação superior (assumindo que já está definido no layout) --}}
@section('professor-header')
    <div class="top-nav-professor">
         <button class="back-btn">←</button>
        <a href="#" class="nav-item">Sobre Nós</a>
        <a href="#" class="nav-item">Início</a>
    </div>
@endsection

@section('content')
<div class="professor-recursos-container">

    <h1 class="page-title-recursos">Biblioteca de Recursos</h1>
    <p class="page-subtitle-recursos">Acesso a materiais e estratégias para ensino com TDAH</p>

    {{-- ---------------------------------------------------- --}}
    {{-- Grid de Cartões de Recursos --}}
    {{-- ---------------------------------------------------- --}}
    <div class="recursos-grid">

        {{-- Cartão 1: Planos de Aula (Cores: Ciano/Azul) --}}
        <div class="recurso-card">
            <div class="icon-header icon-plano">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <h3 class="recurso-nome">Planos de Aula</h3>
            <p class="recurso-descricao">Modelos prontos adaptados para TDAH</p>
            <span class="recurso-badge badge-amarelo">45 Recursos</span>
        </div>

        {{-- Cartão 2: Atividades Interativas (Cores: Verde/Laranja) --}}
        <div class="recurso-card">
            <div class="icon-header icon-atividades">
                <i class="fas fa-gamepad"></i>
            </div>
            <h3 class="recurso-nome">Atividades Interativas</h3>
            <p class="recurso-descricao">Jogos e exercícios engajadores</p>
            <span class="recurso-badge badge-amarelo">32 Recursos</span>
        </div>

        {{-- Cartão 3: Ferramentas de Avaliação (Cores: Laranja/Amarelo) --}}
        <div class="recurso-card">
            <div class="icon-header icon-avaliacao">
                <i class="fas fa-tasks"></i>
            </div>
            <h3 class="recurso-nome">Ferramentas de Avaliação</h3>
            <p class="recurso-descricao">Instrumentos para acompanhamento</p>
            <span class="recurso-badge badge-amarelo">18 Recursos</span>
        </div>

        {{-- Cartão 4: Artigos e Pesquisas (Cores: Vermelho/Ciano) --}}
        <div class="recurso-card">
            <div class="icon-header icon-artigos">
                <i class="fas fa-book-reader"></i>
            </div>
            <h3 class="recurso-nome">Artigos e Pesquisas</h3>
            <p class="recurso-descricao">Estudos científicos e artigos</p>
            <span class="recurso-badge badge-amarelo">56 Recursos</span>
        </div>

        {{-- Cartão 5: Vídeos Educativos (Cores: Roxo/Amarelo) --}}
        <div class="recurso-card">
            <div class="icon-header icon-videos">
                <i class="fas fa-video"></i>
            </div>
            <h3 class="recurso-nome">Vídeos Educativos</h3>
            <p class="recurso-descricao">Como falar com alunos e pais</p>
            <span class="recurso-badge badge-amarelo">28 Recursos</span>
        </div>

        {{-- Cartão 6: Guias de Comunicação (Cores: Azul/Amarelo) --}}
        <div class="recurso-card">
            <div class="icon-header icon-guias">
                <i class="fas fa-comments"></i>
            </div>
            <h3 class="recurso-nome">Guias de Comunicação</h3>
            <p class="recurso-descricao">Como falar com alunos e pais</p>
            <span class="recurso-badge badge-amarelo">12 Recursos</span>
        </div>

    </div>
</div>
@endsection
