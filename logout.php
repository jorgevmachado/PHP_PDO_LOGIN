<?php

    require_once "global.php";
    require_once "usuario-service.php";

    logout();
    $_SESSION["success"] = "Deslogado com sucesso!";
    header("Location: index.php");
    die();