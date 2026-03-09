<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Edição✒️</title>
</head>
<body>
    <h2>Editar Livro✍🏻</h2>
    <a href="/PB_PHP/MVC_avaliacao/biblioteca/listar">Listar Livros</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>" >
        <input type="text" name="id" value="<?=htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="titulo" value="<?=htmlspecialchars($biblioteca['Titulo'])?>" >
        <input type="text" name="autor" value="<?=htmlspecialchars($biblioteca['Autor'])?>" >
        <input type="date" name="ano_publicacao" value="<?=htmlspecialchars($biblioteca['ano_publicacao'])?>" >
        <input type="text" name="editora" value="<?=htmlspecialchars($biblioteca['Editora'])?>" >
        <button type="submit">Editar✅</button>
    </form>
    
</body>
</html>