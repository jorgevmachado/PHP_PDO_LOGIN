<?php

    require_once "global.php";
    require_once "usuario-service.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new UsuarioModel();
    $usuario->email = $email;
    $usuario->senha = $senha;
    $usuario->buscarUsuario();

    if($usuario->email == null || $usuario->senha == null) {
        $_SESSION["danger"] = "Usuário ou senha inválida!";
        header("location: index.php");
    }else{
        $_SESSION["success"] = "Usuário logado com sucesso!";
        logaUsuario($usuario->email);
        header("location: index.php");
    }
    die();