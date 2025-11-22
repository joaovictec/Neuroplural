<?php

namespace App\Http\Controllers;

use App\Models\Dica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DicaController extends Controller
{
    // LISTAR dicas na página pública (Nova rota: dicas)
    public function listPublic() // Renomeado de index() para evitar conflito
    {
        $dicas = Dica::all();
        return view('aluno.dicas', compact('dicas'));
    }

    // LISTAR para admin (Agora é o index() oficial do recurso admin.dicas)
    public function index()
    {
        $dicas = Dica::all();
        return view('admin.dicas.index', compact('dicas'));
    }

    // Exibir formulário de criar (Rota: admin.dicas.create)
    public function create()
    {
        return view('admin.dicas.create');
    }

    // Salvar no banco (Rota: admin.dicas.store)
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'icone' => 'required|image'
        ]);

        $nomeImagem = $request->icone->store('dicas', 'public');

        Dica::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'icone' => $nomeImagem
        ]);

        // Retornando para a listagem de admin (admin.dicas.index)
        return redirect()->route('admin.dicas.index')->with('sucesso', 'Dica adicionada!');
    }

    // Remover dica (Rota: admin.dicas.destroy)
    public function destroy($id)
    {
        $dica = Dica::findOrFail($id);

        Storage::disk('public')->delete($dica->icone);

        $dica->delete();

        return back()->with('sucesso', 'Dica removida.');
    }
public function aluno()
{
    $dicas = Dica::all(); // pega todas as dicas
    return view('aluno.dicas', compact('dicas'));
}
public function showAluno($id)
{
    // Busca a dica pelo ID ou retorna 404 se não existir
    $dica = Dica::findOrFail($id);

    // Retorna a view passando a dica
    return view('aluno.dicas-show', compact('dica'));
}
}
