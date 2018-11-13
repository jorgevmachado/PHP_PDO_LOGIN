<?php require_once "global.php" ; verificaUsuario(); ?>

<?php
try {
    $id = $_GET['id'];
    $categoria = new CategoriaModel($id);
    $categoria->excluir();
    header('Location: listar-categoria.php');
} catch (Exception $e) {
    Erro::trataErro($e);
}