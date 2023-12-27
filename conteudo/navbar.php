<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
    <body>
        <div class="row" style="height: 10%;">
            <div class="col-2" style="display: flex; justify-content: center; align-items: center; margin: 0 auto; height: 100%;">
                <div>
                    <a href="index.php" class="linklimpo vw3 titulo1">VittaClinic</a>
                </div>
            </div>
            <div class="col-2" style="display: flex; justify-content: center; align-items: center; margin: 0 auto; height: 100%;">

            </div>
            <div class="col-2" style="display: flex; justify-content: center; align-items: center; margin: 0 auto; height: 100%;">
                <div>
                    <form method="post">
                        <button class="botao1 bgmain" style="height: 80%;" type="submit" name="trocarTema">
                            <?php
                                if (isset($_SESSION['tema'])) {
                                    if ($_SESSION['tema'] == 0) {
                                        echo '<img src="/vittaclinic/conteudo/imagens/moon-fill.svg" alt="aaaa" style="padding:12%; height: 60%;">';
                                    } else {
                                        echo '<img src="/vittaclinic/conteudo/imagens/sun-fill.svg" alt="aaaa" style="padding:12%; height: 60%;">';
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
            <div class="col-6" style="display: flex; justify-content: center; align-items: center; margin: 0 auto; height: 100%;">
                <?php
                    if (isset($_SESSION['email'])) {
                        echo '<div class="texto1 vw1">Usuario: ' . $_SESSION['email'] . '</div>';
                        echo '<a href="/vittaclinic/minhapagina.php" class="link1 texto1 vw2" style="margin-left: 1%;">Minha página</a>';
                    } else {
                        echo '<a href="/vittaclinic/login.php" class="link1 texto1 vw2">Entre/Faça Seu Cadastro</a>';
                    }
                ?>
                <a href="sistema/sair.php" class="botao1" style="">
                    <?php
                        if (isset($_SESSION['tema'])) {
                            if ($_SESSION['tema'] == 0) {
                                echo '<img src="/vittaclinic/conteudo/imagens/exit-black.svg" alt="aaaa" style="padding:12%; height: 60%; margin-left: 10%;">';
                            } else {
                                echo '<img src="/vittaclinic/conteudo/imagens/exit-white.svg" alt="aaaa" style="padding:12%; height: 60%; margin-left: 10%;">';
                            }
                        }
                    ?>
                </a>
            </div>
        </div>
    </body>
</html>