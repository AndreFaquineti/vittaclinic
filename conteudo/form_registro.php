<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
    <body>
        <div class="row">
            <div class="col-3" style="text-align: center; margin: 0 auto;">
            </div>
            <div class="col-3" style="text-align: center; margin: 0 auto;">
                <card>
                    <form action="sistema/sis_registro.php" method="post">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required><br><br>
                        
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" required><br><br>
                        
                        <input type="submit" value="Registro"><a href="/vittaclinic/login.php">Entrar</a>
                    </form>
                </card>
            </div>
            <div class="col-3" style="text-align: center; margin: 0 auto;">
            </div>
        </div>
    </body>
</html>