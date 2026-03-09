<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de livros 📖</title>
</head>
<body>
    <a href="/PB_PHP/MVC_avaliacao/biblioteca/telaCadastro">Cadastrar novo livro 📔</a>
    <h2>Livros ⬇️</h2>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano de Publicação</th>
            <th>Editora</th>
            <th>Ações</th>
        </tr>
        <?php foreach($biblioteca as $id => $l) :?>
            <tr>
                <td><?=$l['Titulo']?></td>
                <td><?=$l['Autor']?></td>
                <td><?=$l['ano_publicacao']?></td>
                <td><?=$l['Editora']?></td>
                <td>
                    <a href="/PB_PHP/MVC_avaliacao/biblioteca/telaEditar?id=<?= $l["ID"] ?>">Editar✍🏻</a> <a href="/PB_PHP/MVC_avaliacao/biblioteca/excluir?id=<?= $l['ID'] ?>">Excluir🗑️</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>