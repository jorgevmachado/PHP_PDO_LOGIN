<?php
require_once 'global.php'; verificaUsuario();
try {
    $id = $_GET['id'];
    $produto = new ProdutoModel($id);
    $produto->excluir();
    header('Location: listar-produto.php');
} catch (Exception $e) {
    Erro::trataErro($e);
}