<?php
    include 'config.php';
    if(isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $consulta = $conn->prepare("SELECT * FROM administradores WHERE email = :email");
        $consulta->bindParam(':email', $email);
        $consulta->execute();
        $administrador = $consulta->fetch();
        if ($administrador) {
            echo 'Esse email já está cadastrado!';
            header("Refresh: 3; Url=/vittaclinic/minhapagina.php");
            exit;
        } else {
            $consulta = $conn->prepare("SELECT * FROM medicos WHERE email = :email");
            $consulta->bindParam(':email', $email);
            $consulta->execute();
            $medico = $consulta->fetch();
            if ($medico) {
                    echo 'Esse email já está cadastrado!';
                    header("Refresh: 3; Url=/vittaclinic/minhapagina.php");
                    exit;
            } else {
                $consulta = $conn->prepare("SELECT * FROM pacientes WHERE email = :email");
                $consulta->bindParam(':email', $email);
                $consulta->execute();
                $paciente = $consulta->fetch();

                if ($paciente) {
                    echo 'Esse email já está cadastrado!';
                    header("Refresh: 3; Url=/vittaclinic/minhapagina.php");
                    exit;
                } else {
                    $consulta = $conn->prepare("INSERT INTO medicos (email, senha) VALUES (:email, :senha)");
                    $consulta->bindParam(':email', $email);
                    $consulta->bindParam(':senha', $senha_hash);
                    $consulta->execute();
                    header("Location: /vittaclinic/minhapagina.php");
                    exit;
                } 
            }
        }
    }
?>