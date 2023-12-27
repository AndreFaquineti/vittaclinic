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
                <div class="col-4" style="display: flex; justify-content: center; align-items: center; margin: 0 auto;">

                </div>
                <div class="col-4" style="display: flex; justify-content: center; align-items: center; margin: 0 auto;">
                    <?php
                        if (!isset($_SESSION['email']) || !isset($_SESSION['usuario'])) {
                            echo 'Por favor faça login.';
                            header("Refresh: 3; Url=/vittaclinic/login.php");
                            exit;
                        }
                    ?>
                </div>
                <div class="col-4" style="display: flex; justify-content: center; align-items: center; margin: 0 auto;">

                </div>
            </div>
            <div class="row">
                <div class="col-4" style="display: flex; justify-content: center; align-items: center; margin: 0 auto; height: 100%;">
                </div>
                <div class="col-4" style="display: flex; justify-content: center; align-items: center; margin: 0 auto;">
                    <?php
                        if ($_SESSION['usuario'] == 'ADMIN') {
                            echo 'Administre pela sessão "minha pagina" <br> Ou faça login como paciente.';
                            header("Refresh: 3; Url=/vittaclinic/minhapagina.php");
                        }
                        if ($_SESSION['usuario'] == 'MEDICO') {
                            echo 'Aqui você deveria poder marcar consultas pelos seus pacientes dentro da sua grade de horarios.';
                        }
                        if ($_SESSION['usuario'] == 'PACIENTE') {
                            echo 'Aqui você deveria poder marcar consultas com médicos de sua escolha';
                        }
                    ?>
                </div>
                <div class="col-4" style="display: flex; justify-content: center; align-items: center; margin: 0 auto;">
                    
                </div>
                
            </div>
        </main>
    </body>
</html>