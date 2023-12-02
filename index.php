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
    <body>
        <main>
            <div class="bgmain">
                <?php
                include 'navbar.php'; echo '<br>';
                include 'conteudo1.php'; echo '<br>';
                include 'rodape1.php'; echo '<br>';
                ?>
            </div>
        </main>
    </body>
</html>