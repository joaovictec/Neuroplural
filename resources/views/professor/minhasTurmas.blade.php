@extends('layouts.professor')

@section('title', 'Minhas Turmas - NeuroPlural')

{{-- Inclusão de CSS, se necessário, no futuro --}}
 <link rel="stylesheet" href="{{ asset('css/minhasTurmas.css') }}">

@section('professor-header')
    <div class="top-nav-professor">
<a href="{{ route('professor.dashboard') }}" class="back-btn" style="text-decoration: none;">←</button>        <a href="#" class="nav-item">Sobre Nós</a>
        <a href="#" class="nav-item">Início</a>
    </div>
@endsection

@section('content')
<div class="professor-turmas-container">

    <h1 class="page-title-turmas">Minhas Turmas</h1>

    <div class="turmas-actions">
        {{-- Botão Nova Turma --}}
        <button class="btn-nova-turma"><i class="fas fa-plus"></i> Nova Turma</button>
    </div>

    {{-- ---------------------------------------------------- --}}
    {{-- Grid de Cartões de Turma --}}
    {{-- ---------------------------------------------------- --}}
    <div class="turmas-grid">

        {{-- Cartão 1: 6º Ano A (Vermelho) --}}
        <div class="turma-card turma-vermelho">
            <div class="turma-header">
                <h2 class="turma-nome">6º Ano A</h2>
                <span class="alunos-total">28 alunos</span>
            </div>

            <div class="turma-stats">
                <p class="stat-item"><i class="fas fa-user-tag"></i> Com TDAH: <span>12</span></p>
                <p class="stat-item"><i class="fas fa-graduation-cap"></i> Aulas: <span>6</span></p>
                <p class="stat-item"><i class="fas fa-chart-line"></i> Progresso: <span>75%</span></p>
            </div>

            <a href="#" class="btn-gerenciar">Gerenciar Turma</a>
        </div>

        {{-- Cartão 2: 6º Ano B (Preto) --}}
        <div class="turma-card turma-preto">
            <div class="turma-header">
                <h2 class="turma-nome">6º Ano B</h2>
                <span class="alunos-total">30 alunos</span>
            </div>

            <div class="turma-stats">
                <p class="stat-item"><i class="fas fa-user-tag"></i> Com TDAH: <span>15</span></p>
                <p class="stat-item"><i class="fas fa-graduation-cap"></i> Aulas: <span>7</span></p>
                <p class="stat-item"><i class="fas fa-chart-line"></i> Progresso: <span>82%</span></p>
            </div>

            <a href="#" class="btn-gerenciar">Gerenciar Turma</a>
        </div>

        {{-- Cartão 3: 7º Ano A (Verde) --}}
        <div class="turma-card turma-verde">
            <div class="turma-header">
                <h2 class="turma-nome">7º Ano A</h2>
                <span class="alunos-total">29 alunos</span>
            </div>

            <div class="turma-stats">
                <p class="stat-item"><i class="fas fa-user-tag"></i> Com TDAH: <span>10</span></p>
                <p class="stat-item"><i class="fas fa-graduation-cap"></i> Aulas: <span>5</span></p>
                <p class="stat-item"><i class="fas fa-chart-line"></i> Progresso: <span>68%</span></p>
            </div>

            <a href="#" class="btn-gerenciar">Gerenciar Turma</a>
        </div>

        {{-- Cartão 4: 7º Ano B (Ciano/Azul) --}}
        <div class="turma-card turma-ciano">
            <div class="turma-header">
                <h2 class="turma-nome">7º Ano B</h2>
                <span class="alunos-total">31 alunos</span>
            </div>

            <div class="turma-stats">
                <p class="stat-item"><i class="fas fa-user-tag"></i> Com TDAH: <span>16</span></p>
                <p class="stat-item"><i class="fas fa-graduation-cap"></i> Aulas: <span>8</span></p>
                <p class="stat-item"><i class="fas fa-chart-line"></i> Progresso: <span>89%</span></p>
            </div>

            <a href="#" class="btn-gerenciar">Gerenciar Turma</a>
        </div>

    </div>
</div>
@endsection
