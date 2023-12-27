<html lang="pt-br">
    <head>

    </head>
    <body>
        <main class="bgmain" style="height: 100%;">
            <div class="row">
                <div class="col-6" style="text-align: center;">
                    <card>
                        <h4>Criar Horarios Médico</h4>
                        <form action="/vittaclinic/sistema/sis_mrhorarios.php" method="post">
                            <label for="email" id="email">
                            <select>
                                <?php
                                    include '../vittaclinic/sistema/config.php';
                                    
                                    $consulta = $conn->prepare("SELECT email FROM medicos");
                                    $consulta->execute();

                                    $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                    $contador = 0;

                                    foreach ($resultados as $resultado) {
                                        echo '<option value="' . $resultado['email'] . '">' . $resultado['email'] . '</option>';
                                        $contador = $contador + 1;
                                    }
                                ?>
                            </select><br><br>
                            <input type="submit" value="Criar tabela horarios">
                        </form>
                    </card>
                </div>
                <div class="col-6" style="text-align: center;">
                
                </div>
            </div>
        </main>
    </body>
</html>