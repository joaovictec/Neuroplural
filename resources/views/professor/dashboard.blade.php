@extends('layouts.professor')

@section('title', 'Dashboard do Professor - NeuroPlural')
<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
@section('professor-header')
    <div class="top-nav-professor">
          <a href="{{ route('dashboard') }}" class="back-btn" style="text-decoration: none;">←</a>
        <a href="{{ route('professor.dashboard') }}" class="nav-item">Sobre Nós</a>
        <a href="{{ route('professor.dashboard') }}" class="nav-item">Início</a>
    </div>
@endsection

@section('content')
<div class="professor-dashboard-container">

    {{-- Títulos de Boas-Vindas --}}
    <h1 class="page-title-professor">Bem-vindo, {{ Auth::user()->name ?? '(Nome)' }}! 👋</h1>
    <p class="page-subtitle-professor">Bem-vindo ao seu portal de gestão educacional</p>

    {{-- ---------------------------------------------------- --}}
    {{-- 1. LINHA DE LINKS DE NAVEGAÇÃO (Cards Coloridos Sólidos) --}}
    {{-- (Baseado na referência image_7c6d1f.png) --}}
    {{-- ---------------------------------------------------- --}}
    <div class="nav-links-grid">

        <a href="{{ route('professor.minhasTurmas') }}" class="nav-link-card nav-turmas">
            <i class="fas fa-tablet-alt"></i>
            <span>Minhas Turmas</span>
        </a>

        <a href="{{ route('professor.recursos') }}" class="nav-link-card nav-recursos">
            <i class="fas fa-book"></i>
            <span>Biblioteca de Recursos</span>
        </a>

        <a href="{{ route('professor.aulas') }}" class="nav-link-card nav-aulas">
            <i class="fas fa-calendar-alt"></i>
            <span>Planejador de Aulas</span>
        </a>

        <a href="{{ route('professor.avaliacoes') }}" class="nav-link-card nav-projetos">
            <i class="fas fa-file-alt"></i>
            <span>Avaliações e Projetos</span>
        </a>
    </div>

    {{-- ---------------------------------------------------- --}}
    {{-- 2. LINHA DE ESTATÍSTICAS (Stats Cards com Fundo Branco) --}}
    {{-- (Baseado na referência Captura de tela 2025-11-22 104100.png) --}}
    {{-- ---------------------------------------------------- --}}
    <div class="stats-grid">

        {{-- Card 1: Total de Alunos (Borda Verde) --}}
        <div class="stat-card stat-turmas-white">
            <h3 class="stat-card-title">Total de Alunos</h3>
            <div class="stat-main-content">
                <span class="stat-number">87</span>
                <span class="stat-info">-2 este mês</span>
            </div>
            <span class="icon-circle icon-circle-green">
                <i class="fas fa-users"></i>
            </span>
        </div>

        {{-- Card 2: Aulas Planejadas (Borda Laranja) --}}
        <div class="stat-card stat-recursos-white">
            <h3 class="stat-card-title">Aulas Planejadas</h3>
            <div class="stat-main-content">
                <span class="stat-number">24</span>
                <span class="stat-info">3 esta semana</span>
            </div>
            <span class="icon-circle icon-circle-orange">
                <i class="fas fa-book"></i>
            </span>
        </div>

        {{-- Card 3: Atividades Concluídas (Borda Verde) --}}
        <div class="stat-card stat-aulas-white">
            <h3 class="stat-card-title">Atividades Concluídas</h3>
            <div class="stat-main-content">
                <span class="stat-number">156</span>
                <span class="stat-info">+12 hoje</span>
            </div>
            <span class="icon-circle icon-circle-green-2">
                <i class="fas fa-check-circle"></i>
            </span>
        </div>

        {{-- Card 4: Taxa de Progresso (Borda Rosa) --}}
        <div class="stat-card stat-projetos-white">
            <h3 class="stat-card-title">Taxa de Progresso</h3>
            <div class="stat-main-content">
                <span class="stat-number">78%</span>
                <span class="stat-info">+10 nesta semana</span>
            </div>
            <span class="icon-circle icon-circle-pink">
                <i class="fas fa-chart-line"></i>
            </span>
        </div>
    </div>

    {{-- ---------------------------------------------------- --}}
    {{-- 3. Alunos por Turma e Próximas Atividades (Split Section) --}}
    {{-- ---------------------------------------------------- --}}
    <div class="dashboard-split-section">
        {{-- ... O código desta seção permanece o mesmo (veja código anterior) ... --}}

        {{-- Coluna Esquerda: Alunos com TDAH por Turma --}}
        <div class="card-base alunos-por-turma">
            <h2 class="card-base-title">Alunos com TDAH por Turma</h2>
            <div class="turmas-list">
                <div class="turma-pill">6º A</div>
                <div class="turma-pill">7º B</div>
                <div class="turma-pill">8º A</div>
                <div class="turma-pill">9º B</div>
            </div>
        </div>

        {{-- Coluna Direita: Próximas Atividades --}}
        <div class="card-base proximas-atividades">
            <h2 class="card-base-title">Próximas Atividades</h2>
            <div class="atividade-proxima">
                <p class="atividade-proxima-data">HOJE (14h)</p>
                <p class="atividade-proxima-nome">Aula de Estratégias de Foco</p>
                <span class="atividade-proxima-turma">8º A</span>
            </div>
            <div class="atividade-proxima">
                <p class="atividade-proxima-data">AMANHÃ (10h)</p>
                <p class="atividade-proxima-nome">Reunião com Pais</p>
                <span class="atividade-proxima-turma">7º B</span>
            </div>
            <div class="atividade-proxima">
                <p class="atividade-proxima-data">SEXTA (10h)</p>
                <p class="atividade-proxima-nome">Avaliação de Progresso</p>
                <span class="atividade-proxima-turma">Todas</span>
            </div>
        </div>
    </div>

    {{-- ---------------------------------------------------- --}}
    {{-- 4. Tabela: Alunos que Precisam de Atenção --}}
    {{-- ---------------------------------------------------- --}}
    <div class="card-base alunos-atencao-table">
        <h2 class="card-base-title">Alunos que Precisam de Atenção</h2>
        <table>
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Turma</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Carlos Silva</td>
                    <td>6º A</td>
                    <td class="status-alert"><i class="fas fa-exclamation-triangle"></i> Precisão de Apoio</td>
                    <td><a href="#" class="action-details">Ver Detalhes</a></td>
                </tr>
                <tr>
                    <td>Marina Costa</td>
                    <td>7º B</td>
                    <td class="status-warning"><i class="fas fa-exclamation-circle"></i> Dificuldade de Foco</td>
                    <td><a href="#" class="action-details">Ver Detalhes</a></td>
                </tr>
                <tr>
                    <td>Pedro Oliveira</td>
                    <td>9º B</td>
                    <td class="status-success"><i class="fas fa-check-circle"></i> Progredindo Bem</td>
                    <td><a href="#" class="action-details">Ver Detalhes</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
