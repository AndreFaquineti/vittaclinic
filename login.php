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
                include 'sistema/sis_login.php';
                include 'conteudo/form_login.php';
            ?>
            <a href="registro.php">Registro</a>
        </main>
    </body>
</html>