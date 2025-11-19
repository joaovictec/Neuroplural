@extends('layouts.clean')

@section('title', 'Cadastro - NeuroPlural')

@section('content')
 <html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NeuroPlural - cadastrar</title>

  <!-- CSS Laravel -->
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <!-- Barra superior -->
  <div class="top-bar">
    <p>Contato: (00) 112344321 | NeuroPlural@gmail.com</p>

    <div class="social-icons">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-linkedin-in"></i>
      <i class="fab fa-instagram"></i>
    </div>
  </div>

  <!-- Header -->
  <header>
    <div class="menu-icon"><i class="fas fa-bars"></i></div>

    <nav>
      <a href="#">Sobre Nós</a>
      <a href="{{ route('home') }}">Início</a>
      <a href="/login">Login</a>
    </nav>

    <div class="logo">
      <img src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" alt="Logo NeuroPlural">
    </div>
  </header>

  <!-- Container principal -->
  <main>

    <section class="form-section">
      <h2>Cadastro</h2>

      {{-- Mensagem de erro --}}
      @if($errors->any())
        <div class="alert-error">
          {{ $errors->first() }}
        </div>
      @endif

      {{-- FORMULÁRIO --}}
      <form method="POST" action="{{ route('register.perform') }}">
        @csrf

        <input
          type="text"
          name="name"
          placeholder="Nome completo"
          value="{{ old('nome') }}"
          required
        >

        <input
          type="email"
          name="email"
          placeholder="E-mail"
          value="{{ old('email') }}"
          required
        >

        <input
          type="password"
          name="password"
          placeholder="Senha"
          required
        >

        <button type="submit">Cadastrar</button>
      </form>
    </section>

    <section class="image-section">
      <img src="{{ asset('assets/image 2-Photoroom.png') }}" alt="cabeça com peças">
    </section>

  </main>

  <!-- Rodapé -->
  <footer>

    <div class="footer-logo">
        <img src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" alt="Logo NeuroPlural">
    </div>

    <p>
      NeuroPlural é uma plataforma dedicada a promover a compreensão e o apoio a pessoas com TDAH e suas famílias.
    </p>

    <p class="love">Feito com amor para uma educação mais inclusiva.</p>

    <p class="rights">© 2025 NeuroPlural — Esta página é apenas informativa.</p>

  </footer>

@endsection
