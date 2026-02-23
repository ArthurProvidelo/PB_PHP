<?php


session_start(); //'banco de dados' para salvar informações
require_once "./Model/produtosModel.php";

class ProdutosController{
    public function telaCadastro(){
        require "View/produtosCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $validade = $_POST['validade'];

        $usuario = new Produtos($nome, $preco, $quantidade, $validade);
        $usuario->salvar();
        // redirecionar depois salvar
        header('Location: /PB_PHP/atividade01_MVC/produtos/listar');
        exit;
    }

    public function listarProdutos(){
        $produtos = Produtos::listar();
        require "View/produtosListar.php";
    }
}

?>