<?php require_once 'global.php' ; verificaUsuario();?>

<?php
try {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $categoria = new CategoriaModel($id);
    $categoria->nome = $nome;
    $categoria->atualizar();
    header('Location: listar-categoria.php');
} catch (Exception $e) {
    Erro::trataErro($e);
}