@extends('layouts.dicas') {{-- Estende o layout de Header/Footer --}}

@section('title', 'Minhas Atividades - NeuroPlural')
<link rel="stylesheet" href="{{ asset('css/dicas.css') }}">
<link rel="stylesheet" href="{{ asset('css/gestão.css') }}">
@section('content')
<div class="atividades-page-container">

    <div class="section-header-atividades">
        <h1 class="section-title">Minhas Atividades</h1>
        <p class="section-subtitle">Acompanhe suas tarefas e atividades</p>
    </div>

    {{-- ---------------------------------------------------- --}}
    {{-- Painel 1: Atividades Pendentes --}}
    {{-- ---------------------------------------------------- --}}
    <div class="atividades-panel">
        <h2 class="atividades-panel-title">Gestão Atividades</h2>

        {{-- Item Pendente 1 --}}
        <div class="atividade-item">
            <div class="checkbox-container">
                <input type="checkbox" id="tarefa1" name="tarefa1">
                <label for="tarefa1"></label>
            </div>
            <div class="atividade-details">
                <p class="atividade-name">Exercício de Concentração</p>
                <span class="atividade-info">Completa em 15 minutos</span>
            </div>
            <span class="atividade-time today">Hoje 14h</span>
        </div>

        {{-- Item Pendente 2 --}}
        <div class="atividade-item">
            <div class="checkbox-container">
                <input type="checkbox" id="tarefa2" name="tarefa2">
                <label for="tarefa2"></label>
            </div>
            <div class="atividade-details">
                <p class="atividade-name">Leitura: Estratégias de Foco</p>
                <span class="atividade-info">5 páginas</span>
            </div>
            <span class="atividade-time tomorrow">Amanhã 10h</span>
        </div>
    </div>

    {{-- ---------------------------------------------------- --}}
    {{-- Painel 2: Atividades Concluídas --}}
    {{-- ---------------------------------------------------- --}}
    <div class="atividades-panel">
        <h2 class="atividades-panel-title">Atividades Concluídas</h2>

        {{-- Item Concluído 1 --}}
        <div class="atividade-item concluida">
            <div class="checkbox-container">
                <i class="fas fa-check check-icon"></i>
            </div>
            <div class="atividade-details">
                <p class="atividade-name">Quiz: Fundamentos do TDAH</p>
                <span class="atividade-info">Pontuação: 8/10</span>
            </div>
            <span class="atividade-time completed">Ontem</span>
        </div>

        {{-- Item Concluído 2 --}}
        <div class="atividade-item concluida">
            <div class="checkbox-container">
                <i class="fas fa-check check-icon"></i>
            </div>
            <div class="atividade-details">
                <p class="atividade-name">Exercício de Concentração</p>
                <span class="atividade-info">Completa em 15 minutos</span>
            </div>
            <span class="atividade-time completed">2 dias atrás</span>
        </div>
    </div>

</div>
@endsection
