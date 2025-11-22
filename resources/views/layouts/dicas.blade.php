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
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo-text">
                <span class="footer-logo"></span>
                <span class="footer-text-title">NeuroPlural</span>
            </div>
            <p class="footer-description">
                NeuroPlural é uma plataforma dedicada a promover a compreensão e o apoio a pessoas com Transtorno do Espectro Autista (TEA), TDAH, Dislexia, entre outros.
            </p>
            <p class="footer-motto">
                Feito com amor para uma educação mais inclusiva.
            </p>
            <div class="footer-bottom">
                <div class="footer-links">
                    <a href="#">Termos e diretrizes</a>
                </div>
                <p class="footer-copyright">
                    © 2025 NeuroPlural. Esta página é apenas informativa e não substitui orientação profissional.
                </p>
                <div class="social-icons">
                    <i class="fab fa-linkedin-in"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
