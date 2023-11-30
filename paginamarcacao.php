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
        ?>
    </head>
    <body>
        <div>
            <?php
            include 'navbar.php'; echo '<br>';
            include 'marcacao.php';
            ?>
            <a href="apagarhorarios.php">LIMPAR HORARIOS<a>
        </div>
    </body>
</html>