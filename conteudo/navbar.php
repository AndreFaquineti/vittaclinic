<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
    <body>
        <div class="row bgmain" style="margin-left: 1%; margin-right: 1%;">
            <div class="col-4">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="texto1azulescuro fonte-recoleta-bold-alt fonte-bold-700 fonte-2rem">
                            <?php
                                if (isset($_SESSION['email'])) {
                                    echo "USUARIO: " . $_SESSION['email']['email'];
                                }
                                else {
                                    echo '<div class="texto1azulescuro fonte-recoleta-bold-alt fonte-bold-700 fonte-2rem">
                                    <a href="login.php" class="texto1azulescuro">Entre / faça seu cadastro</a> </div>' ;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-center">
                    <a href="index.php" class="linklimpobranco ">
                        <br>
                        <h1 class="texto1rosa fonte-recoleta-bold-alt fonte-bold-700 fonte-3rem">Vitta.Clinic</h1>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-6">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['trocarTema'])) {
                                trocarTema();
                                header("Location: {$_SERVER['PHP_SELF']}"); // Redireciona para a mesma página
                                exit;
                            }
                            function trocarTema() {
                                if (!isset($_SESSION['tema'])) {
                                    $_SESSION['tema'] = 0;
                                }
                            
                                if ($_SESSION['tema'] == 0) {
                                    $_SESSION['tema'] = 1;
                                } else {
                                    $_SESSION['tema'] = 0;
                                }
                            }
                        ?>
                        <br>
                        Tema: <?php echo @$_SESSION['tema']; ?>
                        <form method="post">
                            <input type="submit" name="trocarTema" value="Trocar Tema">
                        </form> <br>
                       </div>
                    <div class="col-6">
                        <?php
                            if (isset($_SESSION['email'])) {
                                echo '<br><a href="sair.php" class="texto1azulescuro fonte-recoleta-bold-alt fonte-bold-700 fonte-2rem">Sair</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>