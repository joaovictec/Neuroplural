<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeuroPlural - Bem-vindo</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <div class="bg-gradient">

        <header class="top">
            <img src="{{ asset('assets/Logo_NeuroPlural__1_-removebg-preview.png') }}" class="logo">
        </header>

        <main class="container">
<div id="title_inicio">
                <h2 class="welcome-title">Bem-vindo(a), {{ explode(' ', Auth::user()->name)[0] }}</h2>

                <h1 class="main-title">NeuroPlural</h1>
                <p class="subtitle">
                    Recursos e apoio para compreender e conviver com o TDAH
                </p>
            </div>
            <!-- CARDS -->
           <div class="alinhar">
                <div class="cards">

                    <a href="{{ route('aluno.dashboard') }}" class="card">


                        <div class="icon-bg">
                            <div class="icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                        </div>

                        <h3>Área do Estudante</h3>
                        <p>Recursos, estratégias e ferramentas para estudantes com TDAH melhorarem seu desempenho acadêmico.</p>

                        <span class="acessar-link">
                            Acessar ←
                        </span>
                    </a>

                   <a href="{{ route('professor.dashboard') }}" class="card">

                        <div class="icon-bg">
                            <div class="icon">
                                <i class="fa-solid fa-book"></i>
                            </div>
                        </div>

                        <h3>Área do Professor</h3>
                        <p>Estratégias pedagógicas e orientações para apoiar alunos com TDAH.</p>

                        <span class="acessar-link">
                            Acessar →
                        </span>
                    </a>

                </div>

                <a class="about-tdah" href="#">Saiba mais sobre o TDAH</a>
            </div>
        </main>

    </div>

</body>
</html>
