<?php

/**
 * Arquivo de Rotas Web (routes/web.php)
 *
 * Este arquivo define todas as rotas HTTP da aplicação.
 * As rotas mapeiam URLs para Controllers/métodos específicos.
 *
 * ESTRUTURA:
 * - Rotas Públicas: Acessíveis por qualquer visitante
 * - Rotas de Autenticação: Login e Logout
 * - Rotas Administrativas: Protegidas por middleware (apenas admins)
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicoController;
use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\Admin\TipoNoticiaController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| ROTAS PÚBLICAS
|--------------------------------------------------------------------------
|
| Estas rotas são acessíveis por qualquer visitante do site.
| Não requerem autenticação ou permissões especiais.
|
*/

// Página inicial: Lista de notícias publicadas
// URL: http://localhost:8000/
// Nome: 'home'
Route::get('/', [PublicoController::class, 'index'])->name('home');

// Página de detalhes de uma notícia específica
// URL: http://localhost:8000/noticia/titulo-da-noticia-abc12
// {slug} = parâmetro dinâmico (ex: "minha-noticia")
// Nome: 'noticia.show'
Route::get('/noticia/{slug}', [PublicoController::class, 'show'])->name('noticia.show');

/*
|--------------------------------------------------------------------------
| ROTAS DE AUTENTICAÇÃO
|--------------------------------------------------------------------------
|
| Sistema de login/logout customizado (sem Breeze/Jetstream).
| Permite que usuários se autentiquem no sistema.
|
*/

// Exibe formulário de login
// URL: http://localhost:8000/login
// Método: GET
Route::get('login', [LoginController::class, 'mostrarForm'])->name('login');

// Processa o formulário de login
// URL: http://localhost:8000/login
// Método: POST
Route::post('login', [LoginController::class, 'login']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Realiza logout do usuário
// URL: http://localhost:8000/logout
// Método: POST (por segurança, logout deve ser POST)
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| ROTAS ADMINISTRATIVAS
|--------------------------------------------------------------------------
|
| Estas rotas são PROTEGIDAS por middleware:
| - 'auth': Requer que usuário esteja autenticado (logado)
| - 'eh.admin': Requer que usuário seja administrador (is_admin = true)
|
| Prefixo: /admin (todas as rotas começam com /admin/)
| Nome: admin.* (todos os nomes começam com admin.)
|
*/

Route::middleware(['auth', 'eh.admin'])      // Middlewares de proteção
    ->prefix('admin')                        // Prefixo: /admin
    ->name('admin.')                         // Prefixo de nomes: admin.
    ->group(function() {

        // Dashboard: Página inicial do painel administrativo
        // URL: http://localhost:8000/admin
        // Nome: admin.dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        /*
         * RESOURCE: Tipos de Notícia
         *
         * Route::resource() cria automaticamente 7 rotas CRUD:
         * - GET    /admin/tipos-noticia           -> index   (lista todos)
         * - GET    /admin/tipos-noticia/create    -> create  (form criar)
         * - POST   /admin/tipos-noticia           -> store   (salvar)
         * - GET    /admin/tipos-noticia/{id}      -> show    (ver um)
         * - GET    /admin/tipos-noticia/{id}/edit -> edit    (form editar)
         * - PUT    /admin/tipos-noticia/{id}      -> update  (atualizar)
         * - DELETE /admin/tipos-noticia/{id}      -> destroy (deletar)
         *
         * IMPORTANTE: ->parameters(['tipos-noticia' => 'tipos_noticia'])
         * Define que o parâmetro da rota será $tipos_noticia (singular)
         * Necessário porque Laravel singulariza errado nomes compostos.
         */
        Route::resource('tipos-noticia', TipoNoticiaController::class)
            ->parameters(['tipos-noticia' => 'tipos_noticia']);

        /*
         * RESOURCE: Notícias
         *
         * Cria as 7 rotas CRUD padrão para gerenciar notícias.
         * URLs: /admin/noticias, /admin/noticias/create, etc.
         */
        Route::resource('noticias', NoticiaController::class);

        /*
         * RESOURCE: Usuários
         *
         * Cria 6 rotas CRUD (exclui 'show' que não usamos).
         * ->except(['show']) = não cria a rota de visualização individual
         * URLs: /admin/usuarios, /admin/usuarios/create, etc.
         */
        Route::resource('usuarios', UsuarioController::class)->except(['show']);
    });

/*
|--------------------------------------------------------------------------
| COMANDOS ÚTEIS
|--------------------------------------------------------------------------
|
| Ver todas as rotas:
| php artisan route:list
|
| Ver rotas de um controller específico:
| php artisan route:list --name=admin
|
| Testar uma rota:
| php artisan route:list --path=noticia
|
*/

// VIEW de cadastro
Route::get('/register', function() {
    return view('auth.register');
})->name('auth.register.view');

// PROCESSAR cadastro
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])
    ->name('register.perform');
