<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro 🛒</title>
</head>
<body>
    <a href="/PB_PHP/atividade01_MVC/produtos/listar">Ir para tela Listar</a>
    <form style="font-family: Arial, Helvetica, sans-serif; background-color: lightgray; align-items: center; padding: 20px; margin-top: 20px; position:absolute; border: 2px solid black; ; border-radius:10px;" method="POST" action="salvar">
        Nome:
        <input style="border-radius: 5px;" type="text" name="nome" placeholder="Nome do produto" require><br>
        Preço:
        <input style="border-radius: 5px;" type="number" name="preco" placeholder="Preço" require><br>
        Quantidade:
        <input style="border-radius: 5px;" type="number" name="quantidade" placeholder="Quantidade" require><br>
        Validade:
        <input style="border-radius: 5px;" type="date" name="validade" placeholder="validade" require><br>
        <button style="text-align: center; background-color: lightgreen; border-radius: 20px; border-color: green;" type="submit">Cadastrar</button>
    </form>
</body>
</html>