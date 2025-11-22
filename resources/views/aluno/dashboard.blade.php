@extends('layouts.aluno')

@section('title', 'Dashboard')

@section('content')

    {{-- HEADER --}}
    <header class="top-bar">
        <div class="left">
            <button class="back-btn">←</button>
            <a href="#">Sobre Nós</a>
            <a href="#">Início</a>
        </div>

        <div class="logo-area">
            <img src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" alt="NeuroPlural" class="logo">
        </div>

        <div class="right">
            <span class="notif">🔔</span>
            <div class="user-box">
                <div class="profile-pic"></div>
                <div class="user-info">
                    <span class="user-name">Bem Vindo(a), {{ explode(' ', Auth::user()->name)[0] }}</span>
                    <span class="role">Estudante</span>
                </div>
            </div>
        </div>
    </header>

    {{-- MAIN --}}
    <main class="dashboard">

        {{-- Assumindo que $user está sendo passado para esta view ou Auth::user() é usado --}}
        <h1>Bem-vindo, {{ Auth::user()->name ?? '(Nome)' }}! 👋</h1>
        <p class="subtitle">Seu espaço personalizado para aprendizagem com foco em TDAH</p>

        {{-- CARDS SUPERIORES --}}
        <section class="stats-grid">

            <div class="card progress-card">
                <h2>Seu progresso geral</h2>

                <div class="progress-wrapper">
                    <div class="progress-bar" style="width: 68%;"></div>
                </div>

                <span class="percent">68%</span>
                <p class="card-desc">
                    Você completou 68% das atividades desta semana. Continue assim!
                </p>
            </div>

            <div class="card goals-card">
                <h2>Metas</h2>
                <p>Atividades: <strong>12/15</strong></p>
                <p>Pontos: <strong>2450</strong></p>
                <p>Streak: <strong>5 dias</strong></p>
            </div>

            <div class="card upcoming-card">
                <h2>Próximas Atividades</h2>
                <p>Hoje 16h - Aula de Estratégias</p>
                <p>Amanhã 10h - Atividade Interativa</p>
            </div>

        </section>

        {{-- BOTÕES --}}
        <section class="actions">
            <a href="{{ route('aluno.trilhas') }}" class="action-btn">Começar Trilha</a>
            <a href="{{ route('aluno.jogos') }}" class="action-btn">Jogar Agora</a>

            {{-- ✅ CORREÇÃO APLICADA: Usando a rota nomeada 'aluno.dicas' que tem o prefixo /aluno --}}
            <a href="{{ route('aluno.dicas') }}" class="action-btn">Ver Dicas</a>

            <a href="{{ route('aluno.comunidade') }}" class="action-btn">Comunidade</a>
        </section>

        {{-- RECOMENDADOS --}}
        <section class="recommended">

            <h2>Recomendado Para Você</h2>

            <div class="recommend-grid">

                <div class="rec-card">
                    <h3>Técnicas de foco</h3>
                    <p>Aprenda 5 técnicas para melhorar seu foco</p>
                    <a href="#" class="reco-btn">Começar Trilha</a>
                </div>

                <div class="rec-card">
                    <h3>Gestão de tempo</h3>
                    <p>Organize seu tempo de forma eficiente</p>
                    <a href="{{ route('aluno.gestao') }}" class="reco-btn">Começar Trilha</a>
                </div>

                <div class="rec-card">
                    <h3>Organização</h3>
                    <p>Dicas para manter tudo organizado</p>
                    <p>Dicas para manter tudo organizado</p>
                    <a href="#" class="reco-btn">Começar Trilha</a>
                </div>

            </div>

        </section>

    </main>

    {{-- FOOTER --}}
    <footer class="footer">
        <img src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" alt="NeuroPlural" class="logo">

        <p>
            NeuroPlural é uma plataforma dedicada a promover a compreensão e o apoio a pessoas com TDAH e suas famílias.
            Esta página é informativa e não substitui orientação profissional.
        </p>

        <p class="copy">© 2025 NeuroPlural</p>
    </footer>

@endsection
