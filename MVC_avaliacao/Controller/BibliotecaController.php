<?php

session_start(); //-> banco de dados

require_once "./Model/BibliotecaModel.php";

class LivrosController{

    public function telaCadastro(){
        require "View/BibliotecaCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano_publicacao = $_POST['ano_publicacao'];
        $editora = $_POST['editora'];
        
        $biblioteca = new Biblioteca($titulo, $autor, $ano_publicacao, $editora);
        $biblioteca->salvar();
        //redireciona depois salva
        header('Location: /PB_PHP/MVC_avaliacao/biblioteca/telaCadastro ');
        exit;
    }

    public function listarLivros(){
        $biblioteca = Biblioteca::listar();
        require "View/BibliotecaListar.php";
    }

    public function telaEditar(){
        $biblioteca = Biblioteca::buscar($_GET['id']);
        require "View/BibliotecaEditar.php";
    }

    public function atualizar(){
        $biblioteca = new Biblioteca($_POST['titulo'], $_POST['autor'], $_POST['ano_publicacao'], $_POST['editora']);
        $biblioteca->atualizar($_GET['id']);
        header('Location: /PB_PHP/MVC_avaliacao/biblioteca/telaEditar?id=' .($_GET['id']));
        exit;
    }

    public function excluir(){
        Biblioteca::excluir ($_GET['id']);
        header('Location: /PB_PHP/MVC_avaliacao/biblioteca/listar');
        exit;
    }

}