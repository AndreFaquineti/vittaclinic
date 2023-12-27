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
        <div class="row">
            <div class="col-12">
                <?php
                    include 'conteudo/navbar.php'; echo '<br>';
                ?>
            </div>
            <div class="row">
                <div class="col-4">
                    &nbsp
                </div>
                <div class="col-4" style="display: flex; justify-content: center; align-items: center; padding: 5vh;">
                    <card>
                        <div class="vw5 titulo1" style="display: flex; justify-content: center; align-items: center; margin: 0 auto; height: 100%;">
                            VittaClinic
                        </div>
                        <div class="vw1 texto1" style="display: flex; justify-content: center; align-items: center; margin: 0 auto; height: 100%;">
                            Cuidando da sua saúde.
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; margin: 0 auto; height: 100%;">
                            <form action="/vittaclinic/sistema/sis_login.php" method="post">
                                <label for="email">E-mail:</label>
                                <input type="email" id="email" name="email" required><br><br>
                                
                                <label for="senha">Senha:</label>
                                <input type="password" id="senha" name="senha" required><br><br>
                                
                                <input type="submit" value="Entrar"><a href="/vittaclinic/registro.php">Registrar</a>
                            </form>
                        </div>
                    </card>
                </div>
                <div class="col-4">
                    &nbsp
                </div>
            </div>
        </div>
        </main>
    </body>
</html>