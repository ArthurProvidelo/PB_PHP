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
    <table border="1" style="border-radius:5px; background-color:lightgray;">
        <tr>
            <th style="font-family: Arial, Times New Roman, sans-serif; border-radius:5px; background-color:lightgreen;">Nome</th>
            <th style="font-family: Arial, Times New Roman, sans-serif; border-radius:5px; background-color:lightgreen;">Preço</th>
            <th style="font-family: Arial, Times New Roman, sans-serif; border-radius:5px; background-color:lightgreen;">Quantidade</th>  
            <th style="font-family: Arial, Times New Roman, sans-serif; border-radius:5px; background-color:lightgreen;">Validade</th>
            <th style="font-family: Arial, Times New Roman, sans-serif; border-radius:5px; background-color:lightgreen;">Ações</th>  
        </tr>
        <?php foreach($produtos as $id => $p): ?>
            <tr>
                <td style="font-family: Arial, Times New Roman, sans-serif;; border-radius:5px; background-color:white;"><?=$p['nome']?></td>
                <td style="font-family: Arial, Times New Roman, sans-serif;; border-radius:5px; background-color:white;">R$<?=$p['preco']?></td>
                <td style="font-family: Arial, Times New Roman, sans-serif;; text-align: center; border-radius:5px; background-color:white;"><?=$p['quantidade']?></td>
                <td style="font-family: Arial, Times New Roman, sans-serif;; border-radius:5px; background-color:white;"><?=$p['validade']?></td>
                <td style="font-family: Arial, Times New Roman, sans-serif;; border-radius:5px; background-color:white;">
                    <a href='/PB_PHP/atividade01_MVC/produtos/telaEditar?id=<?= $id ?>'>Editar</a> <a href="/PB_PHP/atividade01_MVC/produtos/excluir?id=<?= $id ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>