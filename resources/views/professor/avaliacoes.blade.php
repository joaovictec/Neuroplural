@extends('layouts.professor')

@section('title', 'Avaliações e Projetos - NeuroPlural')
<link rel="stylesheet" href="{{ asset('css/avaliacoes.css') }}">

{{-- CORREÇÃO: Adicionando o bloco de navegação superior aqui --}}
@section('professor-header')
    <div class="top-nav-professor">
         <button class="back-btn">←</button>
        <a href="#" class="nav-item">Sobre Nós</a>
        <a href="#" class="nav-item">Início</a>
    </div>
@endsection
{{-- Fim da Correção --}}


@section('content')
<div class="professor-avaliacoes-container">
{{-- ... (restante do código da página) ... --}}

    <h1 class="page-title-avaliacoes">Avaliações e Projetos</h1>

    <div class="avaliacoes-actions">
        <button class="btn-planejar-aula"><i class="fas fa-plus"></i> Planejar Aula</button>
    </div>

    <div class="avaliacoes-grid">

        {{-- Cartão 1: Teste de Concentração --}}
        <div class="avaliacao-card">
            <h3 class="avaliacao-nome">Teste de Concentração</h3>
            <p class="avaliacao-descricao">Avalia a capacidade de manter o foco.</p>

            <div class="avaliacao-stats">
                <p class="stat-item"><i class="fas fa-users"></i> 87 alunos</p>
                <p class="stat-item stat-concluido"><i class="fas fa-check-circle"></i> 76 completaram</p>
            </div>

            {{-- A barra de progresso agora é um elemento de fluxo normal --}}
            <div class="progress-bar-container">
                <div class="progress-fill" style="width: 87.3%;"></div>
            </div>

            <a href="#" class="btn-ver-resultados">Ver Resultados</a>
        </div>

        {{-- Cartão 2: Organização Pessoal --}}
        <div class="avaliacao-card">
            <h3 class="avaliacao-nome">Organização Pessoal</h3>
            <p class="avaliacao-descricao">Mede habilidades de organização.</p>

            <div class="avaliacao-stats">
                <p class="stat-item"><i class="fas fa-users"></i> 87 alunos</p>
                <p class="stat-item stat-concluido"><i class="fas fa-check-circle"></i> 82 completaram</p>
            </div>

            <div class="progress-bar-container">
                <div class="progress-fill" style="width: 94.2%;"></div>
            </div>

            <a href="#" class="btn-ver-resultados">Ver Resultados</a>
        </div>

        {{-- Cartão 3: Gestão de Tempo --}}
        <div class="avaliacao-card">
            <h3 class="avaliacao-nome">Gestão de Tempo</h3>
            <p class="avaliacao-descricao">Avalia planejamento temporal.</p>

            <div class="avaliacao-stats">
                <p class="stat-item"><i class="fas fa-users"></i> 87 alunos</p>
                <p class="stat-item stat-concluido"><i class="fas fa-check-circle"></i> 71 completaram</p>
            </div>

            <div class="progress-bar-container">
                <div class="progress-fill" style="width: 81.6%;"></div>
            </div>

            <a href="#" class="btn-ver-resultados">Ver Resultados</a>
        </div>

    </div>
</div>
@endsection
