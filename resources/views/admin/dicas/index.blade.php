<h1>Gerenciar Dicas</h1>

<a href="{{ route('admin.dicas.create') }}">Adicionar Nova</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Ícone</th>
        <th>Título</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

    @foreach($dicas as $dica)
    <tr>
        <td><img src="{{ asset('storage/' . $dica->icone) }}" width="60"></td>
        <td>{{ $dica->titulo }}</td>
        <td>{{ $dica->descricao }}</td>
        <td>
            <form action="{{ route('admin.dicas.destroy', $dica->id) }} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
