<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NeuroPlural')</title>

    {{-- 1. LIGAR O CSS CUSTOMIZADO --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    {{-- 2. LIGAR O FONT AWESOME PARA ÍCONES --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    {{-- 3. HEADER COMPLETO (Topo da página) --}}
    <header class="header">
        <nav class="nav-links">
                      <a href="{{ route('aluno.dashboard') }}" class="back-btn" style="text-decoration: none;">←</a>

            <a href="#">Sobre Nós</a>
            <a href="#">Início</a>
        </nav>
        <div class="logo-container">
            {{-- Substitua pelo seu logo real. Usando um div/span para simular. --}}
             <img class="logo-text" src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" alt="Logo NeuroPlural">

        </div>
        {{-- O perfil/notificação NÃO VAI no header, ele vai na top-bar abaixo. --}}
    </header>

    {{-- 4. CONTAINER PRINCIPAL (BODY) --}}
    <div class="main-body-container">

        {{-- 5. BARRA SUPERIOR (SEARCH & PROFILE) --}}
        <div class="top-bar">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Pesquisar atividades, dicas...">
            </div>
            <div class="user-info">
                <i class="fas fa-bell notification-icon"></i>
                <div class="profile-avatar">
                    {{-- Avatar --}}
                </div>
                <div class="profile-details">
                    <span class="profile-name">(Nome)</span>
                    <span class="profile-role">Estudante</span>
                </div>
            </div>
        </div>

        {{-- 6. O CONTEÚDO ESPECÍFICO DE CADA PÁGINA É INSERIDO AQUI --}}
        @yield('content')

    </div>

    {{-- 7. FOOTER COMPLETO (Rodapé da página) --}}
    <footer class="main-footer" style="background-color: var(--color-footer-bg); color: white; padding: 40px 0;" height:5dvh>
        <div class="footer-content" style="text-align: center;">
            {{-- Conteúdo padrão do footer da sua aplicação --}}
            <img src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" alt="NeuroPlural" style="width: 70px; margin-bottom: 2px; filter: brightness(0) invert(1);">
            <p style="font-size: 15px; max-width: 600px; margin: 0 auto 10px;">
                NeuroPlural é uma plataforma dedicada a promover a compreensão e o apoio a pessoas com TDAH e suas famílias, contribuindo para uma sociedade mais inclusiva.
                <br>
                Feito com amor para uma educação mais inclusiva.
            </p>
            <p style="font-size: 10px; color: #aaa;">© 2025 NeuroPlural. Esta página é apenas informativa e não substitui orientação profissional.</p>
        </div>
    </footer>

</body>
</html>
