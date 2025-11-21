<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portal de Notícias')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body>
    <header class="site-header">
        <div class="container">
            <a href="{{ route('home') }}" class="site-logo">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                Portal de Notícias
            </a>
            <nav class="site-nav">
                <a href="{{ route('home') }}">Início</a>
                @if(auth()->check())
                    @if(auth()->user()->is_admin)
                        <a href="/admin">Administração</a>
                    @endif
                    <div class="user-info">
                        <span>Olá, {{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" style="display:inline">
                            @csrf
                            <button type="submit" class="btn btn-outline" style="padding:0.375rem 0.75rem;font-size:0.875rem">Sair</button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}">Entrar</a>
                @endif
            </nav>
        </div>
    </header>

    <main class="main-content">
        @if(session('success'))
            <div class="alert alert-success">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="site-footer">
        <p>&copy; {{ date('Y') }} Portal de Notícias - Desenvolvido para fins educacionais</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
