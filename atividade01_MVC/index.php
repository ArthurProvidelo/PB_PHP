<?php

require_once "Controller/produtosController.php";

$produtosController = new ProdutosController();
$route = $_GET["route"] ?? '';

switch ($route){
    case 'produtos/telaCadastro':
        $produtosController->telaCadastro();
        break;

    case "produtos/salvar":
        $produtosController->cadastrar();
        break;

    case "produtos/listar":
        $produtosController->listarProdutos();
        break;

    case "produtos/telaEditar":
        $produtosController->telaEditar();
        break;

    case "produtos/atualizar":
        $produtosController->atualizar();
        break;

    case "produtos/excluir":
        $produtosController->excluir();
        break;

    default:
    echo "Página não encontrada!";
    break;
}