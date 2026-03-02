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

        $produtos = new Produtos($nome, $preco, $quantidade, $validade);
        $produtos->salvar();
        // redirecionar depois salvar
        header('Location: /PB_PHP/atividade01_MVC/produtos/listar');
        exit;
    }

    public function listarProdutos(){
        $produtos = Produtos::listar();
        require "View/produtosListar.php";
    }

    public function telaEditar(){
        $produtos = Produtos::buscar($_GET['id']);
        require "View/produtosEditar.php";
    }

    public function atualizar(){
        $produtos = new Produtos($_POST['nome'], $_POST['preco'], $_POST['quantidade'], $_POST['validade']);
        $produtos->atualizar($_GET['id']);
        header('Location: /PB_PHP/atividade01_MVC/produtos/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Produtos::excluir($_GET['id']);
        header('Location: /PB_PHP/atividade01_MVC/produtos/listar');
        exit;
    }

}

?>