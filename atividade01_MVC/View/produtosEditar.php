<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar Produto ✍🏻</h2>
    <a href="/PB_PHP/atividade01_MVC/produtos/listar">Ir para tela Listar</a>
    <form style="font-family: Arial, Helvetica, sans-serif; background-color:lightgray; align-items: center; padding: 20px; margin-top: 20px; position:absolute; border: 2px solid black; ; border-radius:10px " method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
        Id:
        <input style="border-radius:5px;" type="text" name="id" value="<?=htmlspecialchars($_GET['id'])?>" disabled><br>   
        Produto:
        <input style="border-radius:5px;" type="text" name="nome" value="<?=htmlspecialchars($produtos['nome'])?>"require><br>
        Preço:
        <input style="border-radius:5px;" type="number" name="preco" value="<?=htmlspecialchars($produtos['preco'])?>"require><br>
        Quantidade:
        <input style="border-radius:5px;" type="number" name="quantidade" value="<?=htmlspecialchars($produtos['quantidade'])?>"require><br>
        Data:
        <input style="border-radius:5px;" type="date" name="validade" value="<?=htmlspecialchars($produtos['validade'])?>"require><br>
        <button type="submit" style="background-color:blue; border-radius:5px; color:white;">Editar</button>
    </form>
</body>
</html>