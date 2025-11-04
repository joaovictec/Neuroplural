<?php

/**
 * Arquivo de Bootstrap da Aplicação (bootstrap/app.php)
 * 
 * Este é o ponto de entrada da aplicação Laravel.
 * Configura a aplicação, rotas, middleware e tratamento de exceções.
 * 
 * IMPORTANTE PARA ALUNOS:
 * No Laravel 11+, este arquivo substituiu o antigo app/Http/Kernel.php
 * para configuração de middlewares e outras definições.
 */

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    
    /*
    |--------------------------------------------------------------------------
    | CONFIGURAÇÃO DE ROTAS
    |--------------------------------------------------------------------------
    |
    | Define os arquivos de rotas que serão carregados:
    | - web: Rotas web com sessões e cookies (routes/web.php)
    | - commands: Comandos Artisan customizados (routes/console.php)
    | - health: Endpoint de health check em /up (para monitoramento)
    |
    */
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    
    /*
    |--------------------------------------------------------------------------
    | CONFIGURAÇÃO DE MIDDLEWARES
    |--------------------------------------------------------------------------
    |
    | Registra middlewares customizados da aplicação.
    | 
    | IMPORTANTE: No Laravel 11+, a configuração de middleware mudou!
    | - Antes (Laravel 10): app/Http/Kernel.php
    | - Agora (Laravel 11+): bootstrap/app.php
    | 
    | Middleware 'eh.admin':
    | - Verifica se o usuário logado é administrador
    | - Protege rotas administrativas contra acesso não autorizado
    | - Definido em: app/Http/Middleware/EhAdmin.php
    | - Uso nas rotas: Route::middleware(['auth', 'eh.admin'])
    |
    */
    ->withMiddleware(function (Middleware $middleware): void {
        // Confia nos headers de proxy do Codespaces/GitHub.dev
        // (útil quando rodando atrás de reverse proxies como Codespaces)
        $middleware->trustProxies(
            '*',
            \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_FOR
            | \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_HOST
            | \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_PROTO
            | \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_PORT
            | \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_PREFIX
        );
        
        // Registra o alias 'eh.admin' para o middleware EhAdmin
        // Isso permite usar 'eh.admin' nas rotas em vez do caminho completo
        $middleware->alias([
            'eh.admin' => \App\Http\Middleware\EhAdmin::class,
        ]);
        
        // Outros middlewares customizados podem ser adicionados aqui:
        // 'outro.middleware' => \App\Http\Middleware\OutroMiddleware::class,
    })
    
    /*
    |--------------------------------------------------------------------------
    | TRATAMENTO DE EXCEÇÕES
    |--------------------------------------------------------------------------
    |
    | Configura como a aplicação deve tratar erros e exceções.
    | Por enquanto está vazio (usa o comportamento padrão do Laravel).
    |
    */
    ->withExceptions(function (Exceptions $exceptions): void {
        // Configurações customizadas de exceções podem ser adicionadas aqui
        // Ex: Reportar erros para serviços externos, customizar páginas de erro, etc.
    })
    
    // Cria e retorna a instância da aplicação
    ->create();
