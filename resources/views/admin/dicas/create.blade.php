<h1>Adicionar Dica</h1>

<form action="{{ route('admin.dicas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Título:</label>
    <input type="text" name="titulo" required>

    <label>Descrição:</label>
    <textarea name="descricao" required></textarea>

    <label>Ícone (imagem):</label>
    <input type="file" name="icone" required>

    <button type="submit">Salvar</button>
</form>
