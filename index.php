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
    <body style="height: 100%; width: 100%;">
        <main style="height: 100%;">
            <div class="bgmain" style="height: 100%;">
                <?php
                include 'conteudo/navbar.php'; echo '<br>';
                include 'conteudo/conteudo1.php'; echo '<br>';
                include 'conteudo/rodape1.php';
                ?>
            </div>
        </main>
    </body>
</html>