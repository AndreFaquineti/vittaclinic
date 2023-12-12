<?php
    session_start();
    include 'config.php';
    if(isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $consulta = $conn->prepare("SELECT * FROM adms WHERE email = :email");
        $consulta->bindParam(':email', $email);
        $consulta->execute();
        $adms = $consulta->fetch();
        if ($adms) {
            echo 'Esse email já está cadastrado!';
            header("Refresh: 3; Url=/vittaclinic/registro.php");
            exit;
        } else {
            $consulta = $conn->prepare("SELECT * FROM medicos WHERE email = :email");
            $consulta->bindParam(':email', $email);
            $consulta->execute();
            $medico = $consulta->fetch();
            if ($medico) {
                    echo 'Esse email já está cadastrado!';
                    header("Refresh: 3; Url=/vittaclinic/registro.php");
                    exit;
            } else {
                $consulta = $conn->prepare("SELECT * FROM pacientes WHERE email = :email");
                $consulta->bindParam(':email', $email);
                $consulta->execute();
                $paciente = $consulta->fetch();

                if ($paciente) {
                    echo 'Esse email já está cadastrado!';
                    header("Refresh: 3; Url=/vittaclinic/registro.php");
                    exit;
                } else {
                    $_SESSION['email'] = $email;
                    $consulta = $conn->prepare("INSERT INTO pacientes (email, senha) VALUES (:email, :senha)");
                    $consulta->bindParam(':email', $email);
                    $consulta->bindParam(':senha', $senha_hash);
                    $consulta->execute();
                    echo 'Cadastro realizado com sucesso';
                    header('location: /vittaclinic/minhapagina.php');
                    exit;
                } 
            }
        }
    }
?>