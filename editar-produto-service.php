<?php
    require_once 'global.php'; verificaUsuario();
    try {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $categoria_id = $_POST['categoria_id'];
        $produto = new ProdutoModel($id);
        $produto->nome = $nome;
        $produto->preco = $preco;
        $produto->quantidade = $quantidade;
        $produto->categoria_id = $categoria_id;
        $produto->atualizar();
        header('Location: listar-produto.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }