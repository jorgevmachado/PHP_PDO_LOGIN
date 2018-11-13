<?php
    require_once 'global.php';; verificaUsuario();
    try {

        $categoria = new CategoriaModel();
        $nome = $_POST['nome'];
        $categoria->nome = $nome;
        $categoria->inserir();
        header('Location: listar-categoria.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }