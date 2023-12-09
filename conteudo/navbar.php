<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
    <body>
        <div class="row">
            <div class="col-4" style="text-align: center; margin: 0 auto;">
                <?php
                    if (isset($_SESSION['email'])) {
                        echo 'Usuario: ' . $_SESSION['email']; echo '<br>';
                        echo '<a href="/vittaclinic/minhapagina.php">Minha página</a>';
                    } else {
                        echo '<a href="/vittaclinic/login.php">Entre/Faça Seu Cadastro</a>';
                    }
                ?>
            </div>
            <div class="col-4" style="text-align: center; margin: 0 auto;">
                <div>
                    <a href="index.php" class="">VittaClinic</a>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-6" style="text-align: center; margin: 0 auto;">
                        <form method="post">
                            <input type="submit" name="trocarTema" value="Trocar Tema">
                        </form>
                        <?php
                            if (!isset($_SESSION['tema'])) {
                                $_SESSION['tema'] = 0;
                            }
                            function trocarTema() {
                                if ($_SESSION['tema'] == 0) {
                                    $_SESSION['tema'] = 1;
                                } else {
                                    $_SESSION['tema'] = 0;
                                }
                            }
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['trocarTema'])) {
                                trocarTema();
                                header("Location: {$_SERVER['PHP_SELF']}");
                            }
                        ?>
                    </div>
                    <div class="col-6" style="text-align: center; margin: 0 auto;">
                        <div>
                            <a href="sistema/sair.php">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>