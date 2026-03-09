<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros 📚</title>
</head>
<body>
    <a href="/PB_PHP/MVC_avaliacao/biblioteca/listar">Lista de livros📝</a>
    <form method="POST" action="salvar">
        <input type="text" name="titulo" placeholder="Título do Livro" require>
        <input type="text" name="autor" placeholder="Autor do Livro" require>
        <input type="date" name="ano_publicacao" placeholder="Data da publicação" require>
        <input type="text" name="editora" placeholder="Editora do Livro" require>
        <button type="submit">Cadastrar Livro</button>
    </form>
</body>
</html>