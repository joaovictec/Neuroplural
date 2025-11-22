@extends('layouts.professor')

@section('title', 'Planejador de Aulas - NeuroPlural')
<link rel="stylesheet" href="{{ asset('css/aulas.css') }}">
{{-- Menu de navegação superior --}}
@section('professor-header')
    <div class="top-nav-professor">
         <button class="back-btn">←</button>
        <a href="#" class="nav-item">Sobre Nós</a>
        <a href="#" class="nav-item">Início</a>
    </div>
@endsection

@section('content')
<div class="professor-aulas-container">

    <h1 class="page-title-aulas">Planejador de Aulas</h1>

    <div class="aulas-actions">
        {{-- Botão Planear Aula --}}
        <button class="btn-planejar-aula"><i class="fas fa-plus"></i> Planejar Aula</button>
    </div>

    {{-- ---------------------------------------------------- --}}
    {{-- Componente de Calendário (Visão Semanal) --}}
    {{-- ---------------------------------------------------- --}}
    <div class="calendario-semanal-card">

        <div class="calendario-nav">
            <button class="nav-arrow"><i class="fas fa-arrow-left"></i></button>
            <h2 class="mes-ano">Novembro 2025</h2>
            <button class="nav-arrow"><i class="fas fa-play"></i></button>
        </div>

        <div class="dias-da-semana">
            <span class="dia-label">Seg</span>
            <span class="dia-label">Ter</span>
            <span class="dia-label">Qua</span>
            <span class="dia-label">Qui</span>
            <span class="dia-label">Sex</span>
            <span class="dia-label">Sab</span>
            <span class="dia-label">Dom</span>
        </div>

        <div class="dias-numeros">
            {{-- Linha 1 --}}
            <span class="dia-num">1</span>
            <span class="dia-num">2</span>
            <span class="dia-num">3</span>
            <span class="dia-num">4</span>
            <span class="dia-num">5</span>
            <span class="dia-num dia-hoje">6</span> {{-- Destaque para o dia de hoje --}}
            <span class="dia-num">7</span>
            {{-- Linha 2 --}}
            <span class="dia-num">8</span>
            <span class="dia-num">9</span>
            <span class="dia-num">10</span>
            <span class="dia-num">11</span>
            <span class="dia-num">12</span>
            <span class="dia-num">13</span>
            <span class="dia-num">14</span>
        </div>
    </div>

    {{-- ---------------------------------------------------- --}}
    {{-- Lista de Aulas Planejadas --}}
    {{-- ---------------------------------------------------- --}}
    <div class="aulas-planejadas-lista">
        <h2 class="lista-titulo">Aulas Planejadas</h2>

        {{-- Item 1 (Hoje) --}}
        <div class="aula-item aula-item-hoje">
            <div class="aula-tempo-turma">
                <span class="aula-hora">Hoje 14:00</span>
                <span class="aula-turma">6º A - 28 alunos</span>
            </div>
            <p class="aula-nome">Estratégias de Foco</p>
            <button class="btn-editar-aula"><i class="fas fa-pencil-alt"></i></button>
        </div>

        {{-- Item 2 (Amanhã) --}}
        <div class="aula-item aula-item-normal">
            <div class="aula-tempo-turma">
                <span class="aula-hora">Amanhã 10:00</span>
                <span class="aula-turma">8º B - 31 alunos</span>
            </div>
            <p class="aula-nome">Organização e Planejamento</p>
            <button class="btn-editar-aula"><i class="fas fa-pencil-alt"></i></button>
        </div>

        {{-- Item 3 (Sexta) --}}
        <div class="aula-item aula-item-normal">
            <div class="aula-tempo-turma">
                <span class="aula-hora">Sexta 15:00</span>
                <span class="aula-turma">6º B - 30 alunos</span>
            </div>
            <p class="aula-nome">Gestão de Tempo</p>
            <button class="btn-editar-aula"><i class="fas fa-pencil-alt"></i></button>
        </div>

    </div>
</div>
@endsection
