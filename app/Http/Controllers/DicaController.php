<?php

namespace App\Http\Controllers;

use App\Models\Dica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; // Necessário para normalizar o nome do arquivo

class DicaController extends Controller
{
    // ------------------------------------------------------------------
    // MÉTODOS PÚBLICOS (Para Alunos)
    // ------------------------------------------------------------------

    /**
     * Lista todas as dicas para a página pública (aluno).
     * Rota esperada: /dicas (ou similar)
     */
    public function aluno()
    {
        $dicas = Dica::all();
        // Nota: Assumindo que o nome da view é 'aluno.dicas'
        return view('aluno.dicas', compact('dicas'));
    }

    /**
     * Exibe os detalhes de uma dica específica.
     * Rota esperada: /dicas/{id}
     */
    public function showAluno($id)
    {
        $dica = Dica::findOrFail($id);
        // Nota: Assumindo que o nome da view é 'aluno.dicas-show'
        return view('aluno.dicas-show', compact('dica'));
    }

    // ------------------------------------------------------------------
    // MÉTODOS DE ADMINISTRAÇÃO (CRUD)
    // ------------------------------------------------------------------

    /**
     * Lista todas as dicas para a área administrativa.
     * Rota: admin.dicas.index
     */
    public function index()
    {
        $dicas = Dica::all();
        return view('admin.dicas.index', compact('dicas'));
    }

    /**
     * Exibe o formulário de criação de nova dica.
     * Rota: admin.dicas.create
     */
    public function create()
    {
        return view('admin.dicas.create');
    }

    /**
     * Salva a nova dica e o arquivo de ícone no storage.
     * Rota: admin.dicas.store
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'required',
            // O campo 'icone' deve ser obrigatório e um arquivo de imagem
            'icone' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $pathIcone = null;

        if ($request->hasFile('icone')) {
            // Obtém o nome original do arquivo e normaliza para ser amigável à URL
            $nomeOriginal = Str::slug(pathinfo($request->file('icone')->getClientOriginalName(), PATHINFO_FILENAME));
            $extensao = $request->file('icone')->getClientOriginalExtension();
            $nomeArquivo = $nomeOriginal . '-' . time() . '.' . $extensao;

            // Armazena o arquivo em storage/app/public/icones
            // O retorno é o caminho completo (ex: 'icones/nome-arquivo.png')
            $pathIcone = $request->file('icone')->storeAs('dicas', $nomeArquivo, 'public');
        }

        Dica::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            // Salva o caminho completo no banco de dados para facilitar a recuperação
            'icone' => $pathIcone
        ]);

        return redirect()->route('admin.dicas.index')->with('sucesso', 'Dica adicionada com sucesso!');
    }

    /**
     * Remove a dica e o arquivo de ícone associado do storage.
     * Rota: admin.dicas.destroy
     */
    public function destroy($id)
    {
        $dica = Dica::findOrFail($id);

        // 1. Apaga o arquivo do disco 'public' (storage/app/public)
        if ($dica->icone && Storage::disk('public')->exists($dica->icone)) {
            Storage::disk('public')->delete($dica->icone);
        }

        // 2. Apaga o registro do banco
        $dica->delete();

        return back()->with('sucesso', 'Dica removida.');
    }
}
