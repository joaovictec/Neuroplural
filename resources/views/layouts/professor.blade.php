<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NeuroPlural - Professor')</title>

    {{-- Substitua por seu arquivo CSS real --}}
    <link rel="stylesheet" href="{{ asset('css/professor.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    {{-- Importação do Font Awesome para ícones (necessário para a dashboard) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- Defina as variáveis de cor se usar CSS puro ou um arquivo de cores --}}
    <style>
        :root {
            --color-neuroplural-orange: #ff9800; /* Laranja da Top Bar/Header */
            --color-text-dark: #333;
            --color-text-light: #777;
            --color-footer-bg: #2f4858; /* Azul escuro do Footer */
            --header-cor:#20AB9D;
        }
        /* Defina aqui também as classes .top-nav-professor, .professor-header, etc. */
        /* Para manter este layout limpo, assumimos que elas estão no styles.css */

        /* Estilos básicos para o layout do professor */
        .professor-header {
            background-color: var(--header-cor);
            padding: 10px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .professor-header .logo-container {
            display: flex;
            align-items: center;
        }
        .professor-header .nav-item {
            color: white;
            font-weight: 600;
            padding: 5px 0;
            text-decoration: none;
        }
        .user-info-professor {
            display: flex;
            align-items: center;
            color: var(--color-text-dark);
            font-weight: 500;
        }
    </style>
</head>
<body>

    {{-- 1. HEADER LARANJA/TOP BAR --}}
    <header class="professor-header">
        <div class="logo-container">
            {{-- Ícone do menu customizado (Início | Sobre Mim) --}}
            @yield('professor-header')
        </div>

        <div class="user-info-professor">
            <i class="fas fa-bell" style="margin-right: 15px; color: white;"></i>

            {{-- Simulação de Perfil --}}
            <div class="user-avatar-professor" style="background-color: #e0f2f1; border-radius: 50%; padding: 8px;">
                <i class="fas fa-user" style="color: #4db6ac;"></i>
            </div>
            <span style="margin-left: 10px; color: white;">Professor</span>
        </div>
    </header>

    {{-- 2. CONTEÚDO PRINCIPAL (DASHBOARD) --}}
    <main>
        @yield('content')
    </main>

    {{-- 3. FOOTER (Geralmente igual ao do Aluno) --}}
    <footer class="main-footer" style="background-color: var(--color-footer-bg); color: white; padding: 40px 0;">
        <div class="footer-content" style="text-align: center;">
            {{-- Conteúdo padrão do footer da sua aplicação --}}
            <img src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" alt="NeuroPlural" style="width: 70px; margin-bottom: 2px;">
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
