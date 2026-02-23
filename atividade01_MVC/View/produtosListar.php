<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 📝</title>
</head>
<body>
    <a href="/PB_PHP/atividade01_MVC/produtos/telaCadastro">Ir para tela Cadastar</a>
    <h2>Produtos</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>  
            <th>Validade</th>  
        </tr>
        <?php foreach($produtos as $p): ?>
            <tr>
                <td><?=$p['nome']?></td>
                <td>R$<?=$p['preco']?></td>
                <td><?=$p['quantidade']?></td>
                <td><?=$p['validade']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>