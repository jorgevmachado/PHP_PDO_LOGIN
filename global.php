<?php

 require_once 'model/config.php';
 spl_autoload_register('carregarModel');
 spl_autoload_register('carregaPHP');

 function carregarModel($nomeModel)
 {
     if (file_exists('model/' . $nomeModel . '.php')) {
         require_once 'model/'. $nomeModel .'.php';
     }
 }

 function carregaPHP($nomePHP)
 {
     if (file_exists($nomePHP .'.php')) {
         require_once $nomePHP .'.php';
     }
 }