<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <?php 
            require_once ('lib.php');
            charset();
            bootview();
            hearticon();
            if (@$_SESSION['tema'] == 0) {
                stylesheetl();
            } else {
                stylesheetd();
            }
        ?>
    </head>
    <body class="bgmain" style="height: 100%;">
        <div style="height: 100%;">
            <?php
            include 'conteudo/navbar.php'; echo '<br>';
            include 'conteudo/form_login.php'; echo '<br>';
            include 'conteudo/rodape1.php';
            ?>
        </div>
    </body>
</html>