<?php
    session_start();
    $tema = $_SESSION['tema'];
    session_destroy();
    session_start();
    $_SESSION['tema'] = $tema;
    header ('location: ../index.php');
?>