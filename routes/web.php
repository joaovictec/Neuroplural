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

        // ✅ ROTAS DE DICAS ADICIONADAS AQUI, USANDO RESOURCE
        // Isso cria: admin.dicas.index, admin.dicas.create, admin.dicas.store, etc.
        // O método admin() do seu DicaController deve ser renomeado para index()
        Route::resource('dicas', DicaController::class);

        Route::resource('usuarios', UsuarioController::class)->except(['show']);
    });
