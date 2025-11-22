<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicoController;
use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\Admin\TipoNoticiaController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DicaController;
use App\Http\Controllers\ProfessorController;

/*
|--------------------------------------------------------------------------
| ROTAS PÚBLICAS
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', function () {
    return view('publico.home');
})->name('home');

// Visualizar notícia pública
Route::get('/noticia/{slug}', [PublicoController::class, 'show'])->name('noticia.show');

// Tela pública de Dicas
Route::get('/dicas', [DicaController::class, 'index'])->name('dicas');


/*
|--------------------------------------------------------------------------
| ROTAS DE LOGIN / LOGOUT / REGISTER
|--------------------------------------------------------------------------
*/

// Exibir formulário de login
Route::get('/login', [LoginController::class, 'mostrarForm'])->name('login');

// Processar login
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

// Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Exibir formulário de registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register.view');

// Processar registro
Route::post('/register', [AuthController::class, 'register'])->name('register.perform');


/*
|--------------------------------------------------------------------------
| ROTAS PROTEGIDAS (SOMENTE LOGADOS)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Dashboard pós-login
    Route::get('/dashboard', function () {
        return view('poslogin.dashboard');
    })->name('dashboard');

    // Dashboard do Aluno
    Route::get('/aluno/dashboard', function () {
        return view('aluno.dashboard');
    })->name('aluno.dashboard');

    // Página exclusiva de dicas para aluno
    Route::get('/aluno/dicas', [DicaController::class, 'aluno'])->name('aluno.dicas');

    // Página da dica completa para aluno (rota para "Ler mais")
    Route::get('/aluno/dicas/{id}', [DicaController::class, 'showAluno'])->name('aluno.dicas.show');
});


/*
|--------------------------------------------------------------------------
| ROTAS ADMIN (SOMENTE ADMINISTRADORES)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'eh.admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('tipos-noticia', TipoNoticiaController::class)
            ->parameters(['tipos-noticia' => 'tipos_noticia']);

        Route::resource('noticias', NoticiaController::class);

        // CRUD de dicas para admin
        Route::resource('dicas', DicaController::class);

        Route::resource('usuarios', UsuarioController::class)->except(['show']);
    });
    Route::view('/comunidade', 'aluno.comunidade')
    ->name('aluno.comunidade');


    Route::view('/jogos', 'aluno.jogos')
    ->name('aluno.jogos');


      Route::view('/trilhas', 'aluno.trilhas')
    ->name('aluno.trilhas');


     Route::view('/gestao', 'aluno.gestao')
    ->name('aluno.gestao');

    // Defina um grupo de rotas com prefixo 'professor' se for ter muitas rotas
Route::prefix('professor')->name('professor.')->group(function () {

    // Rota para o Dashboard Principal do Professor
    Route::get('/dashboard', [App\Http\Controllers\ProfessorController::class, 'dashboard'])
        ->name('dashboard');

    // Rota simples para a tela 'Sobre Mim' do Professor
    Route::view('/sobre-mim', 'professor.sobre-mim')
        ->name('sobre-mim');

    // ... outras rotas do professor (turmas, recursos, etc.)
});
  Route::view('/minhasTurmas', 'professor.minhasTurmas')
    ->name('professor.minhasTurmas');



    Route::view('/recursos', 'professor.recursos')
    ->name('professor.recursos');


    Route::view('/aulas', 'professor.aulas')
    ->name('professor.aulas');

    Route::view('/avaliacoes', 'professor.avaliacoes')
    ->name('professor.avaliacoes');
