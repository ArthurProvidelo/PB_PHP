<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema do Mercadinho 🛒</title>
</head>
<body>
    <a href="/PB_PHP/atividade01_MVC/produtos/listar">Ir para tela Listar</a>
    <form method="POST" action="salvar">
        Nome:
        <input type="text" name="nome" placeholder="Nome do produto" require><br>
        Preço:
        <input type="number" name="preco" placeholder="Preço" require><br>
        Quantidade:
        <input type="number" name="quantidade" placeholder="Quantidade" require><br>
        Validade:
        <input type="date" name="validade" placeholder="validade" require><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>