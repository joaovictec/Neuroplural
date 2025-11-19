@extends('layouts.clean')

@section('title', 'NeuroPlural - Início')

@section('content')


   <html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NeuroPlural - HOME</title>

  <!-- CSS Laravel -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>


<!-- Header -->
<header>
    <div class="menu-icon"><i class="fas fa-bars"></i></div>

    <nav>
      <a href="#">Sobre Nós</a>
      <a href="/login">Login</a>
    </nav>

    <div class="logo">
      <img src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" alt="Logo NeuroPlural">
    </div>
  </header>
<!-- Hero principal -->
<section class="hero">
    <h1>O Impacto do TDAH em Estudantes Escolares</h1> <br>
  <h2>
    Compreender o TDAH é o primeiro passo para criar ambientes escolares mais inclusivos e estratégias
    de aprendizagem eficazes para todos os estudantes.
  </h2>
</section>

<!-- MAIN -->
<main>

  <!-- Título -->
  <div class="intro">
      <h1>TDAH em Números</h1>
      <p class="section-subtitle">
        Dados que revelam a importância de compreender e apoiar estudantes com TDAH
      </p>
  </div>

  <!-- Seção 1 -->
  <section class="section intro-cards">

      <div class="card">
          <i class="fas fa-user"></i>
          <span>5 A 7%</span>
          <p>DAS CRIANÇAS EM IDADE ESCOLAR TEM TDAH</p>
      </div>

      <div class="card">
          <i class="fas fa-book-open" style="color: #FFA16B;"></i>
          <span>30 A 50%</span>
          <p>APRESENTAM DIFICULDADE DE APRENDIZAGEM</p>
      </div>

      <div class="card">
          <i class="fas fa-bullseye" style="color: #036e03;"></i>
          <span>40%</span>
          <p>NÃO CONCLUEM O ENSINO MÉDIO SEM SUPORTE</p>
      </div>

      <div class="card highlight">
          <i class="fas fa-arrow-up-right-from-square" style="color: #dfe213;"></i>
          <span>3X</span>
          <p>MAIS CHANCE DE REPETIR DE ANO</p>
      </div>

  </section>

  <!-- Título -->
  <div class="intro">
      <h1>Áreas de Impacto do TDAH</h1>
      <p class="section-subtitle">
        Compreenda como o TDAH afeta diferentes aspectos da vida escolar
      </p>
  </div>

  <!-- Seção 2 -->
  <section class="section mid-cards">

      <div class="card large">
          <img src="{{ asset('assets/cerebro.png') }}" alt="">
          <h3>Desafios Acadêmicos</h3>
          <p>
              <strong>Dificuldade em manter o foco durante aulas e completar tarefas</strong><br>
              • Problemas de concentração<br>
              • Dificuldade em organizar materiais<br>
              • Tendência à procrastinação
          </p>
      </div>

      <div class="card large">
          <img src="{{ asset('assets/grupo.png') }}" alt="">
          <h3>Relacionamentos Sociais</h3>
          <p>
              <strong>Impactos nas interações com colegas e professores</strong><br>
              • Dificuldade em esperar sua vez<br>
              • Interrupções frequentes<br>
              • Desafios em manter amizades
          </p>
      </div>

      <div class="card large">
          <img src="{{ asset('assets/coração.png') }}" alt="">
          <h3>Bem-estar Emocional</h3>
          <p>
              <strong>Efeitos na autoestima e saúde mental</strong><br>
              • Baixa autoestima<br>
              • Maior risco de ansiedade<br>
              • Frustração com desempenho
          </p>
      </div>

      <div class="card large">
          <img src="{{ asset('assets/atenção.png') }}" alt="">
          <h3>Desempenho Escolar</h3>
          <p>
              <strong>Consequências nos resultados acadêmicos</strong><br>
              • Notas abaixo do potencial<br>
              • Maior taxa de reprovação<br>
              • Dificuldades em provas
          </p>
      </div>

  </section>

  <!-- Título -->
  <div class="intro">
      <h1>Estratégias de Apoio</h1>
      <p class="section-subtitle">
        Ferramentas e técnicas que podem fazer a diferença no sucesso escolar
      </p>
  </div>

  <!-- Seção 3 -->
  <section class="section tips">

      <div class="card small">
        <i class="fas fa-clock"></i>
        <h4>Estrutura e Rotina</h4>
        <ul>
          <li>Organização visual</li>
          <li>Ambiente sem distrações</li>
          <li>Pausas frequentes</li>
        </ul>
      </div>

      <div class="card small">
        <i class="fas fa-pen-nib"></i>
        <h4>Ambiente de Aprendizagem</h4>
        <ul>
          <li>Minimizar distrações</li>
          <li>Materiais coloridos</li>
          <li>Apoio visual</li>
        </ul>
      </div>

      <div class="card small">
        <i class="fas fa-star"></i>
        <h4>Apoio Acadêmico</h4>
        <ul>
          <li>Tarefas divididas</li>
          <li>Objetividade</li>
          <li>Reforço positivo</li>
        </ul>
      </div>

      <div class="card small">
        <i class="fas fa-check"></i>
        <h4>Colaboração</h4>
        <ul>
          <li>Contato com professores</li>
          <li>Apoio profissional</li>
          <li>Envolver a família</li>
        </ul>
      </div>

  </section>

  <!-- Chamada final -->
  <section class="cta">
      <h2>Cada estudante é único</h2>
      <p>
        O que funciona para um pode não funcionar para outro. Experimente estratégias e adapte conforme necessário.
      </p>
      <button>Busque orientação profissional</button>
  </section>

</main>

<!-- Rodapé -->
<footer>
  <div class="footer-logo">
      <img src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" alt="Logo NeuroPlural">
  </div>

  <p>
    NeuroPlural é uma plataforma dedicada a promover a compreensão e o apoio
    a pessoas com TDAH e suas famílias.
  </p>

  <p class="love">Feito com amor para uma educação mais inclusiva.</p>

  <p class="rights">© 2025 NeuroPlural — Página informativa.</p>
</footer>

@endsection
