<html lang="pt-br">
    <head>

    </head>
    <body>
        <main class="bgmain" style="height: 100%;">
            <div class="row">
                <div class="col-6" style="text-align: center;">
                    <card>
                        <form action="/vittaclinic/sistema/sis_mregistro.php" method="post">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" required><br><br>
                            
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" name="senha" required><br><br>
                            
                            <input type="submit" value="Registrar Médico">
                        </form>
                    </card>
                </div>
                <div class="col-6" style="text-align: center;">
                    <card>
                        <form action="/vittaclinic/sistema/sis_aregistro.php" method="post">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" required><br><br>
                            
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" name="senha" required><br><br>
                            
                            <input type="submit" value="Registrar Administrador">
                        </form>
                    </card>
                </div>
            </div>
        </main>
    </body>
</html>