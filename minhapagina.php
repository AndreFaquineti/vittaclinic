<?php
    session_start();
?>
<html lang="pt-br">
    <head>
        <?php 
            require_once ('sistema/lib.php');
            charset();
            bootview();
            hearticon();
            if (!isset($_SESSION['tema'])) {
                $_SESSION['tema'] = 0;
            }
            if ($_SESSION['tema'] == 0) {
                    stylesheetl();
            } else {
                if ($_SESSION['tema'] == 1) {
                    stylesheetd();
                }
                }
        ?>
    </head>
    <body>
        <main class="bgmain" style="height: 100%;">
            <?php
                include 'conteudo/navbar.php';
            ?>
            <div class="row">
                <div class="col-4" style="text-align: center;">

                </div>
                <div class="col-4" style="text-align: center;">
                    <?php
                        if (!isset($_SESSION['email']) || !isset($_SESSION['usuario'])) {
                            echo 'Por favor faça login.';
                            header("Refresh: 3; Url=/vittaclinic/login.php");
                            exit;
                        } else {
                            echo 'Minha Pagina <br>';
                            echo 'Usuario: ' . $_SESSION['usuario'];
                        }
                    ?>
                </div>
                <div class="col-4" style="text-align: center;">

                </div>
            </div>
        </main>
    </body>
</html>