<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
    <body>
        <div class="row" style="display: flex; align-items: center; text-align: center; margin: 0 auto;">
            <div class="col-2" style="text-align: center; margin: 0 auto;">
                <div>
                    <a href="index.php" class="linklimpo px40 titulo1">VittaClinic</a>
                </div>
            </div>
            <div class="col-2" style="text-align: center; margin: 0 auto;">

            </div>
            <div class="col-2" style="text-align: center; margin: 0 auto;">
                <div>
                    <form method="post">
                        <button class="botao1 bgmain" style="height: 30px; width: 30px;" type="submit" name="trocarTema">
                        <?php
                        if (isset($_SESSION['tema'])) {
                            if ($_SESSION['tema'] == 0) {
                                echo '<img src="/vittaclinic/conteudo/imagens/moon-fill.svg" alt="aaaa" style="height: 20px; width: 20px;">';
                            } else {
                                echo '<img src="/vittaclinic/conteudo/imagens/sun-fill.svg" alt="aaaa" style="height: 20px; width: 20px;">';
                            }
                        }
                        ?>
                        </button>
                    </form>
                    <?php
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
            </div>
            <div class="col-4" style="text-align: center; margin: 0 auto;">
                <?php
                    if (isset($_SESSION['email'])) {
                        echo 'Usuario: ' . $_SESSION['email']; echo '<br>';
                        echo '<a href="/vittaclinic/minhapagina.php" class="linklimpo">Minha página</a>';
                    } else {
                        echo '<a href="/vittaclinic/login.php" class="linklimpo">Entre/Faça Seu Cadastro</a>';
                    }
                ?>
            </div>
            <div class="col-2" style="text-align: center; margin: 0 auto;">
                <div>
                <a href="sistema/sair.php" class="linklimpo">Sair</a>
                </div>
            </div>
        </div>
    </body>
</html>