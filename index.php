<?php
    require_once 'cabecalho.php';
    require_once 'usuario-service.php';
?>
    <div class="row">
        <div class="col-md-12">
            <h2>Sejá bem-vindo ao Sistema de Controle de Estoque</h2>

            <div>
            <?php if(usuarioEstaLogado()){ ?>
                <p class="text-success"> Você está logado como: <?=usuarioLogado()?> <a href="logout.php">Deslogar</a> </p>
            <?php } else{?>
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <table class="table">
                        <tr>
                            <td>Email</td>
                            <td><input class="form-control" type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Senha</td>
                            <td><input class="form-control" type="password" name="senha"></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-primary">Login</button> </td>
                        </tr>
                    </table>
                </form>
            <?php } ?>

            </div>
        </div>
    </div>
<?php require_once 'rodape.php' ?>